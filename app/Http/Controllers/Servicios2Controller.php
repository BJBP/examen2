<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Estudiantes2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

            $estudiantes = [
            ['nombre' => 'Estudiante 01'],
            ['nombre' => 'Estudiante 02'],
            ['nombre' => 'Estudiante 03'],
            ['nombre' => 'Estudiante 04'],
            ['nombre' => 'Estudiante 05'],
            ];
            return view('estudiantes', compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
