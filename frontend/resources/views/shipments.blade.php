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
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>

        @forelse ($shipments as $shipment)

        <tr>
            <td>{{ $shipment->tracking_number }}</td>
            <td>{{ $shipment->sender }}</td>
            <td>{{ $shipment->receiver }}</td>
            <td>{{ $shipment->status }}</td>

            <td>

                <a
                    href="/shipments/{{ $shipment->id }}/edit"
                    class="btn btn-primary btn-sm"
                >
                    Edit
                </a>

                <form
                    action="/shipments/{{ $shipment->id }}"
                    method="POST"
                    class="d-inline"
                >
                    @csrf
                    @method('DELETE')

                    <button
                        class="btn btn-danger btn-sm"
                    >
                        Delete
                    </button>

                </form>

            </td>

        </tr>

        @empty

        <tr>
            <td colspan="5" class="text-center">
                No shipments found
            </td>
        </tr>

        @endforelse

    </tbody>

</table>

@endsection
