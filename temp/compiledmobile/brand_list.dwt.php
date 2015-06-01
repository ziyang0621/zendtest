
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
      <h3><?php echo $this->_var['lang']['all_brand']; ?></h3>
    </div>
    <div class="nav">
      <ul>
        <li class="cart"> <a href="flow.php">购物车</a> <span style="display:none" id="ShoppingCartNum"></span> </li>
      </ul>
    </div>
  </div>
  
  <div class="tab" style="margin-bottom:20px">
    
    
	
    <div class="productlist clearfix">
	<?php $_from = $this->_var['brand_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand_data');$this->_foreach['brand_list_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brand_list_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['brand_data']):
        $this->_foreach['brand_list_foreach']['iteration']++;
?>
      <div class="srp j_autoResponsive_container m-ks-autoResponsive-container m-animation album" style="opacity: 1;<?php if ($this->_foreach['brand_list']['iteration'] % 2 == 1): ?>margin-right:2%;<?php endif; ?>">
        <div data-id="36511624513" class="product">
          <div class="pro-inner">
            <div class="proImg-wrap"> <a  href="<?php echo $this->_var['brand_data']['url']; ?>"><img src="/data/brandlogo/<?php echo $this->_var['brand_data']['brand_logo']; ?>"></a> </div>
            <div class="proInfo-wrap">
              <div class="proTitle"> <a href="<?php echo $this->_var['brand_data']['url']; ?>"><span><?php echo $this->_var['brand_data']['brand_name']; ?></span>(<?php echo $this->_var['brand_data']['goods_num']; ?>)</a> </div>
              <div class="proPrice">&nbsp;</div>
            </div>
          </div>
        </div>
      </div>
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
      
    </div>
  </div>
</div>


<?php echo $this->fetch('library/page_footer.lbi'); ?>

<script type="text/javascript">
		var global_loading=document.getElementById("global_loading");
		global_loading.parentNode.removeChild(global_loading);
</script>
</body>
</html>
