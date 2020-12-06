<?php

namespace Feberr\Http\Controllers;

use Illuminate\Http\Request;
use Feberr\Models\Items;
use Feberr\Models\Category;
use Feberr\Models\SubCategory;
use Feberr\Models\Pages;
use Feberr\Models\Blog;
use Feberr\Models\Users;
use Feberr\Http\Requests;

class SitemapController extends Controller
{
    
	public function index()
    {
      $items = Items::all()->first();
      $category = Category::all()->first();
      $subcategory = SubCategory::all()->first();
      $pages = Pages::all()->first();
	  $blog = Blog::all()->first();
	  $users = Users::all()->first();

      return response()->view('sitemap.index', [
          'items' => $items,
          'category' => $category,
          'subcategory' => $subcategory,
          'pages' => $pages,
		  'blog' => $blog,
		  'users' => $users,
      ])->header('Content-Type', 'text/xml');
    }
	
	public function items()
    {
        $items = Items::getallItems();
        return response()->view('sitemap.items', [
            'items' => $items,
        ])->header('Content-Type', 'text/xml');
    }

    public function category()
    {
        $category = Category::getcategoryData();
        return response()->view('sitemap.category', [
            'category' => $category,
        ])->header('Content-Type', 'text/xml');
    }

    public function subcategory()
    {
        $subcategory = SubCategory::getsubcategoryData();
        return response()->view('sitemap.subcategory', [
            'subcategory' => $subcategory,
        ])->header('Content-Type', 'text/xml');
    }

    public function pages()
    {
        $pages = Pages::getpageViews();
        return response()->view('sitemap.pages', [
            'pages' => $pages,
        ])->header('Content-Type', 'text/xml');
    }
	
	 public function blog()
    {
        $blog = Blog::allpostData();
        return response()->view('sitemap.blog', [
            'blog' => $blog,
        ])->header('Content-Type', 'text/xml');
    }
	
	public function users()
    {
        $users = Users::getvendorData();
        return response()->view('sitemap.users', [
            'users' => $users,
        ])->header('Content-Type', 'text/xml');
    }
	
}
