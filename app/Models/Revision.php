<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Coche;

class Revision extends Model
{
    use HasFactory;
       //darwin deber tener en cuenta que las migraciones se declaran en ingles
       //si no por el contrario debes especificar la tablas que vas llamar como en la siguiente linea 
       protected $table = 'revisiones';

    protected $fillable = [ 'filtro', 'aceite', 'frenos', 'coche_id'];

    public function coche()
    {
        return $this->belongsTo(Coche::class);
    }
}
