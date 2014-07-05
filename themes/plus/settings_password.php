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
          <a href="http://simcity.pro/settings" class="tab">个人信息</a>
          <a href="http://simcity.pro/settings/avatar" class="tab">头像</a>
          <a href="http://simcity.pro/settings/password" class="tab_current">修改密码</a>
        </div>
        <div class="inner">
          <form accept-charset="UTF-8" action="<?php echo site_url('settings/password');?>" class="simple_form form-horizontal" id="edit_user_313" method="post" novalidate="novalidate">
            <div style="margin:0;padding:0;display:inline">
                <input name="utf8" type="hidden" value="&#x2713;" />
                <input name="_method" type="hidden" value="put" />
                <input name="authenticity_token" type="hidden" value="bFgf4gFtDOwT1iCoDRGI7aqc14eXt1h403ny+0VSrz0=" />
            </div>
            <table cellpadding="5" cellspacing="0" border="0" width="100%">
            <tr>
                <td width="120" align="right">当前密码</td>
                <td width="auto" align="left"><input class="form-control" id="user_current_password" name="password" size="50" type="password" /></td>
            </tr>
            <tr>
                <td width="120" align="right"><label class="col-sm-3 control-label" for="user_password">新密码</label></td>
                <td width="auto" align="left"><input class="form-control" id="user_password" name="newpassword" size="50" type="password" /></td>
            </tr>
            <tr>
                <td width="120" align="right"><label class="col-sm-3 control-label" for="user_password_confirmation">新密码确认</label></td>
                <td width="auto" align="left"><input class="form-control" id="user_password_confirmation" name="newpassword2" size="50" type="password" /></td>
            </tr>
            <tr>
                <td width="120" align="right"></td>
                <td width="auto" align="left"><button type="submit" name="commit" class="super normal button">修改密码</button></td>
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