<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'cat_id',
        'description',
        'prix',
        'created_at',
        'updated_at',
    ];
}

