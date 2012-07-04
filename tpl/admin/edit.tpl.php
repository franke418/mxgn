{extends file='./layout.html'} {block name=head}
<script charset="utf-8" src="{$base_url}/pub/editor/kindeditor-min.js"></script>
<script charset="utf-8" src="{$base_url}/pub/editor/lang/zh_CN.js"></script>
<script>
	KindEditor.ready(function(K) {
		K.create('#textarea', {
			items : [ 'removeformat', '|', 'fontname', 'fontsize', 'forecolor',
					'|', 'justifyleft', 'justifycenter', 'justifyright', '|',
					'link', '|', 'quickformat' ],
		});
	});
</script>
<title>修改动态-{$settings.title}</title>
{/block} {block name=content}
<div class="box">
	<form id="form" action="{site_url("m/edit_post")}" method="post">
        <!--标题开始 -->
		<div class="title">
			<h5>修改动态</h5>
		</div>
        <!-- 标题结束 -->
        <!--提示消息开始-->
        {if empty($smarty.session.message.notice) eq FALSE}
        <div class="messages">
            <div id="message-error" class="message message-{$smarty.session.message.notice.type}">
                <div class="image">
                    <img src="{$base_url}/pub/img/admin/icons/{$smarty.session.message.notice.type}.png" height="32"/>
                </div>
                <div class="text">
                    <h6>提示信息</h6>
                    <span>{$smarty.session.message.notice.text}</span>
                </div>
                <div class="dismiss">
                    <a href="#message-error"></a>
                </div>
            </div>
            </div>
        {/if}
        <!--提示消息结束-->
		<!--表单开始-->
		<div class="form">
			<div class="fields">
				<div class="field field-first">
					<div class="label">
						<label for="input-medium">标题</label>
					</div>
					<div class="input">
						<input type="text" id="input-medium" name="title" class="medium" value="{$p.title}" />
						<input type="hidden" name="id" value="{$p.id}"/>
					</div>
				</div>
				<div class="field">
					<div class="label label-radio">
						<label>作者</label>
					</div>
					<div class="input">
						<input type="text" id="input-medium" name="author" class="medium" value="{$p.author}"/>
					</div>
				</div>
				<div class="field">
					<div class="label label-textarea">
						<label for="textarea">内容:</label>
					</div>
					<div class="textarea textarea-editor">
						<textarea id="textarea" name="content" cols="50" rows="12"
							class="editor">{$p.content}</textarea>
					</div>
				</div>
				<div class="buttons">
					<div class="highlight">
						<input type="submit" value="编辑文章" />
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
{/block}
