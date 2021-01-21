<!DOCTYPE html>
<html lang="en" class="min-h-screen">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Laravel CMS</title>
</head>
<body class="w-full min-h-screen h-full flex flex-col">
    <div id="app" class="mt-40 m-auto">
        <div class="flex items-center mb-4">
            <img src="{{ asset('img/logo.svg') }}" alt="Videobox logo" class="w-10 h-10">
            <span class="text-lg ml-3">Videobox</span>
        </div>
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>