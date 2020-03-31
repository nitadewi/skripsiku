<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wisata extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'wisatas';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'foto', 'alamat', 'keterangan', 'ltd', 'lngtd'];

    
}
