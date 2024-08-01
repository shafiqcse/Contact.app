@extends('layouts.app')

@section('content')
    <h1>Contacts</h1>
    <div class="container mt-4"></div>

    <form method="GET" action="{{ route('contacts.index') }}">
        <input type="text" name="search" placeholder="Search by Name/Email" value="{{ request('search') }}">
        <button type="submit">Search</button>
        <div class="container my-4"></div>
        <a class="btn btn-primary" href="{{ route('contacts.create') }}">Create New Contact</a>
    </form>


    <div class="container mt-4"></div>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>
                <a href="{{ route('contacts.index', ['sort_by' => 'name', 'sort_order' => request('sort_order') === 'asc' ? 'desc' : 'asc']) }}">Name</a>
            </th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>
                <a href="{{ route('contacts.index', ['sort_by' => 'created_at', 'sort_order' => request('sort_order') === 'asc' ? 'desc' : 'asc']) }}">Created
                    At</a></th>
            <th>Updated At</th>
            <th>Actions</th>
            <th>
                <form method="GET" action="{{ route('contacts.index') }}">
                    <select name="sort_by" onchange="this.form.submit()">
                        <option value="name" {{ request('sort_by') == 'name' ? 'selected' : '' }}>Sort by Name</option>
                        <option value="created_at" {{ request('sort_by') == 'created_at' ? 'selected' : '' }}>Sort by
                            Created At
                        </option>
                    </select>
                    {{--<select name="order" onchange="this.form.submit()">
                        <option value="asc" {{ request('order') == 'asc' ? 'selected' : '' }}>Ascending</option>
                        <option value="desc" {{ request('order') == 'desc' ? 'selected' : '' }}>Descending</option>
                    </select>--}}

                </form>

            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->address }}</td>
                <td>{{ $contact->created_at }}</td>
                <td>{{ $contact->updated_at }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('contacts.show', $contact) }}">View</a>
                    <a class="btn btn-primary" href="{{ route('contacts.edit', $contact) }}">Edit</a>
                    <form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $contacts->links() }}
@endsection
