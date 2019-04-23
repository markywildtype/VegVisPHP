<?php
require('php/main.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Vegetarian and vegan accommodation, guesthouses, B&Bs, cafés, restaurants in the UK, England, Scotland and Wales. London, Middlesex, Derbyshire, Leicestershire, Lincolnshire, Northamptonshire, Nottinghamshire,
    Aberdeenshire and Moray, Scottish Borders, Dumfries & Galloway, Edinburgh, Glasgow and Central Scotland, Scottish Highlands, Western Isles, Mull & Skye,
    North Wales, Powys, South Wales, West Wales, Cornwall, Devon, Dorset (West), Somerset, Bath and Bristol, Wiltshire, Cheshire, Cumbria, Isle of Man, Lancashire, Greater Manchester, Merseyside,
    Dorset (East), Hampshire, Isle of Wight, Kent, Surrey, Sussex, Cambridgeshire, Essex, Norfolk, Suffolk, Northumberland, Tyne & Wear, Yorkshire, Bedfordshire, Berkshire, Hertfordshire, Oxfordshire,
    Gloucestershire, Herefordshire, Shropshire, Warwickshire, West Midlands, Worcestershire">
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
  <script src="js/modals.js"></script>
  <script src="js/animation.js"></script>

  <script src="php/main.php"></script>

  <!-- Contact form scripts -->
  <script src="js/captchavalidation.js"></script>
  <link rel="stylesheet" href="css/contactform.css?version=2">
<!-- End contact form scripts -->

<link rel="stylesheet" href="css/main.css?version=2">
<link rel="stylesheet" href="css/nav.css?version=2">
<link rel="stylesheet" href="css/modals.css?version=2">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Markazi+Text|Satisfy|Merriweather+Sans" rel="stylesheet">
<!--Recaptcha-->
<script src='https://www.google.com/recaptcha/api.js'></script>

<link rel="icon" href="images/vv_logo.png">
<title>Vegetarian Visitor <?php echo date('Y')?> - A guide to vegetarian and vegan accommodation and eating in the UK</title>
</head>
<body>



  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #003100; font-family: Merriweather Sans, sans-serif;">
    <a class="navbar-brand" name="home" id="home-button" href="#">
      <div id="logo-name">
        <div><img id="logo-full" src="images/vv_logo.png" alt="Vegetarian Visitor"></div>
        <div id="site-name">
          <div class="">
            <p id="veg">Vegetarian</p>
          </div>
          <div class="">
            <p id="vis">&nbsp; &nbsp; &nbsp; &nbsp;Visitor</p>
          </div>
        </div>
      </div>
    </a>

    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar content that will be hidden on smaller screens -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <!-- Nav item with dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            England
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" name="london" id="lo-button" href="#">London</a>
            <a class="dropdown-item" name="southeast" id="se-button" href="#">South and South East</a>
            <a class="dropdown-item" name="southwest" id="sw-button" href="#">South West</a>
            <a class="dropdown-item" name="thamesandchilterns" id="tc-button" href="#">Thames and Chilterns</a>
            <a class="dropdown-item" name="eastanglia" id="ea-button" href="#">East Anglia</a>
            <a class="dropdown-item" name="eastmidlands" id="em-button" href="#">East Midlands</a>
            <a class="dropdown-item" name="heartofengland" id="he-button" href="#">Heart of England</a>
            <a class="dropdown-item" name="northeast" id="ne-button" href="#">North East</a>
            <a class="dropdown-item" name="northwest" id="nw-button" href="#">North West</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" name="scotland" id="sc-button" href="#">Scotland</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" name="wales" id="wa-button" href="#">Wales</a>
        </li>

      <li class="nav-item">
        <a class="nav-link contact-button" name="contact" href="#">Contact</a>
      </li>
    </ul>

</div>

<!--      <div id="selector-div" hidden>-->
<!--          <div class="btn-group btn-group-toggle" id="selector" data-toggle="buttons">-->
<!--              <label class="btn btn-secondary active" id="all-button">-->
<!--                  <input type="radio" name="All" id="all-button" autocomplete="off" checked> All-->
<!--              </label>-->
<!--              <label class="btn btn-secondary" id="accommodation-button">-->
<!--                  <input type="radio" name="Accommodation" id="accommodation-button" autocomplete="off"> Accommodation-->
<!--              </label>-->
<!--              <label class="btn btn-secondary" id="eating-button">-->
<!--                  <input type="radio" name="Eating" id="option3" autocomplete="off"> Eating-->
<!--              </label>-->
<!--          </div>-->
<!--      </div>-->

</nav>

<div class="container body-content">

  <div id="selector-div" hidden>
    <div class="btn-group btn-group-toggle" id="selector" data-toggle="buttons">
      <label class="btn btn-secondary active" id="all-button">
        <input type="radio" name="All" id="all-button" autocomplete="off" checked> All
      </label>
      <label class="btn btn-secondary" id="accommodation-button">
        <input type="radio" name="Accommodation" id="accommodation-button" autocomplete="off"> Accommodation
      </label>
      <label class="btn btn-secondary" id="eating-button">
        <input type="radio" name="Eating" id="option3" autocomplete="off"> Eating
      </label>
    </div>
  </div>

  <section class="content">

    <div id="homepage-content">

      <h2>Welcome to Vegetarian Britain!</h2>
      <p>Vegetarian Visitor is an annually updated guide to accommodation and eateries in Britain which take catering for vegetarians and vegans seriously.</p>
      <p>With the increasing emphasis on healthy eating, more and more people are looking for places to stay and eat that provide for vegetarians. Here we list B&Bs, guest houses, hotels, restaurants, cafés and pubs that understand vegetarian and vegan requirements and want to cater for them properly, by providing a variety of tasty and imaginative dishes for breakfast, lunch and evening meals.</p>
      <p>Britain has been home to many vegetarian VIPs and celebrities - Paul McCartney, Sir Isaac Newton, H.G. Wells, Sting, Tony Benn, Kate Bush, Sir John Gielgud and Jude Law, to name but a few - and its eateries serve a truly international range of food, from simple English 'pub grub' through Caribbean, Mexican, Indian, Thai and Chinese to French haute cuisine.</p>
      <p>As this guide shows, there is no reason why vegetarians and vegans should miss out!</p>
      <hr />
      <p>Vegetarian Visitor was for many years, until 2012, published as an award-winning annual guidebook. Since 2001 it has also been a website.</p>
      <p>Suggestions or requests for inclusion are very welcome. Please use the <a class="contact-button" id="contact-link" href="#">contact form</a> giving as many details as possible, particularly the establishment's email address and/or phone number.</p>
    </div>

    <div id="contact-content" hidden>

      <form name="contactform" method="post" action="php/contactform.php" onsubmit="return submitUserForm();">
        <table class="contactform">
          <tbody id="contact-form">
            <tr style="color: rgb(153, 255, 153);">
              <td>
                <div class="contactformheader">Get in touch!</div>
              </td>
            </tr>
            <tr>
              <td>
                <input name="name" id="Full_Name" maxlength="80" class="input" type="text" placeholder="*Name" required>
              </td>
            </tr>
            <tr>
              <td>
                <input name="mail" id="Email_Address" maxlength="100" class="input" type="text" placeholder="*Email Address" required>
              </td>
            </tr>
            <tr>
              <td>
                <input name="phone" id="Telephone_Number" maxlength="100" class="input" type="text" placeholder="Phone Number">
              </td>
            </tr>
            <tr>
              <td>
                <textarea class="input-text" name="message" id="Your_Message" maxlength="2000" placeholder="*Message" required></textarea>
              </td>
            </tr>
            <tr>
                <td>
                    <div align="center" class="g-recaptcha" data-sitekey="6LfTeXgUAAAAAKDFlzTM2QrxqrZSsKgI_cpftQ0u" data-callback="verifyCaptcha"></div>
                </td>
            </tr>
            <tr style="color: rgb(153, 255, 153);">
              <td colspan="2" style="text-align: center;">
                <button type="submit" name="submit" id='submit-button'>Send Message</button>
              </td>
            </tr>
          </tbody></table>
        </form>

        <div id="submit-modal">
            <div id="submit-modal-content">
                <h1>Thanks for your message</h1>
                <h2>We'll be in touch soon!</h2>
            </div>
        </div>


    </div>

      <div id="region-content" hidden>

          <div id="london">
              <?php $region = new RegionTools($lonArray, 'London and Middlesex', 'london');
              echo $region->printRegion() ?>
          </div>

          <div id="thamesandchilterns">
              <?php $region = new RegionTools($tcArray, 'Thames and Chilterns', 'thamesandchilterns');
              echo $region->printRegion() ?>
          </div>

          <div id="southeast">
              <?php $region = new RegionTools($seArray, 'South and South East England', 'southeast');
          echo $region->printRegion() ?>
          </div>

          <div id="southwest">
              <?php $region = new RegionTools($swArray, 'South West England', 'southwest');
          echo $region->printRegion() ?>
          </div>

          <div id="eastanglia">
              <?php $region = new RegionTools($eaArray, 'East Anglia', 'eastanglia');
          echo $region->printRegion() ?>
          </div>

          <div id="eastmidlands">
              <?php $region = new RegionTools($emArray, 'East Midlands', 'eastmidlands');
              echo $region->printRegion() ?>
          </div>

          <div id="heartofengland">
              <?php $region = new RegionTools($heArray, 'Heart of England', 'heartofengland');
              echo $region->printRegion() ?>
          </div>

          <div id="northeast">
              <?php $region = new RegionTools($neArray, 'North East England', 'northeast');
          echo $region->printRegion() ?>
          </div>

          <div id="northwest">
              <?php $region = new RegionTools($nwArray, 'North West England', 'northwest');
          echo $region->printRegion() ?>
          </div>

          <div id="scotland">
              <?php $region = new RegionTools($scotlandArray, 'Scotland', 'scotland');
          echo $region->printRegion() ?>
          </div>

          <div id="wales">
              <?php $region = new RegionTools($walesArray, 'Wales', 'wales');
              echo $region->printRegion() ?>
          </div>

      </div>

      <button onclick="topFunction()" id="top-button" title="Go to top">&#x02191</button>

      <section id="footer">
        <footer>
          <hr />
          <p>&copy; Annemarie Weitzel 2000 - <?php echo date('Y')?>, All rights reserved.</p>
            <p>Site design by <a href="mailto:blanfordmark@gmail.com">Mark Blanford</a> &copy; 2018</p>
        </footer>
      </section>
    </div>

  </section>

</body>
</html>
