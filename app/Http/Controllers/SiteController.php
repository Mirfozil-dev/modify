<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Template;


class SiteController extends Controller
{
    public function index() {
        $categories = Category::all();
        $templates = Template::all();
        return view('site.index', [
            'categories' => $categories,
            'templates' => $templates
        ]);
    }
    public function category() {
        return view('site.category');
    }
    public function template() {
        return view('site.template');
    }
    public function order() {
        return view('site.order');
    }

}
