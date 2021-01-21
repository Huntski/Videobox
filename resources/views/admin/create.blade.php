@extends('layouts.cms')

@section('content')
<form enctype="multipart/form-data" method="post" action="{{ route('users.store') }}" class="mt-10 relative">
    @csrf
    <a href="{{ route('users.index') }}">
        <img src="{{ asset('img/return-icon.svg') }}" alt="" class="absolute w-14 h-14" style="left: -80px; top: -10px">
    </a>

    <h1 class="text-2xl font-bold">Create a new user</h1>

    <div class="relative w-full mt-5">
        <div class="mb-1">Name</div>
        <input type="text" name="name" class="hover:border-blue-400 focus:border-blue-400outline-none border border-gray-200 shadow-md w-full px-4 py-3 rounded" autocomplete="off" value="{{ old('name') }}">
        @error('name')
        <span class="invalid-feedback text-red-600 mt-3" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="relative w-full mt-5">
        <div class="mb-1">Email</div>
        <input type="email" name="email" class="hover:border-blue-400 focus:border-blue-400 outline-none border border-gray-200 shadow-md w-full px-4 py-3 rounded" autocomplete="off" value="{{ old('email') }}">
        @error('email')
        <span class="invalid-feedback text-red-500 mt-3" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="relative w-full mt-5">
        <div class="mb-1">Password</div>
        <input type="password" name="password" class="hover:border-blue-400 focus:border-blue-400outline-none border border-gray-200 shadow-md w-full px-4 py-3 rounded" autocomplete="off"">
        @error('password')
        <span class="invalid-feedback text-red-500 mt-3" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="relative w-full mt-5">
        <div class="mb-1">Avatar</div>
        <input type="file" name="avatar" class="outline-none border border-gray-200 shadow-md w-full px-4 py-3 rounded" autocomplete="off"">
        @error('avatar')
        <span class="invalid-feedback text-red-500 mt-3" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <button class="bg-blue-500 text-white rounded h-14 px-10 shadow-md hover:bg-blue-700 mt-5">Create user</button>
</form>
@endsection