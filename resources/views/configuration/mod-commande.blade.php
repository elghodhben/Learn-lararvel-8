<!DOCTYPE html>
<html lang="en">
@include('includes/head')
<body class="hold-transition sidebar-mini layout-fixed">


  <!-- Navbar -->
@include('includes/header')
 <section class="content">


    
          <!-- left column -->
          <div class="col-md-12" style="background-color: white">
            <!-- general form elements -->
 @if ($message = Session::get('Success'))
              <div class="alert alert-success"> data saved ! {{$message}}</div>
              @endif
                 @if($message=Session::get('Fail'))
                  <div class="alert alert-danger"> data not saved ! {{$message}}</div>
                  @endif

<div class="card card-info">
              <div class="card-header">
                <h2 class="text-center">formulaire de modification commande fournisseur</h2>
              </div></div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action={{ url('Update-Commande' , $commande->id) }} enctype="multipart/form-data">
               
                {{ @csrf_field() }}
                {{ method_field('POST') }}
                
                  <div class="form-group">
                    <label for="exampleInputnom">reference commande</label>
                    <input type="text" name="commande" value="{{ $commande->reference_commande }}" class="form-control" id="exampleInputreferencecommande" placeholder=""required/>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputprenom">Date commande</label>
                    <input type="date" class="form-control" value="{{ $commande->date_commande }}" name="Date_commande" id="exampleInputdatecommande" placeholder=""required/>
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputemail">nom produit</label>
                    <input type="text" class="form-control" value="{{ $commande->nom_produit }}" name="nom_produit" id="exampleInputnomproduit" placeholder=""required/>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputadresse">matricule produit</label>
                    <input type="text" class="form-control" value="{{ $commande->matricule_produit }}"  name="matricule" id="exampleInputmatriculeproduit" placeholder="entrer le matricule produit">
                  </div>
                  
                  <div class="form-group">
                  <a href="#" class="btn-danger" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" aria-hidden="true"></i>
                    
                  </a>
                  
                   </div>
                  
                 
                  <div class="form-group">
                    <label for="exampleInputmatricule fiscale">nom fournisseur</label>
                    <input type="text" class="form-control" value="{{ $commande->nom_fournisseur }}" name="nom_fournisseur" id="exampleInputnomfournisseur" placeholder=""required/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputsite_web">matricule fournisseur</label>
                    <input type="text" class="form-control" value="{{ $commande->matricule_fournisseur }}" name="matricule_fournisseur" id="exampleInputmatriculefournisseur" placeholder=""required/>
                  </div>
                  <div class="form-group">
                  <a href="#" class="btn-danger" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" aria-hidden="true"></i>
                    
                  </a>
                   </div>
                  
                  <div class="form-group">
                    <label for="exampleInputsite_web">prix achat</label>
                    <input type="text" class="form-control" value="{{ $commande->prix_achat }}" name="prix_achat" id="exampleInputprixd'achat" placeholder=""required/>
                  </div>
                    <div class="form-group">
                        <label for="exampleInputstatut">mode de paiement</label>
                        <select class="form-control" name="statut" >
                          @foreach($mode as $key)
                          <option  value="{{$key->statut_facture}}"> {{$key->statut_facture}}
                            
                          </option>
                          @endforeach
                         
                        </select>
 
                  </div>
                 <div class="form-group">
                    <label for="exampleInputsite_web">Devis</label>
                    <input type="text" class="form-control" value="{{ $commande->devis }}" name="devis" id="exampleInputdevis" placeholder=""required/>
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
  @csrf
</form>
@include('includes/footer')
</section>
 
</div></div></div></div></div></div>
</div></form>

</section></div></section></body></html>





<!--les produits -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>



