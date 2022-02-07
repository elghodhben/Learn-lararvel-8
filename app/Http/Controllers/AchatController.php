<?php
namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Commande;
use App\Models\Facture;
use App\Http\Controllers\Controller;

class AchatController extends Controller
{
    public function suivi()

	{
		return view('configuration/Achat');
		
	}

	
public function addfournisseur()

	{

!		$fournisseur=DB::table('fournisseur')->get();

		return view('configuration/Achat',compact('fournisseur'));
	}

	public function addfournisseurpost(Request $request)

	{
	
		
$nom=$request->input('nom');
$prenom=$request->input('prenom');
$email=$request->input('email');
$adresse=$request->input('adresse');
$telephone=$request->input('telephone');
$siteweb=$request->input('siteweb');
$matriculefiscale=$request->input('matriculefiscale');

	
$four = DB::table('fournisseur')->insert([
'nom'=>$nom,
'prenom'=>$prenom,
'email'=>$email,
'adresse'=>$adresse,
'telephone'=>$telephone,
'site_web'=>$siteweb,
'matricule_fiscale'=>$matriculefiscale
]);
if($four)
{
return back()->with('success','data inserted successfuly');
}
else

{

return back()->with('fail','somthing went wrong !');

}		
}		
public function fournisseur()
 		{
 			$fournisseur=DB::table('fournisseur')->get();
 			return view('configuration/liste_fournisseur',compact('fournisseur'));
 		
 		}

 		

public function commande()

{
	$commande_fournisseur=DB::table('commande_fournisseur')->get();
 		
 			return view('configuration/liste_commande_fournisseur',compact('commande_fournisseur'));
 		
}
 public function commandePaiement()
	{
		$paiement=DB::table('paiement')->get();
		
		return view('configuration/',compact('paiement'));
		
	}

	public function DisplForFour()
	{
		return view('configuration/fournisseur');
	}


public function addcommande()
	{

$mode=DB::table('statut')->get();

		return view('configuration/commande',compact('mode'));
	}

	public function addcommandepost(Request $request)

	{

		$referencecommande=$request->input('commande');
		$datecommande=$request->input('Date_commande');
		$nomproduit=$request->input('nom_produit');
		$matriculeproduit=$request->input('matricule');
		$nomfournisseur=$request->input('nom_fournisseur');
		$matriculefournisseur=$request->input('matricule_fournisseur');
		$prixachat=$request->input('prix_achat');
		$modedepaiement=$request->input('statut');
		$devis=$request->input('devis');

if ($request->hasFile('file')) {

	$request->validate([
		'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
	]);

	// Save the file locally in the storage/public/ folder under a new folder named /product
	$request->file->store('product', 'public');

	


if(DB::table('commande_fournisseur')->insert([
'reference_commande'=>$referencecommande,
'date_commande'=>$datecommande,
'nom_produit'=>$nomproduit,
'matricule_produit'=>$matriculeproduit,
'nom_fournisseur'=>$nomfournisseur,
'matricule_fournisseur'=>$matriculefournisseur,
'prix_achat'=>$prixachat,
'mode_de_paiement'=>$modedepaiement,
'devis'=>$devis,
'path' =>$request->file->hashName(),
]))
{
return back()->with('success','data inserted successfuly');
}

else

{
return back()->with('fail','somthing went wrong !');

}	
}	
}		


public function reception()

 		{
 			return view('configuration/bon_reception');
 		}

public function receptionn()

 		{

 		$bon_reception=DB::table('bon_reception')->get();
 		return view('configuration/liste_bon_reception',compact('bon_reception'));

 	    }


 	    public function factures()

 		{

 		$facture=DB::table('facture')->get();
 		return view('configuration/liste_facture',compact('facture'));


 	    }

 	    
 	    public function facture()
	{
		$statut=DB::table('statut')->get();
		
		return view('configuration/facture',compact('statut'));
		
	}
	

public function suivi1()

