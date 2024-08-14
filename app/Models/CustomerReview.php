<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerReview extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'customer_reviews';

    protected $fillable = ['name', 'email', 'productId', 'productType', 'score', 'comment'];
}
