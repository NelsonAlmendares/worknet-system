<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class usuarioModelo extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $primaryKey = 'iduser';

    protected $fillable = [
        'user_name',
        'user_password',
        'user_idemp',
        'user_e',
    ];

    // Asegura que la contraseña se encripte automáticamente al asignarla
    public function setUserPasswordAttribute($password)
    {
        $this->attributes['user_password'] = Hash::make($password);
    }
}
