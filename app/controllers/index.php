<?php

require 'functions.php';

$title = 'Blog - Home';

$posts = [
    1 => [
        'title' => 'Title1',
        'desk' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
        'slug' => 'Full article',
    ],
    2 => [
        'title' => 'Title2',
        'desk' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
        'slug' => 'Full article',
    ],
    3 => [
        'title' => 'Title3',
        'desk' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
        'slug' => 'Full article',
    ],
    4 => [
        'title' => 'Title4',
        'desk' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
        'slug' => 'Full article',
    ],
    5 => [
        'title' => 'Title5',
        'desk' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
        'slug' => 'Full article',
    ],
];

$recent_posts = [
    1 => [
        'title' => 'An item',
        'slug' => lcfirst(str_replace(' ' , '-' , 'An item')),
    ],
    2 => [
        'title' => 'A second item',
        'slug' => lcfirst(str_replace(' ' , '-' , 'An item')),
    ],
    3 => [
        'title' => 'A third item',
        'slug' => lcfirst(str_replace(' ' , '-' , 'An item')),
    ],
    4 => [
        'title' => 'A fourth item',
        'slug' => lcfirst(str_replace(' ' , '-' , 'An item')),
    ],
    5 => [
        'title' => 'A fifth item',
        'slug' => lcfirst(str_replace(' ' , '-' , 'An item')),
    ],
];

require_once('app/views/index.tpl.php');
