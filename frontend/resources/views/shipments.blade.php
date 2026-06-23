@extends('layouts.app')

@section('content')

<h1>Shipments</h1>

<a
    href="/shipments/create"
    class="btn btn-primary mb-3"
>
    Create Shipment
</a>

<table class="table">

    <thead>
        <tr>
            <th>Tracking Number</th>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($shipments as $shipment)
        <tr>
            <td>{{ $shipment->tracking_number }}</td>
            <td>{{ $shipment->sender }}</td>
            <td>{{ $shipment->receiver }}</td>
            <td>{{ $shipment->status }}</td>
        </tr>
        @endforeach
    </tbody>

</table>

@endsection
