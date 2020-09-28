<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Worker;
use App\Image;
use App\Thought;
use App\Faq;
use App\Post;
use App\Partner;

class IndexController extends Controller
{
    public function  index()
    {
        $treners=Worker::withTranslation(\App::getLocale())->where('manual', 0)->limit(8)->get();
        $features=\App\Feature::withTranslation(\App::getLocale())->get();
        $image=Image::first();
        $thoughts=Thought::withTranslation(\App::getLocale())->get();
        $faqs=Faq::withTranslation(\App::getLocale())->limit(5)->get();
       
    	return view('welcome', compact('treners', 'image', 'features', 'thoughts', 'faqs'));
    }

    public function jobs()
    {
        $jobs=\App\Job::withTranslation(\App::getLocale())->get();
    	return view('jobs', compact('jobs'));
    }

    public function treners()
    {
        $groups=\App\Group::withTranslation(\App::getLocale())->get();
        $treners=\App\Worker::withTranslation(\App::getLocale())->where('manual', 0)->paginate(8);
    	return view('treners', compact('treners', 'groups'));
    }

    public function education()
    {
    	return view('education');
    }

    public function aboutUs()
    {
        $page=\App\Page::withTranslation(\App::getLocale())->first();
        $treners=Worker::withTranslation(\App::getLocale())->limit(3)->where('manual', 1)->get();
        $partners=Partner::all();
        $sertificats=\App\Sertificat::all();
        $success=\App\Success::withTranslation(\App::getLocale())->get();
       
    	return view('aboutUs', compact('treners', 'partners', 'sertificats', 'success', 'page'));
    }

    public function students()
    {
        $groups=\App\Group::withTranslation(\App::getLocale())->get();
        $students=\App\Student::withTranslation(\App::getLocale())->paginate(9);
    	return view('students', compact('students', 'groups'));
    }

    public function media()
    {
        $images=Image::all();
    	return view('media', compact('images'));
    }

    public function contact()
    {
    	return view('contact');
    }

    public function faq()
    {
        $categories=\App\CategoryFaq::withTranslation(\App::getLocale())->get();
        $faqs=Faq::withTranslation(\App::getLocale())->get();
    	return view('faq', compact('faqs', 'categories'));
    }

    public function subscribe()
    {
        return view('zapis');
    }
}
