<?php
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller {

    public function login() {
        $this->display();
    }

    public function tryLogin() {
        $code = $_POST['verify'];
        if (!$this->check_verify($code)) $this->error('验证码不正确！！！'); // 检查验证码

        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = M('User');
        $where['username'] = $username;
        $where['password'] = $password;
        $arr = $user->field('id')->where($where)->find();

        if($arr) {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $arr['id'];
            $this->success('登陆成功', U('Index/index'));
        }
        else $this->error('该用户不存在');
    }

    public function tryLogout() {
        $_SESSION = array();
        if(isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time - 1, '/');
        }
        session_destroy();
        $this->redirect('Index/index');
    }

    function check_verify($code, $id = ''){
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }

}