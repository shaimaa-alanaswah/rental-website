@extends('layouts.app')

@section('content')
    <h1>Edit Property</h1>

    <form action="{{ route('properties.update', $property) }}" method="post">
        @csrf
        @method('PUT')
        <!-- Include form fields for property editing -->
        <button type="submit">Update Property</button>
    </form>
@endsection
