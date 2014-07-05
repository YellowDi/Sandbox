<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-CN">
<head>
<?php $this->load->view('header-meta');?>
<title><?php echo $settings['site_name']?> › Planes</title>
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

                    <div class="inner" style="background-color: #fff; border-top-left-radius: 3px; border-top-right-radius: 3px;" id="Tabs">
                        <a href="http://simcity.pro/notifications" class="tab">R2D2</a>
                        <a href="http://simcity.pro/favorites" class="tab">收藏</a>
                        <a href="/" class="tab">全部</a>
                        <a href="http://simcity.pro/section" class="tab_current">节点</a>
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

                    <div class="cell">
                        <table cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td align="right" width="60">
                                    <span class="fade">分享与探索</span>
                                </td>
                                <td style="line-height: 200%; padding-left: 10px;">
                                    <a href="http://simcity.pro/go/2" style="font-size: 14px;">问与答</a>&nbsp; &nbsp;
                                    <a href="http://simcity.pro/go/3" style="font-size: 14px;">分享发现</a>&nbsp; &nbsp;
                                    <a href="http://simcity.pro/go/4" style="font-size: 14px;">分享创造</a>&nbsp; &nbsp;
                                    <a href="http://simcity.pro/go/5" style="font-size: 14px;">自言自语</a>&nbsp; &nbsp;
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="cell">
                        <table cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td align="right" width="60">
                                    <span class="fade">SimCity.Pro</span>
                                </td>
                                <td style="line-height: 200%; padding-left: 10px;">
                                    <a href="http://simcity.pro/go/7" style="font-size: 14px;">Sandbox</a>&nbsp; &nbsp;
                                    <a href="http://simcity.pro/go/8" style="font-size: 14px;">反馈</a>&nbsp; &nbsp;
                                    <a href="http://simcity.pro/go/9" style="font-size: 14px;">使用指南</a>&nbsp; &nbsp;
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

        </div>
            
            
<div class="c"></div>
<div class="sep20"></div>
</div>

<?php $this->load->view('footer');?>
