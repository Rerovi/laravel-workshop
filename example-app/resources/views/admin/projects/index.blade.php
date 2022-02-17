@extends('layouts.layout')

@section('topmenu_items')
    <a href="{{route('projects.index')}}"><button>Index</button></a>
    <a href="{{route('projects.create')}}"><button>Create</button></a>
@endsection
@section('content')
    <div class=" grid grid-cols-6 grid-rows-none gap-5">
    @foreach($projects as $project)
        <div class="border-black-900 border-2">
            <h1 class="text-center font-semibold">{{$project->name}}</h1>
            <a href=" {{ route('projects.show', ['project' => $project->id]) }}">Details</a><br>
            <a href=" {{route('projects.edit', ['project' => $project->id]) }}">Edit</a>
            <h3 class="py-7 px-7">Remove</h3>
        </div>
    @endforeach
@endsection
@section('status')
    @if(session('status'))
        <div class="bg-green-200 text-green-900 rounded-lg shadow-md p-6 pr-10 mb-8" style="">{{ session('status') }}</div>
    @endif
@endsection



