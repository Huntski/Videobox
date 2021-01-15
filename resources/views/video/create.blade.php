@extends('layouts.app')

@section('content')
<form method="post" action="{{ route('video.create') }}" class="w-1/4 m-auto mt-20" enctype="multipart/form-data">
    @csrf
    <div class="mb-5">
        <label class="text-black font-bold">Upload a video</label>
        <input type="file" name="video">
    </div>

    <div class="mb-5">
        <label class="text-black font-bold">Title</label>
        <input type="text" name="title" class="block border-2 border-gray-300 w-full p-2 rounded">
    </div>
    
    <div class="mb-5">
        <label class="text-black font-bold">Description</label>
        <textarea type="text" name="description" class="block border-2 border-gray-300 w-full p-2 rounded"></textarea>
    </div>

    <button class="rounded-md w-full bg-primary-bg text-primary-text py-2">Complete</button>
</form>
@endsection
