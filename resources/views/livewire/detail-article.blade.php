<div>
<div class="container article_detail">

<div class="row justify-content-center align-items-center ">
<div class="col-12 col-md-6  detail_img ">

   <img src="{{Storage::url($article->img)}}" alt="">

   </div>
    <div class="col-12 col-md-6 detail_body">
    <h1 class="text-center" >{{$article->title}}</h1>
    <h4>{{$article->category}}</h4>
    <p>{{$article->title}}</p>
    <h5>{{$article->autore}}</h5>
    <a href="{{route('articles')}}" class="btn btn-info">Torna indietro</a>
</div>


</div>


</div>
</div>
