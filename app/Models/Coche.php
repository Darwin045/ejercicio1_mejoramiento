<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    use HasFactory;

    protected $fillable = [ 'marca', 'modelo', 'color', 'precio', 'cliente_id'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function revisiones()
    {
        return $this->hasMany(Revision::class);
    }
}
