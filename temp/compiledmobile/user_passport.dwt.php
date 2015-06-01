<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="telephone=no" name="format-detection" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="viewport" content="width=320, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png"/>
<title><?php echo $this->_var['page_title']; ?>触屏版</title>
<link rel='stylesheet' type='text/css' href='themes/default/css/user.css' />
<link href="themes/default/css/reset.css" rel="stylesheet" type="text/css" />
<link href="themes/default/css/head.css" rel="stylesheet" type="text/css" />
<link href="themes/default/css/foot.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="themes/default/css/xmapp.css"/>
<script src="themes/default/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="themes/default/js/jquery.lazyload.js" type="text/javascript"></script>
<script src="themes/default/js/jquery.autocomplete.js" type="text/javascript"></script>
<script src="themes/default/js/jquery.touchScroll.js" type="text/javascript"></script>
<script type="text/javascript" src="themes/default/js/fbi.js"></script>
<script type="text/javascript">
	var _hmt=_hmt||[];(function(){var e=document.createElement("script");e.src="";
	var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)})();
	document.write('<div id="global_loading" style="width: 100%;height: 100%;position: fixed;top: 0;left: 0;background-color: #eee;z-index:999"><div style="width: 100px;height: 75px;margin:auto;top:50%;position:relative"><span style="display:block;float:left;width:32px;height:32px;background:url(themes/default/images/spacer.gif);margin-top:-5px;"></span>&nbsp;&nbsp;加载中...</div></div>');
	</script>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js,transport.js')); ?>
</head>
<body>

<?php if ($this->_var['action'] == 'login'): ?>
<div class="header_03">
  <div class="back"> <a href="index.php" class="arrow">首页</a> </div>
  <div style="" class="tit">
    <h3>登录</h3>
  </div>
  <div class="nav">
    <ul>
      <li class="cart"> <a href="flow.php">购物车</a> <span style="display:none" id="ShoppingCartNum"></span> </li>
    </ul>
  </div>
</div>
<section class="login">
  <div class="form">
    <form class="c-form login-form"  id="J_Login"  name="formLogin" action="user.php" method="post" onSubmit="return userLogin()">
      <ul>
        <li class="user-info name">
          <input class='tipInput' tiptext='' type="text" placeholder="" value="" name="username" id='username'>
        </li>
        <li class="user-info pwd">
          <input class='password' tar='pwd' type="text" value="">
          <input id='pwd' type="password" value=""  name="password" style='display: none'>
          <a href="user.php?act=get_password" style="float:right; height:30px; line-height:30px">忘记密码了?</a> </li>
        <li class="enter">
          <input id='btn_enter' type="submit" class="btn" value="" />
        </li>
        <li class="clearfix"> <span class="auto">
          <input type="checkbox"  id="remerber" value="1" name="remember" checked class="check" />
          保存密码</span> <a class="signup" href='user.php?act=register'>用户注册</a> </li>
      </ul>
      <input type="hidden" name="act" value="act_login" />
      <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
    </form>
  </div>
</section>
<?php endif; ?>

<?php if ($this->_var['action'] == 'register'): ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
<link href="themes/default/css/style.css" rel="stylesheet" type="text/css" />
<div class="header_03">
  <div class="back"> <a href="index.php" class="arrow"></a> </div>
  <div style="" class="tit">
    <h3>用户中心</h3>
  </div>
  <div class="nav">
    <ul>
      <li class="cart"> <a href="flow.php">购物车</a> <span style="display:none" id="ShoppingCartNum"></span> </li>
    </ul>
  </div>
