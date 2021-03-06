<?php

namespace App\Http\Controllers;

use App\BaseDeDatos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class BaseDeDatosController extends Controller
{
    public function getBaseDeDatos(){
        $baseDatos = DB::table('base_de_datos');
        return Datatables::of($baseDatos)
            ->addColumn('actions', '$baseDatos/actions')
            ->rawColumns(['actions'])
            ->make(true);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('baseDeDatos/baseDeDatos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BaseDeDatos  $baseDeDatos
     * @return \Illuminate\Http\Response
     */
    public function show(BaseDeDatos $baseDeDatos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BaseDeDatos  $baseDeDatos
     * @return \Illuminate\Http\Response
     */
    public function edit(BaseDeDatos $baseDeDatos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BaseDeDatos  $baseDeDatos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BaseDeDatos $baseDeDatos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BaseDeDatos  $baseDeDatos
     * @return \Illuminate\Http\Response
     */
    public function destroy(BaseDeDatos $baseDeDatos)
    {
        //
    }
}
