<!DOCTYPE html>
<html>
<head>
    <title>Contact Management Application</title>
    <link rel="stylesheet"
          href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css') }}">

</head>
<body>
<div class="container mx-auto">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mr-auto">
        <a class="navbar-brand" href="{{ route('contacts.index') }}">Contact Management</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacts.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacts.create') }}">Create Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</div>


<div class="container mt-4">


    @yield('content')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

</div>

<script src="{{ asset('https://code.jquery.com/jquery-3.5.1.slim.min.js') }}"></script>
<script src="{{ asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js') }}"></script>
</body>
</html>
