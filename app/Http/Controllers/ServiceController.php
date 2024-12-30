<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    
    public function index(){
        $locale = app()->getLocale();
        $service = Service::firstOrFail();

        return view('guest.service', [
            'title' => $locale === 'id' ? $service->title_id : $service->title_en,
            'descriptions' => $locale === 'id' ? $service->descriptions_id : $service->descriptions_en,
        ]);
    }
    
}