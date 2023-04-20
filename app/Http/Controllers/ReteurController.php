<?php

namespace App\Http\Controllers;

use App\Models\Reteur;
use App\Models\Stock;
use App\Models\Client;
use Illuminate\Http\Request;

class ReteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $reteurs=Reteur::all();
            $stocks=Stock::all();
            $clients=Client::all();
            return view('reteur')->with('reteurs',$reteurs)->with('stocks',$stocks)->with('clients',$clients);
        } catch (\Throwable $th) {
            session()->flash("error","probleme ");
            return redirect(route('dashboard'));
        }
        
    }

    public function facture_reteur(Request $request){
        $reteurs=Reteur::whereDate('created_at',$request->date_debut)->where('client',$request->client)->get();
        $date_debut=$request->date_debut;
        $client=$request->client;
        $total=$reteurs->sum('total');
        return view("facture_reteur")->with('reteurs',$reteurs)->with('total',$total)
                                    ->with('date_debut',$date_debut)->with('client',$client);
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
            $ref=Stock::where('reference',$request->reference)->first();
            $reteur=Reteur::create([
                'reference'=>$request->reference,
                'categorie'=>$ref->categorie_name,
                'fornisseur'=>$ref->fornisseur_name,
                'client'=>$request->client,
                'prix'=>$ref->prix,
                'quantite'=>$request->quantite,
                'total'=>$request->quantite*$ref->prix,
            ]);
            return redirect(route('reteur.index'));
        } catch (\Throwable $th) {
            session()->flash("error","probleme");
            return redirect(route('reteur.index'));
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reteur  $reteur
     * @return \Illuminate\Http\Response
     */
    public function show(Reteur $reteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reteur  $reteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Reteur $reteur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reteur  $reteur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reteur $reteur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reteur  $reteur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $reteur=Reteur::where('id',$id)->delete();
            return redirect(route('reteur.index'));
        } catch (\Throwable $th) {
            session()->flash("error","probleme");
            return redirect(route('reteur.index'));
        }
        
    }
}
