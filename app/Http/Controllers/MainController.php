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

    public function change_language(Request $request){
        //
    }
}
