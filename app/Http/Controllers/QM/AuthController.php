<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/6 0006
 * Time: 9:44
 */
namespace App\Http\Controllers\QM;
session_start();
use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Http\Model\QM\User;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;
use Illuminate\Validation\Rules\In;
use Validator;
use Session;

class AuthController extends Controller
{


    public function login(){
        return view('qm.auth.login');
    }


    public function check_login(){
        $input = Input::except('_token');
//        dd($input);
        $username = $input['username'];
        $password = $input['password'];

        $re = User::where('username',$username)->first();
        if($username != $re['username'] || $password !=Crypt:: decrypt($re['password'])){
            $data = [
                'status'=>0,
                'msg'    =>'账号密码错误！'
            ];
        }else{
            $data = [
                'status'=>1,
            ];
            session(['id'=>$re['id'],'username'=>$username]);
        }
        return $data;
    }
    public function quit()
    {
        session(['username'=>null]);
        return redirect('/');
    }

    public function reg(){
            return view('qm.auth.reg');
    }

    public function check_reg(){
        $input = Input::get('field');
        $username = $input['username'];
        $re = User::where('username',$username)->first();

        if($re){
            return array("status"=>0,"msg"=>"用户名已存在");
        }

        isset($input['game_name'])?$game_name=$input['game_name']:$game_name = null;


        $password = $input['password'];
//        $password = Crypt::encrypt($password);

        if(strlen($password)>12||strlen($password)<6){
            return array("status"=>0,"msg"=>"密码不符合要求");

        }else{
            if($password!=$input['password_c']){
                return array("status"=>0,"msg"=>"两次输入不同");
            }
            $password = Crypt::encrypt($password);
        }

        $re = User::create(['username'=>$username,'game_name'=>$game_name,'password'=>$password]);
        if($re){
            return array("status"=>1,"msg"=>"注册完成");
        }else{
            return array("status"=>0,"msg"=>"注册失败");
        }



    }
    public function check_username(){
        $input = Input::all();
        $username = $input['username'];

        $re = User::where('username',$username)->first();
        if(count($re)>0){
            return array("status"=>0,"msg"=>"用户名已存在");
        }
    }

    public function check_code(){
        $input = Input::all();
        $code = $input['code'];
        if(Session::get('code')!=$code) {
//            dd(Session::get('milkcaptcha'));
            return array("status"=>0,"msg"=>"验证码错误");
        }
    }

    /**
     * 验证码生成
     * @param  [type] $tmp [description]
     * @return [type]      [description]
     */
    public function captcha($tmp)
    {
        $phrase = new PhraseBuilder;
        // 设置验证码位数
        $code = $phrase->build(4);
        // 生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder($code, $phrase);
        // 设置背景颜色
        $builder->setBackgroundColor(220, 210, 230);
        $builder->setMaxAngle(10);
        $builder->setMaxBehindLines(0);
        $builder->setMaxFrontLines(0);
        // 可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        // 获取验证码的内容
        $phrase = $builder->getPhrase();
        // 把内容存入session
        \Session::flash('code', $phrase);
        // 生成图片   此处要设置浏览器不要缓存
        header("Cache-Control: no-cache, must-revalidate");
        header("Content-Type:image/jpeg");
        $builder->output();
    }

}