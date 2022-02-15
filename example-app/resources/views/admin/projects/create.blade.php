
@extends('layouts.layout')


@section('topmenu_items')

    <a href="{{route('projects.index')}}"><button>Index</button></a>
    <a href="{{route('projects.create')}}"><button>Create</button></a>
@endsection

@section('content')


<form id="form" action="{{ route('projects.store')}}" method="POST">
    @csrf
    <label for="name">Name</label>
    <input name="name" id="name" type="text" required><br>
    <label>Description</label>
    <textarea name="description" id="name" type="text" required></textarea>
    <button id="submit" type="submit">Submit</button>

</form>
    @endsection
