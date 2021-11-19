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
          
           $cursos = DB::table('Curso')->get();
            return $cursos;      
            
        } catch (Exception $e) {
            return $e;

        }
        
    }



public function Agregar(Request $request) {
   
    DB::table('Curso')->insert([
        'Alumno' => $request->Alumno,
        'Nota' => $request->Nota,
     
    ]);

}

 public function Modificar(Request $request) {
   
    try{
        $consulta =  DB::table('Curso')->where('Id', $request->Id)->update([
            'Alumno' => $request->Alumno,
            'Nota' => $request->Nota,
        ]);
    
        return $consulta;

    }catch (Exception $e) {
        return $e;

    }
  

 } 

 public function Eliminar(Request $request) {
    DB::table('Curso')->where('Id', $request->Id)->delete();
  }  
}
