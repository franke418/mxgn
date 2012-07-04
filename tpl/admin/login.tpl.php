<!DOCTYPE html pub "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>{$settings.title}</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="{$base_url}/pub/css/admin/reset.css"/>
    <link rel="stylesheet" type="text/css" href="{$base_url}/pub/css/admin/style.css" media="screen"/>
    <link id="color" rel="stylesheet" type="text/css" href="{$base_url}/pub/css/admin/colors/blue.css"/>
    <script src="{$base_url}/pub/js/jquery-1.4.2.min.js" type="text/javascript"></script>
    <script src="{$base_url}/pub/js/jquery-ui-1.8.custom.min.js" type="text/javascript"></script>
    <script src="{$base_url}/pub/js/admin/smooth.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            style_path = "{$base_url}/pub/css/admin/colors";
            $("input.focus").focus(function () {
                if (this.value == this.defaultValue) {
                    this.value = "";
                }
                else {
                    this.select();
                }
            });
            $("input.focus").blur(function () {
                if ($.trim(this.value) == "") {
                    this.value = (this.defaultValue ? this.defaultValue : "");
                }
            });
            $("input:submit, input:reset").button();
        });
    </script>
</head>
<body>
<div id="login">
    <!-- login -->
    <div class="title">
        <h5>系统登录</h5>

        <div class="corner tl"></div>
        <div class="corner tr"></div>
    </div>
    <!--显示信息开始 -->
    {if empty($smarty.session.message.login) eq FALSE}
    <div class="messages">
        <div id="message-error" class="message message-{$smarty.session.message.login.type}">
            <div class="image">
                <img src="{$base_url}/pub/img/admin/icons/{$smarty.session.message.login.type}.png" height="32"/>
            </div>
            <div class="text">
                <h6>提示信息</h6>
                <span>{$smarty.session.message.login.text}</span>
            </div>
            <div class="dismiss">
                <a href="#message-error"></a>
            </div>
        </div>
    </div>
    {/if}
    <!--显示信息结束 -->

    <div class="inner">
        {if empty($smarty.session.user) eq TRUE}
        <form method="POST" action="{site_url("m/login")}">
            <div class="form">
                <!-- fields -->
                <div class="fields">
                    <div class="field">
                        <div class="label">
                            <label for="username">用户名称:</label>
                        </div>
                        <div class="input">
                            <input type="text" id="username" name="username" size="40" value="输入用户名称" class="focus"/>
                        </div>
                    </div>
                    <div class="field">
                        <div class="label">
                            <label for="password">用户密码:</label>
                        </div>
                        <div class="input">
                            <input type="password" id="password" name="password" size="40" value="" class="focus"/>
                        </div>
                    </div>
                    <div class="buttons">
                        <input type="submit" value="登录"/>
                    </div>
                </div>
                <!-- end fields -->
            </div>
        </form>
        {else}
        <span class="fields">您已成功登录！进入<a href="{site_url("m/home")}">后台管理</a></span>
        {/if}
    </div>
    <!-- end login -->
</div>
</body>
</html>