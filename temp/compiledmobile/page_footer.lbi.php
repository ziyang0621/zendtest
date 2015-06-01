<div class="viewport">
			<div id="footer" class="footer">
				<div class="row g_1">
					<a href="index.php" style="color:#88898D">首页</a>
					<a href='user.php' style="color:#88898D"><?php if ($_SESSION['user_id'] > 0): ?>用户中心<?php else: ?>会员登录<?php endif; ?></a>
					<a href="flow.php" style="color:#88898D">购物车</a>
					<a href="./../index.php" style="color:#88898D" id="pc_nav">电脑版</a>
				</div>
				<div class="row g_2">
					<a href="javascript:window.scrollTo(0,0);" style="color:#88898D">返回顶部</a>
				</div>
				<div class="row g_3">
				<?php $_from = get_advlist_by_id(5); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad_0_84314200_1410690032');$this->_foreach['index_ad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_ad']['total'] > 0):
    foreach ($_from AS $this->_var['ad_0_84314200_1410690032']):
        $this->_foreach['index_ad']['iteration']++;
?>
					<p><?php echo $this->_var['ad_0_84314200_1410690032']['ad_code']; ?></p>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
				</div>
			</div>
		</div>

