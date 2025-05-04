<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\button;
use App\Models\languages;
use App\Models\property;
use App\Models\revenue_center;
use App\Models\site;
use App\Models\happening;
use App\Models\wellness;
use App\Models\hacienda_revenue_center;
use App\Models\hacienda_button;
use Illuminate\Support\Arr;

class MainController extends Controller
{
    //------------------------------ 1HOMES ------------------------------
    public function homes(Request $request){
        $sites = site::where('active', 1)->get()->toArray();
        $buttons = button::get();
        $property = property::where('id', 1)->with(['wellness' => function ($query) {
            $query->where('active', 1);
        }])->get()->first();
        $revenue_centers = revenue_center::with([
            'button' => function ($query) {
                $query->where('active', 1);
            },
            'site' => function ($query) {
                $query->where('active', 1);
            },])->get();
        $languages = languages::get();

        foreach($sites as $i => $site){
            $day_range_ing = null;
            $day_range_esp = null;
            $hour_range_ing = null;
            $hour_range_esp = null;
            $horaAltS = null;
            $horaAltE = null;

            $days_ing = ['MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'SATURDAY', 'SUNDAY'];
            $days_esp = ['LUNES', 'MARTES', 'MIERCOLES', 'JUEVES', 'VIERNES', 'SABADO', 'DOMINGO'];

            if($site['schedule_hour_start'] == '00:00:00' && $site['schedule_hour_end'] == '24:00:00'){
                $hour_range_ing = 'AVAILABLE 24/7';
                $hour_range_esp = 'DISPONIBLE 24/7';
            }
            elseif($site['schedule_hour_start'] != null && $site['schedule_hour_end'] != null){

                $horaAltS = Carbon::createFromFormat('H:i:s', $site['schedule_hour_start'])->format('h A');
                $horaAltE = Carbon::createFromFormat('H:i:s', $site['schedule_hour_end'])->format('h A');
                
                $hour_range_ing = 'AT ' . $horaAltS . ' - ' . $horaAltE;
                $hour_range_esp = 'DE ' . $horaAltS . ' - ' . $horaAltE;
            }

            if($site['schedule_day_start'] > 0 && $site['schedule_day_end'] > 0){
                $day_range_ing = 'OPEN FROM ' . $days_ing[($site['schedule_day_start']) - 1] . ' TO ' . $days_ing[($site['schedule_day_end'])-1];
                $day_range_esp = 'ABIERTO DE ' . $days_esp[($site['schedule_day_start']) - 1] . ' A ' . $days_esp[($site['schedule_day_end'])-1];
            }
            if($site['schedule_day_start'] == 1 && $site['schedule_day_end'] == 7){
                $day_range_ing = 'OPEN DAILY';
                $day_range_esp = 'ABIERTO TODOS LOS DIAS';
            }
            
            $time_array = array (
                'day_range_ing' => $day_range_ing,
                'day_range_esp' => $day_range_esp,
                'hour_range_ing' => $hour_range_ing,
                'hour_range_esp' => $hour_range_esp
            );

            //----- Combinación del array original junto al array de tiempo -----//
            $site = array_merge($site, $time_array);
            
            $sites[$i] = $site;
        }

        return view('1homes', compact('sites', 'buttons', 'property', 'revenue_centers', 'languages'));
    }

    public function administrate(Request $request){
        $sites = site::get()->toArray();
        $buttons = button::get();
        $property = property::where('id', 1)->with(['wellness' => function ($query) {
            $query->where('active', 1);
        }])->get()->first();
        $revenue_centers = revenue_center::where('active', 1)->with([
            'button' => function ($query) {
                $query->where('active', 1);
            },
            'site' => function ($query) {
                $query->where('active', 1);
            }])->get();
        $all_revenue_centers = revenue_center::with('site', 'button')->get();
        $languages = languages::get();

        foreach($sites as $i => $site){
            $day_range_ing = null;
            $day_range_esp = null;
            $hour_range_ing = null;
            $hour_range_esp = null;
            $horaAltS = null;
            $horaAltE = null;

            $days_ing = ['MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'SATURDAY', 'SUNDAY'];
            $days_esp = ['LUNES', 'MARTES', 'MIERCOLES', 'JUEVES', 'VIERNES', 'SABADO', 'DOMINGO'];

            if($site['schedule_hour_start'] == '00:00:00' && $site['schedule_hour_end'] == '24:00:00'){
                $hour_range_ing = 'AVAILABLE 24/7';
                $hour_range_esp = 'DISPONIBLE 24/7';
            }
            elseif($site['schedule_hour_start'] != null && $site['schedule_hour_end'] != null){

                $horaAltS = Carbon::createFromFormat('H:i:s', $site['schedule_hour_start'])->format('h A');
                $horaAltE = Carbon::createFromFormat('H:i:s', $site['schedule_hour_end'])->format('h A');
                
                $hour_range_ing = 'AT ' . $horaAltS . ' - ' . $horaAltE;
                $hour_range_esp = 'DE ' . $horaAltS . ' - ' . $horaAltE;
            }

            if($site['schedule_day_start'] > 0 && $site['schedule_day_end'] > 0){
                $day_range_ing = 'OPEN FROM ' . $days_ing[($site['schedule_day_start']) - 1] . ' TO ' . $days_ing[($site['schedule_day_end'])-1];
                $day_range_esp = 'ABIERTO DE ' . $days_esp[($site['schedule_day_start']) - 1] . ' A ' . $days_esp[($site['schedule_day_end'])-1];
            }
            if($site['schedule_day_start'] == 1 && $site['schedule_day_end'] == 7){
                $day_range_ing = 'OPEN DAILY';
                $day_range_esp = 'ABIERTO TODOS LOS DIAS';
            }
            
            $time_array = array (
                'day_range_ing' => $day_range_ing,
                'day_range_esp' => $day_range_esp,
                'hour_range_ing' => $hour_range_ing,
                'hour_range_esp' => $hour_range_esp
            );

            //----- Combinación del array original junto al array de tiempo -----//
            $site = array_merge($site, $time_array);
            
            $sites[$i] = $site;
        }

        return view('admin', compact('sites', 'buttons', 'property', 'revenue_centers', 'all_revenue_centers', 'languages'));

    }

    public function homes_happenings(Request $request){
        $property = property::where('id', 1)
        ->with([
            'happening' => function ($query) {
                $query->orderBy('schedule_spe_day', 'ASC');
                $query->where('active', 1);
            },
            'wellness' => function ($query) {
                $query->where('active', 1);
            },
            'activity',
            'more'
        ])
        ->get()
        ->first();
        $revenue_centers = revenue_center::with('button')->get();
        $languages = languages::get();
        
        //----- Happening solicitado por el AJAX -----//
        $happenings = ($property->happening)->toArray();
        $day = null;
        $dayName = null;
        $dayName_es = null;
        $dayAbbr = null;
        $dayAbbr_es = null;
        $month = null;
        $month_es = null;
        
        //--- Listado de los dias acortados ---//
        $days_ing = ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'];   //Ingles
        $days_esp = ['Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab', 'Dom'];      // Español
        
        //--- Listado de los dias completos ---//
        $days_com_ing = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];     //Ingles
        $days_com_esp = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];         // Español

        $dayRange = null;
        $dayRange_es = null;
        $dayStart = null;
        $dayStart_es = null;
        $dayEnd = null;
        $dayEnd_es = null;

        foreach($happenings as $i => $happening) {
            //----- Horario del Happening (Inicio - Fin) -----//
            $horarioStart = Carbon::createFromFormat('H:i:s', $happening['schedule_hour_start'])->format('h:i a');
            $horarioEnd = Carbon::createFromFormat('H:i:s', $happening['schedule_hour_end'])->format('h:i a');
    
            //----- Dia y Mes en el que ocurre el Happening -----//
            if($happening['schedule_spe_day'] != null){
                $day = (Carbon::createFromFormat('Y-m-d', $happening['schedule_spe_day']))->format('d');
                $dayName = (Carbon::createFromFormat('Y-m-d', $happening['schedule_spe_day']))->isoFormat('dddd');
                $dayName_es = ucfirst((Carbon::createFromFormat('Y-m-d', $happening['schedule_spe_day']))->locale('es')->isoFormat('dddd'));
                $dayAbbr = (Carbon::createFromFormat('Y-m-d', $happening['schedule_spe_day']))->isoFormat('ddd');
                $dayAbbr_es = ucfirst((Carbon::createFromFormat('Y-m-d', $happening['schedule_spe_day']))->locale('es')->isoFormat('ddd'));
                $month = (Carbon::createFromFormat('Y-m-d', $happening['schedule_spe_day']))->translatedFormat('F');
                $month_es = ucfirst((Carbon::createFromFormat('Y-m-d', $happening['schedule_spe_day']))->locale('es')->translatedFormat('F'));
            }
            //--- Si no tiene un dia especifico y ademas abre todos los dias ---//
            if($happening['schedule_day_start'] == $happening['schedule_day_end']){
                $dayRange = 'Every ' . $days_com_ing[$happening['schedule_day_start'] - 1];
                $dayRange_es = 'Todos los ' . $days_com_esp[$happening['schedule_day_start'] - 1];
            }
            //--- Si no tiene un dia especifico y ademas abre todos los dias ---//
            elseif($happening['schedule_day_start'] == 1 && $happening['schedule_day_end'] == 7){
                $dayRange = 'Open Daily';
                $dayRange_es = 'Todos los dias';
            }
            else{
                $dayStart = $days_ing[$happening['schedule_day_start'] - 1];
                $dayStart_es = $days_esp[$happening['schedule_day_start'] - 1];
                $dayEnd = $days_ing[$happening['schedule_day_end'] - 1];
                $dayEnd_es = $days_esp[$happening['schedule_day_end'] - 1];
                $dayRange = $days_ing[$happening['schedule_day_start'] - 1] . ' to ' . $days_ing[$happening['schedule_day_end'] - 1];
                $dayRange_es = $days_esp[$happening['schedule_day_start'] - 1] . ' a ' . $days_esp[$happening['schedule_day_end'] - 1];
            }
    
            //----- Array con los datos completos del Happening -----//
            $time = array('dayName' => $dayName, 'dayName_es' => $dayName_es, 'dayNum' => $day, 'dayAbbr' => $dayAbbr, 'dayAbbr_es' => $dayAbbr_es, 'dayStart' => $dayStart, 'dayStart_es' => $dayStart_es, 'dayEnd' => $dayEnd, 'dayEnd_es' => $dayEnd_es, 'month' => $month, 'month_es' => $month_es, 'hStart' => $horarioStart, 'hEnd' => $horarioEnd, 'dayRange' =>$dayRange, 'dayRange_es' => $dayRange_es);
    
            //----- Combinación del array original junto al array de tiempo -----//
            $happening = array_merge($happening, $time);

            $happenings[$i] = $happening;
        }
        
        return view('happenings_1homes', compact('property', 'revenue_centers', 'languages', 'happenings'));
    }

