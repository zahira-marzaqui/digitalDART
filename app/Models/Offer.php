<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'somme',
        'nbr_de_participant',
        'status',
        'période',
        'date_paiment',
        'description',

    ];
    public function Montant_Mensuel()
    {
        if ($this->période > 0 ) {
            $montant_mensuel = $this->somme / $this->période;
            return number_format($montant_mensuel, 2);
        } else {
            return 0;
        }
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
