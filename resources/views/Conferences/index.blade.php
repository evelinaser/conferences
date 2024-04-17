@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Conferences</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('conferences.create') }}" class="btn btn-primary">Create New Conference</a>
        <ul class="list-group mt-3">
            @foreach ($conferences as $conference)
                <li class="list-group-item">
                    {{ $conference->title }}
                    <a href="{{ route('conferences.show', $conference) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('conferences.edit', $conference) }}" class="btn btn-secondary btn-sm">Edit</a>
                    <form action="{{ route('conferences.destroy', $conference) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
