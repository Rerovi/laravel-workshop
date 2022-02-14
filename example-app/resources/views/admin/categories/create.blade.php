
@extends('layouts.layout')


@section('topmenu_items')

    <a href="{{route('categories.index')}}"><button>Index</button></a>
    <a href="{{route('categories.create')}}"><button>Create</button></a>
@endsection

@section('content')


<form id="form" action="{{ route('categories.store')}}" method="POST">
    @csrf
    <label for="name">Name</label>
    <input name="name" id="name" type="text" required>
    <button id="submit" type="submit">Submit</button>

</form>
    @endsection
