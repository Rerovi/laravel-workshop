@extends('layouts.layout')

@section('topmenu_items')
    <a href="{{route('categories.index')}}"><button>Index</button></a>
    <a href="{{route('categories.create')}}"><button>Create</button></a>
@endsection

@section('content')
<<<<<<< Updated upstream
<<<<<<< Updated upstream
@foreach($categories as $categorie)
    <tr>
        <td class="px-6 px-4 whitespace-nowrap text-sm font-medium text-gray-900">
            {{$categorie->name}}
        </td>
    </tr>
@endforeach @endsection
=======
=======
>>>>>>> Stashed changes
    <div class=" grid grid-cols-6 grid-rows-none gap-5">
@foreach($categories as $category)
    <div class="border-black-900 border-2">
        <h1 class="text-center font-semibold">{{$category->name}}</h1>
        <a href=" {{ route('categories.show', ['category' => $category->id]) }}">Details</a>
        <h3 class="py-7 px-7">Edit</h3>
        <h3 class="py-7 px-7">Remove</h3>
    </div>
@endforeach
@endsection
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes

@section('status')
    @if(session('status'))
        <div class="bg-green-200 text-green-900 rounded-lg shadow-md p-6 pr-10 mb-8" style="">{{ session('status') }}</div>
    @endif
@endsection




