<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrationController extends Controller
{
    function showform(){
        // print_r('get method');
        return view('form');
    }
    function signup(Request $request){
        // print_r('post method');
        // return $request->input();
        // dd($request); 
        // dump & die() = dd() used to dump the variable content to trhe browser.
        // print_r($request->all());
        // print_r($request->input('name')); //According to name attribute in form.
        // print_r($request->input('email')); //According to name attribute of email in form. 
        
        // if($request->input('name')){
        //     print_r($request->input('password'));
        // }
        // if($request->has(['name','email','password'])){
        //     print_r($request->input('username'));
        // }
        // if($request->hasAny(['name',"email"])){
        //     print_r($request->input('password'));
        // }
        // if($request->filled('name')){
        //     print_r('inside fiiled');
        //     print_r($request->input('password'));
        // }for checking that required fields have values.
        // if($request->missing('name')){
        //     print_r('indside missing username');
        //     print_r($request->input('password'));
        // }
        // $request->whenHas('name', function($input){
        //     print_r('Data modified');
        // }); //it will not work for empty values.
        // $request->flash();//it will store current values into session for 1 next request.

        // print_r($request->old('name'));
        // print_r($request->old('email'));
        // print_r($request->old('username'));
        // print_r($request->old('password'));
        
        
        // return redirect('olddata')->withInput();//for redirecting to olddata page.
        // return redirect()->route('old')->withInput();
        return redirect('olddata')->withInput(
            $request->except('password') //it will exclude the password.it
        );
        // return view('form'); 
    }
}
