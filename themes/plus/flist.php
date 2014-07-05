<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-CN">
<head>
<?php $this->load->view('header-meta');?>
<title><?php echo $settings['site_name']?></title>
</head>
<body>
<?php $this->load->view('header');?>
<div id="Wrapper">
	<div class="content">
	<div id="Leftbar"></div>

		<div id="Rightbar">
			<?php $this->load->view('block/right_login');?>

			<div class="sep20"></div>

			<div class="box">
				<div class="inner">
					<strong class="gray">子节点</strong>
					<div class="sep10"></div>
						<img src="http://simcity.pro/themes/plus/static/img/feedback.png" border="0" align="absmiddle" width="24" />&nbsp; <a href="http://simcity.pro/go/8">反馈</a>
				</div>
			</div>

			<div class="sep20"></div>
			<div class="box">
				<div class="inner">
					
				</div>
			</div>

            <div class="sep20"></div>

		</div>

		<div id="Main">
			<div class="sep20"></div>
			<div class="box">
				<div class="header">
					<div style="float: left; display: inline-block; margin-right: 10px; margin-bottom: 10px;">
						<?php if($c['ico']){?>
						<img src="<?php echo base_url($c['ico'])?>" border="0" align="default" width="auto" />
						<?php } else {?>
						<img src="http://simcity.pro/themes/plus/static/img/17_large.png" border="0" align="default" width="auto" />
						<?php }?>
					</div>
					<div class="fr f12">
					</div>
					<a href="/"><?php echo $settings['site_name']?></a><span class="chevron">&nbsp;›&nbsp;</span> <?php echo $category['cname'];?>
					<div class="sep10"></div>
					<span class="f12 gray"><?php echo $category['content'];?></span>
					<div class="sep10"></div>
					<input type="button" class="super normal button" value="创建新主题" onclick="location.href = '<?php echo site_url('/forum/add/'.$category['cid']);?>';" />
				</div>
				<div id="TopicsNode">
					<?php if($list){?>
					<?php foreach ($list as $v) {?>
					<div class="cell from_1 t_113112">
						<table cellpadding="0" cellspacing="0" border="0" width="100%">
							<tr>
								<td width="48" valign="top" align="center">
									<a href="<?php echo site_url('user/info/'.$v['uid']);?>">
										<?php if($v['avatar']) {?>
										<img src="<?php echo base_url();?><?php echo $v['avatar'];?>" class="avatar" border="0" align="default" style="max-width: 48px; max-height: 48px;" />
										<?php } else {?>
										<img src="<?php echo base_url('uploads/avatar/default.jpg');?>" class="avatar" border="0" align="default" style="max-width: 48px; max-height: 48px;" />
										<?php }?>
									</a>
								</td>
								<td width="10"></td>
								<td width="auto" valign="middle">
									<span class="item_title">
										<a href="<?php echo site_url($v['view_url']);?>"><?php echo sb_substr($v['title'],120);?></a>
									</span>
									<div class="sep5"></div>
									<span class="small fade">
										<strong>
											<a href="<?php echo site_url('user/info/'.$v['uid']);?>"><?php echo $v['username'];?></a>
										</strong> &nbsp;•&nbsp; <?php echo $this->myclass->friendly_date($v['addtime']);?>&nbsp;•&nbsp; 最后回复来自 <strong><a href="<?php echo site_url('user/info/'.$v['ruid']);?>"><?php echo $v['rname'];?></a></strong>
									</span>
								</td>
								<td width="50" align="right" valign="middle">
								</td>
							</tr>
						</table>
					</div>
					<?php } ?>
					<?php } else{?>
					<div class='cell topic'>
						暂无话题, 请发表话题！
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<div class="c"></div>
	<div class="sep20"></div>
</div>

<?php $this->load->view('footer');?>