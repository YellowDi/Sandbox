<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-CN">
<head>
<?php $this->load->view('header-meta');?>
<title>SimCity.Pro</title>
</head>
<body>
<?php $this->load->view('header');?>
<div id="Wrapper">
	<div class="content">
	<div id="Leftbar"></div>

		<div id="Rightbar">
		</div>

		<div id="Main">
			<div class="sep20"></div>
			<div class="box">
				<div class="cell">
					<table cellpadding="0" cellspacing="0" border="0" width="100%">
						<tr>
							<td width="73" valign="top" align="center">
								<?php if($avatar){?>
								<img src="<?php echo base_url($big_avatar)?>" class="avatar" border="0" align="default" style="max-width: 75px; max-height: 75px;" />
								<?php } else{?>
								<img src="<?php echo base_url('uploads/avatar/default.jpg')?>" class="avatar" border="0" align="default" style="max-width: 75px; max-height: 75px;"/>
								<?php }?>
								<div class="sep10"></div>
								<strong class="online">ONLINE</strong>
							</td>
							<td width="10"></td>
							<td width="auto" valign="top" align="left">
								<div class="fr">
									<?php if($this->session->userdata('uid')){?>
									<?php if(!$is_followed){?>
									<input type="button" value="加入特别关注" onclick="location.href = '<?php echo site_url('follow/add/'.$uid);?>';" class="super special button" />
									<?php }else{?>
									<input type="button" value="取消特别关注" onclick="location.href = '<?php echo site_url('follow/cancel/'.$uid);?>';" class="super special button" />
									<?php }?>
									<?php }?>
									<div class="sep10"></div>
								</div>
								<h1 style="margin-bottom: 5px;"><?php echo $username?></h1>
								<span class="bigger"><?php echo $signature?></span>
								<span><?php echo $location?></span>
								<div class="sep10"></div>
								<span class="gray">Sandbox 第 <?php echo $uid?> 号会员，加入于 <?php echo $this->myclass->friendly_date($regtime)?></a></span>
								<div class="sep10"></div>
							</td>
						</tr>
					</table>
				</div>
			</div>

			<div class="sep20"></div>
			<div class="box">
				<div class="cell">
					<div class="fr">
						<img src="http://simcity.pro/themes/plus/static/img/rss.png" align="absmiddle" />&nbsp; 
						<a href="#">RSS</a>
					</div>
					<span class="gray"><?php echo $username?> 最近创建的主题</span>
				</div>
				<?php foreach($user_posts as $v){?>
				<div class="cell item" style="border-top-left-radius: 3px; border-top-right-radius: 3px;">
					<div style="position: absolute; margin: -10px -10px 0px 650px;"></div>
					<table cellpadding="0" cellspacing="0" border="0" width="100%">
						<tr>
							<td width="auto" valign="middle">
								<span class="item_title">
									<a href="<?php echo site_url('forum/view/'.$v['fid']);?>"><?php echo $v['title']?></a>
								</span>
								<div class="sep5"></div>
								<span class="small fade">
									<a class="node" href="<?php echo site_url('forum/flist/'.$v['cid']);?>"><?php echo $v['cname']?></a> &nbsp;•&nbsp; <?php echo $this->myclass->friendly_date($v['addtime'])?> &nbsp;•&nbsp; 最后回复来自 <strong><a href="<?php echo site_url('user/info/'.$v['ruid']);?>"><?php echo $v['rname']?></a></strong>
								</span>
							</td>
							<td width="50" align="right" valign="middle">
								<a href="#" class="count_livid"><?php echo $v['comments']?></a>
							</td>
						</tr>
					</table>
				</div>
				<?php } ?>
				<div class="inner">
					<span class="chevron">»</span> <a href="#"><?php echo $username?> 创建的更多主题</a></div>
			</div>
			
			<div class="sep20"></div>

			<div class="box">
				<div class="cell">
					<span class="gray"><?php echo $username?> 最近回复了</span>
				</div>
				<?php foreach($user_comments as $v){?>
				<div class="dock_area">
					<table cellpadding="0" cellspacing="0" border="0" width="100%">
						<tr>
							<td style="padding: 10px 15px 8px 15px; font-size: 12px; text-align: left;">
								<div class="fr">
									<span class="fade"><?php echo $this->myclass->friendly_date($v['replytime'])?></span>
								</div>
								<span class="gray">回复了 <?php echo $v['username']?> 创建的主题 <span class="chevron">›</span> <a href="<?php echo site_url('forum/view/'.$v['fid']);?>"><?php echo $v['title']?></a></span>
							</td>
						</tr>
					</table>
				</div>			
			    <div class="inner">
			        <div class="reply_content"><?php echo $v['content']?></div>
			    </div>
				<?php } ?>
	 			<div class="inner"><span class="chevron">»</span> <a href="#"><?php echo $username?> 创建的更多回复</a></div>
	 		</div>
	 	</div>
	 </div>

<div class="c"></div>
<div class="sep20"></div>
</div>

<?php $this->load->view('footer');?>