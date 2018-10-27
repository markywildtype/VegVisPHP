const app = function() {

    const allButton = document.querySelector('#all-button');
    const accommodationButton = document.querySelector('#accommodation-button');
    const eatingButton = document.querySelector('#eating-button');

    allButton.addEventListener('click', buttonClicked);
    accommodationButton.addEventListener('click', buttonClicked);
    eatingButton.addEventListener('click', buttonClicked);

}


const buttonClicked = function() {
    const accomElements = document.querySelector('.accommodation');
    const eatingElements = document.querySelector('.eating');

    switch (this.id) {
        case 'all-button':
            accomElements.style.display = 'block';
            eatingElements.style.display = 'block';
            break;
        case 'accommodation-button':
            accomElements.style.display = 'block';
            eatingElements.style.display = 'none';
            break;
        case 'eating-button':
            accomElements.style.display = 'none';
            eatingElements.style.display = 'block';
            break;
        default:
            break;
    }

}



document.addEventListener('DOMContentLoaded', app);
