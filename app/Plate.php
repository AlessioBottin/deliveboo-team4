<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Plate extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function orders(){
        return $this->belongsToMany('App\Order')->withPivot('quantity');
    }

    protected $fillable = [
        'name',
        'description',
        'ingredients',
        'price',
        'visibility',
        'image',
    ];
 
    // Static Functions 
    public static function generateSlug($title) {
        $slug = Str::slug($title);
        $original_slug = $slug;

        $slug_found = Plate::where('slug', '=', $slug)->first();
        $counter = 1;

        while ($slug_found) {
            $slug = $original_slug . '-' . $counter;
            $slug_found = Plate::where('slug', '=', $slug)->first();
            $counter++;
        }

        return $slug;
    }
}
