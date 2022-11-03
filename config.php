<?php

return [
    'production' => false,
    'baseUrl' => 'https://artisanstatic.netlify.app',
    'site' => [
        'title' => 'Tehaccho',
        'description' => 'BANDAI|万代|玩具|ganggu|特撮|仮面ライダー|ウルトラマン|怪獣|食玩|ガチャ|戦隊',
        'image' => 'https://cdn-apac.onetrust.com/logos/2591b06d-75db-4383-b236-fa5d91f83cf0/f21b36e5-f55c-4a4e-a1a9-6079d2f176b3/abdbc6ee-cc1c-4fbb-b622-55092caf83f8/%E3%82%A2%E3%82%BB%E3%83%83%E3%83%88_1-100.jpg',
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
            'hasTag' => function ($page, $tag) {
                return collect($page->tags)->contains($tag);
            },
            'prettyDate' => function ($page, $format = 'M j, Y') {
                return date($format, $page->date);
            },
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
];
