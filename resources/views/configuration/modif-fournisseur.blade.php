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
            @if ($message = Session::get('Success'))
              <div class="alert alert-success"> data saved ! {{$message}}</div>
              @endif
                 @if($message=Session::get('Fail'))
                  <div class="alert alert-danger"> data not saved ! {{$message}}</div>
                  @endif

            <div class="card card-info">
              <div class="card-header">
                <h3 class="text-center">formulaire d'ajout fournisseur</h3>
              </div></div>
             
                  <form method="post" action="{{ url('updatelfournisseur' , $fournisseur->id) }}" enctype="multipart/form-data">
                      
                  <div class="form-group">
                    <label for="exampleInputnom">nom</label>
                    <input type="text" name="nom" class="form-control" id="exampleInputnom" placeholder=""required value="{{$fournisseur->nom}}">
                  </div>

            
                  
                  <div class="form-group">
                    <label for="exampleInputprenom">prenom</label>
                    <input type="text" name="prenom" class="form-control" id="exampleInputprenom" placeholder=""required value="{{$fournisseur->prenom}}">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputemail">email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputemail" placeholder=""required value="{{$fournisseur->email}}">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputadresse">adresse</label>
                    <input type="text" name="adresse" class="form-control" id="exampleInputadresse" placeholder="Enter adresse" value="{{$fournisseur->adresse}}">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputtelephone">telephone</label>
             <input type="text" name="telephone" class="form-control" id="exampleInputtelephone" placeholder=""required value="{{$fournisseur->telephone}}">
                  </div>
                   
                  <div class="form-group">
                    <label for="exampleInputsite_web">site web</label>
                    <input type="text" name="siteweb" class="form-control" id="exampleInputsiteweb" placeholder=""required value="{{$fournisseur->site_web}}">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputmatricule fiscale">matricule fiscale</label>
                    <input type="text" name="matriculefiscale" class="form-control" id="exampleInputmatriculefiscale" placeholder=""required value="{{$fournisseur->matricule_fiscale}}">
                  </div>
                  
            
                <!-- /.card-body -->

            
                  <button type="submit" class="btn btn-info">enregistrer</button>
                </div>
                @csrf
</form>
@include('includes/footer')
</section>
 
</div></div></div></div></div></div>
</div></form>

</section></div></section></body></html>








