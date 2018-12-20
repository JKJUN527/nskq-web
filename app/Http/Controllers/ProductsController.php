<?php
/**
 * Created by PhpStorm.
 * User: JKJUN
 * Date: 2017/7/28
 * Time: 17:15
 */
namespace App\Http\Controllers;

use App\About;
use App\Product;
use App\Protype;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index (Request $request)
    {
        $data = array();
        $data['webinfo'] = About::first();
        $data['type'] = Protype::all();
        if($request->has('producttype') && $request->input('producttype')!=-1){
            $data['selecttype'] = $request->input('producttype');
            $data['products'] = Product::where('type',$request->input('producttype'))
                ->orderBy('updated_at','desc')
                ->paginate(2);
        }else{
            $data['selecttype'] = -1;
            $data['products'] = Product::orderBy('updated_at','desc')->paginate(2);
        }
        return view('products',['data'=>$data]);
    }
    public function advantage(Request $request){
        $data = array();
        $data['type'] = Protype::all();
        //优势产品直接显示全部
        if($request->has('ptype'))
            $data['ptype'] = $request->input('ptype');
        else
            $data['ptype'] = -1;
        $data['lang'] = HomeController::getLang();
        //查询新闻
//        $news = new NewsController();
//        $data['newest'] = $news->searchNewest(6);//最新新闻
        //默认显示第一个类型的优势产品
        if($data['ptype'] != -1) {
            $data['products'] = Product::where('is_urgency', 1)
                ->where('type', $data['ptype'])
                ->orderby('created_at', 'desc')
                ->paginate(20);
        }else{
            $data['products'] = Product::where('is_urgency', 1)
//                ->where('type', $data['ptype'])
                ->orderby('created_at', 'desc')
                ->paginate(20);
        }
        $data['about'] = About::first();

//        return $data;
        return view('advantage', ['data' => $data]);
    }
}
