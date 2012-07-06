{extends file="layout.tpl.php"}
{block name="title"}
网上报名 -
{/block}
{block name="head"}
<link rel="stylesheet" type="text/css" href="{$base_url}/pub/css/jquery-ui.css">
<script type="text/javascript">
	$(function() {
		$.datepicker.regional['zh-CN'] = {
			clearText : '清除',
			clearStatus : '清除已选日期',
			closeText : '关闭',
			closeStatus : '不改变当前选择',
			prevText : '&lt;上月',
			prevStatus : '显示上月',
			nextText : '下月&gt;',
			nextStatus : '显示下月',
			currentText : '今天',
			currentStatus : '显示本月',
			monthNames : ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'],
			monthNamesShort : ['一', '二', '三', '四', '五', '六', '七', '八', '九', '十', '十一', '十二'],
			monthStatus : '选择月份',
			yearStatus : '选择年份',
			weekHeader : '周',
			weekStatus : '年内周次',
			dayNames : ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'],
			dayNamesShort : ['周日', '周一', '周二', '周三', '周四', '周五', '周六'],
			dayNamesMin : ['日', '一', '二', '三', '四', '五', '六'],
			dayStatus : '设置 DD 为一周起始',
			dateStatus : '选择 m月 d日, DD',
			dateFormat : 'yy-mm-dd',
			firstDay : 1,
			initStatus : '请选择日期',
			isRTL : false
		};
		$.datepicker.setDefaults($.datepicker.regional['zh-CN']);
		$("#birthday").datepicker({
			changeMonth : true,
			changeYear : true
		});
	}); 
</script>
{if set_value('birthday') == NULL}
<script type="text/javascript">
	$(function() {
		$("#birthday").datepicker('setDate', '1990-1-1');
	}); 
</script>
{else}
<script type="text/javascript">
$(function() {
$("#birthday").datepicker('setDate','{set_value('birthday')}');
});
</script>
{/if}

{if set_value('edu') != NULL}
<script type="text/javascript">
	$(function() {
		$("#edu").get(0).selectedIndex={set_value('edu')};
		$("#edu option[value='{set_value('edu')}']").attr("selected", "selected");
	}); 
</script>
{/if}

