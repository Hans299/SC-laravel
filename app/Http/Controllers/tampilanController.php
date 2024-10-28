<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tampilanController extends Controller
{
    public function landing(){
        return view('admin.fitur1.layout');
    }
    public function fitur1(){
        return view('admin.fitur1.create');
    }
}
