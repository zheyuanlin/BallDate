<?php
namespace Home\Controller;
use Think\Controller;
class GameUserController extends Controller {

    public function index() {
        $m = M('User');
        $where['game_id'] = $_GET['id'];
        $arr = $m->where($where)->select();
        $this->assign('data', $arr);
        $this->display();
    }

    public function switchGame() {
        $m = M('User');
        $id = $_GET['id'];
        $arr = $m->find($id);
        $this->assign('data', $arr);
        $d = M('Game');
        $arr2 = $d->select();
        $this->assign('game_data', $arr2);
        $this->display();

    }

    public function trySwitch() {
        $m = M('User');
        $where['id'] = $_POST['id'];
        $data['game_id'] = $_POST['game_id'];

        $count = $m->where($where)->save($data);
        if ($count > 0) {
            $old = $_POST['old_game'];
            $new = $_POST['game_id'];
            $this->updateGameSize($old, $new);
            $this->success('更新成功', U('Game/index'));
        }
        else $this->error('调换球赛失败');
    }

    public function updateGameSize($old, $new) {
        $d = M('Game');
        // Update old game's size
        $where['id'] = $old;
        $arr1 = $d->where($where)->find();
        $arr1['size'] -= 1;
        $count1 = $d->where($where)->save($arr1);
        if (!$count1 > 0) $this->error('旧球赛人数更改失败');

        // Update new dept's size
        $where2['id'] = $new;
        $arr = $d->where($where2)->find();
        $arr['size'] += 1;
        $count = $d->where($where2)->save($arr);
        if (!$count > 0) $this->error('新球赛人数更改失败');

        return true;

    }
} // end class