 		{

 		$suivi=DB::table('suivi')->get();
 		return view('configuration/suivi',compact('suivi'));

 	    }

public function Deletlistefou($id)
{
	DB::delete('delete from commande_fournisseur where id = ?',[$id]);
	return redirect('liste_commande_fournisseur');
	
}
public function Deletefou($id)
{
	DB::delete('delete from fournisseur where id = ?',[$id]);
	return redirect('liste_fournisseur');
}

public function deletefacture($id)
{
	DB::delete('delete from facture where id = ?',[$id]);
	return redirect('liste_facture');	
}

public function MoUpdatefacture($id, Facture $facture)
{
		$facture=DB::table('facture')->find($id);
		$statut=DB::table('statut')->get();
		return view('configuration/mod-facture', compact('facture', 'statut'));
      
}

public function Updatefacture(Request $request, $id, Facture $facture)
{
	$facture = Facture::findOrFail($id);

	$num_fac = $request->input('num_fac');
	$ref_fac = $request->input('ref_fac');
	$date_cre_fac = $request->input('date_cre_fac');
	$date_dech_fac = $request->input('date_dech_fac');
	$id_four = $request->input('id_four');
	$matricule = $request->input('matricule');
	$id_produit = $request->input('id_produit');
	$nom_produit = $request->input('nom_produit');
	$mode_paie = $request->input('mode_paie');
	$montant_ht = $request->input('montant_ht');
	$montant_ttc = $request->input('montant_ttc');
	$statut = $request->input('statut');	

	 if ($request->hasFile('file')) {

		$request->validate([
			'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
		]);

		// Save the file locally in the storage/public/ folder under a new folder named /product
		$request->file->store('product', 'public');
		$path = $request->file->hashName();

		DB::update('update facture set n_facture = ?, reference_facture = ?, date_creation_facture = ?, date_echeance_facture = ?, id_fournisseur = ?, matricule_fiscale_fournisseur = ?, id_produit = ?, nom_produit = ?, mode_de_paiement = ?, montant_ht = ?, montant_ttc = ?, statut = ?, path = ? where id = ?',[$num_fac, $ref_fac, $date_cre_fac, $date_dech_fac, $id_four, $matricule, $id_produit, $nom_produit, $mode_paie, $montant_ht, $montant_ttc, $statut, $path, $id]);
	
		return redirect()->back();
		}
				
}


public function MoUpdateCmd($id)
{
		$commande=DB::table('commande_fournisseur')->find($id);
		$mode=DB::table('statut')->get();
		return view('configuration/mod-commande', compact('commande', 'mode'));
}

public function UpdateCommande(Request $request, $id)
{
	$referencecommande=$request->input('commande');
	$datecommande=$request->input('Date_commande');
	$nomproduit=$request->input('nom_produit');
	$matriculeproduit=$request->input('matricule');
	$nomfournisseur=$request->input('nom_fournisseur');
	$matriculefournisseur=$request->input('matricule_fournisseur');
	$prixachat=$request->input('prix_achat');
	$modedepaiement=$request->input('statut');
	$devis=$request->input('devis');

	if ($request->hasFile('file')) {

		$request->validate([
			'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
		]);

		// Save the file locally in the storage/public/ folder under a new folder named /product
		$request->file->store('product', 'public');
		$path = $request->file->hashName();
	DB::update('update commande_fournisseur set reference_commande = ?, date_commande = ?, nom_produit = ?, matricule_produit = ?, nom_fournisseur = ?, matricule_fournisseur = ?, prix_achat = ?, mode_de_paiement = ?, devis = ?, path = ? where id = ?',[  $referencecommande, $datecommande, $nomproduit, $matriculeproduit, $nomfournisseur, $matriculefournisseur, $prixachat, $modedepaiement, $devis, $path, $id]);
	
	return redirect()->back();
		}
}




public function MoUpdatefourinsseur($id)
{
		$fournisseur=DB::table('fournisseur')->find($id);
		return view('configuration/modif-fournisseur', compact('fournisseur'));
}


public function updatefournisseur(Request $request, $id)
{
	$nom = $request->input('nom');
	$prenom = $request->input('prenom');
	$adresse = $request->input('adresse');
	$email = $request->input('email');
	$telephone = $request->input('telephone');
	$siteweb = $request->input('siteweb');
	$matriculefiscale = $request->input('matriculefiscale');

	DB::update('update fournisseur set nom =?, prenom =?, email =?, adresse =?, telephone =?, site_web =?, 	matricule_fiscale =? where id =?', [$nom, $prenom, $email, $adresse, $telephone, $siteweb, $matriculefiscale, $id]);
	return redirect()->back();

}


}