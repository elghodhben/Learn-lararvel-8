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
                  <a href="/ajoutbon_reception"><button type="submit" class="btn btn-info">Ajouter</button></a>
                 

                  <div class="input-group">
   <button type="button" class="btn btn-outline-primary" style=" margin-top:20px"; >search</button>
  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
    aria-describedby="search-addon" style=" margin-top:20px"; />
</div>
</div>
</div>
<div class="row">
          
          <!-- ./col -->
          
          <!-- ./col -->
         
                
              

    <table class="table">
  <thead>
    <tr>
      <th scope="col">N° commande</th>
      <th scope="col">Non entreprise</th>
      <th scope="col">Codes</th>
      <th scope="col">Designation</th>
       <th scope="col">Quantite commande</th>
        <th scope="col">Quantite livre</th>
         <th scope="col">Quantite reste a livre</th>
          <th scope="col">Observation</th>
         <th scope="col">Devis</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($bon_reception as $bon)
    <tr>
      <td>{{$bon->n°commande}}</td>
      <td>{{$bon->nom_entreprise}}</td>
      <td>{{$bon->codes}}</td>
      <td>{{$bon->designation}}</td>
      <td>{{$bon->quantite_commande}}</td>
      <td>{{$bon->quantite_livre}}</td>
      <td>{{$bon->quantite_reste_a_livre}}</td>
      <td>{{$bon->observation}}</td>
      <td>{{$bon->devis}}</td>
      <td><a href="/bon_reception" class="btn" onclick="return verif();"><i class="fa fa-trash" aria-hidden="true"></i>
</a><a href="/bon_reception" class="btn" onclick="return update();"><i class="fa fa-edit" style=""></i>
</a></td>
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
          var a =confirm("vouler vous supprimer cette bon_reception");
          if(a==false)
          {
            return false;
          }
         
        }

         function update()
        {
          var a =confirm("vouler vous modifier cette bon_reception");
          if(a==false)
          {
            return false;
          }
         
        }
      </script>