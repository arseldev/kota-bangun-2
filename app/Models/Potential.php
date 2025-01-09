<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Potential extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location', 'image', 'category_id'];

    // Definisikan relasi ke model Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
