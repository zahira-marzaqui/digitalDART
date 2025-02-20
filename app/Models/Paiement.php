<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;
    protected $fillable = [
        'offer_id',
        'user_id',
        'is_paid',
        'mois_restant',
        'mois_payer',
        'mydart',
    ];
}
