@extends('layouts.layout')

@section('topmenu_items')
    <a href="{{route('categories.index')}}"><button>Index</button></a>
    <a href="{{route('categories.create')}}"><button>Create</button></a>
@endsection

@section('content')
    <div class="max-w-6/12 bg-white shadow-lg rounded-lg overflow-hidden my-4">
        <img class="w-full h-56 object-cover object-center" src="https://picsum.photos/100" alt="image">
        <div class="flex items-center px-6 py-3 bg-gray-900">
            <h1 class="text-2xl font-semibold text-white">{{ $category->name }}</h1>
        </div>
        <div class="py-4 px-6">
            <p class="py-2 text-lg text-gray-700"></p>
        </div>
    </div>
@endsection
