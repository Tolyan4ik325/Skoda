<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\Service;
use App\Portfolio;
use App\People;



class IndexController extends Controller
{
    public function execute(Request $request) {

    	$pages = Page::all();
    	$portfolios = Portfolio::get(array('name', 'filter', 'images'));
    	$services = Service::all();
    	$peoples = People::all();

    	// dd($peoples);

    	return view('site.index');

    }
}
