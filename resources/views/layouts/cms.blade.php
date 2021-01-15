<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Laravel CMS</title>
</head>
<body class="w-full min-h-screen">
    <div class="w-full min-h-screen pt-20">
        <div class="w-3/6 shadow-lg m-auto w-full" style="height: 900px; max-width: 1000px">
            <nav class="bg-gray-200 w-20 h-full flex flex-col items-center justify-between z-0">
                <div class="pt-5">
                    <img src="{{ asset('img/logo.svg') }}" alt="">
                </div>

                <a href="">
                    <div class="w-20 h-20 flex items-center justify-center border rounded border-gray-300 bg-white">Users</div>
                </a>

                <div class="w-20 pb-5 h-20"></div>
            </nav>
            <div class="shadow-2xl z-10">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>