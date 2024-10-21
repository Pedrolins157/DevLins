<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){

    }
    public function create(Request $request){
        $data = Contact::create($request->all());          
       if($data){
        return response()->json(['message' => 'Formulário enviado com sucesso!', 'data' => $data]);
       } 
        //return redirect()->back()->with('success', 'Formulário enviado com sucesso!');
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
