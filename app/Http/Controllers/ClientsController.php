<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('site.locationDeVoiture.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(clients $clients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(clients $clients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, clients $clients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(clients $clients)
    {
        //
    }

    public function connexion_register(Request $request){
        $request->validate(
            [
                'email' => 'email|required|unique:clients',
                'password' => 'required|min:8',
                'username' => 'required',
            ]
        );

        $client = new clients();
        $client->user_email = $request->input('email');
        $client->user_password = bcrypt($request->input('password'));
        $client->user_name = $request->input('username');
        $client->save();
        return redirect('http://127.0.0.1:8000/')->with('status', 'votre compte à bien été créer');


    }

    public function connexion_login(Request $request){
        $request->validate(
            [
                'email' => 'email|required',
                'password' => 'required|min:8',
            ]
        );

        $client = clients::where('email',$request->input('email'))->first();

        if($client){
            if(Hash::check($request->input('password'), $client->password)){

                $request->session()->put('client',$client);

                return redirect('/espace-membre');
            }
            else{
                return back()->with('status', "Identifiant ou mot de passe incorrect.");
            }
        }
        else{
            return back()->with('status', "Désolé vous n'avez pas de compte à cet email.");
        }


    }
}