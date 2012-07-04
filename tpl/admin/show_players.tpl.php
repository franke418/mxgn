{extends file='./layout.html'}
{block name=head} <title>选手列表-{$settings.title}</title>
<script src="{$base_url}/pub/js/admin/dialog_post_delete.js" type="text/javascript"></script>
{/block} {block name=content}
<div id="dialog-delete-confirm" title="确实要删除此篇文章吗?">
	<p>
		<span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>
		《<span id="delete_post_title" pid="0"></span>》
		<br/>
		动态将被永久删除，确定要这样做吗？
	</p>
</div>
<div class="box">
	<!--标题开始 -->
	<div class="title">
		<h5>选手列表</h5>
	</div>
	<!-- 标题结束 -->
	<!--列表开始-->
	<div class="table">
		<table>
			<thead>
				<tr>
					<th>编号</th>
					<th class="date">姓名</th>
					<th class="date">身份证号</th>
					<th class="date">报名时间</th>
					<th class="date">操作</th>
				</tr>
				{foreach $players as $p}
				<tr>
					<td class="date">{$p.id}</td>
					<td class="date" id="title{$p.id}">{$p.name}</td>
					<td class="date">{$p.identity_no}</td>
					<td class="date">{$p.reg_date}</td>
					<td class="date">
						<a href="{site_url("m/show_player/{$p.id}")}">查看详细资料</a>
						<a href="{site_url("m/verify/{$p.id}")}" onclick="">通过审核</a>

					</td>
				</tr>
				{/foreach}
			</thead>
		</table>
		<div class="pagination pagination-left">
			
		</div>
	</div>
	<!--列表结束-->
</div>
{/block} 
