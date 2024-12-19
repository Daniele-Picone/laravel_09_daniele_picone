<x-layout>

   <div class="container article_detail">
       
       <h1 class="text-center" >{{$article->title}}</h1>

       <img src="https://picsum.photos/300/200" alt="">

       <h4>{{$article->category}}</h4>

       <p>{{$article->article}}</p>

       <h5>{{$article->autore}}</h5>


   </div>

</x-layout>