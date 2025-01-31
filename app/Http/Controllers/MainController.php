<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\button;
use App\Models\languages;
use App\Models\property;
use App\Models\revenue_center;
use App\Models\site;

class MainController extends Controller
{
    public function home(Request $request){
        $sites = site::get();
        $buttons = button::get();
        $properties = property::get();
        $revenue_centers = revenue_center::get();
        $languages = languages::get();

        //dd($sites, $buttons, $properties, $revenue_centers, $languages);
        return view('welcome', compact('sites', 'buttons', 'properties', 'revenue_centers', 'languages'));
    }

    public function home2(Request $request){
        $sites = site::get();
        $buttons = button::get();
        $properties = property::get()->first();
        $revenue_centers = revenue_center::get();
        $languages = languages::get();

        return view('home2', compact('sites', 'buttons', 'properties', 'revenue_centers', 'languages'));
    }

    public function administrate(Request $request){
        $sites = site::get();
        $buttons = button::get();
        $properties = property::get()->first();
        $revenue_centers = revenue_center::get();
        $languages = languages::get();

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

    public function change_language(Request $request){
        //
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
