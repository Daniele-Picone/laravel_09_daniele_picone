<x-layout>
    
<header class="container-fluid header-custom" >

<div class="container   header_first">

<div id="bigArticlesWrapper" class="total_article">
    <div  class="total_article_article">
        <div class="total_article_img">
            <img src="https://picsum.photos/300/200" alt="">
        </div>

        <div class="total_article_body">
            <h5>categoria</h5>
            <h2>titolo</h2>

            <p>body</p>

            <h3>autore</h3>


        </div>


    </div>

</div>





  <div class="articles_section">
   
  <div class="articles-wrapper">
  @foreach ($articles as $article )
   <div id="articlesCards" class="articles_card">
        <div class="small_article">
            <div class="body_small_article">
                <h5>{{$article->category}}</h5>
                <h4>{{$article->title}}</h4>
            </div>
            <div class="img_small_article">
                <img src="{{Storage::url($article->img)}}" alt="">
            </div>
        </div>
        <div class="icons_small_article">
         <div class="icon_one">
         <i class="bi bi-headphones"></i>
         <i class="bi bi-chat-left-dots"></i>
         </div>
         <div class="icon_two">
         <i id="heart" class="fa-solid fa-heart"></i>
         <i id="save" class="fa-solid fa-bookmark"></i>
         </div>
        </div>

    </div>
   
   @endforeach
  </div>

  </div>

</div>

<div class="container  header_second">
    <div class="header_due_title">
    <h3> Frasi del Giorno</h3>
    </div>
    <div class="frasi_wrapper">
    <div class="frase">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro itaque iure totam autem animi nam! Expedita vel placeat dolor, eius iusto inventore modi veniam, similique fuga, in voluptatum quisquam architecto!</p>
        <h5>autore</h5>
    </div>
    </div>

</div>






</header>
    
</x-layout>