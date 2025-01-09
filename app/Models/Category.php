<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    // Definisikan relasi ke model Potential
    public function potentials()
    {
        return $this->hasMany(Potential::class);
    }
}
