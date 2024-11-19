<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class positionModelo extends Model
{
    use HasFactory;

    protected $table = 'position';
    protected $primaryKey = 'idposition';

    protected $fillable = [
        'positname',
        'positdesc',
        'positstate',
        'positrequest',
        'posit_idunit',
        'posit_idtypeposit',
        'posit_nameb',
        'posit_e',
        'posit_idunitb',
    ];
}
