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
        $sites_b = site::get();
        $buttons = button::get();
        $property = property::where('id', 1)->with('wellness')->get()->first();
        $revenue_centers = revenue_center::with([
            'button' => function ($query) {
                $query->where('active', 1);
            }])->get();
        $languages = languages::get();
        //dd($revenue_centers);

        $horaFormatoS = '';
        $horaFormatoE = '';
        $horaAltS = '';
        $horaAltE = '';

        $sites = [];
        foreach($sites_b as $site){
            $day_range_ing = '';
            $day_range_esp = '';
            $days_ing = ['MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'SATURDAY', 'SUNDAY'];
            $days_esp = ['LUNES', 'MARTES', 'MIERCOLES', 'JUEVES', 'VIERNES', 'SABADO', 'DOMINGO'];
            if($site->schedule_hour_start != '00:00:00'){
                $horaS = Carbon::createFromFormat('H:i:s', $site->schedule_hour_start);
                $horaFormatoS = $horaS->format('H:i');
                $horaE = Carbon::createFromFormat('H:i:s', $site->schedule_hour_end);
                $horaFormatoE = $horaE->format('H:i');

                $horaAltS = $horaS->format('h A');
                $horaAltE = $horaE->format('h A');
            }

            if($site->schedule_day_start > 0 && $site->schedule_day_end > 0){
                $day_range_ing = 'OPEN FROM ' . $days_ing[($site->schedule_day_start)-1] . ' TO ' . $days_ing[($site->schedule_day_end)-1];
                $day_range_esp = 'ABIERTO DE ' . $days_esp[($site->schedule_day_start)-1] . ' A ' . $days_esp[($site->schedule_day_end)-1];
            }
            if($site->schedule_day_start == 1 && $site->schedule_day_end == 7){
                $day_range_ing = 'OPEN DAILY';
                $day_range_esp = 'ABIERTO TODOS LOS DIAS';
            }
            
            $sites[] = [
                'id' => $site->id,
                'name' => $site->name,
                'day_start' => $site->schedule_day_start,
                'day_end' => $site->schedule_day_end,
                'day_range_ing' => $day_range_ing,
                'day_range_esp' => $day_range_esp,
                'hour_start' => $horaFormatoS,
                'hour_end' => $horaFormatoE,
                'hour_start_alt' => $horaAltS,
                'hour_end_alt' => $horaAltE,
                'description' => $site->description,
                'description_es' => $site->description_es,
                'rc_id' => $site->rc_id
            ];
        }

        return view('1homes', compact('sites', 'buttons', 'property', 'revenue_centers', 'languages'));
    }

    public function administrate(Request $request){
        $sites_b = site::get();
        $buttons = button::get();
        $properties = property::get()->first();
        $revenue_centers = revenue_center::get();
        $languages = languages::get();

        $horaFormatoS = '';
        $horaFormatoE = '';
        $horaAltS = '';
        $horaAltE = '';

        $sites = [];
        foreach($sites_b as $site){
            $day_range_ing = '';
            $day_range_esp = '';
            $days_ing = ['MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'SATURDAY', 'SUNDAY'];
            $days_esp = ['LUNES', 'MARTES', 'MIERCOLES', 'JUEVES', 'VIERNES', 'SABADO', 'DOMINGO'];
            if($site->schedule_hour_start == '00:00:00'){
                $horaFormatoS = '';
                $horaFormatoE = '';
                $horaAltS = '';
                $horaAltE = '';
            }
            else{
                $horaS = Carbon::createFromFormat('H:i:s', $site->schedule_hour_start);
                $horaFormatoS = $horaS->format('H:i');
                $horaE = Carbon::createFromFormat('H:i:s', $site->schedule_hour_end);
                $horaFormatoE = $horaE->format('H:i');

                $horaAltS = $horaS->format('h A');
                $horaAltE = $horaE->format('h A');
            }



            if($site->schedule_day_start > 0 && $site->schedule_day_end > 0){
                $day_range_ing = 'OPEN FROM ' . $days_ing[($site->schedule_day_start)-1] . ' TO ' . $days_ing[($site->schedule_day_end)-1];
                $day_range_esp = 'ABIERTO DE ' . $days_esp[($site->schedule_day_start)-1] . ' A ' . $days_esp[($site->schedule_day_end)-1];
            }
            if($site->schedule_day_start == 1 && $site->schedule_day_end == 7){
                $day_range_ing = 'OPEN DAILY';
                $day_range_esp = 'ABIERTO TODOS LOS DIAS';
            }
            
            $sites[] = [
                'id' => $site->id,
                'name' => $site->name,
                'day_start' => $site->schedule_day_start,
                'day_end' => $site->schedule_day_end,
                'day_range_ing' => $day_range_ing,
                'day_range_esp' => $day_range_esp,
                'hour_start' => $horaFormatoS,
                'hour_end' => $horaFormatoE,
                'hour_start_alt' => $horaAltS,
                'hour_end_alt' => $horaAltE,
                'description' => $site->description,
                'description_es' => $site->description_es,
                'rc_id' => $site->rc_id
            ];
        }

        return view('admin', compact('sites', 'buttons', 'properties', 'revenue_centers', 'languages'));

    }

    public function homes_happenings(Request $request){
        $property = property::where('id', 1)
        ->with([
            'happening',
            'wellness',
            'activity',
            'more'
        ])
        ->get()
        ->first();
        $revenue_centers = revenue_center::with('button')->get();
        $languages = languages::get();
        
        //----- Happening solicitado por el AJAX -----//
        $happenings = happening::where('active', 1)->get()->toArray();
        $day = null;
        $dayName = null;
        $dayAbbr = null;
        $month = null;
        
        $days_ing = ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'];
        $days_esp = ['Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab', 'Dom'];
        $dayRange = null;
        $dayRange_es = null;

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
            if($happening['schedule_day_start'] == 1 && $happening['schedule_day_end'] == 7){
                $dayRange = 'Open Daily';
                $dayRange_es = 'Todos los dias';
            }
            else{
                $dayRange = $days_ing[$happening['schedule_day_start']] . ' to ' . $days_ing[$happening['schedule_day_end']];
                $dayRange_es = $days_esp[$happening['schedule_day_start']] . ' a ' . $days_esp[$happening['schedule_day_end']];
            }
    
            //----- Array con los datos completos del Happening -----//
            $time = array('dayName' => $dayName, 'dayName_es' => $dayName_es, 'dayNum' => $day, 'dayAbbr' => $dayAbbr, 'dayAbbr_es' => $dayAbbr_es, 'month' => $month, 'month_es' => $month_es, 'hStart' => $horarioStart, 'hEnd' => $horarioEnd, 'dayRange' =>$dayRange, 'dayRange_es' => $dayRange_es);
    
            //----- Combinación del array original junto al array de tiempo -----//
            $happening = array_merge($happening, $time);

            $happenings[$i] = $happening;
        }
        //dd($happenings);
        return view('happenings_1homes', compact('property', 'revenue_centers', 'languages', 'happenings'));
    }

    public function homes_wellness(Request $request){
        $property = property::where('id', 1)->with('wellness')->get()->first();
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

    public function get_sites(Request $request){
        $sites = site::where('rc_id', $request->rc_id)->get();

        return response()->json([
            'message' => 'Datos mostrados',
            'sites' => $sites
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
