@extends('layouts.app')

@section('content')
<div class="px-24 pt-20">
    <h1 class="text-3xl font-bold">Most popular</h1>
    <div>
        @foreach ($popular as $video)
        <a href="">
            <div>
                <img src="{{ $video->thumbnail }}">
                
                </img>
                <h2>{{ $video->title }}</h2>
                <p>{{ $video->description }}</p>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection
