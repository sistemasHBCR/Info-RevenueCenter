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

class MainController extends Controller
{
    public function hacienda(Request $request){
        $sites = site::get();
        $buttons = button::get();
        $properties = property::where('id', 2)->get()->first();
        $revenue_centers = revenue_center::where('property_id', 1)->with('button', 'site')->get();
        $languages = languages::get();
        $happenings = happening::where('active', 1)->with('revenuecenter')->get();

        //dd($revenue_centers);

        return view('hacienda', compact('sites', 'buttons', 'properties', 'revenue_centers', 'languages', 'happenings'));
    }

    public function home2(Request $request){
        $sites = site::get();
        $buttons = button::get();
        $properties = property::get()->first();
        $revenue_centers = revenue_center::where('property_id', 1)->get();
        $languages = languages::get();
        $happenings = happening::where('active', 1)->with('revenuecenter')->get();

        return view('home2', compact('sites', 'buttons', 'properties', 'revenue_centers', 'languages', 'happenings'));
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
        //dd($sites_b, $sites);

        return view('admin', compact('sites', 'buttons', 'properties', 'revenue_centers', 'languages'));

    }

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

    public function verPDF($file)
    {
        // Ruta completa del archivo en public/assets/files
        $path = public_path('assets/files/' . $file);

        // Si el archivo existe, pasamos el nombre del archivo a la vista
        if (file_exists($path)) {
            return view('verpdf', ['file' => $file]);
        }

        // Si el archivo no se encuentra, mostramos un error 404
        return abort(404, 'Archivo no encontrado');
    }
}
