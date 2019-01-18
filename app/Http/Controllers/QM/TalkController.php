<?php
namespace App\Http\Controllers\QM;

use App\Http\Controllers\Controller;

class TalkController extends Controller
{
    public function index(){
        return view('qm.talk.index');
    }

}