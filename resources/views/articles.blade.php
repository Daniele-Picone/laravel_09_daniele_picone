<x-layout>
    <div class="container">
        <h1 class="text-center" >I nostri articoli</h1>
        <div class="container article_wrapper ">
            @foreach ($articles as $article )
            <div class="card" style="width: 18rem;">
             <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">
               <div class="card-body">
                 <h5 class="card-title">{{$article->title}}</h5>
                 <p class="card-text"></p>{{$article->article}}</p>
                <a href="{{route('article.detail', ['id'=> $article['id']])}}" class="btn btn-primary">leggi di piu</a>
           </div>
         </div>
            
            @endforeach

        </div>
        


    </div>
</x-layout>