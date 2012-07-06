{extends file='./layout.html'}
{block name=head}
<title>搜索选手-{$settings.title}</title>
{/block}
{block name=content}
<div class="box">
        <!--标题开始 -->
		<div class="title">
			<h5>搜索选手</h5>
		</div>
        <!-- 标题结束 -->
		<!--表单开始-->
		<div class="form">
			<div class="fields">
				<div class="field field-first">
					<div class="label">
						<label for="input-medium">编号</label>
					</div>
					<div class="input">
						<input type="text" id="input-medium" name="title" class="medium" value="N" />
					</div>
				</div>

				<div class="buttons">
					<div class="highlight">
						<input type="button" onclick="javascript:window.location.href=window.location.href+'/'+$('#input-medium').val()" value="搜索" />
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
{/block}
