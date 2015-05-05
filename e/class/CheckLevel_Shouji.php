<?php
//返回权限列表
function ShowViewInfoLevels($groupid){
	global $level_r;
	if(empty($groupid))
	{
		return '至少会员';
	}
	$r=explode(',',$groupid);
	$count=count($r)-1;
	$groups='';
	$dh='';
	for($i=1;$i<$count;$i++)
	{
		$groups.=$dh.$level_r[$r[$i]][groupname];
		$dh=',';
	}
	return $groups;
}

//显示提示页面
function ShowViewInfoMsg($r,$msg){
	global $public_r,$check_path,$level_r,$class_r,$public_diyr;
	//查看权限
	if(empty($r['userfen']))
	{
		if($class_r[$r[classid]]['cgtoinfo'])//栏目设置
		{
			$ViewLevel="需要 [".ShowViewInfoLevels($r['eclass_cgroupid'])."] 级别才能查看。";
		}
		else
		{
			$ViewLevel="需要 [".$level_r[$r[groupid]][groupname]."] 级别以上才能查看。";
		}
	}
	else
	{
		if($class_r[$r[classid]]['cgtoinfo'])//栏目设置
		{
			$ViewLevel="需要 [".ShowViewInfoLevels($r['eclass_cgroupid'])."] 级别与扣除 ".$r['userfen']." 点积分才能查看。";
		}
		else
		{
			$ViewLevel="需要 [".$level_r[$r[groupid]][groupname]."] 级别以上与扣除 ".$r['userfen']." 点积分才能查看。";
		}
	}
	$r['title']=stripSlashes($r['title']);
	$public_diyr['pagetitle']=$r['title'];
	$arr = array();
	$arr['success']=false;
	$arrReturnInfo = array();
	$arrTemp = array(
		'title' => $r['title'],
		'code' => $msg['returnCode'],
		'nextoper' => $msg['returnString'],
		'viewPremission' => $ViewLevel
	);
	$arrReturnInfo[]=$arrTemp;
	$arr['returnInfo'] = $arrReturnInfo;
	$strt = json_encode($arr, JSON_UNESCAPED_UNICODE);
	echo($strt);
	db_close();
	$empire=null;
	exit();
}
//是否登陆
function ViewCheckLogin($username){
	global $empire,$public_r,$ecms_config,$toreturnurl,$gotourl;
	$cr=$empire->fetch1("select ".eReturnSelectMemberF('checked,userid,username,groupid,userfen,userdate,zgroupid')." from ".eReturnMemberTable()." where username"."='$username' limit 1");
	echo "userid: " . $cr['userid'];
	if(!$cr['userid'])
	{
		EmptyEcmsCookie();
		if(!getcvar('returnurl'))
		{
			esetcookie("returnurl",$toreturnurl,0);
		}
		//$msg="同一帐号只能一人在线，<a href='$gotourl'><u>点击这里</u></a>重新登陆；注册请<a href='".$public_r['newsurl']."e/member/register/'><u>点击这里</u></a>。";
		$msg['returnCode'] = 2;
		$msg['returnString'] = "同一账号只能一人在线，请注册或者重新登陆";
		ShowViewInfoMsg($infor,$msg);
	}
	if($cr['checked']==0)
	{
		EmptyEcmsCookie();
		if(!getcvar('returnurl'))
		{
			esetcookie("returnurl",$toreturnurl,0);
		}
		//$msg="您的帐号还未审核通过，<a href='$gotourl'><u>点击这里</u></a>重新登陆；注册请<a href='".$public_r['newsurl']."e/member/register/'><u>点击这里</u></a>。";
		$msg['returnCode'] = 3;
		$msg['returnString'] = "您的账号还未审核通过，请注册或者重新登陆";
		ShowViewInfoMsg($infor,$msg);
	}
	//默认会员组
	if(empty($cr['groupid']))
	{
		$user_groupid=eReturnMemberDefGroupid();
		$usql=$empire->query("update ".eReturnMemberTable()." set groupid = '$user_groupid' where userid = '$cr[userid]'");
		$cr['groupid']=$user_groupid;
	}
	//是否过期
	if($cr['userdate'])
	{
		if($cr['userdate']-time()<=0)
		{
			OutTimeZGroup($cr['userid'],$cr['zgroupid']);
			$cr['userdate']=0;
			if($cr['zgroupid'])
			{
				$cr['groupid']=$cr['zgroupid'];
				$cr['zgroupid']=0;
			}
		}
	}
	$re[userid]=$cr['userid'];
	$re[username]=$cr['username'];
	$re[userfen]=$cr['userfen'];
	$re[groupid]=$cr['groupid'];
	$re[userdate]=$cr['userdate'];
	$re[zgroupid]=$cr['zgroupid'];
	return $re;
}

