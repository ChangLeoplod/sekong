<?php
require("../class/connect.php");
require("../class/db_sql.php");
require("../class/t_functions.php");
require("../class/functions.php");

$link=db_connect();
$empire=new mysqlquery();

$videoflag = $_GET['videoflag'];
if(empty($videoflag))
{
	$videoflag=0;
}

//执行代码
$shouji_string = GenMainPageRandom($videoflag);
$shoujitruefile = ECMS_PATH.'shouji/index.php';
//echo "shouji true file: " . $shoujitruefile;
WriteFiletext($shoujitruefile,AddPHPHead().$shouji_string.AddPHPTail());


//为手机随机生成首页php文件
function GenMainPageRandom($videoflag)
{
	global $empire,$dbtbpre;
	if(!defined('InEmpireCMS'))
	{
		exit();
	}
	$retstring = "\$arr = array();
	\$arr['success'] = true;
	\$arr['videoflag'] = $videoflag;
	";

	//搜集目录栏
	$retstring = $retstring . 
	"
	\/\/搜集目录栏
	\$arrListInfo_category = array();
	";
	$bqno=0;
	$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,classpath from {$dbtbpre}enewsclass where bclassid=0 order by myorder,classid asc",0,24,0);
	if($ecms_bq_sql){
		while($bqr=$empire->fetch($ecms_bq_sql)){
			$bqsr=sys_ReturnEcmsLoopStext($bqr);
			$bqno++;
			//$classurl=sys_ReturnBqClassname($bqr,9);//取得栏目地址
			$classurl=$bqr['classpath']; //取得栏目地址
			$retstring = $retstring . 
				"\$arrTemp = array(
					'classurl' => " . "\"/shouji/" . $classurl . "/\"". ",
					'classid' => " . "\"" . $bqr[classid] . "\"" . ",
					'name' => " . "\"" . $bqr[classname] . "\"" . ");
				";
			$retstring = $retstring . 
				"\$arrListInfo_category[] = \$arrTemp;

				";
		}

		$retstring = $retstring . 
			"
			\$arr['categoryList'] = \$arrListInfo_category;
			";
	}

	//搜集图集
	$retstring = $retstring . 
	"
	\/\/开始拼凑首页图片
	\$arrListInfo_MainPic = array();
	";
	//随机推荐美图
	$bqno=0;
	//$query='select '.ReturnSqlListF($mid).' from '.$dbtbpre.'ecms_'.$tbname.$query.' order by '.ReturnSetTopSql('bq').$addorder.' limit '.$line;
	//$query = "select * from  www_92game_net_6188net_ecms_news a 
	//			join (select round(( select max(id) - min(id) from www_92game_net_6188net_ecms_news ) * rand() + (select min(id) from www_92game_net_6188net_ecms_news)) as rid 
	//			from www_92game_net_6188net_ecms_news limit 100 ) b on a.id = b.rid";
	$query = "select * from  www_92game_net_6188net_ecms_news a 
				join (select round(( select max(id) - min(id) from {$dbtbpre}ecms_news ) * rand() + (select min(id) from {$dbtbpre}ecms_news))  as rid from {$dbtbpre}ecms_news limit 200 ) 
				b on a.id = b.rid 
				WHERE classid != 17 and classid != 8 and classid != 14 and classid !=21 and classid !=22";
	$ecms_bq_sql=$empire->query1($query);
	//$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',10,4,1);
	if($ecms_bq_sql){
		while($bqr=$empire->fetch($ecms_bq_sql)){
			$bqsr=sys_ReturnEcmsLoopStext($bqr);
			$bqno++;
			//将首页与内容页都放到一个json里面
			$content_r=$empire->fetch1("select newstext from {$dbtbpre}ecms_news_data_1 where id='$bqr[id]' and classid='$bqr[classid]' limit 1");
			$content_test=stripslashes($content_r['newstext']);
			$img_arr=get_imgs($content_test);
			$picList=array();
			$picTemp="array(";
			for($i =0; $i< count($img_arr);$i++)
			{
				$picTemp=$picTemp. "\"".$img_arr[$i]."\"";
				if(($i+1)!=count($img_arr))
				{
					$picTemp=$picTemp.",";
				}
			}
			$picTemp=$picTemp.")";
			$retstring = $retstring . 
				"\$arrTemp = array(
					'href' => \"/shouji" . str_replace(".html", ".php", $bqsr[titleurl]) . "\",
					'title' => \"" . esub($bqr[title],28) . "\",
					'src' => \"" . $bqr[titlepic] . "\",
					'piclist' => ".$picTemp.");
				";
			$retstring = $retstring . 
				"\$arrListInfo_MainPic[] = \$arrTemp;
				";
		}
	}
	$retstring = $retstring .
                        "\$arr['MainPic'] = \$arrListInfo_MainPic;
                        ";

	//最终json编码
        $retstring = $retstring .
        "
        \$strt = json_encode(\$arr, JSON_UNESCAPED_UNICODE);
        echo(\$strt);
        ";
	return $retstring;
}

echo "success";
db_close();
$empire=null;
?>
