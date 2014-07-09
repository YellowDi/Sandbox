<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-CN">
<head>	
<?php $this->load->view('header-meta');?>
<title><?php echo $content['title']?> / <?php echo $settings['site_name']?></title>
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

		</div>

		<div id="Main">

			<div class="sep20"></div>

			<div class="box" style="border-bottom: 0px;">
				<div class="header">
					<div class="fr">
						<?php if($content['avatar']) {?>
						<a href="<?php echo site_url('user/info/'.$content['uid']);?>"><img src="<?php echo base_url($content['avatar']);?>" class="avatar" border="0" align="default" /></a>
						<?php } else {?>
						<a href="<?php echo site_url('user/info/'.$content['uid']);?>"><img src="<?php echo base_url('uploads/avatar/default.jpg');?>" class="avatar" border="0" align="default" /></a>
						<?php }?>
					</div>
					<a href="<?php echo site_url();?>"><?php echo $settings['site_name']?></a>
					<span class="chevron">&nbsp;›&nbsp;</span> 
					<a href="<?php echo site_url('forum/flist/'.$cate['cid']);?>"><?php echo $cate['cname'];?></a>
					<div class="sep10"></div>
					<h1><?php echo $content['title']?></h1>
					<small class="gray">
						<a href="<?php echo site_url('user/info/'.$content['uid']);?>"><?php echo $content['username']?></a> · <?php echo date('Y-m-d h:i:s',$content['addtime']);?> 
					</small>
				</div>

				<div class="outdated">这是一个创建于 <?php echo $this->myclass->friendly_date($content['addtime'])?> 前的主题，其中的信息可能已经有所发展或是发生改变。</div>

				<div class="cell">
					<div class="topic_content">
						<?php echo $content['content']?>
					</div>
				</div>

				<div class="topic_buttons">
					<div class="fr gray f11" style="line-height: 12px; padding-top: 3px; text-shadow: 0px 1px 0px #fff;"><?php echo $content['views']?> 次点击 &nbsp;</div>
					
					<?php if($this->session->userdata('uid')){?>
					<?php if($in_favorites){?>
					<a href="<?php echo site_url('favorites/del/'.$content['fid']);?>" class="tb" title="取消收藏">取消收藏</a> &nbsp;
					<?php } else {?>
					<a href="<?php echo site_url('favorites/add/'.$content['fid']);?>" class="tb" title="点击收藏">收藏</a> &nbsp;
					<?php } ?>
					<?php } ?>

					<?php if($this->auth->is_user($content['uid']) || $this->auth->is_admin() || $this->auth->is_master($cate['cid'])){?>
						<a href="<?php echo site_url('forum/edit/'.$content['fid']);?>" class="tb" data-method="edit" rel="nofollow">编辑此贴</a>
						<a href="<?php echo site_url('forum/del/'.$content['fid'].'/'.$content['cid'].'/'.$content['uid']);?>" class="tb" data-method="edit" rel="nofollow">删除</a>
					<?php }?>
					<a href="#;" onclick="window.open('https://twitter.com/share?url=http://simcity.pro&related=SimCity.Pro&hashtags=SimCity.Pro&text=<?php echo $content['title']?>', '_blank', 'width=550,height=370'); recordOutboundLink(this, 'Share', 'twitter.com');" class="tb">Tweet</a>				
					<a href="#;" onclick="window.open('http://service.weibo.com/share/share.php?url=http://simcity.pro&title=SimCity.Pro%20-%20<?php echo $content['title']?>', '_blank', 'width=550,height=370'); recordOutboundLink(this, 'Share', 'weibo.com');" class="tb">Weibo</a>
				</div>

			</div>

			<div class="sep20"></div>

