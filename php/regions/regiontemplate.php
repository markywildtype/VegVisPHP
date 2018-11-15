<?php

//Do a master foreach for the whole array to get the subregion arrays
//Do an internal foreach on the subregion array to get each subregion's accommodation/eating arrays
//Do two internal foreaches on these to print the accommodation/eating details

$regionArray = [
  'subRegion1' => [
    'Accommodation' => [
      ['name' => '',
      'tel' => '',
      'address' => '',
      'email' => '',
      'website' => '',
      'image' => '',
      'description' => '<p></p>',
      'codes' => [''],
      'offers' => 'Offers Available',
      'offer text' => '<p></p>'],

      ['name' => '',
      'tel' => '',
      'address' => '',
      'email' => '',
      'website' => '',
      'image' => '',
      'description' => '<p></p>',
      'codes' => [''],]
    ],

    'Eating' => [
      ['multiline' => false,
      'name' => '',
      'tel' => '',
      'address' => '',
      'codes' => ['']],

      ['multiline' => true,
      'name' => '',
      'tel' => '',
      'address' => '',
      'description' => '<p></p>',
      'codes' => ['']]
    ]
  ],

  'subRegion2' => [
    'Accommodation' => [
      ['name' => '',
      'tel' => '',
      'address' => '',
      'email' => '',
      'website' => '',
      'image' => '',
      'description' => '<p></p>',
      'codes' => [''],
      'offers' => true,
      'offertext' => '<p></p>']
    ],

    'Eating' => [
      ['multiline' => false,
      'name' => '',
      'tel' => '',
      'address' => '',
      'codes' => ['']],

      ['multiline' => true,
      'name' => '',
      'tel' => '',
      'address' => '',
      'description' => '<p></p>',
      'codes' => ['']]
    ]
  ]
];
?>
