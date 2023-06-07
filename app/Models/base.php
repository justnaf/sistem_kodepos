<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class base extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'kodepos';
    protected $primarykey = 'id';
    protected $fillable = [
        'kodepos',
        'kelurahan',
        'kecamatan',
        'kabupaten',
        'provinsi',
    ];
}
