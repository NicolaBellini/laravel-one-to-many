<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'type_id',
        'topic',
        'difficulty',
        'image',
        'image_original_name',
        'slug'
    ];

    public function Type(){
        return $this->belongsTo(Type::class);
    }
}
