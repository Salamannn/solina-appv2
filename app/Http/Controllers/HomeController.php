<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;
use App\Models\Project;
class HomeController extends Controller
{
    public function index()
    {
        $locale = app()->getLocale();
        $home = Home::firstOrFail();
        $about = About::firstOrFail();
        $projects = Project::latest()->take(5)->get();

        return view('guest.home', [
            'title' => $locale === 'id' ? $home->title_id : $home->title_en,
            'banner' => $locale === 'id' ? $home->banner_id : $home->banner_en,
            'foundermsg' => $locale === 'id' ? $home->foundermsg_id : $home->foundermsg_en,
            'about' => $locale === 'id' ? $about->about_id : $about->about_en,
            'projects' => $projects, // Kirim data proyek ke view
        ]);
    }

    public function wa(){
        return redirect()->away('https://wa.me/+6281247681237');;
    }
}
