<?php
require('php/main.php');
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <script src="js/contactformvalidation.js"></script>
  <script>
  required.add('Full_Name','NOT_EMPTY','Full Name');
  required.add('Email_Address','EMAIL','Email Address');
  required.add('Your_Message','NOT_EMPTY','Your Message');
  required.add('AntiSpam','NOT_EMPTY','Anti-Spam Question');
</script>
<link rel="stylesheet" href="css/contactform.css?version=2">
<!-- End contact form scripts -->

<link rel="stylesheet" href="css/main.css?version=2">
<link rel="stylesheet" href="css/nav.css?version=2">
<link rel="stylesheet" href="css/modals.css?version=2">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Markazi+Text|Satisfy|Merriweather+Sans" rel="stylesheet">
<link rel="icon" href="images/vv_logo.png">
<title>Vegetarian Visitor 2018</title>
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

        <!-- <li class="nav-item">
        <a class="nav-link" href="@Url.Action("Offers", "/VegVis")">Offers</a>
      </li> -->

      <li class="nav-item">
        <a class="nav-link contact-button" name="contact" href="#">Contact</a>
      </li>
    </ul>

    <!-- <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form> -->
</div>

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

      <form name="contactform" method="post" action="php/contactform.php" onsubmit="return validate.check(this)">
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
            <tr hidden>
              <td>
                <input name="antispam" id="AntiSpam" type="text" value="25">
              </td>
            </tr>
            <tr style="color: rgb(153, 255, 153);">
              <td colspan="2" style="text-align: center;">
                <button type="submit" name="submit" id='submit-button'>Send Message</button>
              </td>
            </tr>
          </tbody></table>
        </form>
      </div>

      <div id="region-content" hidden>

        <div id="eastmidlands" class="region-div">
          <h1>East Midlands</h1>
          <hr />
          <img class="region-photo" alt="Restaurants Hotels eating out in East Midlands vegetarian and vegan" src="images/eastmidlands/eastmidlands.jpg" />
          <div class=description>
            <?php echo $regions['East Midlands']['introduction'] ?>
          </div>
          <hr />
          <?php foreach ($regions['East Midlands']['subregions'] as $subRegion) { ?>
            <a href="#<?php echo $subRegion ?>"><?php echo $subRegion ?></a>
          <?php } ?>
          <h2 id="hidden-accommodation-heading" hidden>Accommodation</h2>
          <h2 id="hidden-eating-heading" hidden>Eating</h2>
          <?php foreach ($emArray as $subRegionName => $regionListings) { ?>
            <?php if (count($regionListings['Accommodation']) > 0) { ?>
              <h4 class="accommodation-subregion-heading"><a name="<?php echo $subRegionName ?>" class="anchor"></a><?php echo $subRegionName ?></h4>

              <div class="accommodation">

                <h2 class="subregion-accommodation-heading">Accommodation</h2>
                <?php foreach ($regionListings['Accommodation'] as $accommodationListing) { ?>
                  <article class="entry">
                    <h4><?php echo $accommodationListing['name'] ?></h4>
                    <p>tel: <a href='tel:+44<?php echo (int)str_replace(' ', '', $accommodationListing['tel']) ?>' class="phone-number"><?php echo $accommodationListing['tel']; ?></a></p>
                    <p><?php echo $accommodationListing['address']?></p>
                    <p>email: <a href="mailto:<?php echo $accommodationListing['email'] ?>"><?php echo $accommodationListing['email'] ?></a></p>
                    <p>website: <a target="_blank" href="http://<?php echo $accommodationListing['website']?>"><?php echo $accommodationListing['website']?></a></p>
                    <a href="http://<?php echo $accommodationListing['website']?>" target=_blank><img class="accom-photo" alt="<?php echo $accommodationListing['name']?>" src="<?php echo $accommodationListing['image']?>" /></a>
                    <div class="description">
                      <?php echo $accommodationListing['description'] ?>
                    </div>
                    <p>
                      <?php
                      $codeExplanations = []; ?>
                      <button type="button" name="<?php echo $accommodationListing['name'] ?>" class="code-explanation">
                        <?php foreach($accommodationListing['codes'] as $code) {
                          $codeExplanations[$code] = $allCodes[$code];
                          echo "$code ";
                        }; ?>

                      </button>

                      <div id="<?php echo $accommodationListing['name'] ?>" class="modal code-modal">
                        <div class="modal-content">
                          <h2><?php echo $accommodationListing['name'] ?> <span class="close">&times;</span></h2>
                          <?php foreach($codeExplanations as $codeKey => $codeExplanation) { ?>
                            <p><strong class="green-code"><?php echo "$codeKey " ?></strong><?php echo " $codeExplanation\n" ?></p>
                          <?php } ?>
                        </div>
                      </div>

                    </p>

                    <button type="button" class="offers-button"><?php echo $accommodationListing['offers']?></button>

                    <div class="offer"><?php echo $accommodationListing['offer text']?></div>

                  </article>
                </div>
              <?php }
            }
            if (count($regionListings['Eating']) > 0) { ?>
              <h4 class="eating-subregion-heading"><a name="<?php echo $subRegionName ?>" class="anchor"></a><?php echo $subRegionName ?></h4>

              <div class="eating">
                <h2 class="subregion-eating-heading">Eating</h2>
                <?php foreach ($regionListings['Eating'] as $eatingListing) { ?>
                  <article class="entry">
                    <?php if ($eatingListing['multiline']) { ?>
                      <p><?php echo $eatingListing['name'] ?></p>
                      <p>tel: <?php echo $eatingListing['tel']?></p>
                      <p><?php echo $eatingListing['address']?></p>
                      <p><?php echo $eatingListing['description'] ?></p>
                      <p><?php $codeExplanations = []; ?>
                        <button type="button" name="<?php echo $eatingListing['name'] ?>" class="code-explanation">
                          <?php foreach($eatingListing['codes'] as $code) {
                            $codeExplanations[$code] = $allCodes[$code];
                            echo "$code ";
                          }; ?>
                        </button></p>

                        <div id="<?php echo $eatingListing['name'] ?>" class="modal code-modal">
                          <div class="modal-content">
                            <h2><?php echo $eatingListing['name'] ?> <span class="close">&times;</span></h2>
                            <?php foreach($codeExplanations as $codeKey => $codeExplanation) { ?>
                              <p><strong class="green-code"><?php echo "$codeKey " ?></strong><?php echo " $codeExplanation\n" ?></p>
                            <?php } ?>
                          </div>
                        </div>

                      <?php } else { ?>

                          <?php echo $eatingListing['name']; ?>,
                          tel <a href='tel:+44<?php echo (int)str_replace(' ', '', $eatingListing['tel']) ?>' class="phone-number"><?php echo $eatingListing['tel']; ?></a>,
                          <?php echo $eatingListing['address']; ?>. &nbsp;
                          <?php
                          $codeExplanations = []; ?>
                          <button type="button" name="<?php echo $eatingListing['name'] ?>" class="code-explanation">
                            <?php foreach($eatingListing['codes'] as $code) {
                              $codeExplanations[$code] = $allCodes[$code];
                              echo "$code ";
                            }; ?>
                        </button>

                        <div id="<?php echo $eatingListing['name'] ?>" class="modal code-modal">
                          <div class="modal-content">
                            <h2><?php echo $eatingListing['name'] ?> <span class="close">&times;</span></h2>
                            <?php foreach($codeExplanations as $codeKey => $codeExplanation) { ?>
                              <p><strong class="green-code"><?php echo "$codeKey " ?></strong><?php echo " $codeExplanation\n" ?></p>
                            <?php } ?>
                          </div>
                        </div>

                      <?php } ?>
                    </article>
                  <?php }; ?>
                </div>
              <?php }
            }
            ?>
          </div>





        </div>

        <section id="footer">
          <footer>
            <hr />
            <p>&copy; Annemarie Weitzel 2000 - <?php echo date('Y')?>, All rights reserved.</p>
          </footer>
        </section>
      </div>

    </section>

  </body>
  </html>
