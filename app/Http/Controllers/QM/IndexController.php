<?php
namespace App\Http\Controllers\QM;

use App\Http\Controllers\Controller;
use App\Http\Model\QM\Test;

class IndexController extends Controller
{
    public function index(){
        return view('qm.index.index');
    }

    public function test(){
        $data = Test::paginate(10);
        $data = $data->toarray();
        $count = count (Test::all());
        $arr =  array();
        $arr['code'] = 0;
        $arr['msg'] = '';
        $arr['count'] = $count;
        $arr['data'] = $data['data'];

        $arr_json = json_encode($arr);

        return $arr_json;
    }
}