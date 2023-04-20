<?php

namespace App\Http\Controllers;

use App\Models\Entree;
use App\Models\Stock;
use Illuminate\Http\Request;

class EntreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $entrees=Entree::all();
            $stocks=Stock::all();
            return view('entree')->with('entrees',$entrees)->with('stocks',$stocks);
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
            $ref=Stock::where('reference',$request->reference)->first();
            $entree=Entree::create([
                'reference'=>$request->reference,
                'categorie'=>$ref->categorie_name,
                'fornisseur'=>$ref->fornisseur_name,
                'prix'=>$request->prix,
                'quantite'=>$request->quantite,
                'total'=>$request->quantite*$request->prix,
            ]);
            $ref->prix=$request->prix;
            $ref->quantite=$ref->quantite+$request->quantite;
            $ref->save();
            return redirect(route('entree.index'));
        } catch (\Throwable $th) {
            session()->flash("error","probleme");
            return redirect(route('entree.index'));
        }
    }

    public function facture_entree(Request $request){
        $entrees=Entree::whereDate('created_at',$request->date_debut)->get();
        $date_debut=$request->date_debut;
        $total=$entrees->sum('total');
        return view("facture_entree")->with('entrees',$entrees)->with('total',$total)
                                    ->with('date_debut',$date_debut);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entree  $entree
     * @return \Illuminate\Http\Response
     */
    public function show(Entree $entree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entree  $entree
     * @return \Illuminate\Http\Response
     */
    public function edit(Entree $entree)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entree  $entree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entree $entree)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entree  $entree
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $entree=Entree::where('id',$id)->first();
            $stock=Stock::where('reference',$entree->reference)->first();
            $stock->quantite=$stock->quantite-$entree->quantite;
            $stock->save();
            $entree->delete();
            return redirect(route('entree.index'));
        } catch (\Throwable $th) {
            session()->flash("error","probleme");
            return redirect(route('entree.index'));
        }
    }
}
