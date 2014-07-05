<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-CN">
<head>
<?php $this->load->view('header-meta');?>
    <title>注册 / <?php echo $settings['site_name']?></title>
</head>
<body>
<?php $this->load->view('header');?>
    <div id="Wrapper">
        <div class="content">
            <div id="Leftbar"></div>
            <div id="Rightbar">
                <div class="sep20"></div>  
                    <div class="box">
                        <div class="cell">
                            <strong><?php echo $settings['site_name']?></strong>
                            <div class="sep5"></div>
                            <span class="fade">模拟城市爱好者们的社区 </span>
                        </div>
                        <div class="inner">
                            <div class="sep5"></div>
                            <div align="center"><a href="<?php echo site_url('user/reg')?>" class="super normal button">现在注册</a>
                            <div class="sep5"></div>
                            <div class="sep10"></div>
                            已注册用户请 &nbsp;<a href="<?php echo site_url('user/login')?>">登录</a></div>
                        </div>
                    </div>
            </div>
            <div id="Main">
                <div class="sep20"></div>
                
                <div class="box">
                    <div class="header"><a href="/"><?php echo $settings['site_name']?></a> <span class="chevron">&nbsp;›&nbsp;</span> 注册</div>
                    <div class="problem">请用真实邮箱注册<ul><li>这样万一你忘记了密码，那么找回密码的链接将可以被发送到你的注册邮箱。因此使用真实邮箱注册非常重要。</li></ul></div>
                    <div class="inner">
                        <form accept-charset="UTF-8" action="<?php echo site_url('user/reg');?>" class="form-horizontal" id="new_user" method="post" novalidate="novalidate">
                        <div style="margin:0;padding:0;display:inline">
                        <input name="utf8" type="hidden" value="&#x2713;" />
                        <input name="authenticity_token" type="hidden" value="zHmHYEJbz9hP+SpTe153DJH8BobrJSJ63cDjsuZayGs=" /></div>
                        <table cellpadding="5" cellspacing="0" border="0" width="100%">
                            <tr>
                                <td width="120" align="right" valign="top">
                                    <div class="sep5"></div>
                                    <label class="col-sm-3 control-label" for="user_nickname">用户名</label>
                                </td>
                                <td width="auto" align="left">
                                    <input autofocus="autofocus" class="sl" id="user_nickname" name="username" size="50" type="text" value="<?php echo set_value('username'); ?>" />
                                    <div class="sep5"></div>
                                    <span class="fade">请使用半角的 a-z 、中文字符或数字 0-9</span>
                                    <span class="help-inline red"><?php echo form_error('username');?></span>
                                </td>
                            </tr>
                            <tr>
                                <td width="120" align="right" valign="top">
                                    <div class="sep5"></div>
                                    <label class="col-sm-3 control-label" for="user_email">电子邮件</label>
                                </td>
                                <td width="auto" align="left">
                                    <input class="sl" id="user_email" name="email" size="50" type="email" value="<?php echo set_value('email'); ?>" />
                                    <div class="sep5"></div>
                                    <span class="fade">请使用真实电子邮箱注册，我们不会将你的邮箱地址分享给任何人</span>
                                    <span class="help-inline red"><?php echo form_error('email');?></span>
                                </td>
                            </tr>
                            <tr>
                                <td width="120" align="right">
                                    <div class="sep5"></div>
                                    <label class="col-sm-3 control-label" for="user_password">密码</label>
                                </td>
                                <td width="auto" align="left">
                                    <input class="sl" id="user_password" name="password" size="50" type="password" value="<?php echo set_value('password'); ?>" />
                                    <div class="sep5"></div>
                                    <span class="fade">我们不会对你的密码进行加密，请不要同您的重要账号使用相同的密码</span>
                                    <span class="help-inline red"><?php echo form_error('password');?></span>
                                </td>
                            </tr>
                            <tr>
                                <td width="120" align="right">
                                    <div class="sep5"></div>
                                    <label class="col-sm-3 control-label" for="user_password_confirmation">密码确认</label>
                                </td>
                                <td width="auto" align="left">
                                    <input class="sl" id="user_password_confirmation" name="password_c" size="50" type="password" value="<?php echo set_value('password_c'); ?>" /><span class="help-inline red">
                                    <div class="sep5"></div>
                                    <span class="help-inline red"><?php echo form_error('password_c');?></span>
                                </td>
                            </tr>
                            <tr>
                                <td width="120" align="right"></td>
                                <td width="auto" align="left">
                                    <input type="submit" name="commit" class="super normal button" value="注册" />
                                </td>
                            </tr>
                        </table>
                        </form>
                    </div>
                </div>

            </div>
            
            
        </div>
        <div class="c"></div>
        <div class="sep20"></div>
    </div>

<?php $this->load->view('footer');?>