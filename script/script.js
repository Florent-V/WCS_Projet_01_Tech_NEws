
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


/* Ajout de commentaire via le formulaire */

form = document.getElementById('add-comment');

form.addEventListener('submit', function(event) {
    event.preventDefault();
    addComment();
})

function addComment() {
    const entriesField = [];
    entriesField.push(document.getElementById('pseudo'));
    entriesField.push(document.getElementById('commentary'));
    const entriesContent = {};
    for (let i of entriesField) {
        entriesContent[i.id] = i.value;
    };
    let isValid = checkTextEntries(entriesContent).status;
    if (isValid) {
        createComment(entriesContent);
        for (let i of entriesField) {
            i.value = "";
        }
    } else {
        displayErrorMessage();
    }

    

}

function checkTextEntries(entriesContent) {
    let flag = true;
    for (let field in entriesContent) {
        if (entriesContent[field].trim() === "" || entriesContent[field].includes('>')) {
            flag = false;
        }
    }
    entriesContent.status = flag;
    return entriesContent;

} 


function createComment(entriesContent) {
    let section = document.createElement('section');
    let divInfos = document.createElement('div');
    let img = document.createElement('img');
    let spanPseudo = document.createElement('span');
    let spanCommentDate = document.createElement('span');
    let pContent = document.createElement('p');

    section.classList.add('comment');
    divInfos.classList.add('comment-infos');
    img.setAttribute('src', "./img/default.png");
    img.setAttribute('alt', 'photo de profil');
    spanPseudo.classList.add('comment-pseudo');
    spanCommentDate.classList.add('comment-date');
    pContent.classList.add('comment-content');

    spanPseudo.innerText = entriesContent.pseudo;
    spanCommentDate.innerText = "Aujourd'hui";
    pContent.innerText = entriesContent.commentary;

    divInfos.appendChild(img);
    divInfos.appendChild(spanPseudo);
    divInfos.appendChild(spanCommentDate);
    section.appendChild(divInfos);
    section.appendChild(pContent);

    let last = document.querySelector('.comment');

    document.querySelector('main').insertBefore(section, last);



};


function displayErrorMessage() {
    let span = document.querySelectorAll('label span');
    for (let i of span) {
        i.style.display = 'initial';
    }
}