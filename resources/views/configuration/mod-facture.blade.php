

<!DOCTYPE html>
<html lang="en">
@include('includes/head')
<body class="hold-transition sidebar-mini layout-fixed">


  <!-- Navbar -->
@include('includes/header')
 <section class="content">
  


              <!-- left column -->
           <div class="col-md-12" style="backg
           round-color: white">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="text-center">formulaire d'ajout facture fournisseur</h3>
              </div></div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{ url('update-facture/' . $facture->id) }}" enctype="multipart/form-data" class="col-md-6" style="margin-left: 20%">
                @csrf


                  <div class="form-group">
                    <label for="exampleInputn°facture">n° facture</label>
                    <input type="text" class="form-control" value="{{$facture->n_facture}}" name="num_fac" id="exampleInputn°facture" placeholder="Enter n° facture">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputreferencefacture">reference facture</label>
                    <input type="text" class="form-control" name="ref_fac" value="{{$facture->reference_facture	}}" id="exampleInputreferencefacture" placeholder="entrer reference">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputdatecreationfacture">date de creation facture</label>
                    <input type="date" class="form-control" value="{{$facture->date_creation_facture}}" name="date_cre_fac" id="exampleInputdatecreationfacture" placeholder="Enter date creation">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputdated'echeancefacture">date d'echeance facture</label>
                    <input type="date" class="form-control" value="{{$facture->date_echeance_facture}}" name="date_dech_fac" id="exampleInputdated'echeancefacture" placeholder="Enter date d'echeance">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputidfournisseur">id fournisseur</label>
             <input type="text" class="form-control" value="{{$facture->id_fournisseur}}"  name="id_four" id="exampleInputidfournisseur" placeholder="Enter id fournisseur">
                  </div>
                   
                  <div class="form-group">
                    <label for="exampleInputmatriculefiscalefournisseur">matricule fiscale fournisseur</label>
                    <input type="text" class="form-control" value="{{$facture->matricule_fiscale_fournisseur}}"  name="matricule" id="exampleInputmatriculefiscalefournisseur" placeholder="Enter matricule fiscale">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputidproduit">id produit</label>
                    <input type="text" class="form-control" value="{{$facture->id_produit}}" name="id_produit" id="exampleInputidproduit" placeholder="Enter id produit">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputnom produit">nom produit</label>
                    <input type="text" class="form-control" value="{{$facture->nom_produit}}" name="nom_produit" id="exampleInputnomproduit" placeholder="Enter nom produit">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputmode de paiement">mode de paiement</label>
                    <input type="text" class="form-control" name="mode_paie" value="{{$facture->mode_de_paiement}}" id="exampleInputmodedepaiement" placeholder="Enter mode de paiement">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputmontant ht">montant ht</label>
                    <input type="text" class="form-control" name="montant_ht" value="{{$facture->montant_ht}}" id="exampleInputmontantht" placeholder="Enter montant ht">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputmontant ttc">montant ttc</label>
                    <input type="text" class="form-control" name="montant_ttc" value="{{$facture->montant_ttc}}" id="exampleInputmontantttc" placeholder="Enter montant ttc">
                  </div>
                 

                  <div class="form-group">
                        <label for="exampleInputstatut">statut</label>
                        <select class="form-control" name="statut">
                          @foreach($statut as $key)
                          <option value="{{$key->statut_facture}}"> {{$key->statut_facture}}
                            
                          </option>
                          @endforeach
                         
                        </select>

                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div> 
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
            
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">enregistrer</button>
                </div>

</section>
 
</div></div></div></div></div></div>
</div></form>

</section></div></section></body></html>

@include('includes/footer')







