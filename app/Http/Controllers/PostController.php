<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\File;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store(Request $request) {
        $user_id = Auth::user()->id;
        // dd($user_id);
        $post_content = $request->input('post_content');
        $post = array(
            // 'user_id ' => $user_id,  
            'post_content' => $post_content
        );
        DB::table('posts')->insert($post);

        $request->validate([
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf,jpg,png,mp3,mp4|max:94624469'
            ]);
            $fileModel = new File;
            if($request->file()) {
                $fileName = time().'_'.$request->file->getClientOriginalName();
                $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
                $fileModel->name = time().'_'.$request->file->getClientOriginalName();
                $fileModel->file_path = '/storage/' . $filePath;
                $fileModel->save();
                return back()
                ->with('success','File has been uploaded.')
                ->with('file', $fileName);
            }
        return redirect()->back()->with('success', 'Insert success fully!');  
         
    }
    public function random_data() {
        $p = User::find(1)->posts;
        dd($p);
    }
    public function fileUpload(Request $request){
        $request->validate([
        'file' => 'required|mimes:csv,txt,xlx,xls,pdf,jpg,png|max:2048'
        ]);
        $fileModel = new File;
        if($request->file()) {
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            $fileModel->name = time().'_'.$request->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();
            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
        }
   }
}
