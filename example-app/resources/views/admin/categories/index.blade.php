
    @extends('layouts.layout')

@section('content')

    <div class="container mx-1">
        <div class="ml-2 flex flex-col">
            <h2 class="my-4 text-4xl front-semibold text-gray-600 dark:text-gray-400">
                category admin
            </h2>
        </div>

        @endsection
    </div>

    <tbody class="bg-white divide-y divide-gray-200">
    @foreach($categories as $categorie)
        <tr>
            <td class="px-6 px-4 whitespace-nowrap text-sm font-medium text-gray-900">
                {{$categorie->name}}
            </td>
        </tr>
        @endforeach
    </tbody>
