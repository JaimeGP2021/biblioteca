<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejemplar extends Model
{
    /** @use HasFactory<\Database\Factories\EjemplarFactory> */
    use HasFactory;

    protected $table = 'ejemplares';

    public function libros(){
        $this->belongsTo(Libro::class);
    }

    public function clientes(){
        $this->belongsToMany(Cliente::class, 'prestamos')
                            ->withPivot('fecha_hora');
    }
}
