<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    function about()
    {
    	return view("about");
    }

    function contact()
    {
    	return view("contact");
    }

    function portfolio(){
    	return view('portfolio.index');
    }

    function portfolio_drawings(){
    	return view('portfolio.drawings');
    }

    function portfolio_paintings(){
    	return view('portfolio.paintings');
    }

    function portfolio_installations(){
    	return view('portfolio.installation');
    }

    function portfolio_ogoni(){
    	return view('portfolio.ogoni');
    }
    function portfolio_forgotten(){
    	return view('portfolio.forgotten');
    }
    function portfolio_isimago(){
    	return view('portfolio.isimago');
    }
    function portfolio_prayer(){
    	return view('portfolio.prayer');
    }
}
