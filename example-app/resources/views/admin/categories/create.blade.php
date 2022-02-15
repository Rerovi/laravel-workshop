
@extends('layouts.layout')


@section('topmenu_items')

    <a href="{{route('categories.index')}}"><button>Index</button></a>
    <a href="{{route('categories.create')}}"><button>Create</button></a>
@endsection

@section('content')


<form id="form" action="{{ route('categories.store')}}" method="POST">
    @csrf
    <label for="name">Name</label>
    <input name="name" id="name" type="text" value="{{ old('name') }}" class="@error('name') border-red @enderror">
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

