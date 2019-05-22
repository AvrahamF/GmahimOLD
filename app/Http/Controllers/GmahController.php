<?php

namespace App\Http\Controllers;

use App\Category;
use App\Article;
use Illuminate\Http\Request;

class GmahController extends Controller
{
    public function category($slug) {

    	$category = Category::where('slug', $slug)->first();

    	return view('gmah.category', [
    		'category' => $category,
    		'articles' => $category->articles()->where('published', 1)->paginate(4)
    	]);
    }

    public function article($slug) {
    	return view('gmah.article', [
    		'article' => Article::where('slug', $slug)->first()
    	]);
    }
}
