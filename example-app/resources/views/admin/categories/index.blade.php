@extends('layouts.layout')

@section('topmenu_items')
    <a href="{{route('categories.index')}}"><button>Index</button></a>
    <a href="{{route('categories.create')}}"><button>Create</button></a>
@endsection

@section('content')
@foreach($categories as $categorie)
    <tr>
        <td class="px-6 px-4 whitespace-nowrap text-sm font-medium text-gray-900">
            {{$categorie->name}}
        </td>
    </tr>
@endforeach
    @endsection




