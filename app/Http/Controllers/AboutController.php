<?php
/**
 * Created by PhpStorm.
 * User: JKJUN
 * Date: 2017/7/28
 * Time: 17:15
 */
namespace App\Http\Controllers;

use App\About;
use App\Protype;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index (Request $request)
    {
        $data = array();

        return view('about', ['data' => $data]);
    }
}
