<!DOCTYPE html><html><head><meta content='搜索<?php echo $q;?>结果' name='description'>
<meta charset='UTF-8'>
<meta content='True' name='HandheldFriendly'>
<meta content='width=device-width, initial-scale=1.0' name='viewport'>
<title><?php echo $title;?>列表 - <?=$settings['site_name']?></title>
<?php $this->load->view('header-meta');?>
<style type="text/css">
#idData td a{display:block; width:580px;}
.barcon {padding:20px 10px;}
.barcon a{margin-left:10px;line-height:24px;}
.barcon span{margin-left:10px;line-height:24px;color:#6569A3;}
</style>
<script type="text/javascript" src="<?php echo base_url('static/common/js/page.js');?>"></script>
</head>

<body id="startbbs" onLoad="goPage(1,10);">
<a id="top" name="top"></a>
<?php $this->load->view('header');?>

<div id="wrap">
<div class="container" id="page-main">
<div class="row">
<div class='col-xs-12 col-sm-6 col-md-8'>

<div class='box fix_cell'>
<div class='cell'><a href="<?php echo site_url()?>" class="startbbs"><?php echo $settings['site_name']?></a> <span class="chevron">&gt;&gt;</span><?php echo $title;?><span class="red"><?php echo $q;?></span>列表</div>
<div class='inner'>
<div class='page'>
<article>
<table id="idData">
<?php
$q = $_GET["q"];
$sousuo = mysql_query("select * from stb_forums where content like '%$q%'");
while ($row = mysql_fetch_array($sousuo)){
echo "<tr><td class='admin cell topic'><a target='_blank' href='../../index.php/forum/view/{$row['fid']}'>".$row['title']."</a></td></tr>";
}
?>
</table>
<div id="barcon" class="barcon" name="barcon"></div>
<div class="btn btn-info"><a href="http://cn.bing.com/search?q=<?php echo $q;?>+site:<?php echo get_domain();?>" style="color:#FFF">找不到想要的结果？点这里试试</a></div>
<gcse:searchresults-only></gcse:searchresults-only>
</article>
</div>
</div>
</div>

</div>
<div class='col-xs-12 col-sm-6 col-md-4' id='Rightbar'>

<?php $this->load->view('block/right_login');?>

<?php $this->load->view('block/right_ad');?>

</div>
</div></div></div>

<?php $this->load->view('footer');?>