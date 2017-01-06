<?php
namespace Home\Controller;
use Think\Controller;

class PublicController extends Controller {

    public function verify() {
        $code = new \Think\Verify();
        $code->length = 4;
        $code->imageW = 200;
        $code->imageH = 50;
        $code->useNoise = false;
        $code->codeSet = '0123456789';
        $code->entry();
    }

} // end class