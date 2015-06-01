<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<title><?php echo $this->_var['page_title']; ?> 触屏版</title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="format-detection" content="telephone=no">
<link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">
<link href="themes/default/css/home.css" rel="stylesheet" type="text/css" />
<link href="themes/default/css/foot.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themes/default/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="themes/default/js/jquery.lazyload.js"></script>
<script type="text/javascript" src="themes/default/js/fbi.js"></script>
<script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".row_list img").lazyload({
          placeholder: "themes/default/images/img_bg4.png",
          effect: "fadeIn"
        });
      });
    </script>
</head>
<body style="">
<div class="header">
  <div class="left"> <a href="index.php" class="home"> <span> <?php echo $this->_var['shop_name']; ?> </span> </a> </div>
  <div class="tit">
    <h2> <span class="title"> <?php echo $this->_var['shop_name']; ?> </span> </h2>
  </div>
  <div class="right">
    <ul>
      <li class="user"> <a href="user.php" title="个人中心"> <span class="ico"> </span> </a> </li>
      <li class="cart"> <a href="flow.php" title="购物车"> <span class="ico"> </span> <span id="ShoppingCartNum" class="tip hide"> </span> </a> </li>
    </ul>
  </div>
</div>
<div id="viewport" class="viewport">
  <div class="slider card card-nomb" style="visibility: visible;">
    
    <script type="text/javascript" src="themes/default/js/TouchSlide.1.1.js"></script>
    <div id="focus" class="focus">
      <div class="hd">
        <ul>
        </ul>
      </div>
      <div class="bd">
        <ul>
		<?php $_from = get_advlist_by_id(1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_ad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_ad']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_ad']['iteration']++;
?>
        <li><a href="<?php echo $this->_var['ad']['url']; ?>"><img src="./../<?php echo $this->_var['ad']['image']; ?>" /></a></li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      </div>
    </div>
    <script type="text/javascript">
	TouchSlide({ 
		slideCell:"#focus",
		titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
		mainCell:".bd ul",
		delayTime:600,
		interTime:4000,
		effect:"leftLoop", 
		autoPlay:true,//自动播放
		autoPage:true, //自动分页
		switchLoad:"_src" //切换加载，真实图片路径为"_src" 
	});
	</script>
    
  </div>
  <div class="nav-index card">
    <ul>
      <li> <a href="allcate.php"> <span class="ico icon_indexn_01"> </span> <span class="t"> <span> 全部分类 </span> </span> </a> </li>
      <li> <a href="search.php?intro=promote"> <span class="ico icon_indexn_02"> </span> <span class="t"> <span> 促销活动 </span> </span> </a> </li>
      <li> <a href="search.php?intro=new"> <span class="ico icon_indexn_03"> </span> <span class="t"> <span> 新品上市 </span> </span> </a> </li>
      <li> <a href="brand.php"> <span class="ico icon_indexn_04"> </span> <span class="t"> <span> 品牌馆 </span> </span> </a> </li>
    </ul>
    <ul>
      <li> <a href="flow.php"> <span class="ico icon_indexn_05"> </span> <span class="t"> <span> 购物车 </span> </span> </a> </li>
      <li> <a href="user.php"> <span class="ico icon_indexn_06"> </span> <span class="t"> <span> 会员中心 </span> </span> </a> </li>
	  <li> <a href="tel:4000-021-758"> <span class="ico icon_indexn_08"> </span> <span class="t"> <span> 客服中心 </span> </span> </a> </li>
      <li> <a href="./../index.php"> <span class="ico icon_indexn_07"> </span> <span class="t"> <span> 电脑版 </span> </span> </a> </li>
      
    </ul>
  </div>
  <div class="card show_big">
    <div class="col2">
	<?php $_from = get_advlist_by_id(2); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_ad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_ad']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_ad']['iteration']++;
?>
	<?php if ($this->_foreach['index_ad']['iteration'] == 1): ?>
      <div class="row2 mg-bor-right"> <a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank" class="img"> <span class="imgurl"> <img data-original="./../<?php echo $this->_var['ad']['image']; ?>" style="display: inline;" src="./../<?php echo $this->_var['ad']['image']; ?>"> </span> </a> </div>
	<?php endif; ?>  
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
      <div class="rows">
	  <?php $_from = get_advlist_by_id(2); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_ad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_ad']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_ad']['iteration']++;
?>
	<?php if ($this->_foreach['index_ad']['iteration'] == 2): ?>
        <div class="row1"> <a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank" class="img"> <span class="imgurl"> <img data-original="./../<?php echo $this->_var['ad']['image']; ?>" style="display: inline;" src="./../<?php echo $this->_var['ad']['image']; ?>"> </span> </a> </div>
	<?php endif; ?>  
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
	<?php $_from = get_advlist_by_id(2); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_ad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_ad']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_ad']['iteration']++;
