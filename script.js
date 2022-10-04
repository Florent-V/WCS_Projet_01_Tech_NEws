const favorites = [...document.getElementsByClassName('fa-bookmark')];

favorites.forEach( favorite => {
    favorite.addEventListener('click', function(event) {
        favorite.classList.toggle('fa-regular');
        favorite.classList.toggle('fa-solid');
        event.stopPropagation();
    })
});


const sizeAnimation = [
    {
        width: 103,
        left: 8
    },
    {
        width: 126,
        left: 127
    },
    {
        width: 150,
        left: 260
    },
    {
        width: 171.5,
        left: 437
    },
];

const pages = document.querySelectorAll('.menu li');
const hover = {};
console.log(pages);


for (let i=0; i<pages.length; i++) {
    console.log(pages[i]);
    hover[pages[i]] = sizeAnimation[i];
};



console.log(hover);