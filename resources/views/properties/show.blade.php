@extends('layouts.app')

@section('content')
    <h1>{{ $property->name }}</h1>
    <!-- Display other property details here -->
    <a href="{{ route('properties.edit', $property) }}">Edit Property</a>

    <!-- Add a delete form if needed -->
    <form action="{{ route('properties.destroy', $property) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Property</button>
    </form>
@endsection
