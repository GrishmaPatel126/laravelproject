<?php

return
[

    'name' => [
        'label' => ['type' => 'label', 'name' => 'name', 'text' => 'Name'],
        'text' => ['type' => 'text', 'name' => 'name', 'value' => '', 'attributes' => ['class' => 'form-control', 'id' => 'name','placeholder' => 'Name']],
    ],
    'number' => [
        'label' => ['type' => 'label', 'name' => 'number', 'text' => 'Phone Number'],
        'text' => ['type' => 'text', 'name' => 'number', 'value' => '', 'id' => 'number', 'attributes' => ['class' => 'form-control','placeholder' => 'Phone Number']],
    ],
    'email' => [
        'label' => ['type' => 'label', 'name' => 'email', 'text' => 'Email'],
        'email' => ['type' => 'email', 'name' => 'email', 'value' => '', 'id' => 'email', 'attributes' => ['class' => 'form-control','placeholder' => 'Email']],
    ],

    'address' => [
        'label' => ['type' => 'label', 'name' => 'address', 'text' => 'Address'],
        'textArea' => ['type' => 'textarea', 'name' => 'address', 'value' => '', 'id' => 'address', 'attributes' => ['class' => 'form-control', 'rows' => '2','placeholder' => 'Address']],
    ],
    'class' => [
        'label' => ['type' => 'label', 'name' => 'class', 'text' => 'Class'],
        'select' => ['type' => 'select', 'name' => 'class', 'list' => ['Class 5' => 'Class 5','Class 6' => 'Class 6','Class 7' => 'Class 7','Class 8' => 'Class 8','Class 9' => 'Class 9','Class 10' => 'Class 10'], 'attributes' => ['class' => 'form-control', 'id' => 'class','placeholder' => 'Select Class']],
    ],

    'subject' => [
        'label' => ['type' => 'label', 'name' => 'subject', 'text' => 'Subject'],
        'checkbox' => [
        [
            'checkbox' => ['type' => 'checkbox', 'name' => 'subject[]', null, 'value' => 'English', ],
            'label' => ['type' => 'label', 'name' => 'subject', 'text' => 'English'],
        ],
        [
            'checkbox' => ['type' => 'checkbox', 'name' => 'subject[]', null, 'value' => 'Maths' ],
            'label' => ['type' => 'label', 'name' => 'subject', 'text' => 'Maths'],
        ],
        [
            'checkbox' => ['type' => 'checkbox', 'name' => 'subject[]', null, 'value' => 'History'],
            'label' => ['type' => 'label', 'name' => 'subject', 'text' => 'History'],
        ],
        [
            'checkbox' => ['type' => 'checkbox', 'name' => 'subject[]', null, 'value' => 'Science'],
            'label' => ['type' => 'label', 'name' => 'subject', 'text' => 'Science'],
        ],
        [
            'checkbox' => ['type' => 'checkbox', 'name' => 'subject[]', null, 'value' => 'Art'],
            'label' => ['type' => 'label', 'name' => 'subject', 'text' => 'Art'],
        ],
    ],
    ],

    'clubs' => [
        'label' => ['type' => 'label', 'name' => 'clubs', 'text' => 'Clubs'],
        'select' => ['type' => 'select', 'name' => 'clubs', 'list' => ['Book Clubs' => 'Book Clubs','Drama Clubs' => 'Drama Clubs','Music Clubs' => 'Music Clubs','Cricket Clubs' => 'Cricket Clubs',], 'attributes' => ['class' => 'form-control', 'id' => 'class','placeholder' => 'Select Class']],
    ],
    'hobby' => [
        'label' => ['type' => 'label', 'name' => 'hobby', 'text' => 'Hobby'],
        'select' => ['type' => 'select', 'name' => 'hobby', 'list' => ['Dancing' => 'Dancing','Cooking' => 'Cooking','Running' => 'Runnning','Music' => 'Music','Cricket' => 'Cricket',], 'attributes' => ['class' => 'form-control', 'id' => 'class','placeholder' => 'Select Hobby']],
    ],
    'games' => [
        'label' => ['type' => 'label', 'name' => 'games', 'text' => 'Games'],
        'select' => ['type' => 'select', 'name' => 'games', 'list' => ['Cricket' => 'Cricket','Table Tennis' => 'Table Tennis','Shooting' => 'Shooting','Football' => 'Football',], 'attributes' => ['class' => 'form-control', 'id' => 'class','placeholder' => 'Select Games']],
    ],
];
