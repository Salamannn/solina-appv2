<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // Cek apakah parameter `lang` ada di URL
        if ($request->has('lang')) {
            $locale = $request->get('lang');

            // Set bahasa aplikasi jika sesuai dengan daftar bahasa yang didukung
            if (in_array($locale, ['id', 'en'])) {
                App::setLocale($locale);
                session(['locale' => $locale]); // Simpan bahasa ke sesi
            }
        } else {
            // Set bahasa default dari sesi jika tidak ada parameter
            App::setLocale(session('locale', config('app.locale')));
        }

        return $next($request);
    }
}
