@extends('layouts.app')

@section('content')
    <h1>Create Contact</h1>
    <form method="POST" action="{{ route('contacts.store') }}">
        @csrf
        <div>
            <label class="p-2">Name:</label>
            <input class="mx-3" type="text" name="name" required>
        </div>
        <div>
            <label class="p-2">Email:</label>
            <input class="mx-3" type="email" name="email" required>
        </div>
        <div>
            <label class="p-2">Phone:</label>
            <input class="mx-2" type="text" name="phone">
        </div>
        <div>
            <label class="p-2">Address:</label>
            <input type="text" name="address">
        </div>
        <button class="btn btn-primary" type="submit">Save</button>
    </form>
@endsection
