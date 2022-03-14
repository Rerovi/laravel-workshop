
@extends('layouts.layout')


@section('topmenu_items')

    <a href="{{route('categories.index')}}"><button>Index</button></a>
    <a href="{{route('categories.create')}}"><button>Create</button></a>
@endsection

@section('content')


    <form id="form" action="{{ route('categories.destroy', ['category' => $category->id])}}" method="POST">
        @method('DELETE')
        @csrf
        <label for="name">Name</label>
        <input name="name" id="name" type="text" value="{{ ($category->name) }}" class="@error('name') border-red-500 @enderror" disabled>
        <button id="submit" type="submit">Delete</button>

    </form>
@endsection
@if($errors->any())
    <div class="bg-red-200 text-red-900 rounded-lg shadow-md p-6 pr-10 mb-8">
        <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>
@endif

