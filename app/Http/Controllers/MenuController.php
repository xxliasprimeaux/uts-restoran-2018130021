<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MenuController extends Controller{
    public function __invoke(Request $request){
        return view('menu');
        }
    }
