<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
 



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Log::channel('googlecloud')->info('LARAVEL TEST LOG');
        // Log::debug('LARAVEL TEST LOG2');

        $disk = Storage::disk('gcs');

        $exists = $disk->exists('file.jpg');

        if ($exists) {
            Log::debug("file.jpg exits ");
        } else {
            Log::debug("file.jpg not exits ");
        }
        

        return view('home');
    }
}
