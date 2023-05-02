<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use DB;

class PageController extends Controller
{
    //About us page
    public function AboutUs(){

        return view('frontend.pages.aboutus');

    }

    //Blog page
    public function Blog(){

        $blogs = DB::table('blogs')
        ->select('blogs.*', 'users.name')
        ->join('users', 'blogs.author_id', 'users.id')
        ->where('blogs.status', '=', 'publish')
        ->where('blogs.visiblity', '=', 'public')
        ->paginate(10);

        $blogs_lists = DB::table('blogs')
        ->select('blogs.*', 'users.name')
        ->join('users', 'blogs.author_id', 'users.id')
        ->where('blogs.status', '=', 'publish')
        ->where('blogs.visiblity', '=', 'public')
        ->get();

        $blog_categories =  BlogCategory::all();

        //dd($blogs);
        return view('frontend.pages.blog', compact('blogs', 'blogs_lists', 'blog_categories'));

    }

    public function BlogDetail($id){

        $blogs = DB::table('blogs')
        ->select('blogs.*', 'users.name')
        ->join('users', 'blogs.author_id', 'users.id')
        ->where('blogs.status', '=', 'publish')
        ->where('blogs.visiblity', '=', 'public')
        ->where('blogs.id', '=', $id)
        ->get();


        $blogs_lists = DB::table('blogs')
        ->select('blogs.*', 'users.name')
        ->join('users', 'blogs.author_id', 'users.id')
        ->where('blogs.status', '=', 'publish')
        ->where('blogs.visiblity', '=', 'public')
        ->get();

        $blog_categories =  BlogCategory::all();

        return view('frontend.pages.blogdetail', compact('blogs', 'blogs_lists', 'blog_categories'));

    }

    public function BlogCategory($id){

        $blogs = DB::table('blogs')
        ->select('blogs.*', 'users.name')
        ->join('users', 'blogs.author_id', 'users.id')
        ->where('blogs.status', '=', 'publish')
        ->where('blogs.visiblity', '=', 'public')
        ->where('blogs.blog_category_id', '=', $id)
        ->get();

        $blog_categories =  BlogCategory::all();

        return view('frontend.pages.blogcategory', compact('blogs', 'blog_categories'));

    }
}
