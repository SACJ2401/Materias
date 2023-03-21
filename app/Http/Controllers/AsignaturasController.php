<?php

namespace App\Http\Controllers;

use App\Models\Asignaturas;
use Illuminate\Http\Request;

class AsignaturasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['asignatura'] = Asignaturas::paginate(5); 
        return view('asignatura.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('asignatura.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //$datosAsignatura = request()->all();
        $datosAsignatura = request()->except('_token');
        Asignaturas::insert($datosAsignatura);

        return response()->json($datosAsignatura);
    }

    /**
     * Display the specified resource.
     */
    public function show(Asignaturas $asignaturas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $asignaturas=Asignaturas::findOrFail($id);

        return view('asignatura.edit',compact('asignaturas') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosAsignatura = request()->except(['_token','_method']);
        Asignaturas::where('id','=',$id)->update($datosAsignatura);
        
        $asignaturas=Asignaturas::findOrFail($id);
        return view('asignatura.edit',compact('asignaturas') );

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Asignaturas::destroy($id);
        return redirect('asignatura');
    }
}
