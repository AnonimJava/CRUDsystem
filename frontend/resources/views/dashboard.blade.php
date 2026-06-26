@extends('layouts.app')

@section('content')

<h1 class="mb-4">Dashboard</h1>

<div class="row">

    <x-stat-card
        title="Total Shipments"
        :value="$stats['total']"
    />

    <x-stat-card
        title="Delivered"
        :value="$stats['delivered']"
    />

    <x-stat-card
        title="In Transit"
        :value="$stats['transit']"
    />

    <x-stat-card
        title="Warehouse"
        :value="$stats['warehouse']"
    />

</div>

@endsection
