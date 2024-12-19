<x-layout>
    
<header class="container-fluid header-custom" >

<div class="container   header_first">

<div class="total_article">
    <div class="total_article_article">
        <div class="total_article_img">
            <img src="https://picsum.photos/300/200" alt="">
        </div>

        <div class="total_article_body">
            <h5>category</h5>
            <h2>Titolo</h2>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus delectus ipsa maxime excepturi corrupti illum a! Hic amet illum in. Nemo repudiandae reiciendis harum sit corrupti quam minus repellat aperiam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum veniam natus sit cumque, in adipisci nam facere nisi ea numquam! Sit dolor, quos praesentium reiciendis iste iusto quo voluptas minus. Lorem  Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus delectus ipsa maxime excepturi corrupti illum a! Hic amet illum in. Nemo repudiandae reiciendis harum sit corrupti quam minus repellat aperiam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum veniam natus sit cumque, in adipisci nam facere nisi ea numquam! Sit dolor, quos praesentium reiciendis iste iusto quo voluptas minus. Lorem</p>

            <h3>autore</h3>


        </div>


    </div>

</div>





  <div class="articles_section">
   
   @foreach ($articles as $article )
   <div class="articles_card">
        <div class="small_article">
            <div class="body_small_article">
                <h5>{{$article->category}}</h5>
                <h4>{{$article->title}}</h4>
            </div>
            <div class="img_small_article">
                <img src="https://picsum.photos/300/200" alt="">
            </div>
        </div>
        <div class="icons_small_article">
         <div class="icon_one">
         <i class="bi bi-headphones"></i>
         <i class="bi bi-chat-left-dots"></i>
         </div>
         <div class="icon_two">
         <i class="bi bi-heart"></i>
         <i class="bi bi-bookmark"></i>
         </div>
        </div>

    </div>
   
   @endforeach

  </div>

</div>

<div class="container  header_second">
    <div class="header_due_title">
    <h3> Frasi del Giorno</h3>
    </div>
    <div class="frasi_wrapper">
    <div class="frase">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam deserunt est reiciendis neque sit ut aspernatur? Consequuntur beatae, expedita saepe nam perferendis consequatur ipsa voluptatibus libero esse, iste, sunt adipisci?</p>
    </div>
    </div>

</div>






</header>
    
</x-layout>