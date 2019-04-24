<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\MultipleMedia;


class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getHome()
    {
         $sliders = Post::where('post_status', 'publish')->where('post_type', 'slider')->orderby('id', 'DESC')->take(5)->get();
        
        // $team = Post::where('post_status', 'publish')->where('post_type', 'team')->orderby('id', 'DESC')->take(9)->get();
        
        // $testimonials = Post::where('post_status', 'publish')->where('post_type', 'testimonial')->orderby('id', 'DESC')->take(6)->get();
        
        // $clients = Post::where('post_status', 'publish')->where('post_type', 'client')->orderby('id', 'DESC')->take(6)->get();
        
        // $portfolio = Post::where('post_status', 'publish')->where('post_type', 'portfolio')->orderby('id', 'DESC')->take(12)->get();
        
        // $recent_posts = Post::where('post_status', 'publish')->where('post_type', 'post')->orderby('id', 'DESC')->take(5)->get();

        $works = Post::where('post_status', 'publish')->where('post_type', 'work')->get();
        $about = Post::where('post_type', 'page')
            ->where('post_status', 'publish')
            ->where('slug', 'about-us')
            ->first();
            $about =  $about->post_excerpt;
        $about_dr = Post::where('post_type', 'home')
            ->where('post_status', 'publish')
            ->where('slug', 'about-dr  ')
            ->first();



        return view('sections.home',compact('works','about_home','about','sliders'));
    }
    
    public function getProduct($type)
    {
        return view('sections.products');
    }
    public function getAbout()
    {   
        $about = Post::where('post_type', 'page')
            ->where('post_status', 'publish')
            ->where('slug', 'about-us')
            ->first();
        $certificates = Post::where('post_type', 'certificate')
            ->where('post_status', 'publish')
            ->get();
            $featured_image= $about->media->guid  ;
            $images = MultipleMedia::join('media', 'media.id', '=', 'multiple_media.media_id')
                                       ->where('post_id', $about->id)->get();
                                      
        return view('sections.about', compact('about', 'featured_image', 'images', 'certificates'));
    }

    public function getGallery()
    {
        $gallery = Post::where('post_status', 'publish')->where('post_type', 'gallery')->take(15)->paginate();

        return view('sections.gallery', compact('gallery'));
    }

    public function vue()
    {
        return view('sections.vue');
    }

}
