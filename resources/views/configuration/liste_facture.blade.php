<!DOCTYPE html>
<html lang="en">
@include('includes/head')
<body class="hold-transition sidebar-mini layout-fixed">

@include('includes/header')


<section class="content">

  <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="card-footer">
                  <a href="/ajoutfacture"><button type="submit" class="btn btn-info">Ajouter</button></a>
                 

                  <div class="input-group">
   <button type="button" class="btn btn-outline-primary" style=" margin-top:20px"; >search</button>
  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
    aria-describedby="search-addon" style=" margin-top:20px"; />

<i class="fa fa-filter" aria-hidden="true" style=" margin-top:25px"></i>
</div>
</div>
</div>
<div class="row">
          
          <!-- ./col -->
         
     <!-- ./col -->
          

    <table class="table">
  <thead>
    <tr>
      <th scope="col">n° facture</th>
      <th scope="col">reference facture</th>
      <th scope="col">date de creation facture</th>
      <th scope="col">date d'echeance facture</th>
       <th scope="col">id fournisseur</th>
        <th scope="col">matricule fiscale fournisseur</th>
         <th scope="col">id produit</th>
          <th scope="col">nom produit</th>
           <th scope="col">mode de paiement</th>
            <th scope="col">montant ht</th>
             <th scope="col">montant ttc</th>
              <th scope="col">statut</th>
          <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($facture as $fac)
    <tr>
      <td>{{$fac->n_facture}}</td>
      <td>{{$fac->reference_facture}}</td>
      <td>{{$fac->date_creation_facture}}</td>
      <td>{{$fac->date_echeance_facture}}</td>
      <td>{{$fac->id_fournisseur}}</td>
      <td>{{$fac->matricule_fiscale_fournisseur}}</td>
      <td>{{$fac->id_produit}}</td>
      <td>{{$fac->nom_produit}}</td>
      <td>{{$fac->mode_de_paiement}}</td>
      <td>{{$fac->montant_ht}}</td>
      <td>{{$fac->montant_ttc}}</td>
      <td><span class="badge badge-success">payé</span></td>
      
      <td><a href='deletelfact/{{ $fac->id }}' class="btn" onclick="return verif();"><i class="fa fa-trash" aria-hidden="true"></i></a>
    <a href={{"updatelfact/".$fac->id}} class="btn" onclick="return update();"><i class="fa fa-edit" style=""></i></a></td>
    </tr>
   @endforeach
  </tbody>
</table>





@include('includes/footer')

                </div>
              </form>
            </div>
            </div></div></div>
               
                </section></body></html>
                <script type="text/javascript">
        function verif()
        {
          var a =confirm("vouler vous supprimer cette facture");
          if(a==false)
          {
            return false;
          }
         
        }

         function update()
        {
          var a =confirm("vouler vous modifier cette facture");
          if(a==false)
          {
            return false;
          }
         
        }
      </script>