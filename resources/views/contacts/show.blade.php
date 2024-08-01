@extends('layouts.app')

@section('content')
    <h1>Contact Details</h1>
    <div class="container mt-4"></div>
    <div>
        <strong>Name:</strong> {{ $contact->name }}
    </div>
    <div>
        <strong>Email:</strong> {{ $contact->email }}
    </div>
    <div>
        <strong>Phone:</strong> {{ $contact->phone }}
    </div>
    <div>
        <strong>Address:</strong> {{ $contact->address }}
    </div>
    <div>
        <strong>Created At:</strong> {{ $contact->created_at }}
    </div>
    <a class="btn btn-primary" href="{{ route('contacts.index') }}">Back to Contact</a>
@endsection
