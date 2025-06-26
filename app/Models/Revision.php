<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Coche;

class Revision extends Model
{
    use HasFactory;

    protected $fillable = [ 'filtro', 'aceite', 'frenos', 'coche_id'];

    public function coche()
    {
        return $this->belongsTo(Coche::class);
    }
}
