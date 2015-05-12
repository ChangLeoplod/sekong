<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><p>&nbsp;&lt;!DOCTYPE HTML&gt;</p>
<div>&lt;html&gt;</div>
<div>&lt;head&gt;</div>
<div>&lt;meta charset=&quot;utf-8&quot;&gt;</div>
<div>&lt;title&gt;&lt;?=$class_r[$GLOBALS[navclassid]][bname]?&gt;-&lt;?=$public_r['add_www.92game.net.ming']?&gt;&lt;/title&gt;</div>
<div>&lt;meta name=&quot;keywords&quot; content=&quot;[!--pagekey--]&quot; /&gt;</div>
<div>&lt;meta name=&quot;description&quot; content=&quot;[!--pagedes--]&quot; /&gt;</div>
<div>&lt;!--[if lt IE 9]&gt;</div>
<div>&lt;script type=&quot;text/javascript&quot; src=&quot;/templets/sekong/js/html5.js&quot;&gt;&lt;/script&gt;</div>
<div>&lt;![endif]--&gt;</div>
<div>&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;/templets/sekong/css/common.css&quot;/&gt;</div>
<div>&lt;link rel=&quot;shortcut icon&quot; href=&quot;favicon.ico&quot; /&gt;</div>
<div>&lt;style&gt;</div>
<div>.page_ .active {</div>
<div>&nbsp; &nbsp; background: none repeat scroll 0 0 #2b2b2b;</div>
<div>&nbsp; &nbsp; color: #fff;</div>
<div>&nbsp; &nbsp; display: inline-block;</div>
<div>&nbsp; &nbsp; font-weight: bold;</div>
<div>&nbsp; &nbsp; height: 30px;</div>
<div>&nbsp; &nbsp; line-height: 30px;</div>
<div>&nbsp; &nbsp; margin: 0 2px;</div>
<div>&nbsp; &nbsp; min-width: 24px;</div>
<div>&nbsp; &nbsp; overflow: hidden;</div>
<div>&nbsp; &nbsp; padding: 0 5px;</div>
<div>&nbsp; &nbsp; text-align: center;</div>
<div>}</div>
<div>&lt;/style&gt;</div>
<div>&lt;/head&gt;</div>
<div>&lt;body&gt; &nbsp;</div>
<div>&nbsp; &nbsp; &lt;!--header--&gt;</div>
<div>&nbsp; &nbsp; &lt;header class=&quot;header&quot;&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;header_in&quot;&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;h1 class=&quot;logo&quot;&gt;&lt;a href=&quot;/&quot; target=&quot;_self&quot;&gt;色空美图&lt;/a&gt;&lt;/h1&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;ul class=&quot;nav&quot;&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;li&gt;&lt;a href=&quot;/&quot; class=&quot;cur&quot;&gt;首页&lt;/a&gt;&lt;/li&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(&quot;select classid,classname,islast from {$dbtbpre}enewsclass where bclassid='0' and showclass='0' order by myorder,classid ASC limit 11&quot;,0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?></div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;?php</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $classurl=sys_ReturnBqClassname($bqr,9);</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ?&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;?php</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if(!$bqr[islast])</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ?&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;li class=&quot;nav_item2&quot;&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;a href=&quot;&quot; class=&quot;nav_item2_a&quot;&gt;&lt;?=$bqr[classname]?&gt;&lt;/a&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;i&gt;&lt;/i&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;?php</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $newsclass=$empire-&gt;query(&quot;select classid,classname from &quot;.$dbtbpre.&quot;enewsclass where bclassid=&quot;.$bqr[classid].&quot; order by myorder,classid desc limit 11&quot;);</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; while($classr=$empire-&gt;fetch($newsclass))</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $classrurl=sys_ReturnBqClassname($classr,9);</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ?&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;a href=&quot;&lt;?=$classrurl?&gt;&quot;&gt;&lt;?=$classr[classname]?&gt;&lt;/a&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;?php</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ?&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/li&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;?php</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }else{</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ?&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;li&gt;&lt;a href=&quot;&lt;?=$classurl?&gt;&quot;&gt;&lt;?=$bqr[classname]?&gt;&lt;/a&gt;&lt;/li&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;?php</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ?&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/li&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
}
}
?></div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/ul&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;a href=&quot;&quot; class=&quot;header_wap&quot;&gt;色空手机版&lt;/a&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;</div>
<div>&nbsp; &nbsp; &lt;/header&gt;</div>
<div>&nbsp; &nbsp; &lt;div class=&quot;list_wrap&quot;&gt; &nbsp; &nbsp;&nbsp;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;list_nav&quot;&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;a href=&quot;&quot; class=&quot;cur&quot;&gt;热门&lt;/a&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;a href=&quot;&quot;&gt;最新&lt;/a&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;list_page&quot;&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;page_&quot;&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; [!--show.listpage--]</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;</div>
<div>&nbsp; &nbsp; &lt;/div&gt;</div>
<div>&nbsp;</div>
<div>&nbsp; &nbsp; &lt;div class=&quot;wrap&quot;&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &lt;ul class=&quot;list1_&quot;&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; [!--empirenews.listtemp--]</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;!--list.var1--&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;!--list.var2--&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;!--list.var3--&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;!--list.var4--&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;!--list.var5--&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; [!--empirenews.listtemp--]</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &lt;/ul&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &lt;!--页码--&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;page_&quot;&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; [!--show.listpage--]</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;</div>
<div>&nbsp; &nbsp; &lt;/div&gt;</div>
<div>&nbsp; &nbsp;&nbsp;</div>
<div>&nbsp; &nbsp; &lt;!--footer--&gt;</div>
<div>&nbsp; &nbsp; &lt;footer class=&quot;footer&quot;&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;wrap&quot;&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;footer_logo&quot;&gt;色空美图&lt;/div&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;dl class=&quot;footer_law&quot;&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;dt&gt;法律声明&lt;/dt&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;dd&gt;本站所有作品不含有淫秽、色情内容，如有违反法律请联系管理员版权声明本站部份作品均属原创，版权归本站所有，未经同意请勿转载。&lt;/dd&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/dl&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;dl class=&quot;footer_about&quot;&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;dt&gt;关于我们&lt;/dt&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;dd&gt;&lt;a href=&quot;&quot;&gt;关于我们&lt;/a&gt;&lt;/dd&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;dd&gt;&lt;a href=&quot;&quot;&gt;联系我们&lt;/a&gt;&lt;/dd&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;dd&gt;&lt;a href=&quot;&quot;&gt;图片版权说明&lt;/a&gt;&lt;/dd&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/dl&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;dl class=&quot;footer_follow&quot;&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;dt&gt;关注我们&lt;/dt&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;dd&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;a href=&quot;&quot; class=&quot;footer_weibo&quot;&gt;&lt;/a&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;a href=&quot;&quot; class=&quot;footer_douban&quot;&gt;&lt;/a&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/dd&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/dl&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;footer_wap&quot;&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;a href=&quot;&quot; class=&quot;footer_android&quot;&gt;安卓版&lt;/a&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;a href=&quot;&quot; class=&quot;footer_iphone&quot;&gt;IOS版&lt;/a&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;</div>
<div>&nbsp; &nbsp; &nbsp; &nbsp; &lt;p class=&quot;footer_cp&quot;&gt;&copy; 2014 Sekong.com All Rights Reserved.&lt;/p&gt;</div>
<div>&nbsp; &nbsp; &lt;/footer&gt;</div>
<div>&nbsp;</div>
<div>&lt;/body&gt;</div>
<div>&lt;/html&gt;</div>
<div>&nbsp;</div>