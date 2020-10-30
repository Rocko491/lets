<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function publish_post(Request $data)
    {
        $publis_post = Posts::create([
            'post_desc' => $data['post_desc'],
            'posted_by_id' => auth()->user()->id,
            'photo_url' => "test",
            'activity' => "test",
            'shared_link' => "test",
            'post_like_cnt' => "0",
            'post_share_cnt' => "0",
            'post_comment_cnt' => "0",
        ]);
        return redirect('/');
    }
}
