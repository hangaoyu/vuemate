<?php
/**
 * Created by PhpStorm.
 * User: hangaoyu
 * Date: 17/2/6
 * Time: 下午3:17
 */

namespace App\Http\Controllers\Frontend;


class test {
    public $name;
    public static function doStaticTest(){
        //测试开始
        $i=1;
        $i++;
        //测试结束
    }

    function doTest(){
        //测试开始
        $i=1;
        $i++;
        //测试结束
    }
}