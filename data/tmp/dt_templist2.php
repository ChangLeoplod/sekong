<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>[!--pagetitle--]图片_[!--pagetitle--]写真-<?=$public_r['add_www.92game.net.ming']?></title>
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />
<link href="/templets/ye/css/6188_public.css" rel="stylesheet" media="screen" type="text/css" />
<link href="/templets/ye/css/6188_style.css" rel="stylesheet" media="screen" type="text/css" />
<script language="javascript" type="text/javascript" src="/templets/ye/css/jquery-1.4.4.min.js"></script>
<script language="javascript" type="text/javascript" src="/templets/ye/css/jquery.switchable[all].min.js"></script>
</head>
<body>
 <div class="hd_nav">
      <div class="w1000">
<a href='/' class="current">主页</a>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname from {$dbtbpre}enewsclass where bclassid=0 order by myorder,classid asc",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
$classurl=sys_ReturnBqClassname($bqr,9);//取得栏目地址
$class="";
if($GLOBALS[navclassid])
{
$fcr=explode('|',$class_r[$GLOBALS[navclassid]][featherclass]);
$topbclassid=$fcr[1]?$fcr[1]:$GLOBALS[navclassid];//取得当前栏目的一级栏目ID
if($bqr[classid]==$topbclassid)
{
$class="current";
}
}
?>
<a href="<?=$classurl?>"><?=$bqr[classname]?></a><?php
}
}
?> 	
</div>
    </div>
  </div>
  <div class="clear"></div>
  <div class="w1000 ad"><script src="/d/js/acmsd/thea1.js"></script></div>
  <div class="clear"></div>
  <div class="w1000">
    <div class="position">
	<a href="/">主页</a> > 热门标签 > [!--pagetitle--]
	</div>
  </div>
  <div class="clear"></div>
  <div class="w1000 box03">
  <ul class="product01">

[!--empirenews.listtemp--]
<!--list.var1-->
<!--list.var2-->
<!--list.var3-->
<!--list.var4-->
<!--list.var5-->
[!--empirenews.listtemp--]
  </ul>

  <div class="clear"></div>
  <div class="page">
[!--show.listpage--]

  </div>
  </div>
  
  <div class="clear"></div>
   <div class="w1000 ad"><script src="/d/js/acmsd/thea3.js"></script></div>
   <div class="footer">
    <div class="w1000 box04">
    Copyright 2013    <?=$public_r['add_www.92game.net.url']?>    All Rights Reseved    ICP备案号：<?=$public_r['add_www.92game.net.beian']?>    <?=$public_r['add_www.92game.net.tongji']?> <br/>
本站为大家提供正规美女图片，拒绝低俗不和谐内容，所有美女图片等内容均为网络转载，据说天才3秒就能记住本站。
    </div>
  </div>
<script src="/d/js/acmsd/thea5.js"></script>
</body>
</html>