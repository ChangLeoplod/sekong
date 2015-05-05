<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>【色空美女】- 美女图片|性感美女|嫩模写真|丝袜美腿 - 色即是空，空即是色</title>
<meta name="keywords" content="【色空美女】 - 色即是空，空即是色 - 美女图片|性感美女|嫩模写真|丝袜美腿" />
<meta name="description" content="【色空美女】 - 色即是空，空即是色 - 美女图片|性感美女|嫩模写真|丝袜美腿" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/templets/sekong/js/html5.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/templets/sekong/css/common.css"/>
<link rel="shortcut icon" href="favicon.ico" />
</head>
<body>  
    <!--header-->
    <header class="header">
        <div class="header_in">
            <h1 class="logo"><a href="" target="_self">色空美图</a></h1>
            <ul class="nav">
                <li><a href="" class="cur">首页</a></li>
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,islast from {$dbtbpre}enewsclass where bclassid='0' and showclass='0' order by myorder,classid ASC limit 11",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <?php
                $classurl=sys_ReturnBqClassname($bqr,9);
                ?>
                <?php
                if(!$bqr[islast])
                {
                ?>
                <li class="nav_item2">
                <a href="" class="nav_item2_a"><?=$bqr[classname]?></a>
                    <i></i>
                    <div>
                 <?php
                    $newsclass=$empire->query("select classid,classname from ".$dbtbpre."enewsclass where bclassid=".$bqr[classid]." order by myorder,classid desc limit 11");
                    while($classr=$empire->fetch($newsclass))
                    {
                        $classrurl=sys_ReturnBqClassname($classr,9);
                        ?>
                        <a href="<?=$classrurl?>"><?=$classr[classname]?></a>
                    <?php
                    }
                    ?>
                    </div>
                </li>
                <?php
                }else{
                ?>
                <li><a href="<?=$classurl?>"><?=$bqr[classname]?></a></li>
                <?php
                }
                ?>
                </li>
                <?php
}
}
?>
               
            </ul>
            <a href="" class="header_wap">色空手机版</a>
        </div>
    </header>

    <div class="wrap index_section1">
        <div class="banner">
            <div class="index_section1_title">
                <h2>色空原创</h2>
                <p>小编每日更新模特原创极品写真图集</p>
            </div>
            <div class="img" id="slide-panel">
                <div>
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(0,5,3,1,'firsttitle=1');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                        <span>
                            <a target="_blank" href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>">
                                <p class="text"><?=$bqr['title']?></p>
                                <img src="<?=$bqr['bigpic']?>" alt="<?=$bqr['title']?>" >
                            </a>
                        </span>
                    <?php
}
}
?>
                   
                </div>
            </div>
            <div class="b_bnt" id="bn_bnt">
                <a class="corrent"></a>
                <a class=""></a>
                <a class=""></a>
                <a class=""></a>
                <a class=""></a>
            </div>
        </div>
        <div class="index_section1_rt">
            <div class="index_section1_rt_title">               
                <h2>色空最新美图</h2>
                <a href="">更多原创套图 >></a>
            </div>
            <ul class="index_section1_list">
               
                   <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from [!db.pre!]ecms_news where classid in("2","4","7","10","11","12","13") order by id DESC limit 10',10,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <li>
                        <em <?php if($bqno==1||$bqno==2||$bqno==3){ echo 'class="bg_red"';} ?>><?=$bqno?></em>
                        <a href="<?=$bqsr['titleurl']?>"><?=$bqr['title']?></a>
                        <span><?=date('m-d',$bqr[newstime])?></span>
                    </li>
                <?php
}
}
?>
            </ul>
        </div>
    </div>
    
    <!--精美套图-->
    <div class="wrap">
        <div class="h2_ h2daren">
            <h2 class="h2_title">嫩模写真<span>SeKong & Models</span></h2>
            <a class="h2_more" href="">更多>></a>
        </div>
        <ul class="list1_">
            <!-- 7就是栏目ID -->
            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(7,10,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <li>
                    <a href="<?=$bqsr['titleurl']?>" class="img_mask">
                        <img src="<?=$bqr[titlepic]?>" alt="<?=$bqr['title']?>">
                        <span><?=esub($bqr[title],36)?></span>
                    </a>
                </li>
            <?php
}
}
?>
        </ul>
    </div>

    <!--性感美女-->
    <div class="wrap">
        <div class="h2_ h2oumei">
            <h2 class="h2_title">性感美女 <span>Sexy& Girls</span></h2>
            <a class="h2_more" href="">更多>></a>
        </div>
        <ul class="list1_">
            <!-- 2就是栏目ID -->
            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(4,10,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <li>
                    <a href="<?=$bqsr['titleurl']?>" class="img_mask">
                        <img src="<?=$bqr[titlepic]?>" alt="<?=$bqr['title']?>">
                        <span><?=esub($bqr[title],36)?></span>
                    </a>
                </li>
            <?php
}
}
?>
        </ul>
    </div>

    <!--日韩美女-->
    <div class="wrap">
        <div class="h2_ h2rihan">
            <h2 class="h2_title">小清新 <span>Japan & Korea</span></h2>
            <a class="h2_more" href="">更多>></a>
        </div>
        <ul class="list1_">
            <!-- 7就是栏目ID -->
            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(2,5,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <li>
                    <a href="<?=$bqsr['titleurl']?>" class="img_mask">
                        <img src="<?=$bqr[titlepic]?>" alt="<?=$bqr['title']?>">
                        <span><?=esub($bqr[title],36)?></span>
                    </a>
                </li>
            <?php
}
}
?>
        </ul>
    </div>
    <!--footer-->
    <footer class="footer">
        <div class="wrap">
            <div class="footer_logo">色空美图</div>
            <dl class="footer_law">
                <dt>法律声明</dt>
                <dd>本站所有作品不含有淫秽、色情内容，如有违反法律请联系管理员版权声明本站部份作品均属原创，版权归本站所有，未经同意请勿转载。</dd>
            </dl>
            <dl class="footer_about">
                <dt>关于我们</dt>
                <dd><a href="">关于我们</a></dd>
                <dd><a href="">联系我们</a></dd>
                <dd><a href="">图片版权说明</a></dd>
            </dl>
            <dl class="footer_follow">
                <dt>关注我们</dt>
                <dd>
                    <a href="" class="footer_weibo"></a>
                    <a href="" class="footer_douban"></a>
                </dd>
            </dl>
            <div class="footer_wap">
                <a href="" class="footer_android">安卓版</a>
                <a href="" class="footer_iphone">IOS版</a>
            </div>
        </div>
        <p class="footer_cp">© 2014 Sekong.com All Rights Reserved.</p>
    </footer>

<script type="text/javascript" src="/templets/sekong/js/jQuery.v1.8.3-min.js"></script>
<script type="text/javascript" src="/templets/sekong/js/jquery.switchable.min.js"></script>
<script type="text/javascript" src="/templets/sekong/js/common.js"></script>
</body>
</html>
