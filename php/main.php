<?php

require('regions/london.php');
require('regions/southeast.php');
require('regions/eastmidlands.php');
require('regions/scotland.php');
require('regions/wales.php');
require('regions/southwest.php');
require('regions/eastanglia.php');
require('regions/northwest.php');
require('regions/northeast.php');
require('regions/thamesandchilterns.php');
 require('regions/heartofengland.php');

require('CodesClass.php');
require('regions/RegionsClass.php');

class RegionTools
{
   protected $regionArray;
   protected $regionName;
   protected $regionIdentifier;

   public function __construct($regionArray, $regionName, $regionIdentifier)
   {
       $this->regionArray = $regionArray;
       $this->regionName = $regionName;
       $this->regionIdentifier = $regionIdentifier;
   }

   public function printRegion()
   {
       $regionHtml = $this->printRegionHeader();

       foreach ($this->regionArray as $subRegion => $regionListings) {
           $regionHtml = $regionHtml . $this->printSubRegion($regionListings, $subRegion);
       }

       return $regionHtml;
   }


   protected function printRegionHeader()
   {
       $headerHtml = sprintf(
               "<h1>%s&nbsp;<img class='info-button' name='%s' src='images/info.png' hidden /></h1><div class='subregion-links'>",
                $this->regionName,
                $this->regionName
           );

              foreach (Regions::$allRegions[$this->regionName]['subregions'] as $subRegion) {
                  $headerHtml = $headerHtml
                      . '<button class="subregion-link" onclick=\'location.href="#'
                      . $subRegion
                      . '"\'>'
                      . $subRegion
                      . '</button>';
              }

        $headerHtml = $headerHtml . sprintf(
                "
                <p></p>
                <img class='region-photo' alt='Restaurants Hotels eating out vegetarian and vegan' src='%s' />
                <div class=description>%s</div>
                <hr />",
                   Regions::$allRegions[$this->regionName]['image'],
                   Regions::$allRegions[$this->regionName]['introduction']
           );

        $headerHtml = $headerHtml . "</div>
          <h2 id='hidden-accommodation-heading' hidden>Accommodation</h2>
          <h2 id='hidden-eating-heading' hidden>Eating</h2>";

       return $headerHtml;
   }


   protected function printSubRegion($subregion, $subregionName)
   {
       $accommodationSection = '';
       $accommodationListings = $subregion['Accommodation'];

       if ($accommodationListings !== null) {
           $accommodationSection = $this->printAccommodationListings($accommodationListings, $subregionName);
       }

       $eatingSection = '';
       $eatingListings = $subregion['Eating'];

       if($eatingListings !== null) {
           $eatingSection = $this->printEatingListings($eatingListings, $subregionName);
       }

       return sprintf("<a name='%s' class='anchor'></a>", $subregionName) . $accommodationSection . $eatingSection;
   }


   protected function printAccommodationListings($listing, $subRegionName)
   {
       $accommodationListings = sprintf("<h4 class='accommodation-subregion-heading'>%s</h4>
            <div class='accommodation'>
            <h2 class='subregion-accommodation-heading'>Accommodation</h2>",
           $subRegionName);

       foreach($listing as $entry) {
           $accommodationListings = $accommodationListings . $this->printAccommodationEntry($entry);
       }
        return $accommodationListings . '</div>';
   }

   protected function printEatingListings($listing, $subRegionName)
   {
       $eatingListings = sprintf("<h4 class='eating-subregion-heading'>%s</h4>
           <div class='eating'>
           <h2 class='subregion-eating-heading'>Eating</h2>",
           $subRegionName
       );

       foreach($listing as $entry) {
           $eatingListings = $eatingListings . $this->printEatingEntry($entry);
       }

       return $eatingListings . '</div>';
   }

