<?php

use Illuminate\Support\Facades\Route;
use App\Models\Shipment;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index']);

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

Route::delete('/shipments/{id}', [ShipmentController::class, 'destroy']);

Route::get('/shipments/{id}/edit',[ShipmentController::class, 'edit']);

Route::put('/shipments/{id}',[ShipmentController::class, 'update']);
