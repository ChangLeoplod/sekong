<?php
/* *
 * Ping++ Server SDK
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写, 并非一定要使用该代码。
 * 该代码仅供学习和研究 Ping++ SDK 使用，只是提供一个参考。
 */

require_once dirname(__FILE__).'/../../../log4php/Logger.php';
Logger::configure(dirname(__FILE__).'/../../../log4php/log4php.xml');
$pay = Logger::getLogger('pay-all');
$input_data = json_decode(file_get_contents("php://input"), true);
/*
$input_data = array(
	'object'=>'charge',
	'paid'=>'true',
	'order_no'=>'test1234567892',
	'amount'=>1000,
	'client_ip'=>'59.174.164.71',
	'channel'=>'alipay',
	'metadata'=>array(
		'username'=>'test1',
		'groupid'=>1,
		'buytype'=>1,
		'vipid'=>1,
		'channelid'=>'1000')
	);
	echo "init ok\n";
*/
if($input_data['object'] == 'charge'&& $input_data['paid']==true)
{
	global $dbtbpre;
	//TODO update database
	require("../../../class/connect.php");
	require("../../../class/db_sql.php");
	require("../../../class/q_functions.php");
	require("../../../member/class/user.php");
	$link=db_connect();
	$empire=new mysqlquery();
	$orderid=$input_data['order_no'];
	$money=floor($input_data['amount'])/100;
	//echo "money: " . $money . "\n";
	$payip=$input_data['client_ip'];
	$metadata=$input_data['metadata'];
	$username=$metadata['username'];
	$usergroupid=$metadata['groupid'];
	$buytype=$metadata['buytype'];
	$vipid=$metadata['vipid'];
	$channelid=$metadata['channelid'];
	$paytype=$input_data['channel'];
	$sql_r=$empire->fetch1("select userid from {$dbtbpre}enewsmember where username='$username' limit 1");
	$userid=$sql_r[userid];
	if(empty($userid))
	{
		db_close();
		$empire=null;
		$pay->warn('user is not exit');
		echo 'success';
		exit();
	}
	$pay->info('username: '.$username.', userid: '.$userid.', usergroup: '.$usergroupid.', buytype: '.$buytype.', vipid: '.$vipid.', channelid: '.$channelid.', orderid: '.$orderid.', paytype: '.$paytype);
	//$payr=$empire->fetch1("select * from {$dbtbpre}enewspayapi where paytype='$paytype' limit 1");

	include('../../payfun.php');
	$pr=$empire->fetch1("select paymoneytofen,payminmoney from {$dbtbpre}enewspublic limit 1");
	$fen=floor($money)*$pr[paymoneytofen];
	if($buytype==2)			//购买点数
	{
		$paybz='购买点数: '.$fen;
		PayApiBuyFen($fen,$money,$paybz,$orderid,$userid,$username,$paytype,$payip,$channelid);
	}
	elseif($buytype==1)		//购买会员
	{
		include("../../../data/dbcache/MemberLevel.php");
		$bgid=$vipid;
		PayApiBuyGroupPay($bgid,$money,$orderid,$userid,$username,$usergroupid,$paytype,$payip,$channelid);
	}
	$pay->info('ok, callback success');
	db_close();
	$empire=null;
	echo 'success';
}
else if($input_data['object'] == 'refund'&& $input_data['succeed']==true)
{
	//TODO update database
	echo 'success';
}
else
{
	$pay->warn('callback value is empty');
	echo 'fail';
}
