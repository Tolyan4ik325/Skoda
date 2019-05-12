<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

class PagesAddController extends Controller
{
    //

    public function execute(Request $request) {

            if($request->isMethod('post')) {
                $input = $request->except('_token');

                $validator = Validator::make($input, [

                        'name' => 'required|max:255',
                        'alias' => 'required|unique:pages|max:255',
                        'text' => 'required'

                    ]);

                    if($validator->fails()) {
                        return redirect()->route('pagesAdd')->withErrors($validator)->withInput();
                    }

                    dd($input);
            }


    		if(view()->exists('admin.pages_add')) {
    			$data = [

    				'title' => 'Новая страница'

    			];
    			return view('admin.pages_add', $data);
    		}

    		abort(404);
    }
}
