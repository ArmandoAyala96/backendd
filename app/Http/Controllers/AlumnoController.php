<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;

class AlumnoController extends Controller
{
    public function ObtenerAlumnos()
    {
        try {
          
            $matriculas = DB::select('exec ObtenerAlumnos');
             return $matriculas;      
             
         } catch (Exception $e) {
             return $e;
         }
        
    }

    public function ObtenerCursos()
    {
        try {
          
            $matriculas = DB::select('exec ObtenerCursos');
             return $matriculas;      
             
         } catch (Exception $e) {
             return $e;
         }
        
    }
    public function ObtenerEstadoCurso()
    {
        try {
          
            $matriculas = DB::select('exec ObtenerEstadoCurso');
             return $matriculas;      
             
         } catch (Exception $e) {
             return $e;
         }
        
    }



public function Agregar(Request $request) {
   
    DB::table('Alumno')->insert([
        'Nombre' => $request->Nombre,
        'Apellido' => $request->Apellido,
        'Correo' => $request->Nombre,
        'Direccion' => $request->Apellido,
        'IdCurso' => $request->Apellido,
     
    ]);

}

 public function Modificar(Request $request) {
   
    try{
        $consulta =  DB::table('Alumno')->where('Id', $request->Id)->update([
            'Nombre' => $request->Nombre,
            'Apellido' => $request->Apellido,
            'Correo' => $request->Nombre,
        'Direccion' => $request->Apellido,
        'IdCurso' => $request->Apellido,
     
        ]);
    
        return $consulta;

    }catch (Exception $e) {
        return $e;

    }
  

 } 

 public function Eliminar(Request $request) {
    DB::table('Alumno')->where('Id', $request->Id)->delete();
  }  
}
