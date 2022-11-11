<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\File;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request) {
        
        $input_des = $request->input('input_text');
        $post = array(
            'input_des' => $input_des
        );
        DB::table('post')->insert($post);

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

    public function fileUpload(Request $request){
        $req->validate([
        'file' => 'required|mimes:csv,txt,xlx,xls,pdf,jpg,png|max:2048'
        ]);
        $fileModel = new File;
        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
            $fileModel->name = time().'_'.$req->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();
            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
        }
   }
}
