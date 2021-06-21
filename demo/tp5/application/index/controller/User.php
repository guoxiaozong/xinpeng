<?php
namespace app\index\controller;
use think\Controller;
use think\DB;
use think\Request;

class User extends Controller
{
	public function getIndex()
	{
		$row = DB::table('user')->order("id desc")->field("id,username,email,sex")->select();
		echo json_encode($row);
	}
	public function getAdd()
	{
		unset($_GET['id']);
		$res = DB::table('user')->insertGetId($_GET);
		if ($res) {
    		//添加成功
    		echo '{"code":"200","msg":"添加成功","id":"'.$res.'"}';
    	} else {
    		echo '{"code":"100","msg":"添加失败","id":"没有"}';
    	}
	}
	public function getDel(Request $request)
	{
	    $id = $request->param("id");
		$res = DB::table("user")->where("id",$id)->delete();
		if ($res) {
    		//添加成功
    		echo '{"code":"200","msg":"删除成功","id":"'.$res.'"}';
    	} else {
    		echo '{"code":"100","msg":"删除失败","id":"没有"}';
    	}
	}
	public function getEdit(Request $request)
	{
	    $get = $request->except(['action']);
		$res = DB::table("user")->update($get);
		if ($res) {
    		//添加成功
    		echo '{"code":"200","msg":"修改成功","id":"'.$res.'"}';
    	} else {
    		echo '{"code":"100","msg":"修改失败","id":"没有"}';
    	}
	}
}