//查看权限函数
function CheckShowNewsLevel($infor,$add){
	global $check_path,$level_r,$empire,$gotourl,$toreturnurl,$public_r,$dbtbpre,$class_r;
	$groupid=$infor['groupid'];
	$userfen=$infor['userfen'];
	$id=$infor['id'];
	$classid=$infor['classid'];
	//是否登陆
	$user_r=ViewCheckLogin($add['username']);
	//验证权限
	if($class_r[$infor[classid]]['cgtoinfo'])//栏目设置
	{
		$checkcr=$empire->fetch1("select cgroupid from {$dbtbpre}enewsclass where classid='$infor[classid]'");
		if($checkcr['cgroupid'])
		{
			if(!strstr($checkcr[cgroupid],','.$user_r[groupid].','))
			{
				$infor['eclass_cgroupid']=$checkcr[cgroupid];
				if(!getcvar('returnurl'))
				{
					esetcookie("returnurl",$toreturnurl,0);
				}
				//$msg="您没有足够权限查看此信息! <a href='$gotourl'><u>点击这里</u></a>重新登陆；注册请<a href='".$public_r['newsurl']."e/member/register/'><u>点击这里</u></a>。";
				$msg['returnCode'] = 4;
				$msg['returnString'] = "您没有足够的权限查看此信息";
				ShowViewInfoMsg($infor,$msg);
			}
		}
	}
	if($groupid)//信息设置
	{
		if($level_r[$groupid][level]>$level_r[$user_r[groupid]][level])
		{
			if(!getcvar('returnurl'))
			{
				esetcookie("returnurl",$toreturnurl,0);
			}
			//$msg="您的会员级别不足(您的当前级别：".$level_r[$user_r[groupid]][groupname].")，没有查看此信息的权限! <a href='$gotourl'><u>点击这里</u></a>重新登陆；注册请<a href='".$public_r['newsurl']."e/member/register/'><u>点击这里</u></a>。";
			$msg['returnCode']=5;
			$msg['returnString']="您的会员级别不够（您当前级别: ".$level_r[$user_r[groupid]][groupname].")，没有查看此信息的权限!";
			ShowViewInfoMsg($infor,$msg);
		}
	}
	echo "user lever : "  . $level_r[$user_r[groupid]][level]; 
	//扣点
	if($level_r[$user_r[groupid]][level]<2&&!empty($userfen))
	{
		//是否有历史记录
		$bakr=$empire->fetch1("select id,truetime from {$dbtbpre}enewsdownrecord where id='$id' and classid='$classid' and userid='$user_r[userid]' and online=2 order by truetime desc limit 1");
		if($bakr['id']/*&&(time()-$bakr['truetime']<=$public_r['redoview']*3600)*/)
		{
		}
		else
		{
			echo "user_r[userdate] : " . $user_r[userdate];
			if($user_r[userdate]-time()>0)//包月
			{
				echo "baoyue\n";
			}
			else
			{
				echo "user_r[userfen]: " . $user_r[userfen];
				if($user_r[userfen]<$userfen)
				{
					if(!getcvar('returnurl'))
					{
						esetcookie("returnurl",$toreturnurl,0);
					}
					//$msg="您的点数不足(您当前拥有的点数 ".$user_r[userfen]." 点)，没有查看此信息的权限! <a href='$gotourl'><u>点击这里</u></a>重新登陆；注册请<a href='".$public_r['newsurl']."e/member/register/'><u>点击这里</u></a>。";
					$msg['returnCode']=6;
					$msg['returnString']="您的点数不足(您当前拥有的点数：" . $user_r[userfen]." 点)，没有查看此信息的权限!";
					ShowViewInfoMsg($infor,$msg);
				}
				//扣点
				$usql=$empire->query("update ".eReturnMemberTable()." set userfen = userfen - '$userfen' where userid = '$user_r[userid]'");
			}
			//备份下载记录
			$utfusername=$user_r['username'];
			BakDown($classid,$id,0,$user_r['userid'],$utfusername,$infor[title],$userfen,2);
		}
	}
	$arr = array();
        $arr['success']=true;
        $strt = json_encode($arr, JSON_UNESCAPED_UNICODE);
        echo($strt);
}
function DoDeduction($add)
{
	global $empire,$dbtbpre;
	//$check_tbname=RepPostVar($add['tablename']);
	$check_infoid=$add['id'];
	$check_tbname=$add['tablename'];
        $checkinfor=$empire->fetch1("select * from {$dbtbpre}ecms_".$check_tbname." where id='$check_infoid' limit 1");
        if(!$checkinfor['id']||$checkinfor['classid']!=$add['classid'])
        {
                printerror_shouji("Not News", "", 1, 0, 1);
        }
        //副表
        $check_mid=$class_r[$checkinfor[classid]]['modid'];
        $checkfinfor=$empire->fetch1("select ".ReturnSqlFtextF($check_mid)." from {$dbtbpre}ecms_".$check_tbname."_data_".$checkinfor[stb]." where id='$checkinfor[id]' limit 1");
        $checkinfor=array_merge($checkinfor,$checkfinfor);
	//验证ip
	eCheckAccessDoIp('showinfo');
	if($checkinfor['groupid'])
	{
		CheckShowNewsLevel($checkinfor, $add);
	}
	else
	{
		$arr = array();
		$arr['success']=true;
		$strt = json_encode($arr, JSON_UNESCAPED_UNICODE);
		echo($strt);
	}
	db_close();
	$empire=null;

}

?>
