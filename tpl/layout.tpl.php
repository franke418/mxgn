<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <base href="{$base_url}"/>
    <title>{block name="title"}{/block}{$settings.title}</title>
    <meta name="keywords" content="{$settings.keywords}" />
    <meta name="description" content="{$settings.description}" />
    <link href="pub/css/site.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{$base_url}/pub/js/jquery.js"></script>
<script type="text/javascript" src="{$base_url}/pub/js/jquery-ui.js"></script>
<script type="text/javascript">
$(function() {
        $("#cnzz").hide();
    });
</script>
    {block name="head"}
    {/block}
</head>

<body>
<table  width="950" border="0" align="center" cellpadding="0" cellspacing="0" height="36px">
    <tbody>
    <tr>
        <td width="20%" background="{$base_url}/pub/img/topbar.jpg">
            <div align="center"><a href="http://www.flyxg.com/" target="_blank" class="nag3"><img border="0" alt="新广网首页" src="{$base_url}/pub/img/flyxg_logo.png"/></a></div>
        </td>
        <td width="5%" background="{$base_url}/pub/img/topbar.jpg">
            <div align="center"><a href="http://www.flyxg.com/action-news.html" target="_blank"   class="nag3">国内</a></div>
        </td>
        <td width="5%" background="{$base_url}/pub/img/topbar.jpg">
            <div align="center"><a href="http://news.flyxg.com/" target="_blank"   class="nag3">红河</a></div>
        </td>
        <td width="5%" background="{$base_url}/pub/img/topbar.jpg">
            <div align="center"><a href="http://video.flyxg.com/" target="_blank"   class="nag3">播客</a></div>
        </td>
        <td width="5%" background="{$base_url}/pub/img/topbar.jpg">
            <div align="center"><a href="http://shop.flyxg.com/" target="_blank"  class="nag3">折扣</a></div>
        </td>

        <td width="5%" background="{$base_url}/pub/img/topbar.jpg">
            <div align="center"><a href="http://game.flyxg.com/" target="_blank"   class="nag3">游戏</a></div>
        </td>
        <td width="5%" background="{$base_url}/pub/img/topbar.jpg">
            <div align="center"><a href="http://zp.flyxg.com/" target="_blank"   class="nag3">招聘</a></div>
        </td>
        <td width="5%" background="{$base_url}/pub/img/topbar.jpg">
            <div align="center"><a href="http://car.flyxg.com/" target="_blank"   class="nag3">汽车</a></div>
        </td>
        <td width="5%" background="{$base_url}/pub/img/topbar.jpg">
            <div align="center"><a href="http://hao.flyxg.com/" target="_blank"   class="nag3">网址</a></div>
        </td>
        <td width="5%" background="{$base_url}/pub/img/topbar.jpg">
            <div align="center"><a href="http://im.flyxg.com/" target="_blank"   class="nag3">空间</a></div>
        </td>
        <td width="5%" background="{$base_url}/pub/img/topbar.jpg">
            <div align="center"><a href="http://group.flyxg.com/" target="_blank"   class="nag3">群组</a></div>
        </td>
        <td width="5%" background="{$base_url}/pub/img/topbar.jpg">
            <div align="center"><a href="http://bbs.flyxg.com/" target="_blank"   class="nag3">论坛</a></div>
        </td>
    </tr>
    </tbody>
</table>
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
    <tbody>
    <tr>
        <td><img src="pub/img/logo.gif" width="950" height="229"></td>
    </tr>
    </tbody>
</table>
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
    <tbody>
    <tr>
        <td width="604" height="43" background="{$base_url}/pub/img/nav.gif">
            <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td width="10%">
                        <div align="center" class="nag"><a href="{$base_url}" class="nag">大赛首页</a></div>
                    </td>
                    
                    <td width="10%">
                        <div align="center" class="nag"><a href="{$base_url}notice/"  class="nag">动态追踪</a></div>
                    </td>
					<td width="10%">
                        <div align="center" class="nag"><a href="http://www.flyxg.com/news/94/category-catid-194.html" target="_blank" class="nag">媒体报道</a></div>
                    </td>
                    <td width="10%">
                        <div align="center" class="nag"><a href="{site_url("signup")}" target="_blank" class="nag">网上报名</a></div>
                    </td>
					<td width="10%">
                        <div align="center" class="nag"><a href="http://bbs.flyxg.com/forum-268-1.html" target="_blank" class="nag">讨论区</a></div>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
{block name="content"}
{/block}
<table width="950" border="0" align="center" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF">
    <tbody>
    <tr>
        <td height="60">
            <div align="center"><a href="javascript:alert('暂未开放，敬请期待！');"><img src="{$base_url}/pub/img/to_video.gif" width="460" height="58" border="0"></a></div>
        </td>
        <td>
            <div align="center"><a href="http://bbs.flyxg.com/forum-268-1.html"><img src="{$base_url}/pub/img/to_bbs.gif" width="460" height="58" border="0"></a></div>
        </td>
    </tr>
    </tbody>
</table>
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
    <tbody>
    <tr>
        <td height="3" colspan="3" background="{$base_url}/pub/img/bottom.gif"></td>
    </tr>
    <tr>
        <td width="75" height="160" bgcolor="#FFFFFF">&nbsp;</td>
        <td width="604" bgcolor="#FFFFFF"><p class="competenews">主办单位：中共蒙自市委 蒙自市人民政府<br>
            承办单位：蒙自市文化体育和广播电视局<br>
			网络支持：新广网  <br/>
			合作微博：腾讯微博<br>
            邀请媒体：红河电视台  红河人民广播电台  蒙自电视台  蒙自人民广播电台<br>
        </p>

            <p class="competenews"><span class="jiaotian">其他声明：本次大赛最终解释权归组委会所有</span></p></td>
        <td width="271" bgcolor="#FFFFFF">
            <div align="left"><img src="{$base_url}/pub/img/logo_03.png" width="180" height="122"></div>
        </td>
    </tr>
    <tr>
        <td height="40" bgcolor="#FFFFFF">&nbsp;</td>
        <td bgcolor="#FFFFFF">
            <div align="center" class="competenews">
                <div align="left">
				滇ICP备05000923号  网络传播视听节目许可证:0110537 <div id="cnzz"><script src="http://s4.cnzz.com/stat.php?id=246794&web_id=246794&online=2" language="JavaScript"></script></div> <br/>
                Copyright 2012 Flyxg.com All Rights Reserved  
                </div>
            </div>
        </td>
        <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    </tbody>
</table>


</body>
</html>
