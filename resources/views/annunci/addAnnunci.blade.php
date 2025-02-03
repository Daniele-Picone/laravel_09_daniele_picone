<x-layout>



<h1 class="text-center" >Crea Annuncio</h1>

@if ($errors->any())
    <div class="alert alert-danger alert-custom">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container mt-5 ">
    <div class="row justify-content-center align-items-center mt-5">

    <div class="col-12 col-md-6">

    <form class="rounded form-custom" method="POST" action="{{route('annunci.storage')}}" enctype="multipart/form-data" >
    @csrf



                  <div class="mb-3">
                     <label for="img" class="form-label">Inserisci l'immagine</label>
                     <input type="file" class="form-control" id="img" aria-describedby="emailHelp" name="img" >
                 </div>


                 <div class="mb-3">
                     <label for="title" class="form-label">Inserisci nome del prodotto</label>
                     <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" >
                 </div>
                
              <div class="mb-3">
                 <label for="text" class="form-label">Scrivi articolo</label>
                   <textarea name="annunciamentBody" cols="30" rows="10" id="text" class="form-control" ></textarea>
             </div>
             <div class="mb-3">
                     <label for="price" class="form-label">Inserisci prezzo</label>
                     <input type="text" class="form-control" id="price" aria-describedby="emailHelp" name="price"  >
                 </div>
           

             
  
                 <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>

    </div>
    </div>
</div>







</x-layout>