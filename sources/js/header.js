const nav = document.querySelector('.nav');
const toggleBtn = document.querySelector('.toggle-button');

toggleBtn.addEventListener('click', () => {
    const visibility = nav.getAttribute('data-visible');
    if (visibility === 'false') {
        nav.setAttribute('data-visible', true);
        toggleBtn.setAttribute('aria-expanded', true);
    }
    else {
        nav.setAttribute('data-visible', false);
        toggleBtn.setAttribute('aria-expanded', false);
    }
});