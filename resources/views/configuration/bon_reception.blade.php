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
                <h3 class="text-center">ajouter bon de reception</h3>
              </div></div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/addtest/" class="col-md-6" style="margin-left: 20%">
                @csrf
                  <div class="form-group">
                    <label for="exampleInputnom">N°commande</label>
                    <input type="text" class="form-control" id="exampleInputnom" placeholder="Enter n°commande">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputnom">Nom de l'entreprise</label>
                    <input type="text" class="form-control" id="exampleInputnom" placeholder="Enter nom d'entreprise">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputprenom">Codes</label>
                    <input type="text" class="form-control" id="exampleInputprenom" placeholder="entrer le code">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputemail">Designation</label>
                    <input type="text" class="form-control" id="exampleInputemail" placeholder="entrer designation">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputadresse">Quantite commandé</label>
                    <input type="text" class="form-control" id="exampleInputadresse" placeholder="Enter quantite commandé">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputtelephone">Qauntite livré</label>
             <input type="text" class="form-control" id="exampleInputsiteweb" placeholder="Enter quantite livré">
                  </div>
                   
                  <div class="form-group">
                    <label for="exampleInputsite_web">Quantite reste a livré</label>
                    <input type="site web" class="form-control" id="exampleInputsiteweb" placeholder="Enter quantite reste a livré">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputmatricule fiscale">Observation</label>
                    <input type="site web" class="form-control" id="exampleInputmatriculefiscale" placeholder="Enter Observation">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
            
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

<</section>
 
</div></div></div></div></div></div>
</div></form>
</section></div></section></body></html>

@include('includes/footer')







