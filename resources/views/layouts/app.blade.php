<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Curso Laravel 9 - @yield('title')</title>
</head>

<body class="antialiased text-slate-500 dark:text-slate-400 bg-white dark:bg-slate-900">
    <div class="max-w-8xl mx-auto px-4 sm:px-6 md:px-8">
        <div class="max-w-3xl mx-auto xl:max-w-none xl:ml-0">
            @yield('content')
        </div>
    </div>
</body>

</html>
