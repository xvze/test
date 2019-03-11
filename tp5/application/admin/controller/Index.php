<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
class Index extends Controller{
	public function show(){
		return $this->fetch("login/login");
	}
	public function checkname(){
		$name=$_POST['name'];
		$db=Db::name('user');
		$res=$db->where('name',$name)->find();
		if($res){
			echo 1;
		}else{
			echo 2;
		}
	}
	public function checkpass(){
		$pass=$_POST['pass'];
		$name=$_POST['name'];
		$db=Db::name('user');
		$res=$db->where('name',$name)->find();
		if($pass==$res['pass']){
			session('username', $name);
			echo 3;
		}else{
			echo 4;
		}
	}
	public function shouye(){
		return $this->fetch('login/shouye');
	}
}