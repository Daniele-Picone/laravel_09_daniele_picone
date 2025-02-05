<x-layout>
    
<header class="container-fluid header-custom" >

<div class="container   header_first">

<div id="bigArticlesWrapper" class="total_article">
   

</div>





  <div class="articles_section">
       <h3 class=" text-center" >I NOSTRI ANNUNCI</h3>
  <div class="announcement-wrapper">
  @foreach ($annunci as $annuncio )
   <div id="announcementCards" class="announcement_card" data-id="{{ $annuncio->id }}" data-title="{{ $annuncio->title }}" data-description="{{ $annuncio->annunciamentBody }}" data-price="{{ $annuncio->price }}" data-user="{{ $annuncio->user->name }}"   >
        <div class="small_announcement">
            <div class="body_small_announcement">
                <h4>{{$annuncio->title}}</h4>
                <h5>{{$annuncio->price}} €</h5>
                @if ($annuncio->tags->isNotEmpty())
                <div class="mb-3">
                @foreach ($annuncio->tags as $tag )
                     <span class="badge text-bg-primary">#{{$tag->name}}</span>
                @endforeach
                </div>
                 
                
               @endif
                <p>{{$annuncio->user->name}}</p>
            </div>
            <div class="img_small_announcement">
                <img src="{{Storage::url($annuncio->img)}}" alt="">
            </div>
        </div>
        <div class="icons_small_announcement">
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
    
   <livewire:counter>
    
   </livewire:counter>
</div>






</header>
<script>
        function loadAnnuncio(id) {
            fetch(`/annunci/${id}`)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('annuncio-details').innerHTML = html;
                });
        }
    </script>
</x-layout>