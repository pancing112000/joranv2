<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ranks extends Model
{
    protected $table = 'ranks';
    protected $primaryKey ='ranks_id';

    protected $fillable = [
        'sequence',
        'weight',
        'time_caught',
        'created_by',
        'updated_by',
    ];
}
