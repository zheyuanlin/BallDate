<?php
namespace Home\Controller;
use Think\Controller;
class GameController extends Controller {

    public function index() {
        $m = M('Game');
        $arr = $m->select();
        $this->assign('data', $arr);
        $this->display();
    }

    public function add() {
        $this->display();
    }


    public function create() {
        $game = D('Game');
        if (!$game->create()) {
            $this->error($game->getError());
        } ;

        $check = $game->add();

        if ($check) $this->redirect('Game/index');
        else $this->error('添加失败');
    }

    public function checkName() {
        $gname = $_GET['name'];
        $game = M('Game');
        $where['name'] = $gname;
        $count= $game->where($where)->count();
        if ($count) echo '球赛名已存在';
    }

    public function del() {
        $d = M('Game');
        $id = $_GET['id'];
        $where['id'] = $id;
        $arr = $d->where($where)->find();
        if ($arr['size'] != 0) $this->error('请把部门里的员工调走或删除');
        $count = $d->delete($id);
        if (!$count > 0) $this->error('删除失败');

        $_SESSION = array();

        if(isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time - 1, '/');
        }
        session_destroy();
        $this->redirect('Game/index');

    }

    public function modify() {
        $m = M('Game');
        $id = $_GET['id'];
        $arr = $m->find($id);
        $this->assign('data', $arr);
        $this->display();
    }

    public function update() {
        $m = M('Game');
        $where['id'] = $_POST['id'];
        $data['name'] = $_POST['name'];
        $count = $m->where($where)->save($data);
        if ($count > 0) $this->success('更新成功', U('Game/index'));
        else $this->error('更改失败');
    }





} // end class