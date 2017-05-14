<?php
namespace app\admin\controller;

use app\admin\model\User as UserModel;
use think\Controller;
use think\Db;
use think\Session;

class User extends Controller
{
    
   //获取用户数据列表并输出
    public function login()
    {
        return $this->fetch();
    }
    
    //检测登录
    public function checklogin($username='',$password='')
    {
        $user = Db::query('select * from sct_user where username = \'' . $username .'\' and password = \'' . md5($password) . '\'');
        Session::set('loginuser',$user[0]);
        
        if (!empty($user))
        {
            $this->success('登录成功' , '/admin/index/index');
        }
        else
        {
            $this->error('登录失败','/admin/user/login');
        }
        
    }
    
    //
    public function logout()
    {
        Session::clear();
        $this->error('退出成功','/admin/user/login');
    }
    
}

