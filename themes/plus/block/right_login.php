	    <div class="sep20"></div>

	    	<?php if($this->session->userdata('uid')){ ?>
	    	<div class="box">
		      	<div class="cell">
		      		<table cellpadding="0" cellspacing="0" border="0" width="100%">
			            <tr>
			              <td width="48" valign="top"><a href="<?php echo site_url('user/info/'.$user['uid']);?>"><img src="<?php echo base_url($user['big_avatar'])?>" class="avatar" border="0" align="default" style="max-width: 48px; max-height: 48px;" /></a></td>
			              <td width="10" valign="top"></td>
			              <td width="auto" align="left"><span class="bigger"><a href="<?php echo site_url('user/info/'.$user['uid']);?>"><?php echo $user['username']?></a></span>
			              </td>
		        		</tr>
		      		</table>
		      		<div class="sep10"></div>
		      		<table cellpadding="0" cellspacing="0" border="0" width="100%">
		      			<tr>
		      				<td width="33%" align="center">
		      					<a href="/my/nodes" class="dark" style="display: block;">
		      						<span class="bigger">0</span>
		      						<div class="sep3"></div>
		      						<span class="fade">节点收藏</span>
		      					</a>
		      				</td>
		      				<td width="34%" style="border-left: 1px solid rgba(100, 100, 100, 0.4); border-right: 1px solid rgba(100, 100, 100, 0.4);" align="center">
		      					<a href="<?php echo site_url('favorites');?>" class="dark" style="display: block;">
		      						<span class="bigger"><?php echo $users['favorites']?></span>
		      						<div class="sep3"></div>
		      						<span class="fade">主题收藏</span>
		      					</a>
		      				</td>
		      				<td width="33%" align="center">
		      					<a href="<?php echo site_url('follow');?>" class="dark" style="display: block;">
		      						<span class="bigger"><?php echo $users['follows']?></span>
		      						<div class="sep3"></div>
		      						<span class="fade">特别关注</span>
		      					</a>
		      				</td>
		      			</tr>
		      		</table>
	      		</div>
	      		<div class="inner">
	      			<?php if($users['notices']){?>
	      			<a href="<?php echo site_url('notifications');?>" class="fade"><?php echo $users['notices']?> 条未读提醒</a>
	      			<?php } else{?>
	      			<a href="<?php echo site_url('notifications');?>" class="fade">0 条未读提醒</a>
	      			<?php }?>
	      		</div>
	        </div>
	        <?php } else {?>
	            <div class="box">
	                <div class="cell">
	                    <strong><?php echo $settings['site_name']?></strong>
	                    <div class="sep5"></div>
	                    <span class="fade">模拟城市爱好者们的社区</span>
	                </div>
	                <div class="inner">
	                    <div class="sep5"></div>
	                    <div align="center"><a href="<?php echo site_url('user/reg')?>" class="super normal button">现在注册</a>
	                    <div class="sep5"></div>
	                    <div class="sep10"></div>
	                    已注册用户请 &nbsp;<a href="<?php echo site_url('user/login')?>">登录</a></div>
	                </div>
	            </div>
	        <?php }?>