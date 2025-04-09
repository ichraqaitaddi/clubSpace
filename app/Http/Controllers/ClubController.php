<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClubRequest;
use Illuminate\Http\Request;
use App\Models\Club;

use Illuminate\Support\Facades\Storage;




class ClubController extends Controller
{
    public function club(){
        return view('clubs');
    }

    public function index(){
        $clubs=Club::query()->paginate(10);
        return view('clubs.index',compact('clubs'));
    }

    public function create(){
        $clubs=Club::all();
        return view('clubs.create',['clients'=>$clubs]);

    }
    public function store(ClubRequest $request){
        $formFields=$request->validated();
        if($request->hasFile('image')){
            $formFields['image']=$request->file('image')->store('club','public');
        }
        Club::create($formFields);
        return to_route('clubs.index');
       
    }
    public function destroy(Club $club){
        $club->delete();
        return to_route('clubs.index');
    }

    public function edit(Club $club)
{
    return view('clubs.edit', compact('club'));
}



public function update(Request $request, Club $club)
{
    // Mise à jour des champs du club
    $club->nom = $request->input('nom');
    $club->description = $request->input('description');

    // Gestion de l'image
    if ($request->hasFile('image')) {
        // Supprimer l'ancienne image si elle existe
        if ($club->image && file_exists(public_path('storage/' . $club->image))) {
            unlink(public_path('storage/' . $club->image)); // Supprimer l'ancienne image
        }
        
        // Stocker la nouvelle image
        $club->image = $request->file('image')->store('club', 'public');
    }

    // Sauvegarde des modifications
    $club->save();

    // Rediriger vers la liste des clubs avec un message de succès
    return redirect()->route('clubs.index')->with('success', 'Le club a été mis à jour.');
}

}
