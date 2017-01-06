<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        $this->assign('name', $_SESSION['username']);
        $m = D('User');
        $where['username'] = $_SESSION['username'];
        $arr = $m->where($where)->select();
        $this->assign('list', $arr);

        $p = M('Pic');
        $where2['uid'] = $arr[0]['id'];
        $pic = $p->where($where2)->select();
        // 寻找用户最新的头像, id 是最高数字的
        $where3['id'] = $pic[0]['id'];
        foreach ($pic as $i) {
            $where3['id'] = max($where3['id'], $i['id']);
        }
        $pic = $p->where($where3)->select();
        $this->assign('picture', $pic);

        $this->display();
    }

}