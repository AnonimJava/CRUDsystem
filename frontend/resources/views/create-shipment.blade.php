@extends('layouts.app')

@section('content')

<h1>Create Shipment</h1>

<form method="POST" action="/shipments">

    @csrf

    <div class="mb-3">
        <label>Tracking Number</label>
        <input
            type="text"
            name="tracking_number"
            class="form-control"
        >
    </div>

    <div class="mb-3">
        <label>Sender</label>
        <input
            type="text"
            name="sender"
            class="form-control"
        >
    </div>

    <div class="mb-3">
        <label>Receiver</label>
        <input
            type="text"
            name="receiver"
            class="form-control"
        >
    </div>

    <div class="mb-3">
        <label>Origin</label>
        <input
            type="text"
            name="origin"
            class="form-control"
        >
    </div>

    <div class="mb-3">
        <label>Destination</label>
        <input
            type="text"
            name="destination"
            class="form-control"
        >
    </div>

    <div class="mb-3">
        <label>Status</label>
        <select
            name="status"
            class="form-control"
        >
            <option>Created</option>
            <option>In Warehouse</option>
            <option>In Transit</option>
            <option>Delivered</option>
        </select>
    </div>

    <button class="btn btn-primary">
        Create Shipment
    </button>

</form>

@endsection
