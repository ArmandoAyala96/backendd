<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function obtenerItems()
    {
        try {
          
           $users = DB::table('Sucursal')->get();
            return $users;      
            
        } catch (Exception $e) {
            return $e;

        }
        
    }



public function Agregar(Request $request) {
   
    DB::table('Sucursal')->insert([
        'Direccion' => $request->Direccion,
        'Telefono' => $request->Telefono,
     
    ]);

}

 public function Modificar(Request $request) {
   
    try{
        $consulta =  DB::table('Sucursal')->where('Id', $request->Id)->update([
            'Direccion' => $request->Direccion,
            'Telefono' => $request->Telefono,
        ]);
    
        return $consulta;

    }catch (Exception $e) {
        return $e;

    }
  

 } 

 public function Eliminar(Request $request) {
    DB::table('Sucursal')->where('Id', $request->Id)->delete();
  }
  public function obtenerMatriculas()
  {
      try {
        
         $matriculas = DB::select('exec ObtenerMatriculas');
          return $matriculas;      
          
      } catch (Exception $e) {
          return $e;

      }
      
  }
  
}
