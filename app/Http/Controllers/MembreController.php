<?php
namespace App\Http\Controllers;

use App\Models\Membre;
use App\Models\Club;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function index()
    {
        $membres = Membre::with('clubs')->get();
        return view('members.index', compact('membres'));
    }

    public function create()
    {
        $clubs = Club::all();
        return view('members.create', compact('clubs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:membres,email',
            'clubs' => 'required|array'
        ]);

        $membre = Membre::create($request->only(['nom', 'prenom', 'email']));
        $membre->clubs()->attach($request->clubs);

        return redirect()->route('members.index')->with('success', 'Membre ajouté avec succès');
    }

    public function edit($id)
    {
        $membre = Membre::findOrFail($id);
        $clubs = Club::all();
        return view('members.edit', compact('membre', 'clubs'));
    }

    public function update(Request $request, $id)
    {
        $membre = Membre::findOrFail($id);

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:membres,email,' . $membre->id,
            'clubs' => 'required|array'
        ]);

        $membre->update($request->only(['nom', 'prenom', 'email']));
        $membre->clubs()->sync($request->clubs);

        return redirect()->route('members.index')->with('success', 'Membre mis à jour avec succès');
    }

    public function destroy($id)
    {
        $membre = Membre::findOrFail($id);
        $membre->clubs()->detach();
        $membre->delete();

        return redirect()->route('members.index')->with('success', 'Membre supprimé avec succès');
    }
}


