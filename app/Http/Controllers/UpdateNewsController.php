<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\News;

class UpdateNewsController extends Controller
{
    public function index(){
        $news = news::select('id','num_news','tags_1','titre_1','image_1','description_1','lienB_1','tags_1','titre_1','image_1','description_1','lienB_1','tags_2','titre_2','image_2','description_2','lienB_2','tags_3','titre_3','image_3','description_3','lienB_3','tags_4','titre_4','image_4','description_4','lienB_4','tags_5','titre_5','image_5','description_5','lienB_5')->orderBy('created_at', 'desc')->get();
        // var_dump($news);
        return view('updateForm',compact('news'));
        }
        public function show($id) {
        $news = DB::select('select * from news where id = ?',[$id]);
        // return view('updateForm',['news'=>$news]);
        return view('editNews',compact('news'));
        }
        public function editForm(Request $request,$id){

            $num_news = $request->input('num_news');

            ///////// artical 2
            $tags_1 = $request->input('tags_1');
            $titre_1 = $request->input('titre_1');
            $image_1 = $request->input('image_1');
            $description_1 = $request->input('description_1');
            $lienB_1 = $request->input('lienB_1');

            ///////// artical 2
            $tags_2 = $request->input('tags_2');
            $titre_2 = $request->input('titre_2');
            $image_2 = $request->input('image_2');
            $description_2 = $request->input('description_2');
            $lienB_2 = $request->input('lienB_2');

            ////article 3
            $tags_3 = $request->input('tags_3');
            $titre_3 = $request->input('titre_3');
            $image_3 = $request->input('image_3');
            $description_3 = $request->input('description_3');
            $lienB_3 = $request->input('lienB_3');

            //// article 4
            $tags_4 = $request->input('tags_4');
            $titre_4 = $request->input('titre_4');
            $image_4 = $request->input('image_5');
            $description_4 = $request->input('description_4');
            $lienB_4 = $request->input('lienB_4');

            //// article 5
            $tags_5 = $request->input('tags_5');
            $titre_5 = $request->input('titre_5');
            $image_5 = $request->input('image_5');
            $description_5 = $request->input('description_5');
            $lienB_5 = $request->input('lienB_5');




            DB::update('update news set num_news = ?,tags_1=?,titre_1=?,image_1=?,description_1=?,lienB_1=?,tags_2=?,titre_2=?,image_2=?,description_2=?,lienB_2=?,tags_3=?,titre_3=?,image_3=?,description_3=?,lienB_3=?,tags_4=?,titre_4=?,image_4=?,description_4=?,lienB_4=?,tags_5=?,titre_5=?,image_5=?,description_5=?,lienB_5=? where id = ?',[$num_news,$tags_1,$titre_1,$image_1,$description_1,$lienB_1,$tags_2,$titre_2,$image_2,$description_2,$lienB_2,$tags_3,$titre_3,$image_3,$description_3,$lienB_3,$tags_4,$titre_4,$description_4,$lienB_4,$tags_5,$titre_5,$description_5,$lienB_5,$id]);
            return redirect()->back()->with('status',' news is modified ');
            }

}
