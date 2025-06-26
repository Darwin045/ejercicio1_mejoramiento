<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Coche;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [ 'nombre', 'direccion', 'ciudad', 'tfno'];

    public function coches()
    {
        return $this->hasMany(Coche::class);
    }
}
