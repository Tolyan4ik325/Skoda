<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;


class PagesEditController extends Controller
{
    //

    public function execute(Page $page, Request $request) {

    	// $page = Page::find($id);

    	// dd($page);

    	$old = $page->toArray();

    	if(view()->exists('admin.pages_edit')) {
    		
    		$data = [
    			'title' => 'Редактирование страницы - '.$old['name'],
    			'data' => $old
    		];
    		return view('admin.pages_edit', $data);
    	}

    }
}
