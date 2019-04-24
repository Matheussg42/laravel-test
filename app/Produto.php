<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['nome','unidade'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Get the budgets record associated with the vehicle.
     */
    public function estoque()
    {
        return $this->hasMany('App\Estoque');
    }
}
