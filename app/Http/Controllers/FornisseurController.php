<?php

namespace App\Http\Controllers;

use App\Models\Fornisseur;
use Illuminate\Http\Request;

class FornisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $fornisseurs=Fornisseur::all();
            return view('fornisseurs')->with('fornisseurs',$fornisseurs);
        } catch (\Throwable $th) {
            session()->flash("error","probleme ");
            return redirect(route('dashboard'));
        }
       
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
        try {
            $fornisseur=Fornisseur::create([
                'fornisseur_name'=>$request->fornisseur_name,
                'description'=>$request->description,
            ]);
            return redirect(route('fornisseur.index'));
        } catch (\Throwable $th) {
            session()->flash("error","probleme ");
            return redirect(route('dashboard'));
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fornisseur  $fornisseur
     * @return \Illuminate\Http\Response
     */
    public function show(Fornisseur $fornisseur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fornisseur  $fornisseur
     * @return \Illuminate\Http\Response
     */
    public function edit(Fornisseur $fornisseur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fornisseur  $fornisseur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fornisseur $fornisseur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fornisseur  $fornisseur
     * @return \Illuminate\Http\Response
     */
    public function destroy($fornisseur)
    {
        try {
            $fornisseur=Fornisseur::where('fornisseur_name',$fornisseur)->delete();
            return redirect(route('fornisseur.index'));
        } catch (\Throwable $th) {
            session()->flash("error","probleme ");
            return redirect(route('dashboard'));
        }
    }
}
