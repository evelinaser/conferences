@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Conference</h1>
        <form action="{{ route('conferences.update', $conference) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $conference->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control" required>{{ $conference->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" name="date" id="date" class="form-control" value="{{ $conference->date->toDateString() }}" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" name="address" id="address" class="form-control" value="{{ $conference->address }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
