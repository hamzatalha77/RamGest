<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            $stock=Stock::create([
                'reference'=>$request->reference,
                'categorie_name'=>$request->categorie_name,
                'fornisseur_name'=>$request->fornisseur_name,
                'prix'=>$request->prix,
                'quantite'=>$request->quantite,
            ]);
            return redirect(route('dashboard'));
        } catch (\Throwable $th) {
            session()->flash("error","probleme");
            return redirect(route('dashboard'));
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$reference)
    {
        try {
            $stock=Stock::where('reference',$reference)->first();
            $stock->categorie_name=$request->categorie_name;
            $stock->fornisseur_name=$request->fornisseur_name;
            $stock->prix=$request->prix;
            $stock->quantite=$request->quantite;
            $stock->save();
            return redirect(route('dashboard'));
        } catch (\Throwable $th) {
            session()->flash("error","probleme");
            return redirect(route('dashboard'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy($reference)
    {
        try {
            $stock=Stock::where('reference',$reference)->delete();
            return redirect(route('dashboard'));
        } catch (\Throwable $th) {
            session()->flash("error","probleme");
            return redirect(route('dashboard'));
        }
        
    }
}
