<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title><?=$grpagetitle?> - <?=$public_r['add_www.92game.net.ming']?></title>
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>" />
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
            <h1 class="logo"><a href="/" target="_self">色空美图</a></h1>
            <ul class="nav">
                <li><a href="/" class="cur">首页</a></li>
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
    <?php
          $content=stripslashes($navinfor['newstext']);
        
        $img_arr = get_imgs($content);
       
    ?>
    <div class="wrap content_top">
        <h1 class="content_title"><?=$grpagetitle?> (9/<?php echo count($img_arr);?>)</h1>
        <div class="content_top_right">
            <a href="" class="content_top_like">喜欢</a>
            <a href="" class="content_top_more">更多原创套图</a>
        </div>
    </div>
    
    <div class="content">
        

        <div id="bigImg">
            <img src="" alt="">
            <a href="javascript:void(0);" class="bigImg_arrowL"></a>
            <a href="javascript:void(0);" class="bigImg_arrowR"></a>
        </div>
        <div class="content_bar">

            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',1,0,0,'id>'.$navinfor[id].'','id asc');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <a class='content_bar_prev content_bar_more' href='<?php
            echo $bqsr[titleurl];
            $next='true';
            ?>'><img src="<?=$bqr[titlepic]?>" alt="<?=esub($bqr[title],30)?>"/><span><?=esub($bqr[title],30)?></span></a>
            <?php
}
}
?>
            <?php
            if(empty($next)){
                echo "对不起，没有上一图集了！";
            }
            ?>

            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',1,0,0,'id<'.$navinfor[id].'','id desc');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <a class='content_bar_next content_bar_more' href='<?php
            echo $bqsr[titleurl];
            $pre='true';
            ?>'><img src="<?=$bqr[titlepic]?>" alt="<?=esub($bqr[title],30)?>"/><span><?=esub($bqr[title],30)?></span></a>
            <?php
}
}
?>
            <?php
            if(empty($pre)){
            echo "对不起，没有下一图集了！";
            }
            ?>
            <!--
            <a href="" class="content_bar_prev content_bar_more">
                <img src="images/pic4.jpg">
                <span>俏佳人</span>
            </a>
            <a href="" class="content_bar_next content_bar_more">
                <img src="images/pic4.jpg">
                <span>俏佳人</span>
            </a>
            -->
            <!--轮播-->
            <div class="content_slide">
                <a href="javascript:void(0);" class="small_arrowlt"></a>
                <a href="javascript:void(0);" class="small_arrowrt"></a>
                <div id="smallImg">
                    <table>
                        <tr>
                            <?php
                                for ($i=0; $i <count($img_arr) ; $i++) { 
                                    $class="";
                                    if($i==0){
                                        $class="class='on'";
                                    }
                                    echo '<td '.$class.'><a href="javascript:void(0);"><img src="'.$img_arr[$i].'"></a></td>';
                                }
                            ?>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="wrap">
        <h2 class="content_more">更多美女图片</h2>
        <ul class="list1_">
            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',10,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <li>
                    <a href="<?=$bqsr['titleurl']?>" class="img_mask">
                        <img src="<?=$bqr[titlepic]?>" alt="<?=$bqr['title']?>">
                        <span><?=esub($bqr[title],22)?></span>
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
        <p class="footer_cp">© 2014 Sekong.com All Rights Reserved.</p>
    </footer>

<script type="text/javascript" src="/templets/sekong/js/jQuery.v1.8.3-min.js"></script>
<script type="text/javascript" src="/templets/sekong/js/common.js"></script>
</body>
</html>
