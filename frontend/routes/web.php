<?php

use Illuminate\Support\Facades\Route;
use App\Models\Shipment;
use App\Http\Controllers\ShipmentController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/seed', function () {

    Shipment::create([
        'tracking_number' => 'KN000001',
        'sender' => 'John',
        'receiver' => 'Alice',
        'origin' => 'Tallinn',
        'destination' => 'Riga',
        'status' => 'In Transit'
    ]);

    return 'Shipment created!';
});

Route::get('/shipments', [ShipmentController::class, 'index']);

Route::get('/shipments/create', [ShipmentController::class, 'create']);

Route::post('/shipments', [ShipmentController::class, 'store']);
