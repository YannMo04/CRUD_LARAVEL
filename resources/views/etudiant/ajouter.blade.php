@include('header')

<body>


    <div class="container text-center">
       
      <div class="row">

        <h1>AJOUTER ETUDIANT</h1>
        <hr>

        @if(session('success'))

        <div class="alert alert-success">
           {{session('success')}}
        </div>

        @endif
     <ul>

        @foreach($errors->all() as $error)
           <li class="alert alert-danger">{{$error}}</li>
        @endforeach

     </ul>
            <div class="col s12">

              <form action="ajouter/traitement" method="post">
                @csrf

               <div class="form-group">
                  <label for="nompre" class="form-label">Nom et prénom</label>
                  <input type="text" class="form-control" id="nompre" name="nompre" placeholder="Entrez vos noms et prénoms">
              </div>

              <div class="form-group">
                 <label for="classe" class="form-label">Classe</label>
                 <input type="text" class="form-control" id="classe" name="classe" placeholder="Entrez votre classe">
             </div>
             <br>

                <button type="submit" class= "btn btn-primary">AJOUTEZ</button>

             <br>

             <br>

             <a href="/"class= "btn btn-danger">Revenir à la liste</a>

             </form>
         </div>   
     </div>
 </div>


    
</body>
</html>