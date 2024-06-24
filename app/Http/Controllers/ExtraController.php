<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtraController extends Controller
{
    function checkValidation(Request $request){

        $validation = $request ->validate([
            'name'=>'required',
            'email'=>'required|email'
        ]);


            return redirect(route("form.get"))->with([
                'success'=>'form submitted successfully',
                'name' => $request->input('name'),
                'email' => $request->input('email')
            ]);
       
    }
}
