<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Users;

class UsersController extends Controller
{
    
    //ESPERO QUE FUNCIONE
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $query=Users::select()
                ->leftjoin('address', 'address.iduser', '=', 'users.id')
                ->get();
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
        'name' => 'required',
        'firstname' => 'required',
        'lastname' => 'required',
        'age' => 'required'
      ]);

        if ($validator->fails()) {
            return ["status"=>false,"messages"=>"Campos requeridos","campos"=>$validator->messages()];
            
        }
        
        //$user = Users::create($request->all());
        $tbl = new Users;
        $tbl->name=$request->name;
        $tbl->firstname=$request->firstname;
        $tbl->lastname=$request->lastname;
        $tbl->age=$request->age;
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
        //
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
            'name' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'age' => 'required'
          ]);
    
        if ($validator->fails()) {
            return ["status"=>false,"messages"=>"Campos requeridos","campos"=>$validator->messages()];
            
        }

        $tbl = Users::find($id);
        $tbl->name=$request->name;
        $tbl->firstname=$request->firstname;
        $tbl->lastname=$request->lastname;
        $tbl->age=$request->age;
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
        $tbl = Users::find($id);
        
        if($tbl->delete()){
            return ["status"=>true,"messages"=>"Se eliminó correctamente."];
        }else{
            return ["status"=>false,"messages"=>"Falló al eliminar."];
        }
    }
    
    public function estadoprueba(){
        return ["msg"=>"Hola este es un estado de prueba..."];
    }
}
