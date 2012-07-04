{extends file="layout.tpl.php"}
{block name="content"}
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
    <tbody>
    <tr>
        <td width="399" valign="top" bgcolor="#FFFFFF">
            <table width="399" border="0" cellspacing="0">
                <tbody>
                <tr>
                    <td height="300" colspan="2" bgcolor="#FFFFFF">
                        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="399" height="300">
                            <param name="movie" value="Flvplayer.swf" />
                            <param name="quality" value="high" />
                            <param name="allowFullScreen" value="true" />
                            <param name="FlashVars" value="vcastr_file={$base_url}pub/video/ad.mp4&LogoText=www.Flyxg.com&BufferTime=3&IsAutoPlay=1" />
                            <embed src="Flvplayer.swf" allowfullscreen="true" flashvars="vcastr_file={$base_url}pub/video/ad.mp4&LogoText=www.Flyxg.com" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="399" height="300"></embed>
                        </object>
                    </td>
                </tr>

                <tr>
                    <td width="201" bgcolor="#FFFFFF">
                        <div align="center"><a href="http://im.flyxg.com" target="_blank"><img src="{$base_url}/pub/img/space.gif" width="190" height="60" border="0"></a></div>
                    </td>
					<td width="197" height="40" bgcolor="#FFFFFF">
                        <div align="center"><a href="{site_url("signup")}" target="_blank"><img src="{$base_url}/pub/img/baoming.gif" width="190" height="60" border="0"></a></div>
                    </td>
                </tr>
                </tbody>
            </table>
			<table widht="400" height="150" border="0" bgcolor="#FFFFFF">
			<caption><a href="http://bbs.flyxg.com/forum-268-1.html" target="_blank"><img src="{$base_url}/pub/img/bbs.gif" width="400" height="30" border="0"/></a></caption>
				{foreach $threads as $t}
				<tr>
                            <td height="30">
                                    <span class="report">
                                        <img src="#" width="7" height="7" />
                      　                 <a href="http://bbs.flyxg.com/thread-{$t.tid}-1-1.html" target="_blank" class="report">
                                            {$t['subject']}
                                        </a>
                                    </span>
                                </td>
                            </tr>
				{/foreach}
			</table>
        </td>
        <td valign="top" bgcolor="#FFFFFF" align="center">
                                    <div align="center">
                            <a href="{site_url("notice")}" target="_blank">
                                <img src="{$base_url}pub/img/photo.gif" width="454" height="30" border="0" />
                            </a>
                        </div>
                        <div id="myDiv" style="overflow:hidden;width:440;background-color:#FFFFFF;margin-bottom=10px">
                <table>
                    <tbody>
                    <tr>
                        <td id="pic1">
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        <img src="{$base_url}/pub/img/mas/1.gif" width="83" height="69" border="0">
                                    </td>
                                    <td>
                                        <img src="{$base_url}/pub/img/mas/2.gif" width="83" height="69" border="0">
                                    
                                    </td>
                                    <td>
                                        <img src="{$base_url}/pub/img/mas/3.gif" width="83" height="69" border="0">
                                    
                                    </td>
                                    <td>
                                        <img src="{$base_url}/pub/img/mas/4.gif" width="83" height="69" border="0">
                                    
                                    </td>
                                    <td>
                                       <img src="{$base_url}/pub/img/mas/5.gif" width="83" height="69" border="0">
                                    
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                        <td id="pic2">
                            <table>
                                <tbody>
                                <tr>

                                    <td>
                                        
                                            <img src="http://www.flyxg.com/attachments/2012/06/3_201206082126111Bjwj.thumb.jpg" width="83" height="69" border="0">
                                    </td>


                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td height="21">
                        <div align="center">
                            <a href="{site_url("notice")}" target="_blank">
                                <img src="{$base_url}pub/img/notice.gif" width="454" height="30" border="0" />
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <table style="margin-bottom:10px" width="454" border="0" align="center" cellpadding="0" cellspacing="0">
                            {foreach $notices as $n}
                            <tr>
                                <td height="30">
                                    <span class="report">
                                        <img src="#" width="7" height="7" />
                      　                 <a href="{site_url("notice/show/{$n.id}")}" target="_blank" class="report">
                                            {$n['title']}
                                        </a>
                                    </span>
                                </td>
                            </tr>
                            {/foreach}
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height="21">
                         <div align="center"><a href="http://www.flyxg.com/news/94/category-catid-194.html" target="_Blank"><img src="{$base_url}pub/img/news.gif" width="454" height="30" border="0" /></a></div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>
          <table width="454" border="0" align="center" cellpadding="0" cellspacing="0">
			{foreach $news as $new}
            <tr>
              <td height="30">
                  <span class="report">
                      <img src="images/index_522.gif" width="7" height="7" />
                      　<a href="http://www.flyxg.com/viewnews-{$new.itemid}.html" target="_blank" class="report">
                             {$new.subject}
                        </a>
                  </span>
              </td>
            </tr>
			{/foreach}
        
          </table>
                    </td>
                </tr>

                </tbody>
            </table>


            <script type="text/javascript">
            
                 var Speed = 30;
                 var timer;
                 var myDiv = document.getElementById("myDiv");
                 var pic2 = document.getElementById("pic2");
                 pic2.innerHTML = document.getElementById("pic1").innerHTML;
                 function picMarquee() {
                     if (pic2.offsetWidth - myDiv.scrollLeft <= 0) {
                         myDiv.scrollLeft = 0;
                     } else {
                         myDiv.scrollLeft++;
                   }
                 }
                 timer = setInterval(picMarquee, Speed);

                 myDiv.onmouseover = function () {
                     clearInterval(timer);
                 }

                 myDiv.onmouseout = function () {
                     timer = setInterval(picMarquee, Speed);
                 }
            
			</script>


            <div align="center">
            </div>

        </td>
    </tr>
    </tbody>
</table>
{/block}