const favorites = [...document.getElementsByClassName('fa-bookmark')];

favorites.forEach( favorite => {
    favorite.addEventListener('click', function(event) {
        favorite.classList.toggle('fa-regular');
        favorite.classList.toggle('fa-solid');
        event.stopPropagation();
    })
});



const pages = document.querySelectorAll('.menu li');
pages.forEach( page => { 'click', function(event) {

    event.stopPropagation();
}

})

console.log(pages);