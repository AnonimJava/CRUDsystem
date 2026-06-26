<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logistics Tracking System</title>

    @vite(['resources/scss/app.scss',
           'resources/js/app.js'
    ])
</head>
<body>

    @include('partials.navbar')

<div class="container mt-4">
<div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">

            {{ session('success') }}

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        </div>

    @endif

    </div>

    @yield('content')

</div>

@include('partials.footer')

</body>
</html>
