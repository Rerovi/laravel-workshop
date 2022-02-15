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
@endforeach @endsection

@section('status')
    @if(session('status'))
        <div class="bg-green-200 text-green-900 rounded-lg shadow-md p-6 pr-10 mb-8" style="">{{ session('status') }}</div>
    @endif
@endsection




