<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class Video extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getVideoAttribute()
    {
        return Storage::url($this->video_path);
    }
    
    public function getThumbnailAttribute()
    {
        return Storage::url($this->thumbnail_path);
    }
}
