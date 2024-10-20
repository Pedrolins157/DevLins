<?php

namespace App\Http\Controllers;
use App\Models\service;
use Illuminate\Http\Request; 

abstract class Controller
{
    public function index(){

    }
    public function create(Request $request){
        $data =$request->all();
        
        if(service::created($data)){
            
        }


    }
    public function store(){

    }
    public function show(){

    }
    public function edit($id){

    }
    public function update($id){

    }
    public function destroy($id){

    }

}
