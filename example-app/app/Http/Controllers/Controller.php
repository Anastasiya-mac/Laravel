<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected array $NewsList = [
        [
            'id' => 1,
            'title' => 'Новость 1',
            'description' => 'Описание новости',
            'category' => 2
        ],

        [
            'id' => 2,
            'title' => 'Новость 2',
            'description' => 'Описание новости',
            'category' => 3
        ],

        [
            'id' => 3,
            'title' => 'Новость 3',
            'description' => 'Описание новости',
            'category' => 3
        ]
    ];

    protected array $CategoryList = [
        [
            'id' => 1,
            'name' => 'Общество',
            'description' => 'description'

        ],

        [
            'id' => 2,
            'name' => 'Наука',
            'description' => 'description'

        ],

        [
            'id' => 3,
            'name' => 'Технологии',
            'description' => 'description'

        ],

        [
            'id' => 4,
            'name' => 'Спорт',
            'description' => 'description'
        ],

        [
            'id' => 5,
            'name' => 'Политика',
            'description' => 'description'
        ]
    ];
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
