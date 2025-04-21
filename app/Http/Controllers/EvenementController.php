<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EvenementController extends Controller
{
    public function index()
    {
        $evenements = Evenement::with('club')->paginate(10);
        return view('evenements.index', compact('evenements'));
    }

    public function create()
    {
        $clubs = Club::all();
        return view('evenements.create', compact('clubs'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after:date_debut',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'club_id' => 'required|exists:clubs,id',
        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('evenements', 'public');
            $validated['image'] = $imagePath;
        }
    
        
        $validated['date_debut'] = \Carbon\Carbon::parse($validated['date_debut'])->toDateTimeString();
        $validated['date_fin'] = \Carbon\Carbon::parse($validated['date_fin'])->toDateTimeString();
    
        Evenement::create($validated);
        
    
        return redirect()->route('evenements.index')->with('success', 'Événement créé avec succès');
    }

    public function show(Evenement $evenement)
    {
        return view('evenements.show', compact('evenement'));
    }

    public function edit(Evenement $evenement)
    {
        $clubs = Club::all();
        return view('evenements.edit', compact('evenement', 'clubs'));
    }

    public function update(Request $request, Evenement $evenement)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after:date_debut',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'club_id' => 'required|exists:clubs,id',
        ]);
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($evenement->image && Storage::disk('public')->exists($evenement->image)) {
                Storage::disk('public')->delete($evenement->image);
            }
            
            $imagePath = $request->file('image')->store('evenements', 'public');
            $validated['image'] = $imagePath;
        } else {
            // Keep the existing image if no new image is uploaded
            unset($validated['image']);
        }
        $validated['date_debut'] = \Carbon\Carbon::parse($validated['date_debut'])->toDateTimeString();
        $validated['date_fin'] = \Carbon\Carbon::parse($validated['date_fin'])->toDateTimeString();

        $evenement->update($validated);

        return redirect()->route('evenements.index')->with('success', 'Événement mis à jour avec succès');
    }

    public function destroy(Evenement $evenement)
    {
        // Delete image if exists
        if ($evenement->image) {
            Storage::disk('public')->delete($evenement->image);
        }
        
        $evenement->delete();
        return redirect()->route('evenements.index')->with('success', 'Événement supprimé avec succès');
    }
}