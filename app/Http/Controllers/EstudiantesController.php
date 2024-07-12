<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Http\Requests\CreateEstudianteRequest;

class EstudiantesController extends Controller
{
    public function index(){

        $estudiantes = Estudiante::get();
        $estudiantes = Estudiante::latest()->paginate(10);
        return view('estudiantes', compact('estudiantes'));
        
    }
    public function show($id) {
        return view('show', [
            'estudiante' => Estudiante::find($id)
        ]);
    }
    
    public function create() {
        return view('create');
    }

    public function store(CreateEstudianteRequest $request){
    
        // Crea el estudiante con los datos validados
        Estudiante::create($request->validated());
        
        // Redirecciona a la vista index para ver el listado de estudiantes
        return redirect()->route('estudiantes.index');
    }
    
    
    
}    