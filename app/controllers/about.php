<?php

require 'functions.php';

$title = 'Blog - About';

$post = '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam sit debitis, assumenda, quidem eveniet modi fuga corporis officia iure consequuntur dolor iusto optio ut illo voluptate explicabo unde facere quas! Similique, totam exercitationem quas repellendus dicta iure, sit ab quaerat natus at quisquam? Sint quos cum, mollitia molestiae modi dolorum accusantium beatae similique cumque soluta ullam fugit minus aperiam officiis.</p>';

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

require_once('app/views/about.tpl.php');
