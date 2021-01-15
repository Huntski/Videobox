@extends('layouts.auth')

@section('content')
<div class="w-96">
    <div class="text-center mb-5">
        <img src="{{ asset('img/logo.svg') }}" alt="Videobox logo" class="m-auto mb-4">
        <h1 class="font-bold text-2xl">Create your account</h1>
    </div>
    
    <form method="POST" action="{{ route('register') }}" class="border border-gray-100 p-6 shadow-inner">
        @csrf
        <div class="mb-5">
            <label class="text-black font-bold">Name *</label>
            <input type="text" name="name" class="block border-2 border-gray-300 w-full p-2 rounded" autocomplete="off" value="{{ old('name') }}">
            @error('name')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>

        <div class="mb-5">
            <label class="text-black font-bold">Email *</label>
            <input type="email" name="email" class="block border-2 border-gray-300 w-full p-2 rounded" autocomplete="off" value="{{ old('email') }}">
            @error('email')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>

        <div class="mb-5">
            <label class="text-black font-bold">Password *</label>
            <input type="password" name="password" class="block border-2 border-gray-300 w-full p-2 rounded" autocomplete="off">
            @error('password')
            <span class="invalid-feedback">
                {{ $message }}
            </span>
            @enderror
        </div>
    
        <button class="rounded-md w-full bg-primary-bg text-primary-text py-2">Sign up</button>
    </form>

    <a href="{{ route('login') }}">
        <div class="border border-main w-full rounded text-center mt-5 py-5">Already have a account? <span class="text-main">Login to Videobox</span></div>
    </a>
</div>
@endsection
