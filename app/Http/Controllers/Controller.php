<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function visi_misi(){
        return view('visi-misi');
    }

    public function profile(){
        return view('profile');
    }

    public function products_services(){
        return view('products-services');
    }

    public function clients(){
        return view('clients');
    }

    public function contact(){
        return view('contact');
    }

    public function articles(){
        return view('articles');
    }

    public function events(){
        return view('events');
    }

    public function gallery(){
        return view('gallery');
    }

    public function signin(){
        return view('signin');
    }

    public function signup(){
        return view('signup');
    }
}