</div>
<section class="signup">
  <div class="form">
    <form action="user.php" method="post" name="formUser" onSubmit="return register();">
      <ul>
        <li>
          <div class="leftinput"><font style="color:#FF0000"> *</font>用户名</div>
          <div class="rightinput">
            <input class='tipInput'  onBlur="is_registered(this.value);" placeholder='' type="text" value="" name="username" id="username">
            <div  id="username_notice"  style="color:#FF0000"> </div>
          </div>
          <div style="clear:both;"></div>
        </li>
        <li>
          <div class="leftinput"><font style="color:#FF0000"> *</font>密码</div>
          <div class="rightinput">
            <input id='password1' type="password" onblur="check_password(this.value);"  value="" name="password">
            <div style="color:#FF0000" id="password_notice"></div>
          </div>
          <div style="clear:both;"></div>
        </li>
        <li>
          <div class="leftinput"><font style="color:#FF0000"> *</font><?php echo $this->_var['lang']['label_confirm_password']; ?></div>
          <div class="rightinput">
            <input id='conform_password' type="password" onblur="check_conform_password(this.value);"  value="" name="confirm_password">
            <div style="color:#FF0000" id="password_notice"></div>
          </div>
          <div style="clear:both;"></div>
        </li>
        <li>
          <div class="leftinput"><font style="color:#FF0000"> *</font>常用邮箱</div>
          <div class="rightinput">
            <input name="email" type="text" id="email" onBlur="checkEmail(this.value);" class="tipInput" placeholder='' />
            <div id="email_notice"  style="color:#FF0000"></div>
          </div>
          <div style="clear:both;"></div>
        </li>
        <?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?>
        <?php if ($this->_var['field']['id'] == 6): ?>
        <?php else: ?>
        <li>
          <div class="leftinput"><?php if ($this->_var['field']['is_need']): ?><font style="color:#FF0000"> *</font><?php endif; ?>
            <span <?php if ($this->_var['field']['is_need']): ?> id="extend_field<?php echo $this->_var['field']['id']; ?>i"<?php endif; ?>><?php echo $this->_var['field']['reg_field_name']; ?></span></div>
          <div class="rightinput">
            <input name="extend_field<?php echo $this->_var['field']['id']; ?>" id="extend_field<?php echo $this->_var['field']['id']; ?>" placeholder='' type="text" class="tipInput" />
          </div>
          <div style="clear:both;"></div>
        </li>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <li>
          <input name="agreement" type="checkbox" value="1" checked="checked" style="display:none"  />
          <input name="act" type="hidden" value="act_register" >
          <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
          <input id='btn_enter' type="submit" class="btn" name="Submit" value="注册" />
        </li>
      </ul>
    </form>
  </div>
</section>
<?php endif; ?>

<?php if ($this->_var['action'] == 'get_password'): ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
<script type="text/javascript">
    <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
<link href="themes/default/css/style.css" rel="stylesheet" type="text/css" />
<div class="header_03">
  <div class="back"> <a href="index.php" class="arrow"></a> </div>
  <div style="" class="tit">
    <h3>找回密码</h3>
  </div>
  <div class="nav">
    <ul>
      <li class="cart"> <a href="flow.php">购物车</a> <span style="display:none" id="ShoppingCartNum"></span> </li>
    </ul>
  </div>
</div>
<section class="signup">
  <div class="form">
  <form action="user.php" method="post" name="getPassword" onsubmit="return submitPwdInfo();">
      <ul>
        <li>
          <div class="leftinput"><font style="color:#FF0000"> *</font>用户名</div>
          <div class="rightinput">
            <input class='tipInput' placeholder='' type="text" value="" name="user_name" id="user_name">
           
          </div>
          <div style="clear:both;"></div>
        </li>
      
        <li>
          <div class="leftinput"><font style="color:#FF0000"> *</font>常用邮箱</div>
          <div class="rightinput">
            <input name="email" type="text" id="email" onBlur="checkEmail(this.value);" class="tipInput" placeholder='' />
            <div id="email_notice"  style="color:#FF0000"></div>
          </div>
          <div style="clear:both;"></div>
        </li>
       
        <li>
          <input type="hidden" name="act" value="send_pwd_email" />
          <input id='submit' type="submit" class="btn" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" />
        </li>
      </ul>
    </form>
  </div>
</section>	
<?php endif; ?>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
</script>


<?php echo $this->fetch('library/page_footer.lbi'); ?>


<script type="text/javascript">
		var global_loading=document.getElementById("global_loading");
		global_loading.parentNode.removeChild(global_loading);
</script>
</body>
</html>
