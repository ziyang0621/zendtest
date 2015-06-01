
<div class="home-commented-goods home-miui-goods">
    <div class="xm-plain-box">
      <div class="box-hd">
        <h3 class="title"><?php echo htmlspecialchars($this->_var['goods_cat']['name']); ?></h3>
        <div class="more"> <a class="more-link" href="<?php echo $this->_var['goods_cat']['url']; ?>" target="_blank">更多<i class="iconfont">&#xe605;</i></a> </div>
      </div>
      <div class="box-bd">
        <div class="xm-commented-goods-list-wrap">
          <div class="xm-commented-goods-list clearfix">
		  <?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_09763800_1413729675');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_09763800_1413729675']):
?>
            <div class="xm-commented-goods-item">
              <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="<?php echo $this->_var['goods_0_09763800_1413729675']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['goods_0_09763800_1413729675']['short_name']); ?></a></span> <span class="item-price"><?php if ($this->_var['goods_0_09763800_1413729675']['promote_price'] != ""): ?><?php echo $this->_var['goods_0_09763800_1413729675']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_0_09763800_1413729675']['shop_price']; ?><?php endif; ?></span> </span> <span class="item-thumb"> <a href="<?php echo $this->_var['goods_0_09763800_1413729675']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods_0_09763800_1413729675']['thumb']; ?>" alt=""  /></a> </span> </div>
            </div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
            
          </div>
        </div>
      </div>
    </div>
  </div>
