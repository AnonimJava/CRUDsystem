@extends('layouts.app')

@section('content')

<h1>Shipments</h1>

<a
    href="/shipments/create"
    class="btn btn-primary mb-3"
>
    Create Shipment
</a>

<form
    method="GET"
    action="/shipments"
    class="row g-2 mb-3"
>

    <div class="col-md-6">

        <input
            type="text"
            name="search"
            class="form-control"
            placeholder="Search tracking number..."
            value="{{ request('search') }}"
        >

    </div>

    <div class="col-auto">

        <button
            class="btn btn-primary"
        >
            Search
        </button>

    </div>

</form>

<form
    method="GET"
    action="/shipments"
    class="row g-3 mb-4 align-items-end"
>

    <div class="col-md-5">
        <label class="form-label">
            Search Tracking Number
        </label>

        <input
            type="text"
            name="search"
            class="form-control"
            placeholder="KN000001..."
            value="{{ request('search') }}"
        >
    </div>

    <div class="col-md-4">
        <label class="form-label">
            Status
        </label>

        <select
            name="status"
            class="form-select"
        >
            <option value="">All Statuses</option>

            <option
                value="Created"
                {{ request('status') == 'Created' ? 'selected' : '' }}
            >
                Created
            </option>

            <option
                value="In Warehouse"
                {{ request('status') == 'In Warehouse' ? 'selected' : '' }}
            >
                In Warehouse
            </option>

            <option
                value="In Transit"
                {{ request('status') == 'In Transit' ? 'selected' : '' }}
            >
                In Transit
            </option>

            <option
                value="Delivered"
                {{ request('status') == 'Delivered' ? 'selected' : '' }}
            >
                Delivered
            </option>

        </select>
    </div>

    <div class="col-md-3 d-grid">

        <button
            class="btn btn-primary"
        >
            Search
        </button>

    </div>

</form>

<table class="table">

    <thead>
        <tr>
            <th>

                <a
                    href="{{ route('shipments.index', [
                        'sort' => 'tracking_number',
                        'direction' => request('direction') == 'asc' ? 'desc' : 'asc',
                        'search' => request('search'),
                        'status' => request('status')
                    ]) }}"
                    class="text-decoration-none text-dark"
                >

                    Tracking Number

                </a>

            </th>
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
            <td>

            @if($shipment->status == 'Created')

                <span class="badge bg-secondary">
                    Created
                </span>

            @elseif($shipment->status == 'In Warehouse')

                <span class="badge bg-primary">
                    In Warehouse
                </span>

            @elseif($shipment->status == 'In Transit')

                <span class="badge bg-warning text-dark">
                    In Transit
                </span>

            @elseif($shipment->status == 'Delivered')

                <span class="badge bg-success">
                    Delivered
                </span>

            @endif

            </td>

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

<div class="mt-4">
    {{ $shipments->links() }}
</div>

@endsection
