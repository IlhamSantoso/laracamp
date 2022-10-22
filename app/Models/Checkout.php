<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checkout extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable=[
        'user_id', 'camp_id', 'card_number', 'expired', 'cvc', 'is_paid'
    ];
    
    public function user_relation()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }

    public function camp_relation()
    {
        return $this->belongsTo(Camps::class, 'id', 'camp_id');
    }
}
