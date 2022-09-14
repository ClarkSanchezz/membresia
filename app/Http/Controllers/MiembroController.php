<?php

namespace App\Http\Controllers;


use App\Models\Miembro;
use Illuminate\Http\Request;
use App\Http\Requests\MiembroRequest;
//use resources\views\show;

class MiembroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(){
        return view ('miembro.home');
    }
    public function index()
    {
        //consultas sql, poner where('campo', 15)
        return view('miembro.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('miembro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MiembroRequest $request)
    {
        $datos = $request->validated();
        $miembro = Miembro::create($datos);
        return redirect()->route('miembro.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function show(Miembro $miembro)
    {
        return view('miembro.show', ['miembro'=>$miembro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function edit(Miembro $miembro)
    {
        return view ('miembro.edit', compact('miembro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function update(MiembroRequest $request, Miembro $miembro)
    {
        $datos = $request->validated();
        $miembro -> update($datos);
        return redirect()->route('miembro.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Miembro $miembro)
    {
        $miembro->delete();
       
        return redirect()->route('miembro.index');
    }
}
