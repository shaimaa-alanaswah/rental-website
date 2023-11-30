@extends('layouts.app')

@section('content')
    <h1>Properties</h1>

    @foreach ($properties as $property)
        <div>
            <h2>{{ $property->name }}</h2>
            <!-- Display other property details here -->
            <a href="{{ route('properties.show', $property) }}">View Details</a>
        </div>
        <hr>
    @endforeach
@endsection
