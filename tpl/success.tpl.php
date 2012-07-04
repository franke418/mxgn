{extends file="layout.tpl.php"}
{block name="title"}
报名结果 -
{/block}
{block name="content"}
<table class="sign" width="950px" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFF">
	<tbody>
		<tr align="center">
			<th colspan="2" background="{$base_url}/pub/img/topbar.jpg"><h3>报名成功！</h3></th>
		</tr>
		<tr align="center">
			<td colspan="2">您的报名编号为：<span style="color:red;font: bold 16px">N{$no}</span>（请记录此号以便查询）</td>
		</tr>
		<tr align="center">
			<td colspan="2">
				敬请收藏、并关注本网站，以便及时获取大赛的相关通知和信息。
			</td>
		</tr>
	</tbody>
</table>
{/block}