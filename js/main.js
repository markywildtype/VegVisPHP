const app = function() {
  //Toggle entry types display:
  const allButton = document.querySelector('#all-button');
  const accommodationButton = document.querySelector('#accommodation-button');
  const eatingButton = document.querySelector('#eating-button');

  allButton.addEventListener('click', selectorButtonClicked);
  accommodationButton.addEventListener('click', selectorButtonClicked);
  eatingButton.addEventListener('click', selectorButtonClicked);

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

  const contactButtons = document.getElementsByClassName('contact-button');
  contactButtons[0].addEventListener('click', contactButtonClicked);
  contactButtons[1].addEventListener('click', contactLinkClicked);

  let submitButtonClicked = false;

  const infoButtons = document.querySelectorAll('.info-button');
  infoButtons.forEach(function(infoButton){
      infoButton.addEventListener('click', infoButtonClicked)
  });

}

const homeButtonClicked = function() {
  const selector = document.getElementById('selector-div')
  selector.hidden = true;

  const homepageContent = document.getElementById('homepage-content');
  homepageContent.style.display = 'block';

  const regionContent = document.getElementById('region-content');
  regionContent.hidden = true;

  const contactContent = document.getElementById('contact-content');
  contactContent.hidden = true;
}

const regionButtonClicked = function() {
  if(document.documentElement.clientWidth < 992) {
    const toggle = document.querySelector('.navbar-toggler').click();
  }

  const homepageContent = document.getElementById('homepage-content');
  homepageContent.style.display = 'none';

  const selector = document.getElementById('selector-div')
  selector.hidden = false;

  const regionContent = document.getElementById('region-content');
  regionContent.hidden = false;

  const contactContent = document.getElementById('contact-content');
  contactContent.hidden = true;

  const emDiv = document.getElementById('eastmidlands');
  const londonDiv = document.getElementById('london');
  const southEastDiv = document.getElementById('southeast');
  const southWestDiv = document.getElementById('southwest');
  const eastAngliaDiv = document.getElementById('eastanglia');
  const thamesAndChilternsDiv = document.getElementById('thamesandchilterns');
  const northEastDiv = document.getElementById('northeast');
  const northWestDiv = document.getElementById('northwest');
  const heartOfEnglandDiv = document.getElementById('heartofengland');
  const scotlandDiv = document.getElementById('scotland');
  const walesDiv = document.getElementById('wales');

  let regionDivs = [
      emDiv,
      londonDiv,
      southEastDiv,
      southWestDiv,
      eastAngliaDiv,
      thamesAndChilternsDiv,
      northEastDiv,
      northWestDiv,
      heartOfEnglandDiv,
      scotlandDiv,
      walesDiv
  ];

    regionDivs.forEach(function(regionDiv) {
      if(regionDiv.id !== this.name) {
          regionDiv.hidden = true;
      } else {
          regionDiv.hidden = false;
      }
  }.bind(this));
}



let clicked = false;

const infoButtonClicked = function() {

    const infoButtons = document.querySelectorAll('.info-button');

    console.log(clicked);
    console.log();
    console.log();

    infoButtons.forEach(function(infoButton){
      if(infoButton.id === this.id) {
          if(!clicked) {
              infoButton.src = 'images/info-clicked.png';
              clicked = true;
          } else {
              infoButton.src = 'images/info.png';
              clicked = false;
          }
      }

    }.bind(this));
}



const selectorButtonClicked = function() {
  const accomElements = document.querySelectorAll('.accommodation');
  const eatingElements = document.querySelectorAll('.eating');

  const hiddenAccomHeading = document.getElementById('hidden-accommodation-heading');
  const hiddenEatingHeading = document.getElementById('hidden-eating-heading');

  const subregionAccomHeadings = document.getElementsByClassName('subregion-accommodation-heading');
  const subregionEatingHeadings = document.getElementsByClassName('subregion-eating-heading');

  const eatingSubregionHeadings = document.getElementsByClassName('eating-subregion-heading');
  const accomSubregionHeadings = document.getElementsByClassName('accommodation-subregion-heading');

  switch (this.id) {
    case 'all-button':
      for(let accomElement of accomElements) {
        accomElement.style.display = 'block';
      }
      for(let eatingElement of eatingElements) {
        eatingElement.style.display = 'block';
      }
      for(let subregionAccomHeading of subregionAccomHeadings) {
        subregionAccomHeading.hidden = false;
      }
      for(let subregionEatingHeading of subregionEatingHeadings) {
        subregionEatingHeading.hidden = false;
      }
      for(let eatingSubregionHeading of eatingSubregionHeadings) {
        eatingSubregionHeading.hidden = false;
      }
      for(let accomSubregionHeading of accomSubregionHeadings) {
        accomSubregionHeading.hidden = false;
      }
      hiddenAccomHeading.hidden = true;
      hiddenEatingHeading.hidden = true;
      break;
    case 'accommodation-button':
      for(let accomElement of accomElements) {
        accomElement.style.display = 'block';
      }
      for(let eatingElement of eatingElements) {
        eatingElement.style.display = 'none';
      }
      for(let subregionAccomHeading of subregionAccomHeadings) {
        subregionAccomHeading.hidden = true;
      }
      for(let eatingSubregionHeading of eatingSubregionHeadings) {
        eatingSubregionHeading.hidden = true;
      }
      for(let accomSubregionHeading of accomSubregionHeadings) {
          accomSubregionHeading.hidden = false;
      }
      hiddenAccomHeading.hidden = false;
      hiddenEatingHeading.hidden = true;
      break;
    case 'eating-button':
      for(let accomElement of accomElements) {
        accomElement.style.display = 'none';
      }
      for(let eatingElement of eatingElements) {
        eatingElement.style.display = 'block';
      }
      for(let subregionEatingHeading of subregionEatingHeadings) {
        subregionEatingHeading.hidden = true;
      }
      for(let eatingSubregionHeading of eatingSubregionHeadings) {
        eatingSubregionHeading.hidden = false;
      }
      for(let accomSubregionHeading of accomSubregionHeadings) {
        accomSubregionHeading.hidden = true;
      }
      hiddenAccomHeading.hidden = true;
      hiddenEatingHeading.hidden = false;
      break;
    default:
    break;
  }
}

const contactButtonClicked = function() {
  if(document.documentElement.clientWidth < 992) {
    const toggle = document.querySelector('.navbar-toggler').click();
  }
  contactLinkClicked();
}

const contactLinkClicked = function() {
  const selector = document.getElementById('selector-div')
  selector.hidden = true;

  const contactContent = document.getElementById('contact-content');
  contactContent.hidden = false;

  const regionContent = document.getElementById('region-content');
  regionContent.hidden = true;

  const homepageContent = document.getElementById('homepage-content');
  homepageContent.style.display = 'none';
}

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        document.getElementById("top-button").style.display = "block";
    } else {
        document.getElementById("top-button").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

document.addEventListener('DOMContentLoaded', app);
