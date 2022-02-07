<!DOCTYPE html>
<html lang="en">
@include('includes/head')
<body class="hold-transition sidebar-mini layout-fixed">

@include('includes/header')

<section class="content" >

  <div class="row">
          <div class="col-12">
            <div class="card">

              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                
                

                  <div class="d-flex">
                    <input type="text" style="width:600px;" class="search form-control" placeholder="Recherche par mot clé ...">
                </div>
             
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  {{-- <span class="vertical-line"></span> --}}
              
                  <div class="nav justify-content-end" id="navbarColor03">
                   
                      <a href="/ajoutcommande"><button type="submit" class="btn btn-info">Ajouter</button></a>
                    
                  </div>
                </div>
              </nav>



        
      <span class="counter pull-right"></span>
      <table class="table table-hover table-bordered results">
        <thead>
          <tr>
            
            <th scope="col">reference commande</th>
            <th scope="col">date commande</th>
            <th scope="col">nom produit</th>
            <th scope="col">matricule produit</th>
            <th scope="col">nom fournisseur</th>
            <th scope="col">matricule fournisseur</th>
            {{-- <th scope="col">condition de reglement</th> --}}
            <th scope="col">prix d'achat</th>
            <th scope="col">mode de paiement</th>
            <th scope="col">devis</th>
            <th scope="col">Action</th>
          
          </tr>
          <tr class="warning no-result">
            <td colspan="10"><i class="fa fa-warning"></i> Pas de résultat </td>
          </tr>
        </thead>
        <tbody>
          @foreach($commande_fournisseur as $cmd)
          <tr>
            
            <td>{{$cmd->reference_commande}}</td>
            <td>{{$cmd->date_commande}}</td>
            <td>{{$cmd->nom_produit}}</td>
            <td>{{$cmd->matricule_produit}}</td>
            <td>{{$cmd->nom_fournisseur}}</td>
            <td>{{$cmd->matricule_fournisseur}}</td>
            <td>{{$cmd->prix_achat}}</td>
           <td>{{$cmd->mode_de_paiement}}</td>
            <td>{{$cmd->devis}}</td>
            <td><a href='deletefournisseur/{{ $cmd->id }}'  class="btn" onclick="return verif();"><i class="fa fa-trash" aria-hidden="true"></i>
      </a><a href='updatelcmd/{{ $cmd->id }}' class="btn" onclick="return update();"><i class="fa fa-edit"></i>
      </a></td>
      
      
          </tr>
         @endforeach
        </tbody>
      </table>
         
        </tbody>
      </table>





@include('includes/footer')

                </div>
              </form>
            </div>
            </div></div></div>
               
                </section>
              </body>
              </html>
                <script type="text/javascript">
        function verif()
        {
          var a =confirm("vouler vous supprimer cette commande");
          if(a==false)
          {
            return false;
          }
         
        }

         function update()
        {
          var a =confirm("vouler vous modifier cette commande");
          if(a==false)
          {
            return false;
          }
         
        }
      </script>

 