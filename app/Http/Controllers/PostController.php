<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class  PostController extends Controller
{
    public function getData()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');


        if ($response->successful()) {
            $data = $response->json();
           // dd($data);

          $count=count($data);
       //   dd($count);
         // dd($data[0]['body']);
         for($key=0;$key<$count;$key++)
         {

            Post::create([

    'userId' =>$data[$key]['userId'],
    'postid' =>$data[$key]['id'],
    'title' =>$data[$key]['title'],
    'body' =>$data[$key]['body'],


            ]);


         }
            // return view('api-data', ['data' => $data]);
            return view ('api-data');
        } else {

            return view('error');
        }
    }
    public function getPostData(){

        $post= Post::all();
        return view('all-posts',compact('post'));
    }
}
