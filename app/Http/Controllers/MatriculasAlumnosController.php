<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;

class MatriculasAlumnosController extends Controller
{
    public function obtenerMatriculas()
    {
        try {
          
           $matriculas = DB::select('exec ObtenerMatriculas');
            return $matriculas;      
            
        } catch (Exception $e) {
            return $e;
        }
        
    }

    public function AgregarMatricula(Request $request)
    {

        $parametros = array(
            $request->IdAlumno,
            $request->IdCurso,
            $request->IdEstadoCurso,
            $request->FechaIngreso
        );

        try {
          
           $matriculas = DB::statement('exec AgregarMatricula ?,?,?,?',$parametros);
        return $matriculas;      
            
        } catch (Exception $e) {
            return $e;
        }
        
    }

    public function ModificarMatricula(Request $request)
    {

        $parametros = array(
            $request->IdMatricula,
            $request->IdAlumno,
            $request->IdCurso,
            $request->IdEstadoCurso,
            $request->Nota,
            $request->FechaIngreso
        );

        try {
          
           $matriculas = DB::statement('exec ModificarMatricula ?,?,?,?,?,?',$parametros);
        return $matriculas;      
            
        } catch (Exception $e) {
            return $e;
        }
        
    }

}
