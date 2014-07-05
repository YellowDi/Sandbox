<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-CN">
<head>
<?php $this->load->view('header-meta');?>
<title><?php echo $settings['site_name']?></title>
</head>
<body>
<?php $this->load->view ('header'); ?>
<div id="Wrapper">
	<div class="content">
	<div id="Leftbar"></div>

		<div id="Rightbar">
			<?php $this->load->view('block/right_login');?>

			<div class="sep20"></div>

		</div>

		<div id="Main">

			<div class="sep20"></div>

			<div class="box">
				<div class="inner" style="background-color: #fff; border-top-left-radius: 3px; border-top-right-radius: 3px;" id="Tabs">
				    <a href="http://simcity.pro/notifications" class="tab_current">R2D2</a>
				    <a href="http://simcity.pro/favorites" class="tab">收藏</a>
				    <a href="/" class="tab">全部</a>
				    <a href="http://simcity.pro/section" class="tab">节点</a>
				    <a href="http://simcity.pro/follow" class="tab">关注</a>
				</div>
				<div class="cell" style="background-color: #f9f9f9; padding: 10px 10px 10px 20px;">
					<div class="fr">
						<a href="http://simcity.pro/forum/add/2" class="super normal button">我要提问</a>
					</div>
					<a href="http://simcity.pro/go/3">分享发现</a> &nbsp; &nbsp; 
					<a href="http://simcity.pro/go/4">分享创造</a> &nbsp; &nbsp; 
					<a href="http://simcity.pro/go/2">问与答</a>
				</div>

				<?php if($notices_list){?>
				<?php foreach($notices_list as $v){?>
				<div class="cell item" style="border-top-left-radius: 3px; border-top-right-radius: 3px;"><div style="position: absolute; margin: -10px -10px 0px 650px;"></div>
				<table cellpadding="0" cellspacing="0" border="0" width="100%">
					<tr>
						<?php if($v['avatar']){?>
						<td width="48" valign="top" align="center"><a href="<?php echo site_url('user/info/'.$v['suid']);?>"><img src="<?php echo base_url($v['avatar']);?>" class="avatar" border="0" align="default" style="max-width: 48px; max-height: 48px;" /></a></td>
						<?php } else{?>
						<td width="48" valign="top" align="center"><a href="<?php echo site_url('user/info/'.$v['suid']);?>"><img src="uploads/avatar/default.jpg" class="avatar" border="0" align="default" style="max-width: 48px; max-height: 48px;" /></a></td>
						<?php }?>
						<td width="10"></td>
						<td width="auto" valign="middle">
							<span class="item_title">
								<a href="<?php echo site_url('user/info/'.$v['suid']);?>" title="<?php echo $v['username'];?>"><?php echo $v['username'];?></a>
							</span>
							<div class="sep5"></div>
							<span class="small fade">	
								在 <?php echo $this->myclass->friendly_date($v['ntime']);?> &nbsp;•&nbsp;
								<?php if($v['ntype']==0){?>
								回复了你的贴子
								<a href="<?php echo site_url('forum/view/'.$v['fid']);?>" class="node"><?php echo $v['title'];?>...</a>
								<?php }?>
								<?php if($v['ntype']==1){?>
								在回复
								<a href="<?php echo site_url('forum/view/'.$v['fid']);?>" class="node"><?php echo $v['title'];?>...</a>
								时提到了@你
								<?php }?>
							</span>
						</td>
					</tr>
				</table>

			</div>
			<?php }?>
			<?php } else{?>

			<div class='cell'>目前尚无任何提醒信息</div>

			<?php }?>
		</div>
	</div>
</div>

<div class="c"></div>
<div class="sep20"></div>
</div>

<?php $this->load->view('footer');?>