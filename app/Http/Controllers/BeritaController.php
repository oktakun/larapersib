<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\News;

class BeritaController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }
  
    public function getSingle($slug)
    {
        $news = News::where('slug', '=', $slug)->first();

        return view('berita.single')->withNews($news);
    }
}
