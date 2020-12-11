<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Address;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query=Address::select()->get();
        return $query;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'address' => 'required',
            'number' => 'required',
            'street' => 'required',
            'country' => 'required',
            'city' => 'required'
          ]);
    
            if ($validator->fails()) {
                return ["status"=>false,"messages"=>"Campos requeridos","campos"=>$validator->messages()];
                
            }
            
            //$user = Users::create($request->all());
            $tbl = new Address;
            $tbl->address=$request->address;
            $tbl->number=$request->number;
            $tbl->street=$request->street;
            $tbl->country=$request->country;
            $tbl->city=$request->city;

            if($tbl->save()){
                return ["status"=>true,"messages"=>"Registro exitoso."];
            }else{
                return ["status"=>false,"messages"=>"Falló el registro."];
            }
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'address' => 'required',
            'number' => 'required',
            'street' => 'required',
            'country' => 'required',
            'city' => 'required'
          ]);
    
            if ($validator->fails()) {
                return ["status"=>false,"messages"=>"Campos requeridos","campos"=>$validator->messages()];
                
            }
            
            $tbl = new Address;
            $tbl->address=$request->address;
            $tbl->number=$request->number;
            $tbl->street=$request->street;
            $tbl->country=$request->country;
            $tbl->city=$request->city;

            if($tbl->save()){
                return ["status"=>true,"messages"=>"Registro exitoso."];
            }else{
                return ["status"=>false,"messages"=>"Falló el registro."];
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'address' => 'required',
            'number' => 'required',
            'street' => 'required',
            'country' => 'required',
            'city' => 'required'
          ]);
    
            if ($validator->fails()) {
                return ["status"=>false,"messages"=>"Campos requeridos","campos"=>$validator->messages()];
                
            }
            
            $tbl = Address::find($id);
            $tbl->address=$request->address;
            $tbl->number=$request->number;
            $tbl->street=$request->street;
            $tbl->country=$request->country;
            $tbl->city=$request->city;

            if($tbl->save()){
                return ["status"=>true,"messages"=>"Actualización exitoso."];
            }else{
                return ["status"=>false,"messages"=>"Falló la actualización."];
            }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //return ["dd"=>$id];
        
        $tbl = Address::find($id);
        
        if($tbl->delete()){
            return ["status"=>true,"messages"=>"Se eliminó correctamente."];
        }else{
            return ["status"=>false,"messages"=>"Falló al eliminar."];
        }
    }
}
