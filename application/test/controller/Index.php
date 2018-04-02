<?php
namespace app\test\controller;

use think\Controller;
use think\Request;


class Index extends Controller
{
    public function index()
    {
      return  $this->fetch('show');

    }
}
