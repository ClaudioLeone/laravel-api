@extends('layouts.admin')

@section('content')
    <h1 class="text-center py-3">Welcome, <em>{{ Auth::user()->name }}</em></h1>
    <h4 class="text-center text-warning">Your e-mail: {{ Auth::user()->email }}</h4>
    <h4 class="text-center text-warning">Your address: {{ Auth::user()->userDetail?->address }}</h4>
    <h4 class="text-center text-warning">Your phone number: {{ Auth::user()->userDetail?->phone }}</h4>
@endsection