<section>

			<div class="box">
				<div class="cell">
					
					<!--div class="fr" style="margin: -3px -5px 0px 0px;">
						<?php if(isset($tag_list)){?>
						<a href="<?php echo site_url($tag['tag_url']);?>" class="tag"><li class="icon-tag"></li><?php echo $tag['tag_title'];?></a>
						<?php } else {?>
						<a href="#" class="tag">无标签</a>
						<?php }?>
					</div-->
					<span class="gray"><?php echo $content['comments']?> 回复 &nbsp;<strong class="snow">|</strong> &nbsp;参与讨论</span>
				</div>
				<?php foreach ($comment as $key=>$v){?>
				<div id="r_<?php echo ($page-1)*10+$key+1;?>" class="cell">	
				    <table cellpadding="0" cellspacing="0" border="0" width="100%">
				        <tr>
				        	<?php if($v['avatar']) {?>
				            <td width="48" valign="top" align="center"><img src="<?php echo base_url($v['avatar']);?>" class="avatar" border="0" align="default"/></td>
				            <?php } else {?>
				            <td width="48" valign="top" align="center"><img src="<?php echo base_url('uploads/avatar/default.jpg');?>" class="avatar" border="0" align="default" style="max-width: 48px; max-height: 48px;" /></td>
				            <?php }?>
				            <td width="10" valign="top"></td>
				            <td width="auto" valign="top" align="left">
				            	<div class="fr">
				            		<div id="thank_area_<?php echo ($page-1)*10+$key+1;?>" class="thank_area">
				            			<?php if($this->auth->is_admin() || $this->auth->is_master($cate['cid'])){?>
				            			<a href="<?php echo site_url('comment/del/'.$content['cid'].'/'.$v['fid'].'/'.$v['id']);?>" class="thank" style="color: #ccc;"><span class="glyphicon glyphicon-remove-sign"></span>删除</a>&nbsp; &nbsp; &nbsp; 
				            			<?php }?>
				            			<?php if($this->auth->is_user($v['uid']) || $this->auth->is_admin() || $this->auth->is_master($cate['cid'])){?>
				            			<!--a href="<?php echo site_url('comment/edit/'.$content['cid'].'/'.$v['fid'].'/'.$v['id']);?>" class="thank"><span class="glyphicon glyphicon-remove-sign"></span>编辑</a-->
				            			<?php }?>
				            		</div> &nbsp; 
				            		<a href="#reply" data-mention="<?php echo $v['username']?>" onclick="replyOne('<?php echo $v['username']?>');">
				            			<img src="http://simcity.pro/themes/plus/static/img/reply.png" align="absmiddle" border="0" alt="Reply" />
				            		</a> &nbsp;&nbsp; 
				            		<span class="no"><?php echo ($page-1)*10+$key+1;?></span>
				            	</div>
				                <div class="sep3"></div>
				                <strong><a href="<?php echo site_url('user/info/'.$v['uid']);?>" class="dark"><?php echo $v['username']?></a></strong>&nbsp; &nbsp;<span class="fade small"><?php echo $this->myclass->friendly_date($v['replytime'])?></span> 
				                <div class="sep5"></div>
				                <div class="reply_content"><?php echo stripslashes($v['content'])?></div>
				            </td>
				        </tr>
				    </table>
				</div>
				<?php }?>

				<?php if($content['comments']>20){?>
				<div class="inner" style="border-top: 1px solid #e2e2e2; text-align: center;">
					<?php echo $pagination;?>
				</div>
				<?php }?> 

			</div>

</section>

			<div class="sep20"></div>

			<a name='reply'></a>
			<?php if($this->auth->is_login()){?>
			<div class="box">
				<div class="cell">
					<div class="fr">
						<a href="#">
							<strong>↑</strong> 
							回到顶部
						</a>
					</div>
					添加一条新回复
				</div>
				<div class="cell">
					<input name="utf8" type="hidden" value="&#x2713;" />
					<input name="authenticity_token" type="hidden" value="b9p2+DhdHWTAHdRMrexpe7XxI2HxTaX7MaUKEaQiUsY=" />
					<input name="fid" id="fid" type="hidden" value="<?php echo $content['fid']?>" />
					<input name="is_top" id="is_top" type="hidden" value="<?php echo $content['is_top']?>" />
					<input name="username" id="username" type="hidden" value="<?php echo $user['username']?>" />
					<input name="avatar" id="avatar" type="hidden" value="<?php echo base_url($user['middle_avatar'])?>" />
					<textarea  maxlength="10000" style="width:  98%;" class="mll" id="reply_content" name="comment" ></textarea>
					<div class="sep10"></div>
						<div class="fr">
							<div class="sep5"></div>
							<span class="gray">请尽量让自己的回复能够对别人有帮助</span>
					</div>
					<input  class="super normal button" data-disable-with="正在提交" type="submit" id="comment-submit" value="发送" />
				<!--div class="form-group">
					<div class="col-md-12" id="textContain">
						<textarea class="mll" id="reply_content" name="comment" rows="5"></textarea>
						<div class="sep10"></div>
							<div class="fr">
								<div class="sep5"></div>
								<span class="gray">请尽量让自己的回复能够对别人有帮助</span>
							</div>
					</div>
				</div-->

				<!--div class="col-sm-9">
					<input class="super normal button" data-disable-with="正在提交" type="submit" id="comment-submit" value="发送" />
					<span id="msg"></span>
				</div-->
			</div>

				<?php } else{?>

				<div class="box transparent">
					<div class="inner" style="text-align: center">
						<span style="color: rgba(0, 0, 0, 0.25);"><a href="<?php echo site_url('user/login');?>">登录发表</a></span>
					</div>
				</div>

				<?php }?>
		</div>
	</div>

<div class="c"></div>
<div class="sep20"></div>
</div>

<?php $this->load->view('footer');?>