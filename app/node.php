<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class node extends Model
{
    protected $table = 'node';
    protected $primaryKey= 'id_node';
    protected $fillable = ['nama_node', 'ltd', 'lngtd'];

}
