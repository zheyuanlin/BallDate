<?php

namespace Home\Controller;
use Think\Controller;

class RegisterController extends Controller {

    public function reg() {
        $this->display();
    }

    public function tryReg() {
        /*
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $sex = $_POST['sex'];
        */
        $code = $_POST['verify'];
        if (!$this->check_verify($code)) $this->error('验证码不正确！！！'); // 检查验证码

        $user = D('User');
        if (!$user->create()) {
            $this->error($user->getError());
        } ;
        /*
        $data['username'] = $username;
        $data['password'] = $password;
        $data['sex'] = $sex;
        */
        $check = $user->add(); // add()如果成功是有返回值

        if ($check) $this->redirect('Index/index');
        else $this->error('用户注册失败');
    }

    public function checkName() {
        $username = $_GET['username'];
        $user = M('User');
        $where['username'] = $username;
        $count= $user->where($where)->count();
        if ($count) echo '该用户已存在';
    }

    function check_verify($code, $id = ''){
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }
} // end class