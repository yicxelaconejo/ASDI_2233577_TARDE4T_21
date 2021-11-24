<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Students = Students::simplePaginate(2);
        return view ('Students.index', compact('Students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Students.create') ;
            
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Student = new Students;
        $Student -> Nombres = $request -> Nombres;
        $Student -> Celular = $request -> Celular;
        $Student -> Correo = $request -> Correo;
        $Student -> Num_tarjeta = $request -> Num_tarjeta;
        //metodo save guarda en bbdd
        $Student -> save();

        return redirect()->route('Students.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Students  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Students $Student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Students  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Students $Student)
    {
        return view ('Students.edit' , compact('Student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Students  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Students $Student)
    {
        $Student -> Nombres = $request->Nombres;
        $Student -> Celular = $request->Celular;
        $Student -> Correo = $request->Correo;
        $Student -> Num_tarjeta = $request->Num_tarjeta;
        $Student -> save();

        return redirect()->route('Students.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy(Students $students)
    {
        //
    }
}
