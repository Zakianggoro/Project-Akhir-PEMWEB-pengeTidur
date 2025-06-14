<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model

{
    protected $table = 'transfer';
    public $timestamps = false;
    protected $fillable = ['user_id', 'tujuan', 'nominal', 'date'];

}
