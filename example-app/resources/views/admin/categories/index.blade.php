@extends('layouts.layout')

@section('topmenu_items')

        @guest
            <h3>Guest</h3>

            <a href="{{base_path('login')}}">Login</a>
            <a href="{{route('register')}}">Register</a>
        @else
            <h3>{{ Auth::user()->name }}</h3>
        @endguest
        <a href="{{route('login')}}">Logout</a>
    <a href="{{route('categories.index')}}">Index</a>
    <a href="{{route('categories.create')}}">Create</a>
@endsection

@section('content')
    <div class=" grid grid-cols-6 grid-rows-none gap-5">
@foreach($categories as $category)
    <div class="border-black-900 border-2">
        <h1 class="text-center font-semibold">{{$category->name}}</h1>
        <a href=" {{ route('categories.show', ['category' => $category->id]) }}">Details</a><br>
        <a href=" {{ route('categories.edit', ['category' => $category->id]) }}">edit</a>
        <a href=" {{ route('categories.delete', ['category' => $category->id]) }}">delete</a>
    </div>
@endforeach
@endsection
@section('status')
    @if(session('status'))
            <div class="bg-green-200 text-green-900 rounded-lg shadow-md p-6 pr-10 mb-8" style="">{{ session('status') }}</div></div>
    @endif
@endsection




