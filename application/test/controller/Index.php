<?php
namespace app\test\controller;

use think\Request;

class Index
{
    public function index()
    {
        $request = Request::instance();
        print_r($request->post());

    }
}
