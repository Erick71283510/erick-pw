const icon = document.querySelectorAll('.bi-heart');
let post = document.querySelectorAll('.post');
const backTop = document.querySelector('.backToTop');

function backToTop(){
    if(window.scrollY >= 500){
        backTop.classList.add('show');
    } else {
        backTop.classList.remove('show');
    }
}

icon.forEach(element => {
    element.addEventListener('click', () => {
        if (element.classList.contains('bi-heart')){
            element.classList.replace('bi-heart', 'bi-heart-fill');
        } else {
            element.classList.replace('bi-heart-fill', 'bi-heart');
        }
    });
});

post = ScrollReveal({
    origin: "bottom",
    distance: "50px",
    duration: 2000,
    reset: false
});

post.reveal(
    '.post', {interval: 500}
)

window.addEventListener('scroll', () => {
    backToTop();
});