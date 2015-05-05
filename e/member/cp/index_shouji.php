<?php
require("../../class/connect.php");
require("../../class/db_sql.php");
require("../../class/q_functions.php");
require("../class/user.php");
require("../../data/dbcache/MemberLevel.php");
$link=db_connect();
$empire=new mysqlquery();
$editor=1;
eCheckCloseMods('member');//关闭模块
//是否登陆
$uname=$_POST['username'];
$user=islogin_shouji($uname);
$r=ReturnUserInfo($user[userid]);
$view_r=ReturnUserViewRecord($user[userid]);
$addr=$empire->fetch1("select * from {$dbtbpre}enewsmemberadd where userid='".$user[userid]."' limit 1");
//头像
$userpic=$addr['userpic']?$addr['userpic']:$public_r[newsurl].'e/data/images/nouserpic.gif';
//有效期
$userdate=0;
if($r[userdate])
{
	$userdate=$r[userdate]-time();
	if($userdate<=0)
	{
		$userdate=0;
	}
	else
	{
		$userdate=round($userdate/(24*3600));
	}
}
//注册时间
$registertime=eReturnMemberRegtime($r['registertime'],"Y-m-d H:i:s");
//导入模板
//require(ECMS_PATH.'e/template/member/cp.php');
$array_count=count($user[bakr]);
$arr = array();
$arr['success'] = true;
$arr['userid'] = $user[userid];
$arr['username'] = $user[username];
$arr['registertime'] =$registertime;
$arr['memlevel']=$r[groupid];
$arr['memdesc']=$level_r[$r[groupid]][groupname];
$arr['userfen']=$r[userfen];
$arr['userdate']=$userdate;
$arr['money']=$r[money];
$arr['bakr']=$view_r[bakr];
$arr['fava']="../fave/index_shouji.php";
$strt = json_encode($arr, JSON_UNESCAPED_UNICODE);
echo($strt);
db_close();
$empire=null;
?>
