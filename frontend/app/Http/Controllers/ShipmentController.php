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

    public function destroy($id)
    {
        $shipment = Shipment::findOrFail($id);

        $shipment->delete();

        return redirect('/shipments');
    }

    public function edit($id)
    {
        $shipment = Shipment::findOrFail($id);

        return view(
            'edit-shipment',
            compact('shipment')
        );
    }

    public function update(
        Request $request,
        $id
    )
    {
        $shipment =
            Shipment::findOrFail($id);

        $shipment->update([
            'tracking_number'
                => $request->tracking_number,

            'sender'
                => $request->sender,

            'receiver'
                => $request->receiver,

            'origin'
                => $request->origin,

            'destination'
                => $request->destination,

            'status'
                => $request->status
        ]);

        return redirect('/shipments');
    }
}




