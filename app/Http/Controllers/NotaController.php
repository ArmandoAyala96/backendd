<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;

class AlumnoController extends Controller
{
    public function obtenerItems()
    {
        try {
          
           $notas = DB::table('Nota')->get();
            return $notas;      
            
        } catch (Exception $e) {
            return $e;

        }
        
    }



public function Agregar(Request $request) {
   
    DB::table('Nota')->insert([
        'Alumno' => $request->Alumno,
        'Nota' => $request->Nota,
     
    ]);

}

 public function Modificar(Request $request) {
   
    try{
        $consulta =  DB::table('Nota')->where('Id', $request->Id)->update([
            'Alumno' => $request->Alumno,
            'Nota' => $request->Nota,
        ]);
    
        return $consulta;

    }catch (Exception $e) {
        return $e;

    }
  

 } 

 public function Eliminar(Request $request) {
    DB::table('Nota')->where('Id', $request->Id)->delete();
  }  
}
