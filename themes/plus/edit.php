<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-CN">
<head>
<?php $this->load->view('header-meta');?>
<title><?php echo $settings['site_name']?> / 修改</title>
</head>
<body>
<?php $this->load->view('header');?>
<div id="Wrapper">
	<div class="content">
		<div id="Leftbar"></div>
		<div id="Rightbar">
			<?php $this->load->view('block/right_login');?>
		</div>

		<div id="Main">
			<div class="sep20"></div>
			<div class="box">
				<div class="header">
					<a href="/"><?php echo $settings['site_name']?></a> 
					<span class="chevron">&nbsp;›&nbsp;</span> 修改主题
				</div>
				<div class="cell">
					<form accept-charset="UTF-8" action="<?php echo site_url('/forum/edit/'.$item['fid']);?>" class="simple_form form-vertical" id="new_topic" method="post" novalidate="novalidate">
						<div style="margin:0;padding:0;display:inline">
							<input name="utf8" type="hidden" value="&#x2713;" />
							<input name="uid" type="hidden" value="1" />
							<input name="cid" type="hidden" value="1" />
						</div>
						<table cellpadding="5" cellspacing="0" border="0" width="100%">
							<tr>
								<td>
									<input class="mle" style="height: 60px; width: 640px;" id="topic_title" name="title" type="text" value="<?php echo $item['title']?>" />
								</td>
							</tr>
							<tr>
								<td>
									<select name="cid" id="cid" class="form-control">
									<?php if($cate['cid']){?>
									<option selected="selected" value="<?php echo $cate['cid']; ?>"><?php echo $cate['cname']?></option>
									<?php } elseif(set_value('cid')){?>
									<option selected="selected" value="<?php echo set_value('cid'); ?>"><?php echo $cate['cname']?></option>
									<?php } else {?>
									<option selected="selected" value="">请选择分类</option>
									<?php } ?>
									<?php if($category[0]) foreach($category[0] as $v) {?>
									<?php if($category[$v['cid']]){?>
									<optgroup label="&nbsp;&nbsp;<?php echo $v['cname']?>">
									<?php foreach($category[$v['cid']] as $c){?>
									<option value="<?php echo $c['cid']?>">
									<?php echo $c['cname']?>
									</option>
									<?php } ?>
									<?php } else {?>
									<option value="<?php echo $v['cid']?>">
									<?php echo $v['cname']?>
									</option>
									<?php } ?>

									<?php } ?>
									</select>

									<span class="help-inline red"><?php echo form_error('cid');?></span>
								</td>
							</tr>
							<tr>
								<td>
									<textarea class="mle" style="height: 200px; width: 640px;" id="topic_content" name="content" placeholder="话题内容" rows="10"><?php echo $item['content']?>		
									</textarea>
									<span class="red"><?php echo form_error('content');?></span>
								</td>
							</tr>
							<tr>
                				<td>
                					<input type="hidden" value="46175" name="once" />
                					<input class="super normal button" data-disable-with="正在提交" name="commit" type="submit" value="修改" />
                				</td>
                			</tr>
                		</table>
                	</form>
                </div>

                <div class="inner">
                	<h2>主题创建指南</h2>
                	<h3>信息量 &nbsp; <span class="fade">Make Sense</span></h3>
                	为了让大家在 <?php echo $settings['site_name']?> 上的时间更有效率，请在创建主题时考虑：
                	<ul>
                		<li>提问型主题：请用准确的语言描述你遇到的问题，如果问题足够在标题中写完，那么正文是不用填写的，在正文中写 RT 是完全没有必要的。<div class="sep10"></div></li>
                		<li>分享型主题：欢迎你在这里分享你在网上看到的有趣事物，因为 <?php echo $settings['site_name']?> 是一个主要关于模拟城市的社区，所以这类话题在 <?php echo $settings['site_name']?> 大家会更感兴趣。请不要在 <?php echo $settings['site_name']?> 分享社会新闻。<div class="sep10"></div></li>
                		<li>作品发布型专题：非常欢迎你在这里发布自己的新作品，我们大家都非常乐意去尝试你的新作。需要注意的是，发布作品请在 <a href="http://simcity.pro/sandbox/go/4" target="_blank">分享创造</a> 节点，而非其他节点。<div class="sep10"></div></li>
                		<li>具体技术讨论：请为你的话题选择一个合适的节点，<?php echo $settings['site_name']?> 为大部分模拟城市进阶组件、软件都建立了专门的节点。</li>
                	</ul>
                	<div class="sep20"></div>
                	<h3>一个友好的社区 &nbsp; <span class="fade">Be Nice to the Community</span></h3>
                	我们希望 <?php echo $settings['site_name']?> 能够成为中文模拟城市玩家中氛围最好的社区，而实现这个目标，需要我们所有人的共同努力：友善，公平，尊重知识和事实。
                </div>
            </div>
        </div>
    </div>
<div class="c"></div>
<div class="sep20"></div>
</div>

<?php $this->load->view('footer');?>