<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://unpkg.com/tailwindcss@1.4.6/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="" style="background: #edf2f7;">
<<<<<<< Updated upstream
<<<<<<< Updated upstream
@yield('status')
<nav
    class="flex flex-row justify-between border-b
				dark:border-gray-600 dark:text-gray-400 transition duration-500
				ease-in-out">
    <div class="flex">
        @yield('topmenu_items')
    </div>
</nav>
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
<div>
@yield('status')
</div><div>
@yield('topmenu_items')
</div>
@yield('content')
</div>
</body>
</html>

