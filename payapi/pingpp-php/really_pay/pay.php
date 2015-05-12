<?php
/* *
 * Ping++ Server SDK
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写, 并非一定要使用该代码。
 * 该代码仅供学习和研究 Ping++ SDK 使用，只是提供一个参考。
*/

require_once(dirname(__FILE__) . '/../init.php');
$input_data = json_decode(file_get_contents('php://input'), true);
/*
$input_data = array(
	'username'=>'test1',
	'amount'=>1000,
	'groupid'=>1,
	'buytype'=>1,
	'vipid'=>1,
	'channelid'=>1000,
	'client_ip'=>'59.174.164.71',
	'channel'=>'alipay'
	);
*/
if (empty($input_data['channel']) || empty($input_data['amount'])) {
	//echo "exit\n";
	$arr['success']=false;
	$arr['info']='para is not enough';
	$strt=json_encode($arr,JSON_UNESCAPED_UNICODE);
        echo($strt);
	exit();
}
$channel = strtolower($input_data['channel']);
$amount = $input_data['amount'];
$orderNo = $channel.substr(md5(time()), 0, 15);
$username = $input_data['username'];
$groupid = $input_data['groupid'];
$buytype = $input_data['buytype'];
$vipid = $input_data['vipid'];
$channelid = $input_data['channelid'];
if(empty($username) || empty($groupid) || empty($buytype) || empty($channelid))
{
	$arr['success']=false;
	$arr['info']='para is not enough';
	$strt=json_encode($arr,JSON_UNESCAPED_UNICODE);
        echo($strt);
}
$buytypearray = array(1=>'购买vip',2=>'购买点数');
$viparray = array(1=>'vip月卡',2=>'vip季卡', 3=>'vip半年卡');

//$extra 在使用某些渠道的时候，需要填入相应的参数，其它渠道则是 array() .具体见以下代码或者官网中的文档。其他渠道时可以传空值也可以不传。
$extra = array();
switch ($channel) {
    case 'alipay_wap':
        $extra = array(
            'success_url' => 'http://www.yourdomain.com/success',
            'cancel_url' => 'http://www.yourdomain.com/cancel'
        );
        break;
    case 'upmp_wap':
        $extra = array(
            'result_url' => 'http://www.yourdomain.com/result?code='
        );
        break;
    case 'bfb_wap':
        $extra = array(
            'result_url' => 'http://www.yourdomain.com/result?code='
        );
        break;
    case 'upacp_wap':
        $extra = array(
            'result_url' => 'http://www.yourdomain.com/result?code='
        );
        break;
    case 'wx_pub':
        $extra = array(
            'open_id' => 'Openid'
        );
        break;
    case 'wx_pub_qr':
        $extra = array(
            'product_id' => 'Productid'
        );
        break;
}

\Pingpp\Pingpp::setApiKey('sk_test_efLmn9TqLKOG0OGOeLbHCmL0');
try {
    $ch = \Pingpp\Charge::create(
        array(
            "subject"   => $buytypearray[$buytype],
            "body"      => $viparray[$vipid],
            "amount"    => $amount,
            "order_no"  => $orderNo,
            "currency"  => "cny",
            "extra"     => $extra,
            "channel"   => $channel,
            "client_ip" => $_SERVER["REMOTE_ADDR"],
            "app"       => array("id" => "app_1mLKeHnLCKW9bzzD"),
            "metadata"  => array(
			'username'=>$username,
			'groupid'=>$groupid,
			'buytype'=>$buytype,
			'vipid'=>$vipid,
			'channelid'=>$channelid)
        )
    );
    echo $ch;
} catch (\Pingpp\Error\Base $e) {
    header('Status: ' . $e->getHttpStatus());
    echo($e->getHttpBody());
}
