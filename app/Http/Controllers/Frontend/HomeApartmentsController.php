<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeApartmentsController extends Controller
{
    public function site(){
        return view('frontend.apartments.apartments-site');
    }
    public function floor(){
        return view('frontend.apartments.apartments-floor');
    }
    public function unit(){
        return view('frontend.apartments.apartments-unit');
    }
}
