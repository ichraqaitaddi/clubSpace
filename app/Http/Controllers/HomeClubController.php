<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;

class HomeClubController extends Controller
{
    //
    public function index(){
        $clubs=Club::all();
        return view('homeClub.index',compact('clubs'));
    }


}
