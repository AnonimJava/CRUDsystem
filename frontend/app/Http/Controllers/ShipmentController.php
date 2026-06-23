<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    public function index()
    {
        $shipments = Shipment::all();

        return view('shipments', compact('shipments'));
    }


    public function create()
    {
        return view('create-shipment');
    }

    public function store(Request $request)
    {
        Shipment::create([
            'tracking_number' => $request->tracking_number,
            'sender' => $request->sender,
            'receiver' => $request->receiver,
            'origin' => $request->origin,
            'destination' => $request->destination,
            'status' => $request->status
        ]);
        return redirect('/shipments');
    }
}




