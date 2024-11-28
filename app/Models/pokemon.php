<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pokemon extends Model
{
    //campos que terão a receber valores
    protected $fillable = [
        'name',
        'type',
        'power',
        'image',
        'coach_id'
    ];

    public function coach() {
        return $this->belongsTo(Coach::class);
    }
}
