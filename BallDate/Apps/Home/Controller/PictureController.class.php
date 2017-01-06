<?php
namespace Home\Controller;
use Think\Controller;

class PictureController extends Controller {

    public function uploadPicture() {
        $pic = D('Pic');
        $pic->create();

        $upload = new \Think\Upload();
        $upload->maxSize = 3145728;
        $upload->exts = array('jpg', 'png', 'gif', 'jpeg');
        $upload->rootPath = './Public/Uploads/';
        $upload->savePath = '';
        $upload->autoSub = false;

        $info = $upload->upload();
        if (!$info) $this->error($upload->getError());

        $pic->filename = $info['filename']['savename'];
        $pic->uid = $_SESSION['id'];
        $check = $pic->add();
        if ($check) $this->success('上传成功', U('Index/index'));
        else $this->error('上传失败');

    }

    public function add_() {
        $p = M('Pic');
        $where['uid'] = $_GET['id'];
        $arr = $p->where($where)->find();
        $this->assign('data', $arr);
        $this->display();
    }

} // end class