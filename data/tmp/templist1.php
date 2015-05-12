<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title><?=$class_r[$GLOBALS[navclassid]][bname]?> - <?=$public_r['add_www.92game.net.ming']?></title>
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/templets/sekong/js/html5.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/templets/sekong/css/common.css"/>
<link rel="shortcut icon" href="favicon.ico" />
<style>
.page_ .active {
    background: none repeat scroll 0 0 #2b2b2b;
    color: #fff;
    display: inline-block;
    font-weight: bold;
    height: 30px;
    line-height: 30px;
    margin: 0 2px;
    min-width: 24px;
    overflow: hidden;
    padding: 0 5px;
    text-align: center;
}
</style>
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
    <div class="list_wrap">     
        <div class="list_nav">
            <a href="" class="cur">热门</a>
            <a href="">最新</a>
        </div>
        <div class="list_page">
            <div class="page_">
                [!--show.listpage--]
            </div>
        </div>
    </div>

    <div class="wrap">
        <ul class="list1_">
            [!--empirenews.listtemp--]
            <!--list.var1-->
            <!--list.var2-->
            <!--list.var3-->
            <!--list.var4-->
            <!--list.var5-->
            [!--empirenews.listtemp--]
        </ul>
        <!--页码-->
        <div class="page_">
            [!--show.listpage--]
        </div>
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

</body>
</html>
