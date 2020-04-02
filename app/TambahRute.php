<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TambahRute extends Model
{
    protected $table = 'graphs';
    protected $primaryKey= 'id_graph';
    protected $fillable = ['node_awal', 'node_tujuan', 'jalur', 'bobot', 'temp'];

}
