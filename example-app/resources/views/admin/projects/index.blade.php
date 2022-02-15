@extends('layouts.layout')

@section('topmenu_items')
    <a href="{{route('projects.index')}}"><button>Index</button></a>
    <a href="{{route('projects.create')}}"><button>Create</button></a>
@endsection

<<<<<<< Updated upstream
<<<<<<< Updated upstream
@section('content')
    @foreach($projects as $project)
        <tr>
            <td class="px-6 px-4 whitespace-nowrap text-sm font-medium text-gray-900">
                {{$project->id}}
            </td>
            <td class="px-6 px-4 whitespace-nowrap text-sm font-medium text-gray-900">
                {{$project->name}}
            </td>
        </tr>
    @endforeach @endsection
=======
{{--@section('content')--}}
{{--    @foreach($projects as $project)--}}
{{--        <tr>--}}
{{--            <td class="px-6 px-4 whitespace-nowrap text-sm font-medium text-gray-900">--}}
{{--                {{$project->id}}--}}
{{--            </td>--}}
{{--            <td class="px-6 px-4 whitespace-nowrap text-sm font-medium text-gray-900">--}}
{{--                {{$project->name}}--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--    @endforeach @endsection--}}

@section('content')
    <div class=" grid grid-cols-6 grid-rows-none gap-5">
    @foreach($projects as $project)
=======
{{--@section('content')--}}
{{--    @foreach($projects as $project)--}}
{{--        <tr>--}}
{{--            <td class="px-6 px-4 whitespace-nowrap text-sm font-medium text-gray-900">--}}
{{--                {{$project->id}}--}}
{{--            </td>--}}
{{--            <td class="px-6 px-4 whitespace-nowrap text-sm font-medium text-gray-900">--}}
{{--                {{$project->name}}--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--    @endforeach @endsection--}}

@section('content')
    <div class=" grid grid-cols-6 grid-rows-none gap-5">
    @foreach($projects as $project)
>>>>>>> Stashed changes
        <div class="border-black-900 border-2">
            <h1 class="text-center font-semibold">{{$project->name}}</h1>
            <a href=" {{ route('projects.show', ['project' => $project->id]) }}">Details</a>
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



