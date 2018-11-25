const modalApp = function() {
  // Get the modal
  var modals = document.querySelectorAll('.code-modal');

  // Get the button that opens the modal
  var codeButtons = document.querySelectorAll(".code-explanation");

  // Get the <span> element that closes the modal
  var closeButtons = document.querySelectorAll(".close");

  let currentModal;

  // When the user clicks the button, open the modal
  codeButtons.forEach(function(codeButton){
    codeButton.addEventListener('click', function(){
      modals.forEach(function(modal){
        if (codeButton.name === modal.id){
          currentModal = modal;
          modal.style.display = "block";
        }
      });
    });
  });

    // When the user clicks on <span> (x), close the modal
    closeButtons.forEach(function(closeButton){
      closeButton.addEventListener('click', function() {
        currentModal.style.display = "none";
        currentModal = null;
      });
    });

    // When the user clicks anywhere outside of the modal, close it
    window.addEventListener('click', function() {
      if (event.target == currentModal) {
        currentModal.style.display = "none";
      }
    });

  }

  document.addEventListener('DOMContentLoaded', modalApp);
