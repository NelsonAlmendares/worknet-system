<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companyModelo extends Model
{
    use HasFactory;

    protected $table = 'company';
    protected $primaryKey = 'idcompany';

    protected $fillable = [
        'compname',
        'compdesc',
        'compsr',
        'compnit',
        'compnrc',
        'compborndate',
        'comp_e',
    ];
}
