<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bloge;

class bloge_c extends Controller
{
    //
    public function blog(Request $req){

        $filename1 = $req->file('img1')->getClientOriginalName();
        $destinationPath = '/images';
        $req->file('img1')->move(public_path($destinationPath),$filename1);
        $product = new bloge();
        $product->image= $filename1;
        $product->title=$req->title;
        $product->date=$req->date;
        $product->contant=$req->content;

        $id=$product->save();
        if($id>0)
        {
            return redirect('bloge_insert');
        }
    
    }

    public function search_blog(){
        $info = bloge::all();
        return view('links.blog',['info'=>$info]);
    }

    public function single_blog($id){
        $in = bloge::find($id);
        return view('links.single_blog',['in'=>$in]);
    }

    public function all_blog(){
        $data = bloge::all();
        return view('/all_blog',['data'=>$data]);
    }

    public function all_blog_delete($id){
        $data = bloge::find($id);
        $data -> delete();
        return redirect('/all_blog');
    }

    public function get_edit_blog($id){
        $data = bloge::find($id);
        return view('edit_blog_data',['data'=>$data]);
    }

    public function update_blog(Request $req){
        $data=bloge::find($req->id);
    
    
        $data->title=$req->title;
        $data->date=$req->date;
        $data->contant=$req->content;
    
        $Id=$data->save();
        return redirect('all_blog');
    }
}
