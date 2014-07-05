<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-CN">
<head>
<?php $this->load->view('header-meta');?>
<title>Sandbox</title>
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
				<div class="cell">
					<span class="fade">我关注的人</span>
				</div>
					<?php if(isset($follow_list)){?>
					<?php foreach($follow_list as $v){?>
				<div class="inner">
					<a href="<?php echo site_url('user/info/'.$v['follow_uid']);?>">
						<?php if($v['avatar']){?>
						<img src="<?php echo base_url($v['avatar'])?>" class="avatar" border="0" align="absmiddle" />
						<?php } else{?>
						<img src="<?php echo base_url('uploads/avatar/default.jpg');?>" class="avatar" border="0" align="absmiddle" />
						<?php }?>
					</a>&nbsp; 
					<a href="<?php echo site_url('user/info/'.$v['follow_uid']);?>"><?php echo $v['username']?></a>
				</div>
				<?php }}else{?>
				暂无关注会员
				<?php }?>
			</div>

			<div class="sep20"></div>

		</div>

		<div id="Main">

			<div class="sep20"></div>

			<div class="box">			
				<div class="inner" style="background-color: #fff; border-top-left-radius: 3px; border-top-right-radius: 3px;" id="Tabs">
				    <a href="http://simcity.pro/notifications" class="tab">R2D2</a>
				    <a href="http://simcity.pro/favorites" class="tab">收藏</a>
				    <a href="/" class="tab">全部</a>
				    <a href="http://simcity.pro/section" class="tab">节点</a>
				    <a href="http://simcity.pro/follow" class="tab_current">关注</a>
				</div>
				<div class="cell" style="background-color: #f9f9f9; padding: 10px 10px 10px 20px;">
					<div class="fr">
						<a href="http://simcity.pro/forum/add/2">我要提问</a>
					</div>
					<a href="http://simcity.pro/go/3">分享发现</a> &nbsp; &nbsp; 
					<a href="http://simcity.pro/go/4">分享创造</a> &nbsp; &nbsp; 
					<a href="http://simcity.pro/go/2">问与答</a>
				</div>

				<?php if(isset($follow_user_forums)){?>
				<?php foreach($follow_user_forums as $v){?>
				<div class="cell item" style="border-top-left-radius: 3px; border-top-right-radius: 3px;"><div style="position: absolute; margin: -10px -10px 0px 650px;"></div>
				<table cellpadding="0" cellspacing="0" border="0" width="100%">
					<tr>
						<?php if($v['avatar']){?>
						<td width="48" valign="top" align="center"><a href="<?php echo site_url('user/info/'.$v['uid']);?>"><img src="<?php echo base_url($v['avatar']);?>" class="avatar" border="0" align="default" style="max-width: 48px; max-height: 48px;" /></a></td>
						<?php } else{?>
						<td width="48" valign="top" align="center"><a href="<?php echo site_url('user/info/'.$v['uid']);?>"><img src="uploads/avatar/default.jpg" class="avatar" border="0" align="default" style="max-width: 48px; max-height: 48px;" /></a></td>
						<?php }?>
						<td width="10"></td>
						<td width="auto" valign="middle">
							<span class="item_title"><a href="<?php echo site_url('forum/view/'.$v['fid']);?>"><?php echo $v['title'];?></a></span>
							<div class="sep5"></div>
							<span class="small fade">
								<div class="votes"></div>
								<strong><a href="<?php echo site_url('user/info/'.$v['uid']);?>"><?php echo $v['username']?></a></strong> &nbsp;•&nbsp; <?php echo $this->myclass->friendly_date($v['updatetime']);?> &nbsp;•&nbsp; 最后回复来自 
								<strong><a href="<?php echo site_url('user/info/'.$v['ruid']);?>"><?php echo $v['rname']?></a></strong>
							</span>
						</td>
						<td width="50" align="right" valign="middle">
							<a href="#" class="count_livid"><?php echo $v['comments']?></a>
						</td>
					</tr>
				</table>
				</div>
				<?php } ?>
				
			<?php } else {?>
				<div class='cell topic'>暂无话题, 请发表话题！</div>
			<?php } ?>

			<div class="inner">

				<span class="chevron">→</span> <a href="javascript:void(0)" id="getmore" class="startbbs">更多新主题</a>
			</div>
				<script>
				$(function() {
					var page=2;
							$("#getmore").click(function() {
								var data;
								$.get('<?php echo site_url();?>/home/getmore/'+page,function(data){
								page++;
								$("#infolist").append(data);
								});
								//$("#infolist").after(tr);
							});
						});	
				</script>

		</div>

		<div class="sep20"></div>
		<div class="box">
			<div class="cell">
				<div class="fr">
					<a href="/planes">浏览全部节点</a>
				</div>
				<span class="fade"><strong>Sandbox</strong> / 节点导航</span>
			</div>
			<div class="cell">
				<table cellpadding="0" cellspacing="0" border="0">
					<?php foreach ($catelist[0] as $v){?>
					<tr>
						<td align="right" width="60">
							<span class="fade"><?php echo $v['cname']?></span>
						</td>
						<?php foreach(@$catelist[$v['cid']] as $c){?>
						<td style="line-height: 200%; padding-left: 10px;">
							<a href="<?php echo site_url($c['flist_url']);?>" class="item_node" style="font-size: 14px;"><?php echo $c['cname']?></a>&nbsp; &nbsp;
						</td>
						<?php }?>
					</tr>
					<?php }?>
				</table>
			</div>
		</div>

	</div>
</div>

<div class="c"></div>
<div class="sep20"></div>
</div>
<?php $this->load->view('footer');?>