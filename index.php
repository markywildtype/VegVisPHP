<?php
require('php/main.php');
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
  <script src="php/main.php"></script>

  <!-- Contact form scripts -->
  <script src="js/contactformvalidation.js"></script>
  <script>
  required.add('Full_Name','NOT_EMPTY','Full Name');
  required.add('Email_Address','EMAIL','Email Address');
  required.add('Your_Message','NOT_EMPTY','Your Message');
  required.add('AntiSpam','NOT_EMPTY','Anti-Spam Question');
  </script>
  <link rel="stylesheet" href="css/contactform.css">
  <!-- End contact form scripts -->

  <link rel="stylesheet" href="css/main.css?version=2">
  <link rel="stylesheet" href="css/nav.css?version=2">
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
      <p>With the increasing emphasis on healthy eating, more and more people are looking for places to stay and eat that provide for vegetarians. Here we list B&Bs, guest houses, hotels, restaurants, cafés and pubs that know what vegetarians' and vegans' requirements are and want to cater for them properly, by providing a variety of tasty and imaginative dishes for breakfast, lunch and evening meals.</p>
      <p>Britain has been home to many vegetarian VIPs and celebrities - Paul McCartney, Sir Isaac Newton, H.G. Wells, Sting, Tony Benn, Kate Bush, Sir John Gielgud and Jude Law, to name but a few - and its eateries serve a truly international range of food, from simple English 'pub grub' through Caribbean, Mexican, Indian, Thai and Chinese to French haute cuisine.</p>
      <p>As this guide shows, there is no reason why vegetarians and vegans should miss out!</p>
      <hr />
      <p>Vegetarian Visitor was for many years, until 2012, published as an award-winning annual guidebook. Since 2001 it has also been a website.</p>
      <p>Suggestions for inclusion are very welcome. Please use the <a class="contact-button" id="contact-link" href="#">contact form</a> and give as many details as possible, particularly the establishment's email address and/or phone number.</p>
    </div>

    <div id="contact-content" hidden>
      <!-- <h1>CONTACT FORM TO GO HERE!</h1> -->

      <form name="contactform" method="post" action="contactformprocess.php" onsubmit="return validate.check(this)">
        <table style="background-color: rgb(0, 102, 0);" class="contactform">
          <tbody id="contact-form">
            <tr style="color: rgb(153, 255, 153);">
              <td>
                <div class="contactformheader">Get in touch!</div>
              </td>
            </tr>
            <tr>
              <!-- <td valign="top"> -->
              <td>
                <input name="Full_Name" id="Full_Name" maxlength="80" class="input" type="text" placeholder="Name (Required)" required>
              </td>
            </tr>
            <tr>
              <!-- <td valign="top"> -->
              <td>
                <input name="Email_Address" id="Email_Address" maxlength="100" class="input" type="text" placeholder="Email Address (Required)" required>
              </td>
            </tr>
            <tr>
              <!-- <td valign="top"> -->
              <td>
                <!-- <input name="Telephone_Number" id="Telephone_Number" maxlength="100" class="input" type="text" placeholder="Phone Number"> -->
                <input maxlength="100" class="input" type="text" placeholder="Phone Number">
              </td>
            </tr>
            <tr>
              <!-- <td valign="top"> -->
              <td>
                <textarea class="input-text" name="Your_Message" id="Your_Message" maxlength="2000" placeholder="Your Message (Required)" required></textarea>
              </td>
            </tr>
            <tr style="color: rgb(153, 255, 153);">
              <!-- <td colspan="2" style="text-align: center;"> -->
              <td style="text-align: center;">
                <div class="antispammessage">
                  To help prevent automated spam, please answer this question
                  <br><br>
                  <div class="antispamquestion">
                    <span class="required_star"> * </span>
                    Using only numbers, what is 10 plus 15? &nbsp;
                    <input name="AntiSpam" id="AntiSpam" maxlength="100" style="width: 30px;" type="text">
                  </div>
                </div>
              </td>
            </tr>
            <tr style="color: rgb(153, 255, 153);">
              <td colspan="2" style="text-align: center;">
                <br><br>
                <input value=" Submit Form " type="submit">
              </td>
            </tr>
          </tbody></table>
        </form>
      </div>


      <div id="region-content" hidden>

        <h1>London &amp; Middlesex</h1>
        <hr />
        <img class="region-photo" alt="Restaurants Hotels eating out in London vegetarian and vegan" src="images/london/london.jpg" />
        <div class=description>
          <p>London has a long tradition of vegetarianism, stretching back more than a century to the establishment of the London Vegetarian Society (later VSUK) and it also saw the founding of the Vegan Society in November 1944. But not until 1961, when the first Cranks restaurant was opened in London's trendy Carnaby Street, could vegetarians start to really feel at home. Many other restaurants followed over the next decades.</p>
          <p>Nowadays it is a sign of neglect in even the very best hotels and restaurants if they don't have vegetarian, and quite often also one or more vegan, options on their menu. You can find pretty much anything you might fancy, from organic veggie burgers, a wide variety of delicious salads and traditional British fare to an all-you-can-eat Chinese buffet and a gourmet fine dining extravaganza.</p>
          <p>See the sights of London, such as Trafalgar Square, Tower Bridge and the Tower of London, Buckingham Palace, St James's Park, the London Eye, St Paul's Cathedral, Big Ben and the Houses of Parliament. Visit the London Dungeon, Madame Tussauds, the National Gallery, the Science Museum and many other great museums housing unique treasures. London's acclaimed theatres offer everything from Shakespeare to musicals, drama and comedy, opera and ballet. Whatever you are interested in, you can find it in London!</p>
        </div>
        <hr />
        <section class=accommodation>
          <h2>Accommodation</h2>

          <article class="entry">
            <h4>Roseview Alexandra Palace Hotel</h4>
            <!-- <p>tel 020 8365 2535, fax 020 8365 2686</p> -->
            <p>tel <a href="tel:02083652535" class="phone-number">020 8365 2535</a>, fax 020 8365 2686</p>
            <p>2 Queens Avenue, Muswell Hill, Alexandra Palace, London N10 3NR</p>
            <p>email: <a href="mailto:reception@roseviewhotel.co.uk">reception@roseviewhotel.co.uk</a></p>
            <p>website: <a target="_blank" href="http://www.roseviewhotel.co.uk">www.roseviewhotel.co.uk</a></p>
            <a href="http://www.roseviewhotel.co.uk" target=_blank>
              <img class="accom-photo" alt="Roseview Hotel B&B Alexandra Palace London Vegetarian Friendly" src="images/london/roseview_hotel.jpg" />
            </a>
            <div class="description">
              <p>
                The Roseview Hotel is a vegetarian-friendly Bed &amp;
                Breakfast in Alexandra Palace, London, where there are many vegetarian
                restaurants around including a Planet Organic Store. All rooms are en-suite and
                offer satellite TV, hair dryer, tea &amp; coffee tray and free WiFi. Check out
                our competitive tariff.
              </p>
            </div>
            <p>H INS CatA Ve NS Acc50</p>
          </article>

          <article class="entry">
            <h4>One Fanthorpe Street</h4>
            <p>tel 020 8785 7609, fax 020 8789 5584</p>
            <p>1 Fanthorpe Street, Putney, London SW15 1DZ</p>
            <p>email: <a href="mailto:bbputney@gmail.com">bbputney@gmail.com</a></p>
            <p>website: <a target="_blank" href="http://www.bbputney.com">www.bbputney.com</a></p>
            <a href="http://www.bbputney.com" target=_blank><img class="accom-photo" alt="One, Fanthorpe Street, Putney, Nr Richmond London B&amp;B Vegetarian friendly" src="images/london/one_fanthorpe.jpg" /></a>
            <div class="description">
              <p>
                Robert and Imogen Taylor welcome you to a unique British
                experience. Our rooms are comfortable and reasonably priced. There is easy
                access to the centre of London. Putney has one of the best riverside locations,
                with attractive walks.
              </p>
            </div>
            <p>PH CatB Ve NS Acc6</p>
          </article>
          <article class="entry">
            <h4>The Temple Lodge Club</h4>
            <p>tel 020 8748 8388</p>
            <p>51 Queen Caroline Street, Hammersmith, London W6 9QL</p>
            <p>email: <a href="mailto:booking@templelodgeclub.com">booking@templelodgeclub.com</a></p>
            <p>website: <a target="_blank" href="http://www.templelodgeclub.com">www.templelodgeclub.com</a></p>
            <a href="http://www.templelodgeclub.com" target=_blank><img class="accom-photo" alt="Hammersmith  bed and breakfast Hammersmith London Piccadilly District Line" src="images/london/temple_lodge.jpg" /></a>
            <div class=description>
              <p>Our newest room - luxury double fully en-suite - is called after the artist Frank Brangwyn whose home was Temple Lodge during the first quarter of the 20th century. His former home has been carefully and tastefully renovated and offers bed and breakfast accommodation to all wanting to share in its quiet ambience and partake of breakfast overlooking lawn and garden. His former studio has been rebuilt as a church.</p>
            </div>

            <p>G INS CatA V Ve NS Acc17</p>
          </article>
        </section>

        <section class="eating">
          <h2>Eating</h2>

          <h4><a name="_Central_London"></a>Central London</h4>

          <!-- Test for looping through an array of entries in a separate php document -->
          <?php foreach($lonArray as $entry) { ?>
            <article class="entry">
              <?php echo $entry['name']; ?>,
              tel <a href='tel:+44<?php echo (int)str_replace(' ', '', $entry['tel']) ?>' class="phone-number"><?php echo $entry['tel']; ?></a>,
              <?php echo $entry['address']; ?>. &nbsp;
              <?php
              $codeExplanations = []; ?>
              <!-- <div class="code-explanation"> -->
              <button type="button" name="button" class="code-explanation">
                <?php foreach($entry['codes'] as $code) {
                  $codeExplanations[$code] = $allCodes[$code];
                  echo "$code ";
                }; ?>
                <span class="code-definition-text">
                  <?php foreach($codeExplanations as $codeKey => $codeExplanation) { ?>
                    <p><strong class="green-code"><?php echo "$codeKey " ?></strong><?php echo " $codeExplanation\n" ?></p>
                  <?php } ?>
                </span>
                <!-- </div> -->
              </button>
            </article>
          <?php }; ?>
          <!-- End test -->

          <!-- <article class="entry">Carnevale Restaurant,&nbsp;tel 020 7250 3452, 135 Whitecross Street, London EC1Y 8JL. &nbsp; R L c org F</article>
          <article class="entry">The Gate Restaurant,&nbsp;tel 020 7278 5483, 370 St John Street, London EC1V 4NN. &nbsp; R L c</article>
          <article class="entry">Hotpot Restaurants Ltd, tel 020 7287 8881, 17 Wardour Street, London W1D 6PJ. &nbsp; R L a</article>
          <article class="entry">Hummus Bros, tel 020 7734 1311, 62 Exmouth Market, London EC1R 4QE &nbsp; R a w</article>
          <article class="entry">Tas Restaurant, tel 020 7430 9721, 37 Farringdon Road, London EC1M 3JB. &nbsp; R L a</article> -->
          <article class="entry">Café Below, tel 020 7329 0789, St. Mary-le-Bow Church, Cheapside, London EC2V 6AU. &nbsp; R/C L a</article>
          <article class="entry">Hummus Bros, tel 020 7734 1311. 128 Cheapside, London EC2V 6BT. &nbsp; R a w</article>
          <article class="entry">Hummus Bros, tel 020 7283 8107, 20 Eastcheap, London EC3M 1EB. &nbsp; R a w</article>
          <article class="entry">Vanilla Black, tel 020 7242 2622, 17-18 Tooks Court, London EC4A 1LB. &nbsp; R L c</article>
          <article class="entry">Quilon, tel 020 7821 1899, 41 Buckingham Gate, London SW1E 6AF. &nbsp; R L a F</article>
          <article class="entry">The Gate Restaurant, tel 020 7724 6656, 22-24 Seymour Place, Marylebone, London W1H 7NL. &nbsp; R L c</article>
          <article class="entry">Hummus Bros, tel 020 7734 1311, 88 Wardour Street, London W1F 0TJ. &nbsp; R a w</article>
          <article class="entry">Mildreds, tel 020 7494 1634, 45 Lexington Street, Soho, London W1F 9AN. &nbsp; R L c w org F</article>
          <article class="entry">La Porte des Indes, tel 020 7224 0055, 32 Bryanston Street, Marble Arch, London W1H 7EG. &nbsp; R L a</article>
          <article class="entry">tibits Restaurant Bar Food to Go, tel 020 7758 4110, 12-14 Heddon Street, off Regent Street, London W1B 4DA. &nbsp; R/C L c</article>
          <article class="entry">Hummus Bros, tel 020 7734 1311, Victoria House, 37-63 Southampton Row, London WC1B 4DA. &nbsp; R a w</article>
          <article class="entry">Hummus Bros, tel 020 7734 1311, 12 Gray's Inn Road, London WC1X 8HG. &nbsp; R a w</article>
          <article class="entry">Gaby's Deli, tel 020 7836 4233, 30 Charing Cross Road, London WC2H 0DB. &nbsp; R L a</article>

          <h4><a name="East_London"></a>East London</h4>
          <article class="entry">Black Cat Café, tel 020 8985 7091, 76A Clarence Road, London E5 8HB. &nbsp; C d org F</article>
          <article class="entry">Mildreds, tel 020 8017 1815, 1 Dalston Square, London E8 3GU &nbsp; R L c w org F</article>
          <article class="entry">Pidgin, tel 020 7254 8311, 52 Wilton Way, Hackney, London E8 1BG. &nbsp; R L a</article>

          <h4><a name="North_London"></a>North London</h4>

          <article class="entry">Foodilic, tel 020 7278 7887, 260 Pentonville Road, London N1 9JY. &nbsp; R/C L a org F</article>
          <article class="entry">Mildreds, tel 020 7278 9422, 200 Pentonville Road, London N1 9JP. &nbsp; R L c w org F</article>
          <article class="entry">Rasa N16, tel 020 7249 0344, 55 Stoke Newington Church Street, London N16. &nbsp; R L c</article>
          <article class="entry">The Loving Hut, tel 020 7281 8989, 669 Holloway Road, London N19 5SE. &nbsp; R d F</article>
          <article class="entry">Mildreds, tel 020 7482 4200/020 7482 1773, 9-11 Jamestown Road, London NW1 7BW. &nbsp; R L c w org F</article>
          <article class="entry">
            <a href="https://www.facebook.com/pages/manna-restaurant/39025664131" target=_blank><img class="restaurant-photo" alt="Manna vegetarian vegan restaurant Primrose Hill London diet menu" src="images/london/manna.jpg" /></a>
            <p>Manna Restaurant, tel 020 7722, 8028, 4 Erskine Road, Primrose Hill, London NW3 3AJ</p>
            <div class="description">
              <p>Vegan, full license 100% vegan. Organic, whole food, Fairtrade when viable and available, certified organic bakery.</p>
              <p><a href="http://mannav.com" target=_blank>mannaV.com</a></p>
              <p>Also see display advert above.</p>
            </div>
            <p>R L d w org F</p>
          </article>

          <h4><a name="_Central_London"></a>South London</h4>

          <article class="entry">Garden Café, tel 020 7401 8865, Garden Museum, 5 Lambeth Palace Road, London SE1 7LB. &nbsp; C a org</article>
          <article class="entry">Tas Pide, tel 020 7928 3300, 20-22 New Globe Walk, London SE1 9DR. &nbsp; R L a</article>
          <article class="entry">Tas Restaurant, tel 020 7403 7200, 72 Borough High Street, London SE1 1XF. &nbsp; R L a</article>
          <article class="entry">Mulberry Tea Rooms, tel 020 8856 3951, Charlton House, Charlton Road, Charlton, London SE7 8RE. &nbsp; C a org F</article>
          <article class="entry">The Ragged Canteen at Beaconsfield, tel 020 7582 6465, 22 Newport Street, London SE11 6AY. &nbsp; C L c F</article>
          <article class="entry">Domali Bar and Kitchen, tel 020 8768 0096, 38 Westow Street, Crystal Palace, London SE19 3AH. &nbsp; R/Bar L a F</article>
          <article class="entry">Lu-Ma Café, tel 020 8296 6714, 43 Worple Road, Wimbledon, London SW19 4JZ. &nbsp; C c org F</article>

          <h4><a name="westlondon"></a>West London</h4>

          <article class="entry">The Gate Restaurant, tel 020 8748 6932, 51 Queen Caroline Street, Hammersmith, London W6 9QL. &nbsp; R L c</article>
          <article class="entry">222 Veggie Vegan Restaurant, tel 020 7381 2322, 222 North End Road, London W14 9NU. &nbsp; R L d w org F</article>
          <article class="entry">
            <p>Hollyhock Café, tel 020 8948 6555, Terrace Gardens, Richmond Riverside, Richmond TW10 6UX</p>
            <div class=description>
              <p>
                Beautiful little café with verandah overlooking the Thames in Victorian flower garden.
                Salads, pastries, soups, ices and chilled drinks served all day.
              </p>
            </div>
            <p>C c</p>
          </article>

          <article class="entry">
            <p>Tide Tables, tel 020 8948 8285, Riverside, Richmond TW9 1TH</p>
            <div class="description">
              <p>
                Wonderful setting on banks of the River Thames at Richmond. Delicious salads, bakes and
                snacks, smoothies, ice cream and gourmet coffees and teas served all day. <a target="_blank" href="http://www.tidetablescafe.com">www.tidetablescafe.com</a>
              </p>
            </div>
            <p>R/C L c org</p>
          </article>

          <h4><a name="Middlesex"></a>Middlesex</h4>
          <article class="entry">Tin Tin Restaurant, tel 020 8941 8987/1233, 75 High Street, Hampton Hill TW12 1NH. &nbsp; R L a</article>
          <article class="entry">Pradip’s Vegetarian Restaurant, tel 020 8909 2232, 154-156 Kenton Road, Harrow HA3 8AZ. &nbsp; R c</article>
        </section>

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
