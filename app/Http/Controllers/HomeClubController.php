<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;

class HomeClubController extends Controller
{
    public function index(){
        $clubs = Club::all();
        return view('homeClub.index', compact('clubs'));
    }

    public function show($id){
        // Trouver le club par ID
        $club = Club::findOrFail($id);

        // Retourner la vue avec les détails du club
        return view('homeClub.show', compact('club'));
    }
}
