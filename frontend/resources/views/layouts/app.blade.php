<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logistics Tracking System</title>

    @vite([
        'resources/scss/app.scss',
        'resources/js/app.js'
    ])
</head>

<body>

@include('partials.navbar')

<div class="container mt-4">

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">

            {{ session('success') }}

            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
            ></button>

        </div>
    @endif

    @yield('content')

</div>

@include('partials.footer')

</body>
</html>
