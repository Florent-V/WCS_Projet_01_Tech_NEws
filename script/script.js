const favorites = [...document.getElementsByClassName('fa-bookmark')];

favorites.forEach( favorite => {
    favorite.addEventListener('click', function(event) {
        favorite.classList.toggle('fa-regular');
        favorite.classList.toggle('fa-solid');
        event.stopPropagation();
    })
});


const pages = ['index', 'publication', 'about_us', 'contact_us'];

const updateActive = pages => {
    let page = window.location.pathname.replace('/', ' ').replace('.',' ').split(' ');
    page = page[page.length-2];
    let index = pages.indexOf(page);
    const menu = document.querySelectorAll('.menu li');
    for (let i=0; i<menu.length; i++) {
        (i === index) ? menu[i].classList.add('active') : console.log('a')/*menu[i].classList.remove('active')*/;
    };
}

updateActive(pages);
