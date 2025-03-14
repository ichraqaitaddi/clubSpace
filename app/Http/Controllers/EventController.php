<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();  // Récupérer tous les événements
        return view('events.index', compact('events'));  // Passer les événements à la vue
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');  // Retourne la vue du formulaire de création
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'title' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'location' => 'required'
        ]);

        // Création de l'événement avec les données validées
        Event::create($validated);

        // Redirection vers la page des événements avec un message de succès
        return redirect()->route('events.index')->with('success', 'Événement créé avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('events.show', compact('event')); // Affiche un événement spécifique
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));  // Retourne le formulaire d'édition pour l'événement spécifié
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        // Validation des données
        $validated = $request->validate([
            'title' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'location' => 'required'
        ]);

        // Mise à jour de l'événement avec les données validées
        $event->update($validated);

        // Retourne une réponse JSON ou redirige selon votre besoin
        return redirect()->route('events.index')->with('success', 'Événement mis à jour avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        // Supprime l'événement
        $event->delete();

        // Retourne une redirection après suppression
        return redirect()->route('events.index')->with('success', 'Événement supprimé avec succès!');
    }
}
