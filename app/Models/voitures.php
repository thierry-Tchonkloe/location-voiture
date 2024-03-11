<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voitures extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $dates = ['created_at', 'updated_at'];
    protected $table = 'voitures';
    protected $fillable=[
        'id',
        'type',
        'nom',
        'prix_avec_chauffeur',
        'prix_sans_chauffeur',
        'image',
    ];
}
