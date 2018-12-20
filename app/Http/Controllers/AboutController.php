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
use App\Protype;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index (Request $request)
    {
        $data = array();
        $data['webinfo'] = About::first();
        //公司文化
        $data['culture'] = Culture::where('type',0)->get();

        return view('about', ['data' => $data]);
    }
}
