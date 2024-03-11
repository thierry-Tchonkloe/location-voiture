<?php

namespace App\Http\Controllers;

use App\Models\voitures;
use Illuminate\Http\Request;

class VoituresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voitures= voitures::all();
        return view("admin.voitures.index",compact('voitures'));
    }

    public function nosVoitures()
    {
        $voitures= voitures::all();
        return view("NosVoiture",compact('voitures'));
    }

    public function reservation(){
        $voitures= voitures::all();
        return view("reservation",compact('voitures'));
    }

    public function contact(){
        return view("contact");
    }

    public function connexion(){
        return view("connexion");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.voitures.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new voitures;


             if ($request->image)
            {
                $file=$request->file('image');
                $filename = time().'.'.$file->getClientOriginalExtension();
                $request->image->move('storage/image',$filename, 'public');
                $data->image = '/storage/image/'.$filename;
            }

            $data->nom = $request->nom;
            $data->type = $request->type;
            $data->prix_avec_chauffeur = $request->prix_avec;
            $data->prix_sans_chauffeur = $request->prix_sans;

            $data->save();
            return redirect()->route('creerVoiture.index')->with('success', 'Une voiture ajoutée.');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $voitures = voitures::find($id);
        return view('detail_reservation',compact('voitures'));
    }


   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $voitures = voitures::find($id);
        return view('admin.voitures.edit',compact('voitures'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $voiture = voitures::findOrFail($id);
    
        
        $voiture->update($request->all());
        if ($request->image)
            {
                $file=$request->file('image');
                $filename = time().'.'.$file->getClientOriginalExtension();
                $request->image->move('storage/image',$filename, 'public');
                $image['image'] = '/storage/image/'.$filename;
                $voiture->update($image);
            }


        return redirect()->route('creerVoiture.index')->with('success', 'Informations modifiées avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $voiture = voitures::find($id);

        $voiture->delete();

        return redirect()->route('creerVoiture.index')->with('success','Une voiture a été supprimé');
    }
}
