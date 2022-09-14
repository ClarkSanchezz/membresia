<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use softDeletes;
class Miembro extends Model
{
    use HasFactory;
    /*protected $table = 'nombre de tabla'; */
    protected $fillable = [
        'foto',
        'nombre',
        'apellido1',
     'apellido2',
     'fecha_nac',
        'estado',
        'ministerio'
    ];
    protected $dates = ['fecha_nac'];
   /*protected $timestamps = false;* <--- deshabilitar los registros
     
   */
  public const ESTADOS = ['Activo', 'Inactivo', 'Disciplina'];

  public function estado()
  {
    return self::ESTADOS[$this->estado];
  }
}