    protected function printAccommodationEntry($entry, $entryHtml = null)
    {
        $entryHtml = '<article class="entry">';
        $entryHtml = $entryHtml . sprintf("<h4>%s</h4>", $entry['name']);
        if($entry['tel'] && $entry['fax'] && $entry['tel2']) {
            $entryHtml = $entryHtml . sprintf("<p>tel and fax: <a href='tel:+44%d' class='phone-number'>%s</a>, mobile: <a href='tel:+44%d' class='phone-number'>%s</a></p>",
                    (int)str_replace(' ', '', $entry['tel']),
                    $entry['tel'],
                    (int)str_replace(' ', '', $entry['tel2']),
                    $entry['tel2']);
        } elseif($entry['tel2']) {
            $entryHtml = $entryHtml . sprintf("<p>tel: <a href='tel:+44%d' class='phone-number'>%s</a>, mobile: <a href='tel:+44%d' class='phone-number'>%s</a></p>",
                    (int)str_replace(' ', '', $entry['tel']),
                    $entry['tel'],
                    (int)str_replace(' ', '', $entry['tel2']),
                    $entry['tel2']);
        } elseif($entry['fax']) {
            $entryHtml = $entryHtml . sprintf("<p>tel: <a href='tel:+44%d' class='phone-number'>%s</a>, fax: %s</p>",
                    (int)str_replace(' ', '', $entry['tel']),
                    $entry['tel'],
                    $entry['fax']);
        } elseif($entry['tel']) {
            $entryHtml = $entryHtml . sprintf("<p>tel: <a href='tel:+44%d' class='phone-number'>%s</a></p>",
                    (int)str_replace(' ', '', $entry['tel']),
                    $entry['tel']);
        }
        $entryHtml = $entryHtml . sprintf('<p>%s</p>',
                $entry['address']);
        $entryHtml = $entryHtml . sprintf("<p>email: <a href='mailto:%s'>%s</a></p>",
                $entry['email'], $entry['email']);
        if($entry['website']) {
          $entryHtml = $entryHtml . sprintf("<p>website: <a target='_blank' href='http://%s'>%s</a></p>",
          $entry['website'],
          $entry['website']);

        }
        if($entry['video']) {
            $entryHtml = $entryHtml . sprintf("<p>video: <a target='_blank' href='http://%s'>%s</a></p>",
                    $entry['video'],
                    $entry['video']);
        }

        if(!$entry['website']){
          $entryHtml = $entryHtml . sprintf("<img class='accom-photo' alt='%s' src='%s' />",
          $entry['name'],
          $entry['image']);
          $entryHtml = $entryHtml . sprintf("<div class='description'>%s</div>", $entry['description']);
          $entryHtml = $entryHtml . $this->printCodes($entry);
        } else {
          $entryHtml = $entryHtml . sprintf("<a href='http://%s' target='_blank'><img class='accom-photo' alt='%s' src='%s' /></a>",
          $entry['website'],
          $entry['name'],
          $entry['image']);
          $entryHtml = $entryHtml . sprintf("<div class='description'>%s</div>", $entry['description']);
          $entryHtml = $entryHtml . $this->printCodes($entry);
        }

        if($entry['offers'] !== null) {
            $entryHtml = $entryHtml . '<p></p>' . sprintf("<button type='button' class='offers-button'>%s</button>
             <div class='offer'>%s</div>",
                    $entry['offers'],
                    $entry['offer text']);
        }

        return $entryHtml . '</article>';
    }

    protected function printEatingEntry($entry)
    {
        $entryHtml = '<article class="entry">';
        if ($entry['multiline']) {
            $entryHtml = $this->printMultilineEatingEntry($entry, $entryHtml);
        } elseif($entry['advert']) {
            $entryHtml = $this->printAdvertEntry($entry, $entryHtml);
        } elseif($entry['special']) {
            $entryHtml = $this->printAccommodationEntry($entry, $entryHtml);
        } else {
            $entryHtml = $this->printOnelineEatingEntry($entry, $entryHtml);
        }


        return $entryHtml . '</article>';
    }

    /**
     * @param $entry
     * @param $entryHtml
     * @return string
     */
    protected function printMultilineEatingEntry($entry, $entryHtml)
    {
        $entryHtml = $entryHtml . sprintf('<p>%s</p>', $entry['name']);
        if($entry['tel2']) {
            $entryHtml = $entryHtml . sprintf("<p>tel: <a href='tel:+44%d' class='phone-number'>%s</a>, mobile: <a href='tel:+44%d' class='phone-number'>%s</a></p>",
                    (int)str_replace(' ', '', $entry['tel']),
                    $entry['tel'],
                    (int)str_replace(' ', '', $entry['tel2']),
                    $entry['tel2']);
        } else {
            $entryHtml = $entryHtml . sprintf("<p>tel: <a href='tel:+44%d' class='phone-number'>%s</a></p>",
                    (int)str_replace(' ', '', $entry['tel']),
                    $entry['tel']);
        }
            $entryHtml = $entryHtml . sprintf('<p>%s</p>', $entry['address']);
            $entryHtml = $entryHtml . sprintf("<div class='description'>%s</div>", $entry['description']);
            $entryHtml = $entryHtml . $this->printCodes($entry);


        return $entryHtml;
    }

