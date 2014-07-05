
	<meta charset="UTF-8" />
    <meta content="authenticity_token" name="csrf-param" />
    <meta content="suTN1ExyGAX0WFd5f9EbmfgGT0VH6+QlmmtHwG2u16I=" name="csrf-token" />
	<meta content="True" name="HandheldFriendly" />    
        <link rel="stylesheet" type="text/css" media="screen"  href="http://simcity.pro/themes/plus/css/shared.css" />
	<link rel="stylesheet" type="text/css" media="screen"  href="http://simcity.pro/themes/plus/css/desktop.css" />
    <link rel="shortcut icon" href="/static/img/icon_rayps_64.png" type="image/png" />
    <link rel="apple-touch-icon" href="/static/img/apple-touch-icon.png" />
    <link rel="stylesheet" type="text/css" href="http://simcity.pro/themes/plus/static/css/font-awesome.min.css" />
	<script src="http://simcity.pro/themes/plus/static/js/jquery.js" type="text/javascript"></script>
	<script src="http://simcity.pro/themes/plus/static/js/jquery-ui.js" type="text/javascript"></script>
	<script src="http://simcity.pro/themes/plus/static/js/jquery.autosize.js?v=1.18.6" type="text/javascript"></script>
    <script type="text/javascript">
    </script>
    <script type="text/javascript">
    var baseurl='<?php echo base_url()?>';
    var siteurl='<?php echo site_url()?>';
    var sitedomain='<?php echo get_domain()?>';
    </script>
    <?php if($this->config->item('show_editor')=='on'){?>
        <script charset="utf-8" src="<?php echo base_url('plugins/kindeditor/keset2.js');?>"></script>
    <?php } elseif($this->config->item('storage_set')=='local') {?>
        <link rel="stylesheet" href="<?php echo base_url('plugins/kindeditor/themes/default/default.css');?>" />
        <script charset="utf-8" src="<?php echo base_url('plugins/kindeditor/keupload.js');?>"></script>
    <?php } else{?>
        <script src="<?php echo base_url('static/common/js/jquery.upload.js')?>" type="text/javascript"></script>
        <script src="<?php echo base_url('static/common/js/qiniu.js')?>" type="text/javascript"></script>
    <?php }?>
    <script type="text/javascript" src="<?php echo base_url('static/common/js/jquery-1.10.2.min.js');?>"></script>
    <script src="<?php echo base_url('static/common/js/topic.js')?>" type="text/javascript"></script>
    <meta name="description" content="" />
    <link rel="alternate" type="application/atom+xml" href="/index.xml" /> 