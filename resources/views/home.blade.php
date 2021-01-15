@extends('layouts.app')

@section('content')
<div class="px-24 pt-20">
    <h1 class="text-3xl font-bold">Most popular</h1>
    <div>
        @foreach ($popular as $video)
            <div>
                <video src="{{ $video->video_path }}" width="320" height="240" controls>
                
                </video>
                <h2>{{ $video->title }}</h2>
                <p>{{ $video->description }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
