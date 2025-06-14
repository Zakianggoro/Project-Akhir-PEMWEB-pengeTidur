<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sampah extends Model
{
    protected $table = 'sampah';
    protected $primaryKey = 'jenis';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['jenis','hargaSatuan','satuan'];
    public $timestamps = false;
}
