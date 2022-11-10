<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonneController extends Controller
{
    public function store (Request $request){
        $store= new Personne();
        $store->nom = $request->nom;
        $store->age = $request->age;
        $store->email = $request->email;
        $store->telephone = $request->telephone;
        $store->save();
        return redirect()-> back();
    }
    public function home (){
        $personnes= Personne::all();
        return view('home', compact('personnes'));
    }
    public function delete($id){
        $personne= Personne::find($id);
       $personne->delete();
        return redirect('/');
    }
    public function create (){
        return view ('pages.create');
    }
    public function show ($id){
        $personne= Personne::find($id);
        return view('pages.show', compact('personne'));
    }
    public function edit ($id){
        $personne= Personne::find($id);
        return view('pages.edit', compact('personne'));
    }
    public function update (Request $request, $id){
        $update= Personne::find($id);
        $update->nom = $request->nom;
        $update->age = $request->age;
        $update->email = $request->email;
        $update->telephone = $request->telephone;
        $update->save();
        return redirect("show/".$update['id']);
    }
    public function nuke () {
        DB::table('personnes')->truncate();
        return redirect('/');
    }
}
