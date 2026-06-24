@extends('layouts.app')

@section('content')

<h1 class="mb-4">Dashboard</h1>

<div class="row">

<x-stat-card
    title="Total Shipments"
    value="42"
/>

<x-stat-card
    title="Delivered"
    value="25"
/>

<x-stat-card
    title="In Transit"
    value="12"
/>

<x-stat-card
    title="Warehouse"
    value="5"
/>

</div>

@endsection
