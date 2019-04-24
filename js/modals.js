const modalApp = function() {
  // Get the modal
  var modals = document.querySelectorAll('.code-modal');

  // Get the button that opens the modal
  var codeButtons = document.querySelectorAll(".code-explanation");

  // Get the <span> element that closes the modal
  var closeButtons = document.querySelectorAll(".close");

  let currentModal;

  let body = document.body;

  // When the user clicks the button, open the modal
  codeButtons.forEach(function(codeButton){
    codeButton.addEventListener('click', function(){
      modals.forEach(function(modal){
        if (codeButton.name === modal.id){
          currentModal = modal;
          modal.style.display = "block";
          body.classList.add('modal-open');
        }
      });
    });
  });

    // When the user clicks on <span> (x), close the modal
    closeButtons.forEach(function(closeButton){
      closeButton.addEventListener('click', function() {
        currentModal.style.display = "none";
        currentModal = null;
        body.classList.remove('modal-open');
      });
    });

    // When the user clicks anywhere outside of the modal, close it
    window.addEventListener('click', function() {
      if (event.target === currentModal) {
        currentModal.style.display = "none";
        body.classList.remove('modal-open');
      }
    });

    // Contact Submit button modal
    const contactSubmitButton = document.getElementById('submit-button');
    contactSubmitButton.addEventListener('click', contactSubmitButtonClicked);

    // Selector modal
    var selectorModalButton = document.getElementById('selector-modal-button');

    var selector = document.getElementById('selector');

    if (window.innerWidth <= 600) {
        hideSelector(selectorModalButton, selector)
    } else {

        selectorModalButton.hidden = true;
        selector.style.left = '0';
        selector.style.display = 'block';
    }
};

const contactSubmitButtonClicked = function() {
    if (checkRequiredFields()) {
        const submitButtonModal = document.querySelector('#submit-modal');

        submitButtonModal.style.display = "block";
    }
};

const checkRequiredFields = function() {
    let inputsArray = [];

    inputsArray.push(document.getElementById('Full_Name').value);
    inputsArray.push(document.getElementById('Email_Address').value);
    inputsArray.push(document.getElementById('Your_Message').value);

    return !inputsArray.includes("");
};

const hideSelector = function(selectorModalButton, selector) {
    var openIcon = document.getElementById('selector-out');

    var closedIcon = document.getElementById('selector-in');

    let modalOut = false;

    selectorModalButton.addEventListener('click', function() {
        if (!modalOut) {
            console.log(window.innerWidth);
            selectorModalButton.style.left = '2.7rem';
            openIcon.hidden = true;
            closedIcon.hidden = false;
            selector.display = 'none';
            selector.style.webkitAnimation = 'slideIn 0.4s';
            selector.style.left = '0';
            modalOut = true;
        } else {
            console.log(window.innerWidth);
            selectorModalButton.style.left = '0';
            openIcon.hidden = false;
            closedIcon.hidden = true;
            selector.style.webkitAnimation = 'slideOut 0.4s';
            selector.display = 'block';
            selector.style.left = '-2.7rem';
            modalOut = false;
        }
    })
};

document.addEventListener('DOMContentLoaded', modalApp);
