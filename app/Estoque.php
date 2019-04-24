<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estoque extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['quantidade'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Get the vehicle that owns the budget.
     */
    public function produto(){
        return $this->belongsTo('App\Produto');
    }

    /**
     * Get the vehicle that owns the budget.
     */
    public function loja(){
        return $this->belongsTo('App\Loja');
    }
}