    public function homes_wellness(Request $request){
        $property = property::where('id', 1)
        ->with([
            'revenuecenter' => function ($query) {
                $query->where('active', 1);
            },
            'wellness' => function ($query) {
                $query->where('active', 1);
                $query->with('button');
            }
        ])
        ->get()->first();
        
        $revenue_centers = revenue_center::get();
        $languages = languages::get();
        
        return view('wellness_1homes', compact('property', 'revenue_centers', 'languages'));
    }

    public function homes_activities(Request $request){
        $property = property::where('id', 1)->with('wellness', 'activity')->get()->first();
        $revenue_centers = revenue_center::get();
        $languages = languages::get();

        return view('activities_1homes', compact('property', 'revenue_centers', 'languages'));
    }

    public function homes_more(Request $request){
        $property = property::where('id', 1)->with('happening', 'wellness', 'activity', 'more')->get()->first();
        $revenue_centers = revenue_center::get();
        $languages = languages::get();

        return view('more', compact('property', 'revenue_centers', 'languages'));
    }

    //------------------------------ FUNCTIONS ------------------------------
    public function spa(Request $request){
        $sites = site::get();
        $buttons = button::get();
        $properties = property::get()->first();
        $revenue_centers = revenue_center::get();
        $languages = languages::get();

        return view('spa', compact('sites', 'buttons', 'properties', 'revenue_centers', 'languages'));
    }

