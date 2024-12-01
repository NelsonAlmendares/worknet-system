<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unitModelo extends Model
{
    use HasFactory;

    protected $table = 'unit';
    protected $primaryKey = 'idunit';

    protected $fillable = [
        'unitname',
        'unitintercode',
        'unitborndate',
        'unit_e',
    ];
}
