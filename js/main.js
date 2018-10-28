const app = function() {
    //Toggle entry types display:
    const allButton = document.querySelector('#all-button');
    const accommodationButton = document.querySelector('#accommodation-button');
    const eatingButton = document.querySelector('#eating-button');

    allButton.addEventListener('click', buttonClicked);
    accommodationButton.addEventListener('click', buttonClicked);
    eatingButton.addEventListener('click', buttonClicked);

    //Nav buttons:
    const homeButton = document.getElementById('home-button');
    homeButton.addEventListener('click', homeButtonClicked);

    const loButton = document.getElementById('lo-button');
    loButton.addEventListener('click', regionButtonClicked);

    const seButton = document.getElementById('se-button');
    seButton.addEventListener('click', regionButtonClicked);

    const swButton = document.getElementById('sw-button');
    swButton.addEventListener('click', regionButtonClicked)

    const tcButton = document.getElementById('tc-button');
    tcButton.addEventListener('click', regionButtonClicked);

    const eaButton = document.getElementById('ea-button');
    eaButton.addEventListener('click', regionButtonClicked);

    const emButton = document.getElementById('em-button');
    emButton.addEventListener('click', regionButtonClicked);

    const heButton = document.getElementById('he-button');
    heButton.addEventListener('click', regionButtonClicked);

    const neButton = document.getElementById('ne-button');
    neButton.addEventListener('click', regionButtonClicked);

    const nwButton = document.getElementById('nw-button');
    nwButton.addEventListener('click', regionButtonClicked);

    const scButton = document.getElementById('sc-button');
    scButton.addEventListener('click', regionButtonClicked);

    const waButton = document.getElementById('wa-button');
    waButton.addEventListener('click', regionButtonClicked);
}

const homeButtonClicked = function() {
  const selector = document.getElementById('selector-div')
  selector.hidden = true;

  const body = document.querySelector('.content');
  body.innerHTML = '';

  const homePageContent = document.createElement('div');
  homePageContent.id = 'homepage-content';
  homePageContent.innerHTML = '<h1>I AM HOOOOOOME!</h1>';

  const footer = document.createElement('section');
  footer.id = "footer";
  footer.innerHTML = "<footer><hr /><p>&copy; Annemarie Weitzel 2000 - 2018, All rights reserved.</p></footer>";

  body.appendChild(homePageContent);
  body.appendChild(footer);
}

//Region button handling - currently doing its thang effectively!
const regionButtonClicked = function() {
  const selector = document.getElementById('selector-div')
  selector.hidden = false;

  const regions = ['london', 'southeast', 'southwest', 'thamesandchilterns', 'eastanglia', 'eastmidlands', 'heartofengland', 'northeast', 'northwest', 'scotland', 'wales']
  regions.forEach(function(region){
    //change all sections other than the one matching this.name to hidden
    // regionDiv = document.getElementById(region); //To be implemented
    if(region !== this.name){
      // regionDiv.style.display = 'none';
      console.log(`You did not click ${region}`);
    } else {
      // regionDiv.style.display = 'block';
      console.log(`You clicked ${region}, you crazy guy!`);
    }
  }.bind(this));
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
