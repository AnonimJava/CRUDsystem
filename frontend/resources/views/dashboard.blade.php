@extends('layouts.app')

@section('content')

<h1 class="mb-4">Dashboard</h1>

<div class="row">

    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5>Total Shipments</h5>
                <h2>42</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5>Delivered</h5>
                <h2>25</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5>In Transit</h5>
                <h2>12</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5>Warehouse</h5>
                <h2>5</h2>
            </div>
        </div>
    </div>

</div>

@endsection