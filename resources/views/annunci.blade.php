<x-layout>
  <h1 class="text-center" >I tuoi annunci</h1>
  
  @if (session('message'))
  <div class="alert alert-success ">
    {{ session('message') }}
  </div>
  @endif
  <div class="container article_wrapper ">
    @foreach ($annunciaments as $annunciament )

            <div class="card card_custom" style="width: 18rem;">
             <img src="{{Storage::url($annunciament->img)}}" class="card-img-top" alt="...">
               <div class="card-body">
                 <h5 class="card-title">{{$annunciament->title}}</h5>
                 <p class="card-text">{{$annunciament->article}}</p>
                 <p class="card-text" >{{$annunciament->user->name}}</p>
                 @if ($annunciament->tags->isNotEmpty())
                <div class="mb-3">
                @foreach ($annunciament->tags as $tag )
                     <span class="badge text-bg-primary">#{{$tag->name}}</span>
                @endforeach
                </div>
                 
                
               @endif

             
                 <form action="{{ route('annunci.delete', ['id' => $annunciament->id]) }}" method="POST" ">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn delete btn-danger">Elimina</button>
              </form>

           
                
           </div>
         </div>
            
            @endforeach

        </div>








</x-layout>