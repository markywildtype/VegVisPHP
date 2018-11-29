<?php

require('regions/london.php');
require('regions/southeast.php');
require('regions/eastmidlands.php');
require('codes.php');
require('regions.php');

//$regionArray;
//class RegionTools
//{
//
//    protected $regionArray;
//    protected $regionName;
//
//    public function __construct($regionArray, $regionName)
//    {
//        $this->regionArray = $regionArray;
//        $this->regionName = $regionName;
//    }
//
//    public function printRegion()
//    {
//        $regionHtml = $this->printRegionHeader($this->regionName);
////        $updatedHtml = $regionHtml . $this->printSubregion();
//        //foreach loop through the regionarray, each time adding to the html string
//        foreach ($this->regionArray as $subRegion => $regionListings) {
//            //Do the things - each in separate functions, each returning an html string which will be added to $regionHtml
//            $regionHtml = $regionHtml . $this->printSubRegion($subRegion);
//        }
////        return $updatedHtml;
//        return $regionHtml;
//    }
//
//
//    public function printRegionHeader($regionName)
//    {
//        return sprintf('<h1>Working so far? %s</h1>', $regionName);
//    }
//
//
//    public function printSubRegion($subregion)
//    {
//        $accommodationSection = '';
//        $accommodationListings = $subregion['Accommodation'];
//
//        if (count($subregion['Accommodation']) > 0) {
//            $accommodationSection = $this->printAccommodationListings($accommodationListings);
//        }
//
////        $accommodationListings = $this->printAccommodationListings();
//        $eatingListings = $this->printEatingListings();
//        return $accommodationListings . $eatingListings;
//    }
//
//    public function printAccommodationListings($listing)
//    {
//        foreach ($listing as $entry) {
//            return sprintf('<p>%s</p>', $entry['name']);
//        }
//    }
//
//    public function printEatingListings()
//    {
//        return '<p>Eating</p>';
//    }
//}
