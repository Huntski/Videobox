@extends('layouts.cms')

@section('content')
<header class="flex">
    <form
        action="{{ route('users.index') }}"
        class="flex items-center border border-gray-100 hover:border-blue-400 focus:border-blue-400 shadow-md px-5 flex-1 mr-5"
    >
        <input type="text" class="outline-none h-13 w-full" name="s" placeholder="Search.." autocomplete="off" value="{{ $query ?? '' }}">
        <button class="flex items-center">
            <img src="{{ asset('img/search-icon.svg') }}" alt="search icon" class="m-auto w-5">
        </button>
    </form>
    <a href="{{ route('users.create') }}" class="ml-auto">
        <button class="bg-blue-500 text-white rounded h-14 px-10 shadow-md hover:bg-blue-700">New user</button>
    </a>
</header>

<h1 class="text-2xl font-bold mt-11">Users</h1>

<div class="text-gray-400 mt-2 px-4 w-full flex items-center">
    <div class="ml-5 w-10"></div>
    <div class="w-64">Name</div>
    <div class="ml-5 w-64">Email</div>
    <div class="ml-20">Role</div>
</div>

<div class="user-list overflow-auto">
    @foreach ($collection as $user)
        <a href="{{ route('users.show', ['user' => $user->id]) }}">
            <div class="rounded px-4 py-3 mb-4 border border-gray-200 hover:border-blue-400 hover:shadow-none focus:shadow-none focus:border-blue-400 flex items-center">
                <div class="bg-red-500 rounded-full w-10 h-10 overflow-hidden">
                    <img src="{{ $user->avatar_path }}" alt="Your user avatar" class="contain w-full h-full" id="account-avatar">
                </div>
                <span class="@if ($query == $user->name) text-blue-600 @endif ml-5 w-64 overflow-hidden">{{ $user->name }}</span>
                <span class="@if ($query == $user->email) text-blue-600 @endif ml-5 w-64 overflow-hidden">{{ $user->email }}</span>
                <span class="@if ($query == $user->role) text-blue-600 @endif ml-20 capitalize overflow-hidden">{{ $user->role }}</span>
            </div>
        </a>
    @endforeach
</div>
@endsection