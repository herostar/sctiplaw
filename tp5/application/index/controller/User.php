<?php
namespace app\index\controller;

use app\index\model\User as UserModel;
use think\Controller;

class User extends Controller
{
   //获取用户数据列表并输出
    public function index()
    {
        $list = UserModel::all();
        $this->assign('list' , $list);
        $this->assign('count' , count($list));
        return $this->fetch();
    }
    
}

