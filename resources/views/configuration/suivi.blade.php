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
                  <a href="/fournisseur"><button type="submit" class="btn btn-info">retour</button></a>
                  <div class="input-group">
   <button type="button" class="btn btn-outline-primary" style=" margin-top:20px"; >search</button>
  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
    aria-describedby="search-addon" style=" margin-top:20px"; >

</div>
</div>
</div></div></div></div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">montant total</th>
      <th scope="col">tranche paye</th>
      <th scope="col">tranche non paye</th>
     </tr>
  </thead>
  <tbody  >
    @foreach($suivi as $sui)
    <tr>
      <td>{{$sui->montant_total}}</td>
      <td>{{$sui->tranche_paye}}</td>
      <td>{{$sui->tranche_non_paye}}</td>
      </tr>
@endforeach
    </tbody>
    </table>
  </section>
</body></html>
