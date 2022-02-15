<<<<<<< Updated upstream
<?php
=======
@extends('layouts.layout')

@section('topmenu_items')
    <a href="{{route('categories.index')}}"><button>Index</button></a>
    <a href="{{route('categories.create')}}"><button>Create</button></a>
@endsection

@section('content')
<div class="max-w-sm bg-white shadow-lg rounded-lg overflow-hidden my-4">
    <img class="w-full h-56 object-cover object-center" src="https://picsum.photos/200" alt="image">
    <div class="flex items-center px-6 py-3 bg-gray-900">
        <h1 class="mx-3 text-white font-semibold text-lg">Category</h1>
    </div>
    <div class="py-4 px-6">
        <h1 class="text-2xl font-semibold text-gray-800">{{ $category->name }}</h1>
        <p class="py-2 text-lg text-gray-700"> </p>
    </div>
</div>
@endsection
>>>>>>> Stashed changes
