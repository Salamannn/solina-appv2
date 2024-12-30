<?php

namespace App\Http\Controllers;

use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $locale = app()->getLocale();
        $about = About::firstOrFail();

        return view('guest.about', [
            'title' => $locale === 'id' ? $about->title_id : $about->title_en,
            'visi' => $locale === 'id' ? $about->visi_id : $about->visi_en,
            'misi' => $locale === 'id' ? $about->misi_id : $about->misi_en,
            'about' => $locale === 'id' ? $about->about_id : $about->about_en,
        ]);
    }
}

