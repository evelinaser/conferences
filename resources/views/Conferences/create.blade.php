@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Conference</h1>
        <form action="{{ route('conferences.store') }}" method="POST">
            @csrf
            <div>
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" required>
            </div>
            <div>
                <label for="description">Description:</label>
                <textarea name="description" id="description" required></textarea>
            </div>
            <div>
                <label for="date">Date:</label>
                <input type="date" name="date" id="date" required>
            </div>
            <div>
                <label for="address">Address:</label>
                <input type="text" name="address" id="address" required>
            </div>
            <button type="submit">Create</button>
        </form>
    </div>
@endsection
