<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;

    protected $fillable = ['modelo', 'año', 'precio', 'marca_id'];

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }
}
