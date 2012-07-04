{extends file='./layout.html'}
{block name=head} <title>查看选手资料 - {$player.name}</title>
{/block} {block name=content}
<div class="box">
	<!--标题开始 -->
	<div class="title">
		<h5>选手资料 - {$player.name} - 海选地点： {$player.location}</h5>
	</div>
	<!-- 标题结束 -->
	<div class="table">
		<table>
			<tr><th>姓名:</th><th>生日：</th><th>职业：</th><th>文化程度：</th></tr>
			<tr align="center"><td>{$player.name}</td><td>{$player.birthday}</td><td>{$player.career}</td><td>{$player.title}</td></tr>
			<tr><th>籍贯:</th><th>联系电话：</th><th>身份证号码：</th><th>QQ：</th></tr>
			<tr align="center"><td>{$player.hometown}</td><td>{$player.mobile}</td><td>{$player.identity_no}</td><td>{$player.qq}</td></tr>
			<tr><th>身高:</th><th>胸围：</th><th>腰围：</th><th>臀围：</th></tr>
			<tr align="center"><td>{$player.height}</td><td>{$player.bust}</td><td>{$player.waistline}</td><td>{$player.hip}</td></tr>
			<tr><th colspan="2">工作单位：</th><th colspan="2">家庭地址：</th></tr>
			<tr align="center"><td colspan="2">{$player.org}</td><td colspan="2">{$player.addr}</td></tr>
			<tr><th colspan="4">个人简历及专长</th></tr>
			<tr align="center"><td colspan="4">{$player.detail}</td></tr>
			<tr><th colspan="4">
				
				<a href="{$base_url}{$player.image}">
					<img src="{$base_url}{$player.image}" width="600" height="600" />
				</a>
			</th></tr>
		</table>

	</div>
</div>
{/block} 