?>
	<?php if ($this->_foreach['index_ad']['iteration'] == 3): ?>
        <div class="row1 mg-bor-no-left mg-bor-top"> <a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank" class="img"> <span class="imgurl"> <img data-original="./../<?php echo $this->_var['ad']['image']; ?>" style="display: inline;" src="./../<?php echo $this->_var['ad']['image']; ?>"> </span> </a> </div>
		<?php endif; ?>  
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
    </div>
    <div class="col2">
	<?php $_from = get_advlist_by_id(2); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_ad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_ad']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_ad']['iteration']++;
?>
	<?php if ($this->_foreach['index_ad']['iteration'] == 4): ?>
      <div class="row1 mg-bor-right"> <a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank" class="img"> <span class="imgurl"> <img data-original="./../<?php echo $this->_var['ad']['image']; ?>" style="display: inline;" src="./../<?php echo $this->_var['ad']['image']; ?>"> </span> </a> </div>
	<?php endif; ?>  
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
	<?php $_from = get_advlist_by_id(2); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_ad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_ad']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_ad']['iteration']++;
?>
	<?php if ($this->_foreach['index_ad']['iteration'] == 5): ?>
      <div class="row1"> <a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank" class="img"> <span class="imgurl"> <img data-original="./../<?php echo $this->_var['ad']['image']; ?>" style="display: inline;" src="./../<?php echo $this->_var['ad']['image']; ?>"> </span> </a> </div>
	  <?php endif; ?>  
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </div>
  </div>
  <div class="card">
    <div class="topic">
      <div class="bg">
	  <?php $_from = get_advlist_by_id(3); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_ad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_ad']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_ad']['iteration']++;
?>
        <div class="imgurl"> <img data-original="./../<?php echo $this->_var['ad']['image']; ?>" style="display: inline;" src="./../<?php echo $this->_var['ad']['image']; ?>"> </div>
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
      </div>
      <a href="search.php?intro=promote" class="targeturl"></a>
      <div class="item-lay">
      	<?php $_from = get_cat_promote_goods(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['cat_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['cat_goods']['iteration']++;
?>
        <div class="item-l"> <a href="<?php echo $this->_var['goods']['url']; ?>"> <span class="imgurl"> <img data-original="<?php echo $this->_var['goods']['thumb']; ?>"
                  style="display: inline;" src="<?php echo $this->_var['goods']['thumb']; ?>"> </span>
          <p> <span><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></span> </p>
          <p> <span><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span> </p>
          </a> </div>
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="topic">
      <div class="bg">
	  <?php $_from = get_advlist_by_id(4); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_ad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_ad']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_ad']['iteration']++;
?>
        <div class="imgurl"> <img data-original="./../<?php echo $this->_var['ad']['image']; ?>" style="display: inline;" src="./../<?php echo $this->_var['ad']['image']; ?>"> </div>
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
      </div>
      <a href="search.php?intro=new" class="targeturl"></a>
      <div class="item-lay">
      	<?php $_from = get_cat_new_goods(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['cat_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['cat_goods']['iteration']++;
?>
        <div class="item-l"> <a href="<?php echo $this->_var['goods']['url']; ?>"> <span class="imgurl"> <img data-original="<?php echo $this->_var['goods']['thumb']; ?>"
                  style="display: inline;" src="<?php echo $this->_var['goods']['thumb']; ?>"> </span>
          <p> <span><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></span> </p>
          <p> <span><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span> </p>
          </a> </div>
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       
      </div>
    </div>
  </div>
  
  <div class="card card-list">
    <div class="col1 more_top"> <a href="search.php?intro=hot">
      <span> 热销产品 </span> </a> </div>
    <div class="col3">
    <?php $_from = get_cat_hot_goods(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['cat_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['cat_goods']['iteration']++;
?>
      <div class="row1"> <a href="<?php echo $this->_var['goods']['url']; ?>"> <span class="imgurl"> <img data-original="<?php echo $this->_var['goods']['thumb']; ?>" style="display: inline;" src="<?php echo $this->_var['goods']['thumb']; ?>"> </span> <span class="p"> <span><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></span> </span> <span class="p"> <span><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span> </span> </a> </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
    </div>
    <div style="clear:both;"></div>
    <div class="col1 more"> <a href="search.php?intro=hot">
      <span> 查看更多&nbsp;&gt;&gt; </span> </a> </div>
  </div>
  
  
    <div class="card card-list">
    <div class="col1 more_top"> <a href="search.php?intro=best">
      <span> 推荐产品 </span> </a> </div>
    <div class="col3">
    	<?php $_from = get_cat_best_goods(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['cat_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['cat_goods']['iteration']++;
?>
      <div class="row1"> <a href="<?php echo $this->_var['goods']['url']; ?>"> <span class="imgurl"> <img data-original="<?php echo $this->_var['goods']['thumb']; ?>" style="display: inline;" src="<?php echo $this->_var['goods']['thumb']; ?>"> </span> <span class="p"> <span><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></span> </span> <span class="p"> <span><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span> </span> </a> </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
    <div style="clear:both;"></div>
    <div class="col1 more"> <a href="search.php?intro=best">
      <span> 查看更多&nbsp;&gt;&gt; </span> </a> </div>
  </div>

  
</div>



		<?php echo $this->fetch('library/page_footer.lbi'); ?>

</body>
</html>