@extends('layouts.auth')

@section('content')
<div class="w-96">
    <div class="text-center mb-5">
        <img src="{{ asset('img/logo.svg') }}" alt="Videobox logo" class="m-auto mb-4">
        <h1 class="font-bold text-2xl">Sign in to Videobox</h1>
    </div>
    
    <form method="POST" action="{{ route('login') }}" class="border border-gray-100 p-6 shadow-inner">
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <span>{{ $error }}</span>
            @endforeach
        @endif
    
        <div class="mb-5">
            <label class="text-black font-bold">Email</label>
            <input type="email" name="email" class="block border-2 border-gray-300 w-full p-2 rounded">
        </div>

        <div class="mb-6">
            <label class="text-black font-bold flex">Password @if (Route::has('password.request'))<a class="ml-auto text-blue-400 font-medium" href="{{ route('password.request') }}">Forgot Your Password?</a>@endif</label>
            <input type="password" name="password" class="block border-2 border-gray-300 w-full p-2 rounded">
        </div>
    
        <button class="rounded-md w-full bg-primary-bg text-primary-text py-2">Sign in</button>
    </form>

    <a href="{{ route('register') }}">
        <div class="border border-main text-center w-full rounded mt-5 py-5">New to Videobox? <span class="text-main">Create a new account</span></div>
    </a>
</div>
@endsection
