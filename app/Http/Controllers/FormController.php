<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function handleFormSubmission(Request $request){
        // dd($request-> all());
        // return $request->input("email");
        // return $request()->input("email");


        $name = $request->input("name");
        $email = $request->input("email");

        // return[
        //     "name"=>$name,
        //     "email" =>$email
        // ];
        // return redirect(route('form.get'))->with("success","Form are submitted");
        return redirect(route('form.get'))->with([
            "success"=>"Form are submitted",
            "name" => $name,
            "email"=> $email

        ]);
    }
}
