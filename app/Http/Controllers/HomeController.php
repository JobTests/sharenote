<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     */
    public function index()
    {
        $notes = Note::public()
            ->with('user')
            ->withCount('files')
            ->latest()
            ->paginate(20);

        return view('home', compact(['notes']));
    }
}
