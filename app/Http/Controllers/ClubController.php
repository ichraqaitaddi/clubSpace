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
   
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $nomImage = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $nomImage);
    
            Club::create([
                'nom' => $request->nom,
                'description' => $request->description,
                'image' => $nomImage, 
            ]);
        }
    
        return redirect()->route('clubs.index')->with('success', 'Club ajouté avec succès');
    }
    

    public function edit(Club $club)
{
    return view('clubs.edit', compact('club'));
}



public function update(Request $request, Club $club)
{
    $club->nom = $request->input('nom');
    $club->description = $request->input('description');

    if ($request->hasFile('image')) {
        if ($club->image && file_exists(public_path('images/' . $club->image))) {
            unlink(public_path('images/' . $club->image));
        }

        $imageName = time() . '_' . uniqid() . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        $club->image = $imageName;
    }

    $club->save();

    return redirect()->route('clubs.index')->with('success', 'Le club a été mis à jour avec succès.');
}

public function destroy(Club $club)
{
    $club->delete();
    return redirect()->route('clubs.index')->with('success', 'Le club a été supprimé avec succès.');
}





}
