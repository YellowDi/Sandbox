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

		</div>

		<div id="Main">

			<div class="sep20"></div>

			<div class="box">
				<div class="cell" style="background-color: #f9f9f9; padding: 10px 10px 10px 20px;">
					<span class="fade">
						以下是搜索「<span class="red"><?php echo $q;?></span>」的结果
					</span>

					<div class="fr">
						<a href="http://cn.bing.com/search?q=<?php echo $q;?>+site:<?php echo get_domain();?>" class="super normal button">找不到想要的结果？</a>
					</div>
				</div>

				<article>
					<table cellpadding="0" cellspacing="0" border="0" width="100%">
						<tr>
							<td width="auto" valign="middle">
								<span class="item_title">
									<?php
									$q = $_GET["q"];
									$sousuo = mysql_query("select * from stb_forums where title like '%$q%'");
									while ($row = mysql_fetch_array($sousuo)){
										echo "<a target='_blank' href='http://simcity.pro/t/{$row['fid']}'>".$row['title']."</a> <br />";
									}
									?>
								</span>
							</td>
						</tr>
					</table>
					<table cellpadding="0" cellspacing="0" border="0" width="100%">
						<tr>
							<td width="auto" valign="middle">
								<gcse:searchresults-only></gcse:searchresults-only>
							</td>
						</tr>
					</table>
					
				</article>
			</div>

		</div>
	</div>


<div class="c"></div>
<div class="sep20"></div>
</div>

<?php $this->load->view('footer');?>