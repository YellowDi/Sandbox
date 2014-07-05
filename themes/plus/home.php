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

	        <div class="box" id="TopicsHot">
	        	<div class="cell"><span class="fade">今日热议主题</span></div>
	        	<div class="cell from_19763 hot_t_113827">
	        		<table cellpadding="0" cellspacing="0" border="0" width="100%">
	        			<tr>
	        				<td width="24" valign="middle" align="center">
	        					<a href="http://simcity.pro/user/info/1"><img src="http://simcity.pro/uploads/avatar/1/01/1_avatar_middle.jpg" class="avatar" border="0" align="default" style="max-width: 24px; max-height: 24px;" /></a>
	        				</td>
	        				<td width="10"></td>
        					<td width="auto" valign="middle">
        						<span class="item_hot_topic_title">
        							<a href="http://simcity.pro/t/1">♥ Introducing SimCity.Pro</a>
        						</span>
        					</td>
	        			</tr>
	        		</table>
	        	</div>
	        </div>

	        <div class="sep20"></div>

	        <div class="box">
	        	<div class="cell"><div class="fr"></div><span class="fade">最热节点</span></div>
	        	<div class="cell">
	        		<a href="http://simcity.pro/go/2" class="item_node">问与答</a>
	        		<a href="http://simcity.pro/go/3" class="item_node">分享发现</a>
	        	</div>
	        	<div class="inner">
	        		<a href="/index.xml" target="_blank">
	        			<img src="http://simcity.pro/themes/plus/static/img/rss.png" align="absmiddle" border="0" style="margin-top:-3px;" />
	        		</a>&nbsp; 
	        		<a href="/index.xml" target="_blank">RSS</a>
	        	</div>
	        </div>

	        <div class="sep20"></div>

			<div class="box">
			    <div class="cell"><div class="fr"></div><span class="fade">最近新增节点</span></div>
			    <div class="inner">
			        <a href="http://simcity.pro/go/8" class="item_node">反馈</a>
			    </div>
			</div>

			<div class="sep20"></div>

			<div class="box">
			    <div class="cell"><span class="fade">社区运行状况</span></div>
			    <div class="cell">
			        <table cellpadding="5" cellspacing="0" border="0" width="100%">
			            <tr>
			                <td width="50" align="right"><span class="gray">注册会员</span></td>
			                <td width="auto" align="left"><strong><?php echo $total_users?></strong></td>
			            </tr>
			            <tr>
			                <td width="50" align="right"><span class="gray">主题</span></td>
			                <td width="auto" align="left"><strong><?php echo $total_forums?></strong></td>
			            </tr>
			            <tr>
			                <td width="50" align="right"><span class="gray">回复</span></td>
			                <td width="auto" align="left"><strong><?php echo $total_comments?></strong></td>
			            </tr>
			        </table>
			    </div>
			    <div class="inner">
			        <span class="chevron">›</span> <a href="/top/rich">财富排行榜</a>
			        <div class="sep5"></div>
			        <span class="chevron">›</span> <a href="/top/player">消费排行榜</a>
			    </div>
			</div>

			<div class="sep20"></div>

		</div>

		<div id="Main">

			<div class="sep20"></div>

			<div class="box">			
				<div class="inner" style="background-color: #fff; border-top-left-radius: 3px; border-top-right-radius: 3px;" id="Tabs">
				    <a href="http://simcity.pro/notifications" class="tab">R2D2</a>
				    <a href="http://simcity.pro/favorites" class="tab">收藏</a>
				    <a href="/" class="tab_current">全部</a>
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

				<?php if($list){?>
				<?php foreach ($list as $v){?>
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
							<span class="item_title"><a href="<?php echo site_url($v['view_url']);?>"><?php echo sb_substr($v['title'],120);?></a></span>
							<div class="sep5"></div>
							<span class="small fade">
								<div class="votes"></div>
								<a class="node" href="<?php echo site_url($v['flist_url']);?>"><?php echo $v['cname']?></a> &nbsp;•&nbsp; 
								<strong><a href="<?php echo site_url('user/info/'.$v['uid']);?>"><?php echo $v['username']?></a></strong> &nbsp;•&nbsp; <?php echo $this->myclass->friendly_date($v['updatetime'])?> &nbsp;•&nbsp; 最后回复来自 
								<strong><a href="<?php echo site_url('user/info/'.$v['ruid']);?>"><?php echo $v['rname']?></a></strong>
							</span>
						</td>
						<td width="50" align="right" valign="middle">
							<a href="<?php echo site_url($v['view_url'].'#reply');?>" class="count_livid"><?php echo $v['comments']?></a>
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
				<!--script>
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
				</script-->
				<script>
				$(function() {

					var page=2;
							$("#getmore").click(function() {
								var data;
								$("#who-load").html('<img src="http://simcity.pro/themes/plus/static/img/load.gif"'+ 'class="loading'+ page +'" /> &nbsp;加载中');
								$.get('<?php echo site_url();?>/home/getmore/'+page,function(data){
								page++;
								if(data){
								$("#infolist").append(data);

								$("#who-load").html('阅览更早的');
								}else{
									$("#who-load").html('已经是所有的话题了');
								}
								
								
								});
								//$("#infolist").after(tr);
							});
						});
						
				</script>

		</div>

		<div class="sep20"></div>

		<?php $this->load->view('block/right_related_forum');?>

	</div>
</div>

<div class="c"></div>
<div class="sep20"></div>
</div>

<?php $this->load->view('footer');?>