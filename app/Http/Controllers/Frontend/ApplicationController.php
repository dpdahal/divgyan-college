<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public $pagePath = 'frontend.pages.';

    public function index()
    {
        return view($this->pagePath . 'home.home');
    }

    public function about()
    {
        return view($this->pagePath . 'about.about');
    }

    public function contact()
    {
        return view($this->pagePath . 'contact.contact');
    }
}
