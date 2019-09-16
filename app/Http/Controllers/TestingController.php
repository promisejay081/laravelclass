<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function index()
    {
        $student=array(array(
            'name'=>'JayJay',
            'age'=>20,
            'color'=>'black'
        ),
        array(
            'name'=>'Agape',
            'age'=> 70,
            'color'=> 'black'
        )    
        );
        
        return view("ours")->with("student",$student);
    }
    
}
