<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreVideoRequest;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class VideoController extends Controller
{
    public function create()
    {
        return view('video.create');
    }

    public function store(StoreVideoRequest $request)
    {   
        $data = $request->validated();

        $video_path = Storage::disk('public')->put('videos', $request->file('video'));

        $thumbnail_path = "thumbnails/".uniqid().".png";

        FFMpeg::fromDisk('public')
            ->open($video_path)
            ->getFrameFromSeconds(1)
            ->export()
            ->toDisk('public')
            ->save($thumbnail_path);

        $request->user()->videos()->create([
            'title' => $data['title'],
            'description' => $data['description'] ?? '',
            'video_path' => $video_path,
            'thumbnail_path' => $thumbnail_path
        ]);

        return route('home.index');
    }

    public function show(Video $video)
    {
        return view('video.show', [
            'video' => $video
        ]);
    }
}
