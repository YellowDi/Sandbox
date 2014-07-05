<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-CN">
<head>
<?php $this->load->view('header-meta');?>
<title>Sandbox</title>
</head>
<body>
<?php echo $this->load->view('header');?>

<div id="Wrapper">
    <div class="content">
        <div id="Leftbar"></div>

        <div id="Rightbar">
            <?php $this->load->view('block/right_login');?>

            <div class="sep20"></div>
        </div>

        <div id="Main">
            <div class="sep20"></div>
            <div class='box'>
                <div class="inner" style="background-color: #fff; border-top-left-radius: 3px; border-top-right-radius: 3px;" id="Tabs">
                    <a href="http://simcity.pro/settings" class="tab_current">个人信息</a>
                    <a href="http://simcity.pro/settings/avatar" class="tab">头像</a>
                    <a href="http://simcity.pro/settings/password" class="tab">修改密码</a>
                </div>
            <div class="inner">
                <form accept-charset="UTF-8" action="<?php echo site_url('settings/profile');?>" class="form-horizontal" id="edit_user_313" method="post" novalidate="novalidate">
                    <table cellpadding="5" cellspacing="0" border="0" width="100%">
                        <tr>
                            <td width="120" align="right"><label class="col-sm-3 control-label" for="user_nickname">用户名</label></td>
                            <td width="auto" align="left"><input class="sl" disabled="disabled" id="user_nickname" name="username" size="50" type="text" value="<?=$username?>" /></td>
                        </tr>
                        <tr>
                            <td width="120" align="right"><label class="col-sm-3 control-label" for="user_email">电子邮件</label></td>
                            <td width="auto" align="left"><input class="sl" id="user_email" name="email" size="50" type="email" value="<?=$email?>" /></td>
                        </tr>
                        <tr>
                            <td width="120" align="right"><label class="col-sm-3 control-label" for="user_account_attributes_personal_website">个人网站</label></td>
                            <td width="auto" align="left"><input class="sl" id="user_account_attributes_personal_website" name="homepage" size="50" type="text" value="<?=$homepage?>" /></td>
                        </tr>
                        <tr>
                            <td width="120" align="right"><label class="col-sm-3 control-label" for="user_account_attributes_location">所在地</label></td>
                            <td  width="auto" align="left"><input class="sl" id="user_account_attributes_location" name="location" size="50" type="text" value="<?=$location?>" /></td>
                        </tr>
                        <tr>
                            <td width="120" align="right"><label class="col-sm-3 control-label" for="user_account_attributes_signature">豆瓣</label></td>
                            <td  width="auto" align="left"><input class="sl" id="user_account_attributes_signature" name="qq" size="50" type="text" value="<?=$qq?>" /></td>
                        </tr>
                        <tr>
                            <td width="120" align="right"><label class="col-sm-3 control-label" for="user_account_attributes_signature">签名</label></td>
                            <td  width="auto" align="left"><input class="sl" id="user_account_attributes_signature" name="signature" size="50" type="text" value="<?=$signature?>" /></td>
                        </tr>
                        <tr>
                            <td width="120" align="right"><label class="col-sm-3 control-label" for="user_account_attributes_introduction">个人简介</label></td>
                            <td  width="auto" align="left"><textarea class="ml" cols="40" id="user_account_attributes_introduction" name="introduction" rows="5"><?=$introduction?></textarea></td>
                        </tr>
                        <input id="user_account_attributes_id" name="user[account_attributes][id]" type="hidden" value="326" />
                        <tr>
                            <td width="120" align="right"></td>
                            <td width="auto" align="left"><button type="submit" name="submit" class="super normal button">保存设置</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    
<div class="c"></div>
<div class="sep20"></div>
</div>

<?php $this->load->view('footer');?>