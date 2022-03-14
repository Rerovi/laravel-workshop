@extends('layouts.layout')

@section('topmenu_items')
    <h3>Guest</h3>
    <a href="{{__('login')}}">Login</a>
    <a href="{{__('register')}}">Register</a>
    @endsection

@section('content')
    <div class="border-red-100">
    <h2> Error: {{ $exception->getmessage() }}
    </h2>
    </div>
@endsection
