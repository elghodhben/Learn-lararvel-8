<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = ["id", "reference_commande", "date_commande", "nom_produit", "matricule_produit", "nom_fournisseur", "matricule_fournisseur", "prix_achat", "mode_de_paiement", "devis", "path"];
    protected $table='commande_fournisseur';
}
