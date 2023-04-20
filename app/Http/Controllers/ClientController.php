<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $clients=Client::all();
            return view('client')->with('clients',$clients);
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
            $client=Client::create([
                'client'=>$request->client,
                'nom'=>$request->nom,
                'prenom'=>$request->prenom,
                'adresse'=>$request->adresse,
            ]);
            return redirect(route('client.index'));
        } catch (\Throwable $th) {
            session()->flash("error","probleme ");
            return redirect(route('dashboard'));
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($client)
    {
        try {
            $client=Client::where('client',$client)->delete();
            return redirect(route('client.index'));
        } catch (\Throwable $th) {
            session()->flash("error","probleme ");
            return redirect(route('dashboard'));
        }
        
    }
}
