<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Property extends Model
{
    use HasFactory;
    protected $fillable=[
        
            'name',
            'type',
            'purpose',
            'price',
            'bedroom',
            'bathroom',
            'area',
            'city',
            'state',
            'address',
            'description',
            'cover_image'

    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
