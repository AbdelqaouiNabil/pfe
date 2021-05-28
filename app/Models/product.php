<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'type',
    ];
    public function getPriceAttribute($value){
        $newForme = "MAD".$value;
        return $newForme;
    }
    protected function categories(){
        return $this->belongsTo(categories::class);
    }
}
