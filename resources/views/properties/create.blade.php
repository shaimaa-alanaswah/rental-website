@extends('layouts.app')

@section('content')
    <h1>Create Property</h1>

    <form action="{{ route('properties.store') }}" method="post">
        @csrf
        <!-- Include form fields for property creation -->
        <button type="submit">Create Property</button>
    </form>
@endsection
