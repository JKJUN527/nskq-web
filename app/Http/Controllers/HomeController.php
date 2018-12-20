<?php
/**
 * Created by PhpStorm.
 * User: JKJUN
 * Date: 2017/7/28
 * Time: 17:15
 */
namespace App\Http\Controllers;

use App\About;
use App\Culture;
use App\Message;
use App\Product;
use App\Protype;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (Request $request)
    {
        $data = array();
            $data['products'] = Product::where('is_urgency',1)
                ->orderBy('updated_at','desc')
                ->take(8)
                ->get();
        $data['productstype'] = Protype::all();
        $data['webinfo'] = About::first();
        //轮播图
        $data['culture'] = Culture::where('type',1)->get();
//        return $data;
        return view('index',['data'=>$data]);
    }
    public function contact(Request $request){
        $data = array();
        $data['webinfo'] = About::first();

        return view('contact',['data'=>$data]);
    }
    public function AddMeaasge(Request $request){
        $data = array();
        $data['status'] = 400;
        $data['msg'] = "未知错误";

        if($request->has('name') && $request->has('email') &&$request->has('message')){
            $message = new Message();
            $message->name = $request->input('name');
            $message->email = $request->input('email');
            $message->message = $request->input('message');
            $message->phone = $request->input('phone');
            if($message->save()){
                $data['status'] = 200;
                $data['msg'] = "留言成功！我们将尽快与您联系！";
            }
        }
        return $data;
    }

    public function marketIndex(Request $request){
        $data = array();
        $data['type'] = Protype::all();
        if($request->has('ptype'))
            $data['ptype'] = $request->input('ptype');
        else
            $data['ptype'] = $data['type'][0]->id;

        $data['lang'] = HomeController::getLang();
        $data['about'] = About::first();
//        return $data;
        return view('marketing',['data'=>$data]);
    }
}
