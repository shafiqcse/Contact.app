@extends('layouts.app')

@section('content')
    <h1>Edit Contact</h1>
    <form method="POST" action="{{ route('contacts.update', $contact) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ $contact->name }}" required>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ $contact->email }}" required>
        </div>
        <div>
            <label>Phone:</label>
            <input type="text" name="phone" value="{{ $contact->phone }}">
        </div>
        <div>
            <label>Address:</label>
            <input type="text" name="address" value="{{ $contact->address }}">
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
