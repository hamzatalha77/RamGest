<?php

namespace App\Http\Controllers;

use App\Models\Sortie;
use App\Models\Stock;
use App\Models\Client;
use Illuminate\Http\Request;

class SortieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $sorties=Sortie::all();
            $stocks=Stock::all();
            $clients=Client::all();
            return view('sortie')->with('sorties',$sorties)->with('stocks',$stocks)->with('clients',$clients);
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
       // return view('choice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ref=Stock::where('reference',$request->reference)->first();
        if($request->quantite<=$ref->quantite){
        $sortie=Sortie::create([
            'reference'=>$request->reference,
            'categorie'=>$ref->categorie_name,
            'fornisseur'=>$ref->fornisseur_name,
            'client'=>$request->client,
            'prix'=>$ref->prix,
            'quantite'=>$request->quantite,
            'total'=>$request->quantite*$ref->prix,
        ]);
        $ref1=Stock::where('reference',$request->reference)->first();
        $ref1->quantite=$ref->quantite-$request->quantite;
        $ref1->save();
        session()->flash("success","bien effectuer");
        }
        else{
            session()->flash("error","probleme on quantite");
        }
        return redirect(route('sortie.index'));
    }

    public function facture_sortie(Request $request){
        $sorties=SORTIE::whereDate('created_at',$request->date_debut)->where('client',$request->client)->get();
        $date_debut=$request->date_debut;
        $client=$request->client;
        $total=$sorties->sum('total');
        return view("facture_sortie")->with('sorties',$sorties)->with('total',$total)
                                    ->with('date_debut',$date_debut)->with('client',$client);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sortie  $sortie
     * @return \Illuminate\Http\Response
     */
    public function show(Sortie $sortie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sortie  $sortie
     * @return \Illuminate\Http\Response
     */
    public function edit(Sortie $sortie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sortie  $sortie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sortie $sortie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sortie  $sortie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $sortie=Sortie::where('id',$id)->first();
            $stock=Stock::where('reference',$sortie->reference)->first();
            $stock->quantite=$stock->quantite+$sortie->quantite;
            $stock->save();
            $sortie->delete();
            return redirect(route('sortie.index'));
        } catch (\Throwable $th) {
            session()->flash("error","probleme");
            return redirect(route('sortie.index'));
        }
        
    }
}