    /**
     * @param $entry
     * @param $entryHtml
     * @return string
     */
    protected function printAdvertEntry($entry, $entryHtml)
    {
        if($entry['name'] === 'Garden Café'){
            $entryHtml = $entryHtml . sprintf("<p><img alt='%s' src='%s' /></a> ",
                    $entry['name'],
                    $entry['image']);
            $entryHtml = $entryHtml . sprintf(
                    "%s, tel <a href='tel:+44%d' class='phone-number'>%s</a>, %s.</p>",
                    $entry['name'],
                    (int)str_replace(' ', '', $entry['tel']),
                    $entry['tel'],
                    $entry['address']);
            $entryHtml = $entryHtml . sprintf("<div class='description'>%s</div>", $entry['description']);
            $entryHtml = $entryHtml . $this->printCodes($entry);
        } else {
            $entryHtml = $entryHtml . sprintf("<a href='http://%s' target='_blank'><img class='accom-photo' alt='%s' src='%s' /></a>",
                    $entry['website'],
                    $entry['name'],
                    $entry['image']);
            $entryHtml = $entryHtml . sprintf(
                    "<p>%s, tel <a href='tel:+44%d' class='phone-number'>%s</a>, %s.</p>",
                    $entry['name'],
                    (int)str_replace(' ', '', $entry['tel']),
                    $entry['tel'],
                    $entry['address']);
            $entryHtml = $entryHtml . sprintf("<div class='description'>%s</div>", $entry['description']);
            $entryHtml = $entryHtml . $this->printCodes($entry);
        }

        return $entryHtml;
    }

    /**
     * @param $entry
     * @param $entryHtml
     * @return string
     */
    protected function printOnelineEatingEntry($entry, $entryHtml)
    {
       if($entry['name'] === 'Saffron Contemporary Indian Cuisine' || $entry['name'] === 'Tin Tin Restaurant' || $entry['tel2'] === '020 7482 1773') {
         $entryHtml = $entryHtml . sprintf(
                 "%s, tel <a href='tel:+44%d' class='phone-number'>%s/<a href='tel:+44%d' class='phone-number'>%s</a>, %s. &nbsp; %s",
                 $entry['name'],
                 (int)str_replace(' ', '', $entry['tel']),
                 $entry['tel'],
                 (int)str_replace(' ', '', $entry['tel2']),
                 $entry['tel2'],
                 $entry['address'],
                 $this->printCodes($entry)
             );
       } elseif($entry['tel2']) {
            $entryHtml = $entryHtml . sprintf(
                    "%s, tel <a href='tel:+44%d' class='phone-number'>%s</a> (office), and <a href='tel:+44%d' class='phone-number'>%s</a> (café), %s. &nbsp; %s",
                    $entry['name'],
                    (int)str_replace(' ', '', $entry['tel']),
                    $entry['tel'],
                    (int)str_replace(' ', '', $entry['tel2']),
                    $entry['tel2'],
                    $entry['address'],
                    $this->printCodes($entry)
                );
        } else {
            $entryHtml = $entryHtml . sprintf(
                    "%s, tel <a href='tel:+44%d' class='phone-number'>%s</a>, %s. &nbsp; %s",
                    $entry['name'],
                    (int)str_replace(' ', '', $entry['tel']),
                    $entry['tel'],
                    $entry['address'],
                    $this->printCodes($entry)
                );
        }
        return $entryHtml;
    }


    protected function printCodes($entry)
    {
        $codeExplanations = [];

        $codeHtml = sprintf("<button type='button' name='%s' class='code-explanation'>", $entry['name'] . $entry['tel']);
        foreach ($entry['codes'] as $code) {
            $codeExplanations[$code] = Codes::$allCodes[$code];
            $codeHtml = $codeHtml . sprintf("%s ", $code);
        };
        $codeHtml = $codeHtml . '</button>';

        $codeHtml = $codeHtml . sprintf("<div id='%s' class='modal code-modal'>",
                $entry['name'] . $entry['tel']);
        $codeHtml = $codeHtml . '<div class="modal-content">';
        $codeHtml = $codeHtml . sprintf("<h2>%s<span class='close'>&times;</span></h2>",
                $entry['name']);

        foreach ($codeExplanations as $codeKey => $codeExplanation) {
        $codeHtml = $codeHtml . sprintf(
            "<p><strong class='green-code'>%s</strong>&nbsp;&nbsp;%s</p>",
            $codeKey,
            $codeExplanation);
        }

        return $codeHtml . '</div></div>';
    }
}
