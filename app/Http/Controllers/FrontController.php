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
    
    function portfolio_sculpt_perfs(){
    	return view('portfolio.scultperfs');
    }

    function portfolio_installations(){
    	return view('portfolio.installation');
    }
    
    function portfolio_page_ogoni(){
    	return view('portfolio.page.ogoni');
    }
    
    function portfolio_page_bio_of_forgotten(){
    	return view('portfolio.page.bio');
    }
    
    function portfolio_page_isimagodo(){
    	return view('portfolio.page.nixon');
    }
    
    function portfolio_page_prayer_room(){
    	return view('portfolio.page.prayerroom');
    }
}
