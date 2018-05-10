@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>{{ config('app.name') }}</h1>
        <p class="lead">Launched at {{ date('H:i:s') }}</p>
    </div>
@endsection
