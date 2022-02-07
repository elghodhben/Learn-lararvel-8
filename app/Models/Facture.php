<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    protected $fillable = ["id", "n_facture", "reference_facture", "date_creation_facture", "date_echeance_facture", "id_fournisseur", "matricule_fiscale_fournisseur", "id_produit", "nom_produit", "mode_de_paiement", "montant_ht", "montant_ttc", "statut"];
    protected $table='facture';
    
}
