<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    public function index(Request $request)
    {
        $query = Shipment::query();

        if($request->filled('search')){
            $query->where(
                'tracking_number',
                'like',
                '%' . $request->search . '%'
            );
        }

        if($request->filled('status')) {

            $query->where('status',
            $request->status
            );
        }

        $shipments = $query->get();

        return view('shipments', compact('shipments'));

    }


    public function create()
    {
        return view('create-shipment');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tracking_number' => 'required|string|max:20',
            'sender' => 'required|string|max:100',
            'receiver' => 'required|string|max:100',
            'origin' => 'required|string|max:100',
            'destination' => 'required|string|max:100',
            'status' => 'required|string|max:50',
        ]);

        Shipment::create([
            'tracking_number' => $request->tracking_number,
            'sender' => $request->sender,
            'receiver' => $request->receiver,
            'origin' => $request->origin,
            'destination' => $request->destination,
            'status' => $request->status,
        ]);

        return redirect('/shipments')
            ->with('success', 'Shipment created successfully.');
    }

    public function destroy($id)
    {
        $shipment = Shipment::findOrFail($id);

        $shipment->delete();

        return redirect('/shipments')
            ->with('success', 'Shipment deleted successfully.');
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

        $request->validate([
            'tracking_number' => 'required|string|max:20',
            'sender' => 'required|string|max:100',
            'receiver' => 'required|string|max:100',
            'origin' => 'required|string|max:100',
            'destination' => 'required|string|max:100',
            'status' => 'required|string|max:50',
        ]);

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

        return redirect('/shipments')
            ->with('success', 'Shipment updated successfully.');
    }
}




