{extends file='./layout.html'}
{block name=head} <title>动态列表-{$settings.title}</title>
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
		<h5>动态列表</h5>
	</div>
	<!-- 标题结束 -->
	<!--列表开始-->
	<div class="table">
		<table>
			<thead>
				<tr>
					<th>编号</th>
					<th class="title">标题</th>
					<th class="title">作者</th>
					<th class="date">添加时间</th>
					<th class="title">操作</th>
				</tr>
				{foreach $notices as $post}
				<tr>
					<td class="date">{$post.id}</td>
					<td class="title" id="title{$post.id}">{$post.title}</td>
					<td class="date">{$post.author}</td>
					<td class="date">{$post.posttime}</td>
					<td class="date">
						<a href="{site_url("m/edit_post/{$post.id}")}">编辑</a>
						<a href="#" onclick="deletePost({$post.id});">删除</a>
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
