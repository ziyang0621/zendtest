
<?php if ($this->_var['user_info']): ?>

<?php echo $this->_var['lang']['hello']; ?>,<font class="f4_b" style="color:#ff0000; font-weight:bold;"><?php echo $this->_var['user_info']['username']; ?></font>, <?php echo $this->_var['lang']['welcome_return']; ?>！
<a href="user.php"><?php echo $this->_var['lang']['user_center']; ?></a>
<span class="sep">|</span>
<a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a>

<?php else: ?>

 <a style="padding:0px 2px" href="user.php">登录</a>
 <span class="sep">|</span>
 <a href="user.php?act=register">注册</a>
 <span class="sep">|</span>
 <a href="user.php?act=oath&type=qq"><img src="themes/xiaomi/images/qq_logo_16.png"></a>
<a href="user.php?act=oath&type=weibo"><img src="themes/xiaomi/images/sina_login_16.png"></a>
<a href="user.php?act=oath&type=alipay"><img src="themes/xiaomi/images/alipay_logo_16.gif"></a>
<a href="user.php?act=oath&type=taobao"><img src="themes/xiaomi/images/taobao_logo_16.gif"></a>
<?php endif; ?>