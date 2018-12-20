<?php
/**
 * Created by PhpStorm.
 * User: JKJUN
 * Date: 2017/7/28
 * Time: 17:15
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use App\Protype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RegionController extends Controller {

    //显示已添加产品分类
    public function index() {
        $uid = AdminAuthController::getUid();
        if ($uid == 0)
            return view('admin.login');

        $data = DashboardController::getLoginInfo();
        $data['region'] = Protype::all();
        //return $data;
        return view('admin/region', ['data' => $data]);
    }
    //删除、添加产品分类
    public function edit(Request $request, $option) {
        $uid = AdminAuthController::getUid();
        if ($uid == 0) {
            return redirect('admin/login');
        }

        $resultData = array();

        switch ($option) {
            case 'add':
                if ($request->has('ch_name')) {
                    $ch_name = $request->input('ch_name');
                    $describe = $request->input('describe');

                    //判断是否存在该分类
                    $is_exist = Protype::where('name',$ch_name)
                        ->count();
                    if($is_exist >=1){
                        $resultData['status'] = 400;
                        $resultData['msg'] = "分类已存在";
                        return $resultData;
                    }
                    $protype = new Protype();
                    $protype->name = $ch_name;
                    $protype->describe = $describe;

                    if ($protype->save()) {
                        $resultData['status'] = 200;
                    } else {
                        $resultData['status'] = 400;
                        $resultData['msg'] = "添加失败";
                    }
                }
                break;
            case 'delete':
                if ($request->has('rid')) {
                    $data = $request->input('rid');

                    $num = Product::where('type',$data)->delete();

                    $del = Protype::find($data);
                    $bool = $del->delete();

                    if ($bool) {
                        $resultData['status'] = 200;
                        $resultData['msg'] = "共有".$num."个产品被删除";
                    } else {
                        $resultData['status'] = 400;
                        $resultData['msg'] = "删除失败";
                    }
                }
                break;
            default:
                $resultData['status'] = 400;
                $resultData['msg'] = "无效操作";
                break;
        }

        return $resultData;
    }
    public function productView(){
        $uid = AdminAuthController::getUid();
        if ($uid == 0)
            return view('admin.login');

        $data = DashboardController::getLoginInfo();
        $data['region'] = Protype::all();
        $data['products'] = DB::table('db_product')
            ->leftjoin('db_product_type','db_product.type','db_product_type.id')
            ->select('db_product.id','db_product.name','db_product.model','image','main_introduce','is_urgency','db_product_type.name as typename')
            ->orderBy('db_product.created_at','desc')
            ->paginate(10);
        //return $data;
        return view('admin/products', ['data' => $data]);
    }
    public function productEdit(Request $request, $option) {
        $uid = AdminAuthController::getUid();
        if ($uid == 0) {
            return redirect('admin/login');
        }

        $resultData = array();

        switch ($option) {
            case 'add':
                if ($request->has('name') && $request->has('introduce')) {
                    $name = $request->input('name');
                    $model = $request->input('model');
                    $type = $request->input('type');
                    $introduce = $request->input('introduce');

                    //判断是否存在该分类
                    $is_exist = Product::where('name',$name)->count();
                    if($is_exist >=1){
                        $resultData['status'] = 400;
                        $resultData['msg'] = "产品已存在";
                        return $resultData;
                    }
                    $product = new Product();
                    if ($request->hasFile('picture')) {
                        $adpic = $request->file('picture');//取得上传文件信息
                        if ($adpic->isValid()) {//判断文件是否上传成功
                            //扩展名
                            $ext = $adpic->getClientOriginalExtension();
                            //临时觉得路径
                            $realPath = $adpic->getRealPath();
                            //生成文件名
                            $picname = date('Y-m-d-H-i-s') . '-' . uniqid() . 'product' . '.' . $ext;

                            $bool = Storage::disk('products')->put($picname, file_get_contents($realPath));

                            $product->image = asset('storage/products/' . $picname);

                        }
                    }
                    $product->name = $name;
                    $product->model = $model;
                    $product->main_introduce = $introduce;
                    $product->type = $type;

                    if ($product->save()) {
                        $resultData['status'] = 200;
                    } else {
                        $resultData['status'] = 400;
                        $resultData['msg'] = "添加失败";
                    }
                }
                break;
            case 'delete':
                if ($request->has('rid')) {
                    $data = $request->input('rid');

                    $del = Product::find($data);
                    $bool = $del->delete();

                    if ($bool) {
                        $resultData['status'] = 200;
                    } else {
                        $resultData['status'] = 400;
                        $resultData['msg'] = "删除失败";
                    }
                }
                break;
            case 'urgency':
                if ($request->has('rid')) {
                    $rid = $request->input('rid');
                    $urgency = $request->input('urgency');

                    $data = Product::find($rid);
                    $data->is_urgency = (int)$urgency;

                    if ($data->save()) {
                        $resultData['status'] = 200;
                        $resultData['msg'] = "设置成功";
                        return $resultData;
                        //return redirect()->back()->with('success','设置成功');
                    }
                }
                $resultData['status'] = 400;
                $resultData['msg'] = "设置失败";
                break;
            default:
                $resultData['status'] = 400;
                $resultData['msg'] = "无效操作";
                break;
        }

        return $resultData;
    }
}
