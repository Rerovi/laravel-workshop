
@extends('layouts.layout')


@section('topmenu_items')
    <a href="{{route('projects.index')}}"><button>Index</button></a>
    <a href="{{route('projects.create')}}"><button>Create</button></a>
@endsection

@section('content')

    <form id="form" action="{{ route('projects.update', ['project' => $project->id])}}" method="POST">
        @method('PUT')
        @csrf
        <label for="name">Name</label>
        <input name="name" id="name" type="text" value="{{ old('name', $project->name) }}"><br>
        <label>Description</label>
        <input name="description" id="name" type="text" value="{{ old('name', $project->description) }}">
        <button id="submit" type="submit">Submit</button>

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

@if(session('status'))
    <div class="bg-green-200 text-green-900 rounded-lg shadow-md p-6 pr-10 mb-8" style="">{{ session('status') }}</div>
@endif
