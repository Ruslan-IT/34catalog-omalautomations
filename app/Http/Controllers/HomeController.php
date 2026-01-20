<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SiteSetting;

class HomeController
{

    public function index()
    {
        $title = 'Catalog';

        $siteSettings = SiteSetting::first();

        // Получаем случайные категории для блока категорий
        $categoriesRandom = Category::inRandomOrder()->get();

        // Получаем случайные продукты для блока выгодных предложений (например 5)
        $deals = Product::inRandomOrder()->take(8)->get();
        $products = Product::inRandomOrder()->take(30)->get();



        return view('pages.index', compact(
            'title',
            'categoriesRandom',
            'deals',
            'siteSettings',
            'products'
        ));
    }

}
