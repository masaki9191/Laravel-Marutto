<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use App\Models\User;

class Exhibit extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title',
        'description',
        'category',
        'price',
        'quantity',
        'user_id',
    ];

    public function photo($type)
    {
        $media = $this->getMedia($type)->first();
        if($media == null)
            return null;
        return $media;
    }
    
    public function getPhotosAttribute()
    {
        $files = $this->getMedia('photos');
        $files->each(function ($item) {
            $item->url       = $item->getUrl();
        });

        return $files;
    }

    public function getThumbnailAttribute()
    {
        return $this->getFirstMediaUrl('photos');
    }

    public function owner()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
