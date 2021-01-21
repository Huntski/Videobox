<!DOCTYPE html>
<html lang="en">
<head>
    <title>VideoBox</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    <script defer src="{{ asset('js/app.js') }}"></script>
</head>
<body class="min-h-screen">
    <div class="flex flex-wrap h-full">
        <aside class="bg-nav w-1/5 sticky h-screen text-white p-5">
            <a href="{{ route('home.index') }}">
                <div class="flex items-center">
                    <img src="{{ asset('img/logo.svg') }}" alt="Videobox logo" class="w-10">
                    <h1 class="text-lg ml-5 font-bold">Videobox</h1>
                </div>
            </a>
        </aside>

        <div class="flex-1">
            <nav class="flex w-full items-center p-5 h-12 mt-5">
                <form action="{{ route('search.show') }}" class="flex w-1/3 mr-auto">
                    @csrf
                    <input type="text" class="outline-none focus:border-main border border-gray-400 bg-gray-200 shadow-inner w-full px-5 h-10" name="query" placeholder="Search..">
                    <button class="flex items-center bg-gray-600 w-20 h-10">
                        <img src="{{ asset('img/search-icon.svg') }}" alt="search icon" class="m-auto w-5 mb-3">
                    </button>
                </form>
                @auth
                    <a href="{{ route('video.create') }}" class="h-10">
                        <button class="flex items-center justify-center bg-gray-200 hover:bg-gray-300 focus:bg-gray-300 w-10 h-10 rounded mr-5">
                            <span>+</span>
                        </button>
                    </a>

                    <div class="bg-red-500 rounded-full w-10 h-10 overflow-hidden border-2 hover:border-blue-400">
                        <img src="{{ auth()->user()->avatar_path }}" alt="Your user avatar" class="contain w-full h-full" id="account-avatar">
                    </div>

                    <div class="absolute w-80 bg-white border border-gray-400 top-20 right-e5" id="account-dropdown">
                        <div class="flex flex-wrap p-5">
                            <div class="bg-red-500 rounded-full w-12 h-12 overflow-hidden">
                                <img src="{{ auth()->user()->avatar_path }}" alt="Your user avatar" class="contain w-full h-full">
                            </div>

                            <div class="ml-3 flex flex-col">
                                <span>{{ auth()->user()->name }}</span>
                                <span class="text-gray-500 text-sm">{{ auth()->user()->email }}</span>
                            </div>
                        </div>

                        <a href="{{ route('settings.index') }}">
                            <button class="w-full border-t-2 py-2 text-left p-5 hover:bg-gray-200 outline-none">Settings</button>
                        </a>

                        <form id="logout-form" method="post" action="{{ route('logout') }}" 
                            class="border-t-2 py-2 w-full text-left p-5 hover:bg-gray-200">
                            @csrf
                            <button class="w-full text-left outline-none">
                                Logout
                            </button>
                        </form>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="ml-auto mr-5">
                        <button class="bg-primary-bg text-primary-text px-10 h-10 rounded font-bold">Login</button>
                    </a>
                    <a href="{{ route('register') }}">
                        <button class="bg-secondary-bg text-secondary-text px-10 h-10 rounded font-bold">Sign up</button>
                    </a>
                @endauth
            </nav>
            <main>
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>