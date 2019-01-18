<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
    public function sendtext(){
        $name = '我的第一份邮件';
        Mail::send('emails.test',['name'=>$name],function ($message){
            $to = '13210107876@163.com';
            $message ->to($to)->subject('邮件测试');
        });
        // 返回的一个错误数组，利用此可以判断是否发送成功
        dd(Mail::failures());
    }

//    public function sendimg(){
//        $name = '我的第一份图片邮件';
//        $image = 'D:\wamp\www\yysqm\public\img\dajie2.jpg';
//
//        Mail::send('emails.test',['name'=>$name,'image'=>$image],function ($message){
//            $to = '13210107876@163.com';
//            $message ->to($to)->subject('邮件测试');
//        });
//        // 返回的一个错误数组，利用此可以判断是否发送成功
//        dd(Mail::failures());
//    }
}