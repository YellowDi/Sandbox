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
          <a href="http://simcity.pro/settings/avatar" class="tab_current">头像</a>
          <a href="http://simcity.pro/settings/password" class="tab">修改密码</a>
        </div>
        <div class="inner">
          <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('settings/avatar')?>" method="post">
            <table cellpadding="5" cellspacing="0" border="0" width="100%">
            <tr>
                <td width="120" align="right">当前头像</td>
                <?php if ($user['avatar']){?>
                <td width="auto" align="left"><img src="<?php echo base_url($avatars['big']); ?>" class="avatar" border="0" align="default" /> &nbsp; <img src="<?php echo base_url($avatars['middle']); ?>" class="avatar" border="0" align="default" /> &nbsp; <img src="<?php echo base_url($avatars['small']); ?>" class="avatar" border="0" align="default" /></td>
                <?php } else {?>
                <td width="auto" align="left"><img src="<?php echo base_url('uploads/avatar/avatar_large.jpg');?>" class="avatar" border="0" align="default" /> &nbsp; <img src="<?php echo base_url('uploads/avatar/default.jpg');?>" class="avatar" border="0" align="default" /> &nbsp; <img src="<?php echo base_url('uploads/avatar/avatar_small.jpg');?>" class="avatar" border="0" align="default" /></td>
                <?php }?>
            </tr>
            <tr>
                <td width="120" align="right"><label class="col-sm-3 control-label" for="avatar_file">选择图片</label></td>
                <td width="auto" align="left"><input type="file" id="avatar_file" name="userfile" /></td>
            </tr>
            <tr>
                <td width="120" align="right"></td>
                <td width="auto" align="left"><button type="submit" name="upload" class="super normal button">上传新头像</button></td>
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