
<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8" />
<title><?php echo $this->_var['page_title']; ?>触屏版</title>
<meta content="telephone=no" name="format-detection" />
<link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="viewport" content="width=320, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="themes/default/css/reset.css" rel="stylesheet" type="text/css" />
<link href="themes/default/css/search_new.css" rel="stylesheet" type="text/css" />
<link href="themes/default/css/foot.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="themes/default/css/xmapp.css"/>
<script type="text/javascript" src="themes/default/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="themes/default/js/search.js"></script>
<script type="text/javascript" src="themes/default/js/iscroll.js"></script>
<script type="text/javascript" src="themes/default/js/jquery.lazyload.js"></script>
<script type="text/javascript" src="themes/default/js/fbi.js"></script>
<script type="text/javascript">
    jQuery(document).ready(
    function($){
		$(".productlist img").lazyload({
         placeholder : "themes/default/images/img_bg4.png",
         effect      : "fadeIn"
    });
    });
    </script>
</head>
<script type="text/javascript">
	document.write('<div id="global_loading" style="width: 100%;height: 100%;position: fixed;top: 0;left: 0;background-color: #eee;z-index:999"><div style="width: 100px;height: 75px;margin:auto;top:50%;position:relative"><span style="display:block;float:left;width:32px;height:32px;background:url(themes/default/images/spacer.gif);margin-top:-5px;"></span>&nbsp;&nbsp;加载中...</div></div>');
</script>
<body>
<div class="search">
  <div class="header_03">
    <div class="back"> <a href="index.php" class="arrow"></a> </div>
    <div style="" class="tit">
      <h3><?php if ($this->_var['intromode'] == 'best'): ?>
         <span><?php echo $this->_var['lang']['best_goods']; ?></span>
         <?php elseif ($this->_var['intromode'] == 'new'): ?>
         <span><?php echo $this->_var['lang']['new_goods']; ?></span>
         <?php elseif ($this->_var['intromode'] == 'hot'): ?>
         <span><?php echo $this->_var['lang']['hot_goods']; ?></span>
         <?php elseif ($this->_var['intromode'] == 'promotion'): ?>
         <span><?php echo $this->_var['lang']['promotion_goods']; ?></span>
         <?php else: ?>
         <span><?php echo $this->_var['lang']['search_result']; ?></span>
         <?php endif; ?></h3>
    </div>
    <div class="nav">
      <ul>
        <li class="cart"> <a href="flow.php">购物车</a> <span style="display:none" id="ShoppingCartNum"></span> </li>
      </ul>
    </div>
  </div>
  
  <div class="tab">
    <script language="javascript">
function search_order(sort){
	listform.sort.value = sort;
	listform.order.value = <?php if ($this->_var['pager']['search']['order'] == 'ASC'): ?>'DESC'<?php else: ?>'ASC'<?php endif; ?>;
	listform.submit();
}

</script>
        <form action="search.php" method="post" class="sort" name="listform" id="form">
         
              <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
              <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
              <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>

                <?php if ($this->_var['key'] == 'keywords'): ?>
                  <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo urldecode($this->_var['item']); ?>" />
                <?php else: ?>
                  <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item']; ?>" />
                <?php endif; ?>

              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </form>


    <div class="paixu">
      <div class="tab"> 
	  <a class="time <?php if ($this->_var['pager']['search']['sort'] == 'goods_id'): ?>on<?php endif; ?>" href="javascript:search_order('goods_id');">上市<?php if ($this->_var['pager']['search']['sort'] == 'goods_id' && $this->_var['pager']['search']['order'] == 'DESC'): ?>↓<?php else: ?>↑<?php endif; ?></a> 
	  <a class="price <?php if ($this->_var['pager']['search']['sort'] == 'shop_price'): ?>on<?php endif; ?>" href="javascript:search_order('shop_price');">价格<?php if ($this->_var['pager']['search']['sort'] == 'shop_price' && $this->_var['pager']['search']['order'] == 'DESC'): ?>↓<?php else: ?>↑<?php endif; ?></a> 
	  <a class="click <?php if ($this->_var['pager']['search']['sort'] == 'click_count'): ?>on<?php endif; ?>" href="javascript:search_order('click_count');">人气<?php if ($this->_var['pager']['search']['sort'] == 'click_count' && $this->_var['pager']['search']['order'] == 'DESC'): ?>↓<?php else: ?>↑<?php endif; ?></a> 
	  </div>
    </div>

    
    <div class="productlist clearfix">
	<?php if ($this->_var['goods_list']): ?>
	<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?> 
      <?php if ($this->_var['goods']['goods_id']): ?>
      <div class="srp j_autoResponsive_container m-ks-autoResponsive-container m-animation album" style="opacity: 1;<?php if ($this->_foreach['goods_list']['iteration'] % 2 == 1): ?>margin-right:2%;<?php endif; ?>">
        <div data-id="36511624513" class="product">
          <div class="pro-inner">
            <div class="proImg-wrap"> <a  href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_img']; ?>"></a> </div>
            <div class="proInfo-wrap">
              <div class="proTitle"> <a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['goods_name']; ?></a> </div>
              <div class="proPrice"> <em><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></em> </div>
            </div>
          </div>
        </div>
      </div>
	  <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php else: ?> 
	  
	  <?php endif; ?> 
      
    </div>
    <div id="pager" class="page clearfix">
	<?php if ($this->_var['pager']['page_prev']): ?>
	<a href="<?php echo $this->_var['pager']['page_prev']; ?>" class="perv_page">上一页</a>
	<?php else: ?>
	<a class="perv_page_no">上一页</a>
	<?php endif; ?> 
	<span class="cur_page"><?php echo $this->_var['pager']['page']; ?>/<?php echo $this->_var['pager']['page_count']; ?></span> 
	<?php if ($this->_var['pager']['page_next']): ?>
	<a href="<?php echo $this->_var['pager']['page_next']; ?>" class="next_page"><span></span>下一页</a>
	<?php else: ?>
    <a class="next_page_no">下一页</a> 
    <?php endif; ?>
	<br/>
    </div>
    
<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script>
<script type="text/javascript">
window.onload = function()
{
  //Compare.init();
  //fixpng();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
  </div>
</div>


<?php echo $this->fetch('library/page_footer.lbi'); ?>

<script type="text/javascript">
		var global_loading=document.getElementById("global_loading");
		global_loading.parentNode.removeChild(global_loading);
</script>
</body>
</html>
