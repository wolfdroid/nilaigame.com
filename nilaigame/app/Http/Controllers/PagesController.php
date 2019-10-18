<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    //Index Home
    public function weland(){
        $title = 'nilaigame.com - Indonesian Games Review Portal';
        return view ('pages.weland', compact('title'));
    }

    public function signin(){
        $title = 'nilaigame.com - Sign In';
        return view ('pages.signin', compact('title'));
    }

    public function index(){
        $title = 'Welcome nilaigame!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title',$title);
    }
    
    //About Pages
    public function about(){
        //Array Method
        //return view('pages.about');

        $data = array(
            'title' => 'Test',
            'services' => ['Web Design', 'Programming']
        );
        
        return view('pages.about')->with($data);    
        
    }
}
