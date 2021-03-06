<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use Response;
use DB;
use Validator;
class ArticleController extends Controller
{
    public function index(Request $request) {
        // using per_page //http://localhost:8000/api/get-article?per_page=1&page=2
        $data = Article::select('*')->orderBy('id', 'DESC')->paginate($request->per_page);
        return Response::json([
            'message'=>'success',
            'success'=> true,
            'code' => 200,// status OK
            'data' => $data->items()
        ]);
        
    }
    public function getCategoryArticle($id,Request $request) {
        // using per_page //http://localhost:8000/api/getpost?per_page=1&page=2
        $data = Article::select('id','categories_id','title_kh','images','description_kh','article_kh','created_at')->orderBy('id', 'DESC')->where('categories_id',$id)->paginate($request->per_page);
        return Response::json([
            'message'=>'success',
            'success'=> true,
            'code' => 200,// status OK
            'data' => $data->items()
        ]);
        
    }
    
  public function getDetail($id,Request $request){
    

    $data = Article::select('id','title_kh','title_en','images','article_kh','article_en','created_at')->where('id',$id)->first();
     return Response::json([
        'message'=>'success',
        'success'=> true,
        'code' => 200,// status OK
        'data' => $data
    ]);
  }



  
}
