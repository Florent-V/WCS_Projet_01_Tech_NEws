
/* Changement icône bookmark on click */

const favorites = [...document.getElementsByClassName('fa-bookmark')];

favorites.forEach( favorite => {
    favorite.addEventListener('click', function(event) {
        favorite.classList.toggle('fa-regular');
        favorite.classList.toggle('fa-solid');
        event.stopPropagation();
    })
});

/* Marquage de l'onglet de la page courante */

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

/* Bouton Top */

console.log(document.body.scrollTop)


const scrollFunction = () => {
    if (document.documentElement.scrollTop > 200 &&( (document.documentElement.scrollTop + document.documentElement.clientHeight) <  (document.documentElement.scrollHeight-100))) {
        document.getElementById('toTop').style.display = "block";
    } else {
        document.getElementById('toTop').style.display = "none";
    }
}

window.onscroll = function() {scrollFunction()};