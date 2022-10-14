<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TestimonialController extends Controller{
    public function __invoke(Request $request){
        return view('testimonial');
        }
    }