{/block}
{block name="content"}
<table class="sign" width="950px" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFF">
	<tbody>
		<form action="{site_url("signup")}" name="register" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			<tr align="center">
				<th colspan="4" background="{$base_url}/pub/img/topbar.jpg"><h3>网上报名登记表</h3></th>
			</tr>
					<tr align="center">
			<td colspan="4" style="color:red;">请注意：若资料发现问题，我们需要通过QQ与您联系。若QQ加好友需要验证问题之类，请在“个人简历”中备注。</td>
		</tr>
			<tr align="center">
				<th background="{$base_url}/pub/img/topbar.jpg">姓名</th>
				<th background="{$base_url}/pub/img/topbar.jpg">生日</th>
				<th background="{$base_url}/pub/img/topbar.jpg">职业</th>
				<th background="{$base_url}/pub/img/topbar.jpg">文化程度</th>
			</tr>
			<tr align="center">
				<td> {if form_error('name') == NULL}
				<input type="text" name="name" value="{set_value('name')}"/>
				{else}
				<input type="text" name="name" style="border: solid 2px red;color: red;" value="{set_value('name')}"/>
				{/if} </td>
				<td>
				<input type="text" name="birthday" id="birthday" readonly="readonly" value="{set_value('birthday')}"/>
				</td>
				<td> {if form_error('career') == NULL}
				<input type="text" name="career" value="{set_value('career')}"/>
				{else}
				<input type="text" name="career" style="border: solid 2px red;color: red;" value="{set_value('career')}"/>
				{/if} </td>
				<td> {if form_error('edu') == NULL}
				<select name="edu" id="edu">
					{else}
					<select name="edu" id="edu" style="border: solid 2px red;color: red;"/>
					{/if}
					<option value="0"> 请选择... </option>
					{foreach $edus as $e}
					<option value="{$e['id']}"> {$e['title']} </option>
					{/foreach}
				</select></td>
			</tr>
			<tr align="center">
				<th background="{$base_url}/pub/img/topbar.jpg">籍贯</th>
				<th background="{$base_url}/pub/img/topbar.jpg">手机(如填座机需加区号，如：08731234567)</th>
				<th background="{$base_url}/pub/img/topbar.jpg">身份证号码</th>
				<th background="{$base_url}/pub/img/topbar.jpg">QQ</th>
			</tr>
			<tr align="center">
				<td> {if form_error('hometown') == NULL}
				<input type="text" name="hometown" value="{set_value('hometown')}"/>
				{else}
				<input type="text" name="hometown" style="border: solid 2px red;color: red;" value="{set_value('hometown')}"/>
				{/if} </td>
				<td> {if form_error('mobile') == NULL}
				<input type="text" name="mobile" value="{set_value('mobile')}"/>
				{else}
				<input type="text" name="mobile" style="border: solid 2px red;color: red;" value="{set_value('mobile')}"/>
				{/if} </td>
				<td> {if form_error('identity_no') == NULL}
				<input type="text" name="identity_no" value="{set_value('identity_no')}"/>
				{else}
				<input type="text" name="identity_no" style="border: solid 2px red;color: red;" value="{set_value('identity_no')}"/>
				{/if} </td>
				<td> {if form_error('qq') == NULL}
				<input type="text" name="qq" value="{set_value('qq')}"/>
				{else}
				<input type="text" name="qq" style="border: solid 2px red;color: red;" value="{set_value('qq')}"/>
				{/if} </td>
			</tr>
			<tr align="center">
				<th background="{$base_url}/pub/img/topbar.jpg">身高(厘米)</th>
				<th background="{$base_url}/pub/img/topbar.jpg">胸围(厘米)</th>
				<th background="{$base_url}/pub/img/topbar.jpg">腰围(厘米)</th>
				<th background="{$base_url}/pub/img/topbar.jpg">臀围(厘米)</th>
			</tr>
			<tr align="center">
				<td> {if form_error('height') == NULL}
				<input type="text" name="height" value="{set_value('height')}"/>
				{else}
				<input type="text" name="height" style="border: solid 2px red;color: red;" value="{set_value('height')}"/>
				{/if} </td>
				<td> {if form_error('bust') == NULL}
				<input type="text" name="bust" value="{set_value('bust')}"/>
				{else}
				<input type="text" name="bust" style="border: solid 2px red;color: red;" value="{set_value('bust')}"/>
				{/if} </td>
				<td> {if form_error('waistline') == NULL}
				<input type="text" name="waistline" value="{set_value('waistline')}"/>
				{else}
				<input type="text" name="waistline" style="border: solid 2px red;color: red;" value="{set_value('waistline')}"/>
				{/if} </td>
				<td> {if form_error('hip') == NULL}
				<input type="text" name="hip" value="{set_value('hip')}"/>
				{else}
				<input type="text" name="hip" style="border: solid 2px red;color: red;" value="{set_value('hip')}"/>
				{/if} </td>
			</tr>
			<tr align="center">
				<th background="{$base_url}/pub/img/topbar.jpg" colspan="2">工作单位（学校）</th>
				<th background="{$base_url}/pub/img/topbar.jpg" colspan="2">家庭地址</th>
			</tr>
			<tr align="center">
				<td colspan="2"> {if form_error('org') == NULL}
				<input type="text" size="40" name="org" value="{set_value('org')}"/>
				{else}
				<input type="text" name="org" style="border: solid 2px red;color: red;" value="{set_value('org')}"/>
				{/if} </td>
				<td colspan="2"> {if form_error('addr') == NULL}
				<input type="text" size="40" name="addr" value="{set_value('addr')}"/>
				{else}
				<input type="text" name="addr" size="40" style="border: solid 2px red;color: red;" value="{set_value('addr')}"/>
				{/if} </td>
			</tr>
			<tr align="center">
				<th background="{$base_url}/pub/img/topbar.jpg" colspan="4">个人简历及专长</th>
			</tr>
			<tr align="center">

				<td colspan="4"> {if form_error('detail') == NULL} 				<textarea rows="8" cols="100" name="detail">{set_value('detail')}</textarea> {else} 				<textarea rows="8" cols="100" name="detail"style="border: solid 2px red;color: red;">{set_value('detail')}</textarea> {/if} </td>
			</tr>
			<tr align="center">
				<th background="{$base_url}/pub/img/topbar.jpg" colspan="2">生活照(必须为jpg格式,大小1M以内)</th>
				<th background="{$base_url}/pub/img/topbar.jpg" colspan="1">海选参赛地点</th>
				<th background="{$base_url}/pub/img/topbar.jpg" colspan="1">验证码(8位数字)</th>
			</tr>
			<tr align="center">
				<td colspan="2">
				<input type="file" name="image"/>
				</td>
				<td colspan="1">
				<select name="location">
					<option value="0">蒙自</option>
					<option value="1">昆明</option>
				</select></td>
				<td colspan="1"><img id="captcha" src="{site_url("captcha")}" onlick="alert(aaa);" alt="单击刷新验证码" width="150" height="30" border="0"/>
				<br/>
				<input type="text" name="captcha"/>
				</td>
			</tr>

			<tr>
				<td colspan="4">
				<div style="color:red;">
					{if isset($error)}
					{foreach $error as $e}
					<p>
						{$e}
					</p>
					{/foreach}
					{/if}
					{validation_errors()}
				</div></td>
			</tr>
			<tr>
				<th colspan="4" background="{$base_url}/pub/img/topbar.jpg">
				<input type="button" onclick="javascript:{ this.value='正在处理，请稍候...';this.disabled=true;document.register.submit(); }" value="填写完成，我要报名！"/>
				</th>
			</tr>
		</form>
	</tbody>
</table>
{/block}