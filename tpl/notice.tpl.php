{extends file="layout.tpl.php"}
{block name="title"}
动态追踪 -
{/block}
{block name="content"}
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
	<tbody>
	<tr>
		<td width="299" valign="top" bgcolor="#FFFFFF">
			<table width="299" border="0" cellspacing="0">
				<tbody>
				<tr>
					<td height="299" colspan="2" bgcolor="#FFFFFF">
						<img src="{$base_url}pub/img/info.gif" width="299" height="500" border="0"/> 
					</td>
				</tr>
				</tbody>
			</table>
			
		</td>
		<td valign="top" bgcolor="#FFFFFF" align="center">

			<table width="100%" border="0" cellpadding="0" cellspacing="0">
				<tbody>
				<tr>
					<td height="21">
						<div align="center">
							<a href="{site_url("notice")}" target="_blank">
								<img src="{$base_url}pub/img/notice_long.gif" width="554" height="30" border="0" />
							</a>
						</div>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>
						<table width="554" border="0" align="center" cellpadding="0" cellspacing="0">
							{foreach $notices as $n}
							<tr>
								<td height="30">
									<span class="report">
										<img src="#" width="7" height="7" />
					  　                 <a href="{site_url("notice/show/{$n.id}")}" target="_blank" class="report">
											{$n['title']}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$n['posttime']}
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

		</td>
	</tr>
	</tbody>
</table>
{/block}