<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function show(){
        $data= Service::all();
        return Service::all();

    }
}
