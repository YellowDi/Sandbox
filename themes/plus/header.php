<div id="Top">
  <div class="content">
    <div style="padding-top: 6px;">
      <table cellpadding="0" cellspacing="0" border="0" width="100%">
        <tr>
          <td width="120" align="left">
            <a href="/" name="top" title="way to explore">
              <img src="http://simcity.pro/themes/plus/images/logo@2x.png" border="0" align="default" alt="Sandbox" width="94" height="30" /></span>
            </a>
          </td>
          <td width="auto" align="left">
              <div id="Search">
                <!--form onsubmit="return dispatch()"-->
                <!--form role="search" action="<?php echo site_url()?>/home/search" method="get" target="_blank"-->
                <form role="search" action="<?php echo site_url()?>/home/search" method="get" target="_blank">
                  <div style="width: 276px; height: 28px; background-size: 276px 28px; background-image: url('http://simcity.pro/themes/plus/static/img/qbar_light@2x.png'); background-repeat: no-repeat; display: inline-block;">
                    <!--input type="text" maxlength="40" name="q" id="q" onkeyup="sendQuery();" /-->
                    <input type="text" name="q" maxlength="40" id="q" onkeyup="sendQuery();" />
                  </div>
                </form>
              </div>
          </td>
          <td width="520" align="right" style="padding-top: 2px;">
            <a href="/" class="top">首页</a>&nbsp;&nbsp;&nbsp;
            <?php if($this->session->userdata('uid')){ ?>
            <a href="<?php echo site_url('user/info/'.$this->session->userdata('uid').'')?>" class="top"><?php echo $this->session->userdata('username');?></a>&nbsp;&nbsp;&nbsp;
              <?php if($this->auth->is_admin()){ ?>
                <a href="<?php echo site_url('admin/login')?>" class="top">后台</a>&nbsp;&nbsp;&nbsp;
              <?php }?>
            <a href="<?php echo site_url('settings')?>" class="top">设置</a>&nbsp;&nbsp;&nbsp;
            <a href="<?php echo site_url('user/logout')?>" data-method="delete" rel="nofollow" class="top">登出</a></td>
            <?php }else{?>
            <a href="<?php echo site_url('user/reg')?>" class="top">注册</a>&nbsp;&nbsp;&nbsp;
            <a href="<?php echo site_url('user/login')?>" class="top">登陆</a>&nbsp;&nbsp;&nbsp;
            <?php }?>
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>

<div id="cse_g" style="background-image: url("http://simcity.pro/sandbox/themes/meiri/static/img/top_light.png");text-align: center;background-color: #f0f0f0;width: 270px;></div>