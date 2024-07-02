<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtraController extends Controller
{
    function checkValidation(Request $request){

        $request ->validate([
            'name'=>'required|min:3|max:10|alpha|not_in:admin',
            'email'=>'required|email',
            'price' =>'required|numeric|min:3|between:10,100'
        ]);


            return redirect(route("form.get"))->with([
                'success'=>'form submitted successfully',
                'name' => $request->input('name'),
                'email' => $request->input('email')
            ]);
       
    }
}
