<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'somme',
        'nbr_max_participant',
        'status',
        'période',
        'date_paiment'
    ];
    public function Montant_Mensuel()
    {
        if ($this->nbr_de_mois > 0 ) {
            return $this->somme / $this->nbr_de_mois;
        } else {
            return 0;
        }
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
