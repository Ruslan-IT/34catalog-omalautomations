<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function category($slug)
    {

        $siteSettings = SiteSetting::first();

        // Получаем категорию по slug
        $category = Category::with('children')
            ->where('slug', $slug)
            ->firstOrFail();

        // ID текущей категории + дочерних
        $categoryIds = $category->children
            ->pluck('id')
            ->push($category->id);

        // Продукты категории и подкатегорий
        $products = Product::whereIn('category_id', $categoryIds)->get();

        return view('pages.category', compact(
            'category',
            'products',
            'siteSettings'
        ));
    }

    public function show(string $slug)
    {



        $siteSettings = SiteSetting::first();
        $product = Product::with([
            'category.parent',
        ])->where('slug', $slug)->firstOrFail();



        return view('pages.product', compact(
            'product',
            'siteSettings'
        ));
    }
}
