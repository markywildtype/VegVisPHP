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

  const contactSubmitButton = document.getElementById('submit-button');
  contactSubmitButton.addEventListener('click', contactSubmitButtonClicked);

  let submitButtonClicked = false;
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

  const regions = ['london', 'southeast', 'southwest', 'thamesandchilterns', 'eastanglia', 'eastmidlands', 'heartofengland', 'northeast', 'northwest', 'scotland', 'wales']
  regions.forEach(function(region){
    //change all sections other than the one matching this.name to hidden
    // regionDiv = document.getElementById(region); //To be implemented
    if(region !== this.name){
      // regionDiv.style.display = 'none';
    } else {
      // regionDiv.style.display = 'block';
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
        // console.log(accomSubregionHeading.hidden);
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

const contactSubmitButtonClicked = function() {
  if (checkRequiredFields()) {
    alert("Thanks for getting in touch - we'll get back to you soon!");
  }
}

const checkRequiredFields = function() {
  let inputsArray = []

  inputsArray.push(document.getElementById('Full_Name').value);
  inputsArray.push(document.getElementById('Email_Address').value);
  inputsArray.push(document.getElementById('Your_Message').value);

  let allFieldsFilled = false;

  if(inputsArray.includes("")) {
    allFieldsFilled = false;
  } else {
    allFieldsFilled = true;
  }

  return allFieldsFilled;
}


document.addEventListener('DOMContentLoaded', app);
