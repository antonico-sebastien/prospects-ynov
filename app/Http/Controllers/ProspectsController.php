<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prospect;
use App\Models\Message;

class ProspectsController extends Controller
{
    public function form() {
        return view('prospects.form');
    }

    public function store(Request $request) {
        $prospect = Prospect::create($request->all());
        $prospect->messages()->create(['message' => $request->message]);
        return redirect()->route('thank-you');
    }

    public function thankYou() {
        return view('prospects.thank_you');
    }

    public function index() {
        $prospects = Prospect::all();
        return view('prospects.index', compact('prospects'));
    }
}
