<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreVideoRequest;
use Pawlox\VideoThumbnail\VideoThumbnail;

class VideoController extends Controller
{
    public function create()
    {
        return view('video.create');
    }

    public function store(StoreVideoRequest $request)
    {
        $data = $request->validated();

        $file_path = Storage::disk('public')->put('videos', $request->file('video'));

        $thumbnail_name = uniqid() . '.jpg';

        $videoThumbnail = new VideoThumbnail;

        dd($videoThumbnail->createThumbnail(public_path($file_path), public_path('thumbnails'), $thumbnail_name, 3));

        return $request->user()->videos()->create([
            'title' => $data['title'],
            'description' => $data['description'] ?? '',
            'video_path' => $file_path,
            'thumbnail_path' => $thumbnail_name
        ]);
    }

    public function show(Video $video)
    {
        return view('video.show', [
            'video' => $video
        ]);
    }
}
