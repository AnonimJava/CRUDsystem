<?php

namespace App\Http\Controllers;

use App\Models\Shipment;

class DashboardController extends Controller
{
    public function index()
    {
        $stats =[
            'total' => Shipment::count(),

            'delivered' => Shipment::where('status', 'Delivered')->count(),


            'transit' => Shipment::where('status', 'In Transit')->count(),

            'warehouse' => Shipment::where('status', 'In Warehouse')->count(),
        ];

        return view(
            'dashboard',
            compact('stats')
        );
    }
}
