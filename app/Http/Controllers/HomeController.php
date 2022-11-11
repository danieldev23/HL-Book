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

        $post = DB::table('post')->get();
        // dd($post->input_descripton);
        $des = $post ;
        $users = User::all();
        $url = Http::get('https://randomuser.me/api/');
        $res = json_decode($url, true);
        //     // dd($res);
        $avatar = $res["results"]["0"]["picture"]["large"];

        $first = $res["results"]["0"]["name"]["first"];
        $last = $res["results"]["0"]["name"]["last"];
        $name_random = $first . ' ' . $last;
        $name = Auth::user()->name;
        // $response = Http::get('http://hlsocial.vtest/api/news/');
        $response = Http::get('https://newsapi.org/v2/everything?q=tesla&from=2022-11-09&sortBy=publishedAt&apiKey=e5feeb7605db48fe96b936f0c6484290');

        $data = json_decode($response, true);
        $author = $data["articles"]["5"]['author'];
        $description = $data["articles"]["1"]["description"];
        // $results = $data['totalResults'];
        $results = mt_rand(1, 50);
        $r = (string)$results;
        $images = $data["articles"][$r]["urlToImage"];
        $url = $data["articles"][$r]["url"];
        $img = $images;
        return view('home', ['users' => $users, 'name' => $name, 'data' => $data, 'author' => $author, 'img' => $img, 'description' => $description, 'url' => $url, 'name_random' => $name_random, 'avatar' => $avatar, 'r' => $r]);
    }

    public function getProfile() {
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
        $date = date();
        dd($date);
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
        $name = $first.' '.$last;
        // dd($avatar);
        return $res;
    }
}

