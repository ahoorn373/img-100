<?php

// Don't change this code

$possible_characters = [
    [
        'name' => 'Disco Stu',
        'occupation' => 'Disco Owner'
    ],
    [
        'name' => 'Duffman',
        'occupation' => 'Duff Beer Advertiser'
    ],
    [
        'name' => 'Comic Book Guy',
        'occupation' => 'Comic Book Shop Owner'
    ],
    [
        'name' => 'Frankie the Squealer',
        'occupation' => 'Mobster'
    ],
    [
        'name' => 'Lionel Hutz',
        'occupation' => 'Lawyer'
    ],
    [
        'name' => 'Homer Simpson',
        'occupation' => 'Nuclear Technician'
    ],
    [
        'name' => 'Marge Simpson',
        'occupation' => 'Housewife'
    ],
    [
        'name' => 'Bart Simpson',
        'occupation' => 'Student'
    ],
    [
        'name' => 'Lisa Simpson',
        'occupation' => 'Student'
    ],
    [
        'name' => 'Jimbo Jones',
        'occupation' => 'Student'
    ],
    [
        'name' => 'Troy McClure',
        'occupation' => 'Actor'
    ],
    [
        'name' => 'Moe Szyslak',
        'occupation' => 'Bartender'
    ],
    [
        'name' => 'Ned Flanders',
        'occupation' => 'Left-handed Products Specialty Store'
    ],
];

define('LENGTH', count($possible_characters));

$get_characters = function ($min_length = 1, $max_length = LENGTH) use ($possible_characters) {
    $length = count($possible_characters);
    shuffle($possible_characters);
    $number_of_characters = rand($min_length, $max_length);

    return array_slice($possible_characters, 0, $number_of_characters);
};

return $get_characters;
