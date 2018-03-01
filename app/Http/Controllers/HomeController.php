<?php

namespace App\Http\Controllers;

use App\Model\category;
use App\Model\album;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function get_admin()
    {
        return view('admin\layouts\app');
    }

    public function get_categories()
    {
        $category = category::all();
        return view('admin\categories',['categories' => $category]);
    }

    public function post_addCategory(Request $request)
    {
        $category = new category();
        $category->title = $request->input(['title']);
        $category->user_id = $request->input(['user_id']);
        $category->save();
        return redirect()->action('HomeController@get_categories');
    }

    public function get_editCategory($category_id)
    {
        $category = category::where(['id' => $category_id])->first();
        return view('admin/edit_category',['category' => $category]);
    }

    public function post_editCategory(Request $request){
        $edit_category = category::where(['id' => $request->input('id')])->first();
        $edit_category->title = $request->input('title');
        $edit_category->save();
        return redirect()->action('HomeController@get_categories');
    }

    public function post_deleteCategory(Request $request)
    {
        $category = category::where(['id' => $request->input('id')])->first();
        $category->delete();
        return redirect()->action('HomeController@get_categories');
    }

    public function get_categoryDetail($categories_id){
        $category = category::where(['id' => $categories_id])->first();
        return view('admin\detail_category',['category' => $category]);
    }

    public function get_albums(){
        $albums = album::all();
        return view('admin\albums',['albums' => $albums]);
    }

    public function post_addAlbum(Request $request){
        $album = new Album();
        $album->title = $request->input('title');
        $album->user_id = $request->input('user_id');
        $album->save();

        return redirect()->action('HomeController@get_albums');
    }

    public function get_detailAlbum($album_id){
        $album = album::where(['id' => $album_id])->first();
        return view('admin/detail_album',['album' => $album]);
    }

    public function get_editAlbum($album_id)
    {
        $album = album::where(['id' => $album_id])->first();
        return view('admin/edit_album',['album' => $album]);
    }

    public function post_editAlbum(Request $request){
        $edit_album = album::where(['id' => $request->input('id')])->first();
        $edit_album->title = $request->input('title');
        $edit_album->save();
        return redirect()->action('HomeController@get_albums');
    }

    public function post_deleteAlbum(Request $request)
    {
        $album = album::where(['id' => $request->input('id')])->first();
        $album->delete();
        return redirect()->action('HomeController@get_albums');
    }
}
