<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use App\Http\Resources\CategoryResource;

class PostController extends Controller
{
    
    public function posts($category=null, $slug=null)
    {
        if($slug){
            $category=Category::where('slug', $slug)->withTranslation(\App::getLocale())->first();

            $posts=$category->posts;
            
        }else {
            $posts=Post::withTranslation(\App::getLocale())->get();
        }
        return view('posts', compact('posts', 'category'));
    }


    public function view($slug)
    {
        $post=Post::withTranslation(\App::getLocale())->where('slug', $slug)->first();
        $post->increment('view', 1);
        return view('view', compact('post'));
    }

    // public function allPosts()
    // {
    // 	return view('allPosts');
    // }

    // public function viewPost($id, $locale)
    // {
    //     $post = Post::whereId($id)->get();
    //     if(!$post->count()){
    //         abort(404);
    //     }
    //     $post[0]->increment('view');
    //     if (\Voyager::translatable($post)) {
    //         $post = $post->translate($locale, 'ru');
    //     }
    //     return PostResource::collection($post);
    // }

    // public function getPosts($locale)
    // {
    //     $posts=Post::all();
    //     if (\Voyager::translatable($posts)) {
    //          $posts = $posts->translate($locale, 'ru');
    //      }
                
    //     return PostResource::collection($posts);
    // }

    // public function getCategories($locale)
    // {
    //     $categories=Category::all();
    //      if (\Voyager::translatable($categories)) {
    //       $categories = $categories->translate($locale, 'ru');
    //      };
    //     return CategoryResource::collection($categories);
    // }

    // public function getPostByCatId($id, $locale)
    // {
    //     $posts = Post::whereCategoryId($id)->get();
    //     if (\Voyager::translatable($posts)) {
    //          $posts = $posts->translate($locale, 'ru');
    //      }
    //     return PostResource::collection($posts);
    // }
}
