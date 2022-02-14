@extends('layouts.layout')



    @foreach($projects as $project)
        <tr>
            <td class="px-6 px-4 whitespace-nowrap text-sm font-medium text-gray-900">
                {{$project->id}}
            </td>
            <td class="px-6 px-4 whitespace-nowrap text-sm font-medium text-gray-900">
                {{$project->name}}
            </td>
        </tr>
    @endforeach


