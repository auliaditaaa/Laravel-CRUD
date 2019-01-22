<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //klasik atau nama tabel 
    protected $table ='supplier';

    public $timestamps = false;
    //yang kedua atribut 
    protected $fillable = [
        'supplier_id',
        'supplier_name',
        'supplier_address',
       
    ];
}
