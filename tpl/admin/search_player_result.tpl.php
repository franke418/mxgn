{extends file='./layout.html'}
{block name=head}
<title>搜索结果-{$settings.title}</title>
{/block}
{block name=content}
<div class="box">
        <!--标题开始 -->
		<div class="title">
			<h5>搜索结果</h5>
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
				<tr>
				{if empty($p) eq TRUE}
					<td colspan="5" style="align=center"><span style="align=center;color:red">没有这个选手，或已经被删除。</td>
				{else}

					<td class="date">{$id}</td>
					<td class="date" id="title{$p.id}">{$p.name}</td>
					<td class="date">{$p.identity_no}</td>
					<td class="date">{$p.reg_date}</td>
					<td class="date">
						<a href="{site_url("m/show_player/{$id}")}">查看详细资料</a>
						

					</td>
					{/if}
				</tr>
			</thead>
		</table>
		<div class="pagination pagination-left">
			<a href="javascript:history.go(-1)">返回</a>
		</div>
	</div>
	<!--列表结束-->
</div>
{/block}
