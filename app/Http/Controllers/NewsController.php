<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\News;
use App\Tag;
use Session;
use Image;
use Storage;

class NewsController extends Controller
{
    public function __construct() {
      $this->middleware('auth');
    }

    public function index()
    {
        $news = News::OrderBy('id', 'DESC')->paginate(10);
        return view('news.index')->withNews($news);
    }


    public function create()
    {
        $tags = Tag::all();
        return view('news.create')->withTags($tags);

    }


    public function store(Request $request)
    {


      //validasi

    $this->validate($request, array(

    'title' => 'required',
    'summary' => 'required',
    'slug' => 'required|alpha_dash|min:5|max:191|unique:news,slug',
    'content' => 'required',
    'view_count' => 'required',
    'like_count' => 'required',
    'share_count' => 'required',
    'is_featured' => 'required',
    'is_active' => 'required'

        ));

    //save DB
    $post = new News;

$post->title = $request->title;
$post->summary = $request->summary;
$post->slug = $request->slug;
$post->content = $request->content;
$post->view_count = $request->view_count;
$post->like_count = $request->like_count;
$post->share_count = $request->share_count;
$post->is_featured = $request->is_featured;
$post->is_active = $request->is_active;

if ($request->hasFile('featured_image')) {
  $image = $request->file('featured_image');
  $filename = time() . '.' . $image->getClientOriginalExtension();
  $location = public_path('images/' . $filename);
  Image::make($image)->resize(800, 400)->save($location);

  $post->image = $filename;

}

$post->save();

$post->tags()->sync($request->tags, false);

Session::flash('success', 'POST berhasil dibuat');

return redirect()->route('news.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = News::find($id);
        return view('news.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // cari post di db dan save sebagai var
        $post = News::find($id);

        $tags = Tag::all();
        $tags2 = array();
        foreach ($tags as $tag) {
          $tags2[$tag->id] = $tag->name;
        }


        return view('news.edit')->withPost($post)->withTags($tags2);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validasi Update

        $post = News::find($id);


          $this->validate($request, array(

          'title' => 'required',
          'summary' => 'required',
          'slug' => "required|alpha_dash|min:5|max:191|unique:news,slug,$id",
          'featured_image' => 'image',
          'content' => 'required',
          'view_count' => 'required',
          'like_count' => 'required',
          'share_count' => 'required',
          'is_featured' => 'required',
          'is_active' => 'required'
          ));


        // simpan di DB

        $post = News::find($id);

        $post->title        = $request->input('title');
        $post->summary      = $request->input('summary');
        $post->slug         = $request->input('slug');
        $post->content      = $request->input('content');
        $post->view_count   = $request->input('view_count');
        $post->like_count   = $request->input('like_count');
        $post->share_count  = $request->input('share_count');
        $post->is_featured  = $request->input('is_featured');
        $post->is_active    = $request->input('is_active');


        if ($request->hasFile('featured_image')) {

          // tambah foto
          $image = $request->file('featured_image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          Image::make($image)->resize(800, 400)->save($location);
          $oldFilename = $post->image;

          // update
          $post->image = $filename;

          // hapus
          Storage::delete($oldFilename);
        }

        $post->save();

        if (isset($request->tags)) {
          $post->tags()->sync($request->tags);
        }else {
          $post->tags()->sync(array());
        }

        //set notice sukses editing
        Session::flash('success', 'POST berhasil di UPDATE !');

        //redirect
        return redirect()->route('news.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = News::find($id);
        $post->tags()->detach();
        
        Storage::delete($post->image);


        $post->delete();

        Session::flash('success', 'POST berhasil di DROP !');

        return redirect()->route('news.index');
    }
}
