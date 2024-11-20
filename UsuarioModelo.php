<?php

// app/Models/UsuarioModelo.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class UsuarioModelo extends Authenticatable
{
    use HasFactory;

    // Especifica la tabla personalizada
    protected $table = 'user';

    // La columna personalizada para la clave primaria
    protected $primaryKey = 'iduser';

    // Indica que el modelo no utiliza timestamps automáticamente
    public $timestamps = false;

    // Define los campos que se pueden asignar masivamente
    protected $fillable = [
        'iduser',
        'user_name',
        'user_password',
        'user_idemp',
        'user_e'
    ];

    // Define el nombre del campo que se usará como "username" para autenticación
    public function getAuthIdentifierName()
    {
        return 'user_name';
    }

    // Define el nombre del campo de la contraseña
    public function getAuthPassword()
    {
        return $this->user_password;
    }
}

