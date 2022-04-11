<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NewsFormController extends Controller
{
    // Create News Form
    public function createForm(Request $request) {
        return view('NewsForm');
    }
        // Store Contact Form data
     public function NewsForm(Request $request) {

            // Form validation
            $this->validate($request, [
                //article 1
                'tags_1' => 'required',
                'titre_1' => 'required',
                'image_1' => 'required',
                'description_1'=>'required',
                'lienB_1' => 'required',
                //// article 2
                'tags_2' => 'required',
                'titre_2' => 'required',
                'image_2' => 'required',
                'description_2'=>'required',
                'lienB_2' => 'required',
                // article 3
                'tags_3' => 'required',
                'titre_3' => 'required',
                'image_3' => 'required',
                'description_3'=>'required',
                'lienB_3' => 'required',
                /// article 4
                'tags_4' => 'required',
                'titre_4' => 'required',
                'image_4',
                'description_4'=>'required',
                'lienB_4' => 'required',
                /// article 5
                'tags_5' => 'required',
                'titre_5' => 'required',
                'image_5',
                'description_5'=>'required',
                'lienB_5' => 'required',


                //$lienB_1 = str_replace(" ","",$request -> lienB_1),
             ]);

            //  Store data in database
            News::create($request->all());

            //
            return back()->with('success', 'News créée avec succès');
        }

        //Show news sante
        public function index() {

            // $date = "02-28-2013";
            // $date1 = str_replace('-', '/', $date);
            // $tomorrow = date('m-d-Y',strtotime($date1 . "+1 days"));

            // echo $tomorrow;
            // exit;

            // $date = date('dmY', strtotime("+2 days"));
            // echo $date;

            // $date = strtotime($date);
            // $date = strtotime("+2 day", $date);
            // echo date('dmY', $date);

            $news = news::select('num_news','tags_1','titre_1','image_1','description_1','lienB_1','tags_1','titre_1','image_1','description_1','lienB_1','tags_2','titre_2','image_2','description_2','lienB_2','tags_3','titre_3','image_3','description_3','lienB_3','tags_4','titre_4', 'image_4', 'description_4','lienB_4','tags_5','titre_5', 'image_5','description_5','lienB_5')->orderBy('created_at', 'desc')->get();
            // var_dump($news);
            $pubmd5 = '{{email_md5}}';
            $desabonne = '{{email_unsubscribe}}';
            return view('news',compact('news','pubmd5','desabonne'));
          }

          //Show news info
        public function showSante2() {

            $news = news::select('num_news','tags_1','titre_1','image_1','description_1','lienB_1','tags_1','titre_1','image_1','description_1','lienB_1','tags_2','titre_2','image_2','description_2','lienB_2','tags_3','titre_3','image_3','description_3','lienB_3','tags_4','titre_4', 'image_4', 'description_4','lienB_4','tags_5','titre_5', 'image_5','description_5','lienB_5')->orderBy('created_at', 'desc')->get();
            // var_dump($news);
            $pubmd5 = '{{email_md5}}';
            $desabonne = '{{email_unsubscribe}}';
            $date = date('dmY', strtotime("+2 days"));
            return view('news_sante_2',compact('news','pubmd5','desabonne','date'));
          }

        //Show news info
        public function showInfo() {

            $news = news::select('num_news','tags_1','titre_1','image_1','description_1','lienB_1','tags_1','titre_1','image_1','description_1','lienB_1','tags_2','titre_2','image_2','description_2','lienB_2','tags_3','titre_3','image_3','description_3','lienB_3','tags_4','titre_4', 'image_4', 'description_4','lienB_4','tags_5','titre_5', 'image_5','description_5','lienB_5')->orderBy('created_at', 'desc')->get();
            // var_dump($news);
            $pubmd5 = '{{email_md5}}';
            $desabonne = '{{email_unsubscribe}}';
            $date = date('dmY', strtotime("+2 days"));
            return view('news_info',compact('news','pubmd5','desabonne'));
          }

          //Show news info
        public function showPeople() {

            $news = news::select('num_news','tags_1','titre_1','image_1','description_1','lienB_1','tags_1','titre_1','image_1','description_1','lienB_1','tags_2','titre_2','image_2','description_2','lienB_2','tags_3','titre_3','image_3','description_3','lienB_3','tags_4','titre_4', 'image_4', 'description_4','lienB_4','tags_5','titre_5', 'image_5','description_5','lienB_5')->orderBy('created_at', 'desc')->get();
            // var_dump($news);
            $pubmd5 = '{{email_md5}}';
            $desabonne = '{{email_unsubscribe}}';
            $date = date('dmY', strtotime("+2 days"));
            return view('news_people',compact('news','pubmd5','desabonne'));
          }

        public function showSortir() {

            $news = news::select('num_news','tags_1','titre_1','image_1','description_1','lienB_1','tags_1','titre_1','image_1','description_1','lienB_1','tags_2','titre_2','image_2','description_2','lienB_2','tags_3','titre_3','image_3','description_3','lienB_3','tags_4','titre_4', 'image_4', 'description_4','lienB_4','tags_5','titre_5', 'image_5','description_5','lienB_5')->orderBy('created_at', 'desc')->get();
            // var_dump($news);
            $pubmd5 = '{{email_md5}}';
            $desabonne = '{{email_unsubscribe}}';
            $date = date('dmY', strtotime("+2 days"));
            return view('news_sortir',compact('news','pubmd5','desabonne'));
          }

        public function showVoyagez() {

            $news = news::select('num_news','tags_1','titre_1','image_1','description_1','lienB_1','tags_1','titre_1','image_1','description_1','lienB_1','tags_2','titre_2','image_2','description_2','lienB_2','tags_3','titre_3','image_3','description_3','lienB_3','tags_4','titre_4', 'image_4', 'description_4','lienB_4','tags_5','titre_5', 'image_5','description_5','lienB_5')->orderBy('created_at', 'desc')->get();
            // var_dump($news);
            $pubmd5 = '{{email_md5}}';
            $desabonne = '{{email_unsubscribe}}';
            $date = date('dmY', strtotime("+2 days"));
            return view('news_voyagez',compact('news','pubmd5','desabonne'));
          }


        // public function editForm(Request $request,$id){

        //     $num_news = $request->input('num_news');
        //     $tags_1 = $request->input('tags_1');
        //     $titre_1 = $request->input('titre_1');
        //     $image_1 = $request->input('image_1');
        //     $description_1 = $request->input('description_1');
        //     $lienB_1 = $request->input('lienB_1');
        //     ///////// artical 2

        //     $tags_2 = $request->input('tags_2');
        //     $titre_2 = $request->input('titre_2');
        //     $image_2 = $request->input('image_2');
        //     $description_2 = $request->input('description_2');
        //     $lienB_2 = $request->input('lienB_2');

        //     ////article 3

        //     $tags_3 = $request->input('tags_3');
        //     $titre_3 = $request->input('titre_3');
        //     $image_3 = $request->input('image_3');
        //     $description_3 = $request->input('description_3');
        //     $lienB_3 = $request->input('lienB_3');

        //     //// article 4

        //     $tags_4 = $request->input('tags_4');
        //     $titre_4 = $request->input('titre_4');

        //     $description_4 = $request->input('description_4');
        //     $lienB_4 = $request->input('lienB_4');

        //     //// article 5

        //     $tags_5 = $request->input('tags_5');
        //     $titre_5 = $request->input('titre_5');

        //     $description_5 = $request->input('description_5');
        //     $lienB_5 = $request->input('lienB_5');


        //     DB::update('update news set num_news = ?,tags_1=?,titre_1=?,image_1=?,description_1=?,lienB_1=?,tags_2=?,titre_2=?,image_2=?,description_2=?,lienB_2=?,tags_3=?,titre_3=?,image_3=?,description_3=?,lienB_3=?,tags_4=?,titre_4=?,description_4=?,lienB_4=?,tags_5=?,titre_5=?,description_5=?,lienB_5=? where id = ?',[$num_news,$tags_1,$titre_1,$image_1,$description_1,$lienB_1,$tags_2,$titre_2,$image_2,$description_2,$lienB_2,$tags_3,$titre_3,$image_3,$description_3,$lienB_3,$tags_4,$titre_4,$description_4,$lienB_4,$tags_5,$titre_5,$description_5,$lienB_5,$id]);
        //     echo "Record updated successfully.
        //     ";
        //     echo 'Click Here to go back.';
        //     }
        public function indexOff() {
            return view('back_office\index');
        }
    }

