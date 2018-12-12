<?php
/**
 * Created by PhpStorm.
 * User: JKJUN
 * Date: 2017/7/28
 * Time: 17:15
 */
namespace App\Http\Controllers;

use App\About;
use App\Message;
use App\Protype;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (Request $request)
    {
        $data = array();
//        return $data;
        return view('index');
    }
    public function contact(Request $request){
        $data = array();

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
            $message->content = $request->input('message');
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
