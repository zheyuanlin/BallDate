<?php

namespace Home\Controller;
use Think\Controller;

class UserController extends Controller {
    public function index() {
        $m = M('User');
        $arr = $m->select();
        $this->assign('data', $arr);
        $this->display();
    }

    public function del() {

        $m = M('User');
        $id = $_GET['id'];
        $where['id'] = $id;
        $did = $m->where($where)->find()['dept_id'];

        // 从User表删除
        $count = $m->delete($id);
        if (!$count > 0) $this->error('删除失败');

        //
        //$d = M('Dept');
        //$where['id'] = $did;
        //$data = $d->where($where)->find();
        //$data['dept_size'] -= 1;
        //$count1 = $d->where($where)->save($data);
        //if (!$count1 > 0) $this->error('部门人数更改失败');

        // 删除账户是，所有跟该用户有关系的头像也给删除掉!
        $p = M('Pic');
        $where2['uid'] = $id;
        $p->where($where2)->delete();

        $_SESSION = array();

        if(isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time - 1, '/');
        }
        session_destroy();
        $this->redirect('Index/index');
    }



        public function modify() {
        $m = M('User');
        $id = $_GET['id'];
        $arr = $m->find($id);
        $this->assign('data', $arr);
        $this->display();
    }

    public function update() {
        $m = M('User');
        $where['id'] = $_POST['id'];
        $data['username'] = $_POST['username'];
        $data['sex'] = $_POST['sex'];
        $data['password'] = $_POST['password'];
        $data['name'] = $_POST['name'];
        $data['user_num'] = $_POST['user_num'];
        $count = $m->where($where)->save($data);
        if ($count > 0) $this->success('更新成功', U('Index/index'));
        else $this->error('更改失败');
    }


} // end class