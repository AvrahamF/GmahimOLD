<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;
use App\Article;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //Dashboard
    public function dashboard() {
      return view('user.dashboard', [
        'categories' => Category::where('created_by', Auth::user()->id)->lastCategories(5),
        'articles' => Article::where('created_by', Auth::user()->id)->lastArticles(5),
      ]);
    }
}
