<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class positionModelo extends Model
{
    use HasFactory;

    protected $table = 'position';

    protected $primaryKey = 'idposition';

    public $timestamps = false; 

    protected $fillable = [
        'positname',
        'positnameb',
        'positdesc',
        'positstate',
        'positrequest',
        'posit_idunit',
        'posit_idunitb',
        'posit_idtypeposit',
        'posit_e',
    ];
}