    public function get_rc(Request $request){
        $revenue_centers = revenue_center::with('site', 'button')->get();
        
        return response()->json([
            'message' => 'Datos mostrados',
            'revenue_centers' => $revenue_centers
        ]);
    }

    public function verPDF($file){
        // Ruta completa del archivo en public/assets/files
        $path = public_path('assets/files/' . $file);

        // Si el archivo existe, pasamos el nombre del archivo a la vista
        if (file_exists($path)) {
            return view('verpdf', ['file' => $file]);
        }

        // Si el archivo no se encuentra, mostramos un error 404
        return abort(404, 'Archivo no encontrado');
    }

    public function get_happ(Request $request){
        //----- Happening solicitado por el AJAX -----//
        $happenings = happening::where('id', $request->rc_id)->get()->first()->toArray();

        //----- Horario del Happening (Inicio - Fin) -----//
        $horarioStart = Carbon::createFromFormat('H:i:s', $happenings['schedule_hour_start']);
        $horarioStart = $horarioStart->format('h:i');
        $horarioEnd = Carbon::createFromFormat('H:i:s', $happenings['schedule_hour_end']);
        $horarioEnd = $horarioEnd->format('h:i');

        //----- Dia y Mes en el que ocurre el Happening -----//
        $day = (Carbon::createFromFormat('Y-m-d', $happenings['schedule_spe_day']))->format('d');
        $dayName = (Carbon::createFromFormat('Y-m-d', $happenings['schedule_spe_day']))->isoFormat('dddd');
        $month = (Carbon::createFromFormat('Y-m-d', $happenings['schedule_spe_day']))->format('M');

        //----- Array con los datos completos del Happening -----//
        $time = array('dayName' => $dayName, 'dayNum' => $day, 'month' => $month, 'hStart' => $horarioStart, 'hEnd' => $horarioEnd);

        //----- Combinación del array original junto al array de tiempo -----//
        $happenings = array_merge($happenings, $time);

        //----- Obtener URL del sitio -----//
        $url = env('ASSETS_PATH');
        return response()->json(['happenings' => $happenings, 'url' => $url]);
    }
}
