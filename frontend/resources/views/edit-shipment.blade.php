@extends('layouts.app')

@section('content')

<h1>Edit Shipment</h1>

<form
    action="/shipments/{{ $shipment->id }}"
    method="POST"
>

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Tracking Number</label>
        <input
            type="text"
            name="tracking_number"
            class="form-control"
            value="{{ $shipment->tracking_number }}"
        >
    </div>

    <div class="mb-3">
        <label>Sender</label>
        <input
            type="text"
            name="sender"
            class="form-control"
            value="{{ old('sender', $shipment->sender) }}"
        >
    </div>

    <div class="mb-3">
        <label>Receiver</label>
        <input
            type="text"
            name="receiver"
            class="form-control"
            value="{{ $shipment->receiver }}"
        >
    </div>

    <div class="mb-3">
        <label>Origin</label>
        <input
            type="text"
            name="origin"
            class="form-control"
            value="{{ $shipment->origin }}"
        >
    </div>

    <div class="mb-3">
        <label>Destination</label>
        <input
            type="text"
            name="destination"
            class="form-control"
            value="{{ $shipment->destination }}"
        >
    </div>

    <div class="mb-3">
        <label>Status</label>
        <select
            name="status"
            class="form-control"
        >
            <option value="Created" {{ $shipment->status == 'Created' ? 'selected' : '' }}>
                Created
            </option>
            <option>In Warehouse</option>
            <option>In Transit</option>
            <option>Delivered</option>
        </select>
    </div>

    <button
        type="submit"
        class="btn btn-primary"
    >
        Update Shipment
    </button>

</form>

@endsection
