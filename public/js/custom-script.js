/**
 * VARIABLES
 */
const backToTopBtn = document.querySelector('#up-btn');
const repairCards = document.querySelectorAll('.--repair-cards');
const productCards = document.querySelectorAll('.--product-card');

/**
 * FUNCTIONS
 */
window.onscroll = () => {
    if(document.body.scrollTop > 300 || document.documentElement.scrollTop >300){

        backToTopBtn.style.display = "block";
    }else{
        backToTopBtn.style.display = "none";
    }
}

const backToTop = () => {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

const learnMore = (e) => {
    const infoBox = e.target.querySelector('.--repair-info');
    infoBox.style.display = 'block';
};

const unlearnMore = (e) => {
    const infoBox = e.target.querySelector('.--repair-info');
    infoBox.style.display = 'none';
};

const showReserveBtn = (e) => {
    const reserveBtn = e.target.querySelector('.--link-btn-outline-green');
    reserveBtn.style.display = 'block';
};

const hideReserveBtn = (e) => {
    const reserveBtn = e.target.querySelector('.--link-btn-outline-green');
    reserveBtn.style.display = 'none';
};

/**
 * EVENT LISTENERS
 */
backToTopBtn.addEventListener('click', backToTop);
repairCards.forEach((element) => {
    element.addEventListener('mouseenter', learnMore);
    element.addEventListener('mouseleave', unlearnMore);
});
productCards.forEach((element) => {
    element.addEventListener('mouseenter', showReserveBtn);
    element.addEventListener('mouseleave', hideReserveBtn);
});
