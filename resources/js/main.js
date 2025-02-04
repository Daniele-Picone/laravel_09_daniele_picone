 
const  heart =  document.querySelector ( '#heart' ) ;
const save = document.querySelector('#save');

heart.addEventListener ( 'click' ,   function ( )   { 
   
 heart.classList.toggle ( 'heart-clicked' ) ;





})

save.addEventListener('click', function(){
    save.classList.toggle('save-clicked');
});

let annunci = Array.from(document.querySelectorAll('#announcementCards'));
const bigArticlesWrapper = document.querySelector('#bigArticlesWrapper');


bigArticlesWrapper.innerHTML = '';
annunci.forEach(annuncio => {
    
    annuncio.addEventListener('click', function(){

      let div = document.createElement('div');
      div.classList.add('total_article');
      div.innerHTML = `
           <div  class="total_article_article" data-id="${this.dataset.id}"> >
        <div class="total_article_img">
            <img src="${this.querySelector('img').src}" alt="">
        </div>

        <div class="total_article_body">
               <h2>${this.dataset.title}</h2>
                 <h5>categoria</h5>
                <p>${this.dataset.description}</p>
                <p>Prezzo: ${this.dataset.price} €</p>
                <h3>Creato da: ${this.dataset.user}</h3>


        </div>


    </div>
        `;
     bigArticlesWrapper.innerHTML = '';
      bigArticlesWrapper.appendChild(div);

    } )

})


 
 
