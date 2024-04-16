@include('header');

<body>
    

 <div class="container text-center">
    <div class="row">

        <div class="col s12">
            <h1>CRUD en LARAVEL</h1>

  @if(session('success'))
    <div id="alert" class="alert alert-success">
        {{ session('success') }}
    </div>
     @endif

   @if(session('sup'))
    <div id="alert" class="alert alert-success">
        {{ session('sup') }}
    </div>
    @endif

<script>
    // Sélectionnez l'élément de l'alerte
    var alertElement = document.getElementById('alert');

    // Définir le délai d'apparition en millisecondes (par exemple, 3000 pour 3 secondes)
    var delay = 3000;

    // Fonction pour masquer l'alerte après le délai spécifié
    setTimeout(function(){
        alertElement.style.display = 'none';
    }, delay);
</script>

            <hr>
            
             <a href="/ajouter" class="btn btn-primary">Ajouter un étudiant</a>

            <hr>
             <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom et prénom</th>
      <th scope="col">Classe</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @php
       $ide = 1;
    @endphp

    @foreach($etudiants->sortBy("id") as $etudiant)
     <tr>
       <th scope="row">{{$ide}}</th>
       <td>{{$etudiant->nompre}}</td>
       <td>{{$etudiant->classe}}</td>
       <td>
        <a href="/update_etudiant/{{$etudiant->id}}" class="btn btn-warning">Update</a>
        <a href="/delete_etudiant/{{$etudiant->id}}" class="btn btn-danger">Delete</a>
       </td>
     </tr>
     @php
        
        $ide += 1 ;
      
     @endphp

    @endforeach
   </tbody>
   </table>
        </div>
       
    </div>
 </div>


 

  

</body>
</html>