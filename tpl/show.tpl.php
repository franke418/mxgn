{extends file="layout.tpl.php"}
{block name="title"}
{$notice.title} -
{/block}
{block name="content"}
<table  class="sign" width="950px" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFF">
	<tbody>
		<tr align="center"><th background="{$base_url}/pub/img/topbar.jpg" >{$notice.title}</th></tr>
		<tr align="center"><td>由{$notice.author}发布于{$notice.posttime}</td></tr>
		<tr><td>
		<div style="margin:20px" style="font-size:120%;color:#000">
		{$notice.content}
		</div>
		</td></tr>
	</tbody>
</table>
{/block}