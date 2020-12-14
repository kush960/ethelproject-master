<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Upload extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use UsesUuid;

    protected $guarded = [];

    protected $appends = ['image_thumb'];

    public function getImageThumbAttribute(){
       // return $this->getMedia('file_uploads')->first()->getFullUrl('thumb');
        return (empty($this->getMedia('file_uploads')->first()) ? "" : $this->getMedia('file_uploads')->first()->getFullUrl('thumb'));
    }

    public function registerMediaConversions(Media $media = null):void{

            $this->addMediaConversion('thumb')
                ->width(50)
                ->height(50);

    }

}
