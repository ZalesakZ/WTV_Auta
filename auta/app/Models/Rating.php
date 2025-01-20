<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    /**
     * Attributes to guard against mass-assignment.
     *
     * @var array
     */

    protected $guarded = [];
    protected $fillable = ['product_id', 'rating'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function product()
    {
        return $this->belongsTo(ModelVsechnyAuta::class, 'product_id'); 
    }

}
