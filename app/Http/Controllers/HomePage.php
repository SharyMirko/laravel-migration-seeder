<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\trains;

class HomePage extends Controller
{
    public function index(){
        $train = trains::all();
        $data = [
            'trains' => $train
        ]; 
        return view('index', $data);
    }
}
