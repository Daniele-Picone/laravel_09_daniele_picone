<x-layout>

    <div class="container">
        <h1 class="text-center" >I nostri articoli</h1>
        @if (session('message'))
    <div class="alert alert-success ">
        {{ session('message') }}
    </div>
@endif
        <div class="container article_wrapper ">
            @foreach ($articles as $article )
            <div class="card card_custom" style="width: 18rem;">
             <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
               <div class="card-body">
                 <h5 class="card-title">{{$article->title}}</h5>
                 <p class="card-text"></p>{{$article->article}}</p>
                 <p class="card-text"></p>{{$article->user->name}}</p>
                 <a href="{{route('article.detail', ['id'=> $article['id']])}}" class="btn btn-primary">leggi di piu</a>
                 @auth
                 
                 <a href="{{route('article.edit', ['id'=> $article['id']] )}}" class="btn btn-primary">modifica</a>
                 <form action="{{ route('articles.delete', ['id' => $article->id]) }}" method="POST" ">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn delete btn-danger">Elimina</button>
              </form>
                 @endauth

                
           </div>
         </div>
            
            @endforeach

        </div>
        


    </div>
</x-layout>