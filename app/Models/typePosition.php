<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typePosition extends Model
{
    use HasFactory;

    protected $table = 'typeposition';
    protected $primaryKey = 'idtypeposit';

    protected $fillable = [
        'typepositname',
        'typepositdesc',
        'typeposit_e',
    ];
}
