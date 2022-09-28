<?php
  // Simple Array
  $numbers = [1,44,55,22];
  $fruits = array('apple', 'orange', 'pear');

  // print_r($numbers);
  // var_dump($numbers);
  // echo $fruits[1];

  // Associative Array
  $colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
  ];

  // echo $colors[4];

  $hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f',
  ];

  // echo $hex['blue'];

  $person = [
    'first_name' => 'Tomas',
    'last_name' => 'Garcia',
    'email' => 'tomasgarciadev@gmail.com'
  ];

// echo $person['first_name'];

$people = [
  [
    'first_name' => 'Tomas',
    'last_name' => 'Garcia',
    'email' => 'tomasgarciadev@gmail.com'
  ],
  [
    'first_name' => 'Elena',
    'last_name' => 'Ortiz',
    'email' => 'ele_oz@gmail.com'
  ],
  [
    'first_name' => 'Daniel',
    'last_name' => 'Garcia',
    'email' => 'dani_go@gmail.com'
  ],
  [
    'first_name' => 'Elisa',
    'last_name' => 'Garcia',
    'email' => 'elisa_go@gmail.com'
  ]
];

echo $people[1]['email'];