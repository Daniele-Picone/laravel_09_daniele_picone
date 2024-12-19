let cards = document.querySelectorAll('.articles_card');
let articleWrapper = document.querySelector('.total_article');



cards.forEach( card  => {
    
card.addEventListener('click', () => {
  
    let div = document.createElement('div');
    div.classList.add('.total_article_article');
    div.innerHTML= `
    
    
    
    `
    articleWrapper.innerHTML=''
  articleWrapper.appendChild(div);

})
}  )