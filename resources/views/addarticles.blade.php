<x-layout>

<h1 class="text-center" >Aggiungi articolo</h1>

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

    <form class="rounded form-custom " method="POST" action="{{route('articles.storage')}}" enctype="multipart/form-data" >
    @csrf



                  <div class="mb-3">
                     <label for="img" class="form-label">Inserisci l'immagine</label>
                     <input type="file" class="form-control" id="img" aria-describedby="emailHelp" name="img" >
                 </div>


                 <div class="mb-3">
                     <label for="title" class="form-label">Inserisci Titolo</label>
                     <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" >
                 </div>
                 <div class="mb-3">
                     <label for="category" class="form-label">Categotia</label>
                     <input type="text" class="form-control" id="category" aria-describedby="emailHelp" name="category" >
                 </div>
              <div class="mb-3">
                 <label for="text" class="form-label">Scrivi articolo</label>
                   <textarea name="article" cols="30" rows="10" id="text" class="form-control" ></textarea>
             </div>
            
             
  
                 <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>

    </div>
    </div>
</div>



</x-layout>