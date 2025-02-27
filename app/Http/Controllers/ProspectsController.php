<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prospect;
use App\Models\Message;
use App\Models\Order;

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

    public function destroy(Prospect $prospect) {
        $prospect->delete();
        return redirect()->route('prospects.index');
    }

    public function transform(Prospect $prospect) {
        Order::createFromProspect($prospect);
        return redirect()->route('orders.index');
    }
}
