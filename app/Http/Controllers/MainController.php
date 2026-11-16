<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public $products = [
        [
            'id' => 1,
            'title' => '100 Robux',
            'price' => 100,
            'path' => 'pict.png'
        ],
        [
            'id' => 2,
            'title' => '200 Robux',
            'price' => 200,
            'path' => 'pict.png'
        ],
        [
            'id' => 3,
            'title' => '400 Robux',
            'price' => 400,
            'path' => 'pict.png'
        ],
        [
            'id' => 4,
            'title' => '800 Robux',
            'price' => 800,
            'path' => 'pict.png'
        ],
        [
            'id' => 5,
            'title' => '1000 Robux',
            'price' => 1000,
            'path' => 'pict.png'
        ],
        [
            'id' => 6,
            'title' => '1700 Robux',
            'price' => 1500,
            'path' => 'pict.png'
        ],
        [
            'id' => 7,
            'title' => '4500 Robux',
            'price' => 3500,
            'path' => 'pict.png'
        ],
        [
            'id' => 8,
            'title' => '10000 Robux',
            'price' => 7500,
            'path' => 'pict.png'
        ]
    ];

    public function showIndex()
    {
        return view('home');
    }

    public function showArray()
    {
        $array = $this->products;

        return view('array', compact('array'));
    }

    public function shuffleArray()
    {
        $array = $this->products;

        shuffle($array);

        return view('array', compact('array'));
    }

    public function sortArray()
    {
        $array = $this->products;

        usort($array, function ($a, $b) {
            return $a['price'] <=> $b['price'];
        });

        return view('array', compact('array'));
    }

    public function filterArray()
    {
        $array = $this->products;

        $array = array_filter($array, function ($item) {
            return $item['price'] > 1000;
        });

        return view('array', compact('array'));
    }

}
