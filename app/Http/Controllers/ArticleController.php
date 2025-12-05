<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    
    public function index()
    {
        return view('articles.index');
    }

    public function show($slug)
    {
        switch ($slug) {
            case 'panduan-dasar-menghias-kue':
                return view('articles.show-panduan');
            case 'mengenal-jenis-jenis-tepung-kue':
                return view('articles.show-tepung');
            case 'teknik-mengocok-adonan-yang-benar':
                return view('articles.show-mengocok');
            case '5-tips-membuat-cookies-lebih-renyah':
            default:
                return view('articles.show'); 
        }
    }
}