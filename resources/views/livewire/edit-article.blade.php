<div>




<form class="rounded form-custom" wire:submit="updateArticle" >
   


@if (session('message'))
 <div class="alert alert-success">
    {{session('message')}}
 </div>

@endif
                
<div class="mb-3">
                     <label for="img" class="form-label">Al momento non è possibile aggiornare l'immagine</label>
                     
                 </div>

   <div class="mb-3">
       <label for="title" class="form-label">Inserisci Titolo</label>
       <input wire:model="title"  type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" >
   </div>
   <div class="mb-3">
       <label for="category" class="form-label">Categotia</label>
       <input wire:model="category" type="text" class="form-control" id="category" aria-describedby="emailHelp" name="category" >
   </div>
<div class="mb-3">
   <label for="text" class="form-label">Scrivi articolo</label>
     <textarea wire:model="body" name="article" cols="30" rows="10" id="text" class="form-control" ></textarea>
</div>



   <button type="submit" class="btn btn-primary">Modifica</button>
</form>
</div>
