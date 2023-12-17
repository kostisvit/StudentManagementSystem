@extends('layouts.app')

@section('content')
@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<form method="POST" action="/students">
    @csrf
    <input type="text" name="firstName" placeholder="First Name">
    <input type="text" name="lastName" placeholder="Last Name">
    <input type="email" name="email" placeholder="Email">
    <input type="number" name="age" placeholder="Age">
    <!-- Add more fields as needed -->

    <button type="submit">Submit</button>
</form>

@endsection
