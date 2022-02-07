
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
                  <a href="/add-fournisseur"><button type="submit" class="btn btn-info">Ajouter</button></a>
                  <div class="input-group">
   <button type="button" class="btn btn-outline-primary" style=" margin-top:20px"; >search</button>
  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
    aria-describedby="search-addon" style=" margin-top:20px"; />

</div>
</div>
</div>
<div class="row">
          
          <!-- /.col -->
         
          <!-- /.col -->

          <!-- fix for small devices only -->
          
          <!-- /.col -->
          
<table class="table">
  <thead>
    <tr>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">email</th>
      <th scope="col">adresse</th>
       <th scope="col">telephone</th>
        <th scope="col">site web</th>
         <th scope="col">matricule fiscale</th>
          <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($fournisseur as $four)
    <tr>
      <td>{{$four->nom}} <span class="badge bg-danger">NEW</span></td>
      <td>{{$four->prenom}}</td>
      <td>{{$four->email}}</td>
      <td>{{$four->adresse}}</td>
      <td>{{$four->telephone}}</td>
      <td>{{$four->site_web}}</td>
      <td>{{$four->matricule_fiscale}}</td>
      <td><a href='deletefour/{{ $four->id }}' class="btn" onclick="return verif();"><i class="fa fa-trash" aria-hidden="true"></i>
</a><a href='{{"updatelfour/" . $four->id }}'class="btn" onclick="return update();"><i class="fa fa-edit" style=""></i>
  <td><a href=><i class="fa fa-envelope" aria-hidden="true"></i>
 </a>
  <td><a href="/suivi";"><i class="fas fa-money-check-alt"></i>
</td></tr>
  

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
          var a =confirm("vouler vous supprimer cette fournisseur");
          if(a==false)
          {
            return false;
          }
         
        }

         function update()
        {
          var a =confirm("vouler vous modifier cette fournisseur");
          if(a==false)
          {
            return false;
          }
         
        }
      </script>