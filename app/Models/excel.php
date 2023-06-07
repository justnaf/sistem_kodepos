<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class excel extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'excel';
    protected $primarykey = 'id';
    protected $fillable = [
        'kodepos',
    ];
}
