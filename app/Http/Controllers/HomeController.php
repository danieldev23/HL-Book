<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Post;
use jcobhams\NewsApi\NewsApi;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // $p = User::find(1)->posts;

        // $post = DB::table('posts')->get();
        $post = Post::find(2);
        $user = $post->user;
        // $posts = Post::with('user');

        $posts = User::find(1)->posts();
        // ->orderBy('created_at', 'desc')->get();
        foreach($posts as $post) {
            return $post;
        }
        // dd($posts[0]);
        $users = User::all();
        $name = Auth::user()->name;
        // dd($name, $name[strlen($name)-1]);
        // --------------- API GET USER -------------------
        $url = Http::get('https://randomuser.me/api/');
        $res = json_decode($url, true);
        $avatar = $res["results"]["0"]["picture"]["large"];

        $first = $res["results"]["0"]["name"]["first"];
        $last = $res["results"]["0"]["name"]["last"];
        $name_random = $first . ' ' . $last;
        // --------------- API GET USER -------------------


        // ------------------ API GET NEWS -------------------
        $response = Http::get('https://newsapi.org/v2/everything?domains=vnexpress.net&apiKey=809e7980a9c746f6b3e94a19c5b2f051');
        // --------- GET DATA FROM API -------------------
        $data = json_decode($response, true);
        // !--------- GET DATA FROM API -------------------
        $results = mt_rand(1, 50);
        $r = (string)$results;
        $author = $data["articles"][$r]['author'];
        $description = $data["articles"][$r]["description"];
        $images = $data["articles"][$r]["urlToImage"];
        $url = $data["articles"][$r]["url"];
        $img = $images;

        return view('home', [
            'users' => $users,
            'name' => $name,
            'data' => $data,
            'author' => $author,
            'img' => $img,
            'description' => $description,
            'url' => $url,
            'name_random' => $name_random,
            'avatar' => $avatar,
            'r' => $r]);
    }

    public function getProfile()
    {
        $name = Auth::user()->name;
        $des = DB::table('post')->get();


        return view('profile', [
            'name' => $name, 'des' => $des
        ]);
    }

    public function NewsApi()
    {
        $response = Http::get('https://newsapi.org/v2/everything?q=tesla&from=2022-10-08&sortBy=publishedAt&apiKey=e5feeb7605db48fe96b936f0c6484290');
        $data = json_decode($response, true);
        $results = $data['totalResults'];
        // https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=RDEMUS-lSS6IbX08aXz_FO7cEw&key=AIzaSyCwlqkbVrU-3eptRkNDXXZoWrBhYXXarUQ Playlist Lê Bảo Bình
        // API YOUTUBE
        // playlistId = RDEMUS-lSS6IbX08aXz_FO7cE
        // API_KEY = AIzaSyCwlqkbVrU-3eptRkNDXXZoWrBhYXXarUQ

    }

    public function RandomUsers()
    {
        $url = Http::get('https://randomuser.me/api/');
        $res = json_decode($url, true);
        //     // dd($res);
        $avatar = $res["results"]["0"]["picture"]["large"];
        $first = $res["results"]["0"]["name"]["first"];
        $last = $res["results"]["0"]["name"]["last"];
        $name = $first . ' ' . $last;
        // dd($avatar);
        return $res;
    }
}

