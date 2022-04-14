<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Setting extends Model
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'logo',
        'fevicon',
        'banner',
    ];

}
