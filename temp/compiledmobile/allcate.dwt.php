
<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8" />
<title>类目导航-<?php echo $this->_var['page_title']; ?></title>
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
      <h3>分类浏览</h3>
    </div>
    <div class="nav">
      <ul>
        <li class="cart"> <a href="flow.php">购物车</a> <span style="display:none" id="ShoppingCartNum"></span> </li>
      </ul>
    </div>
  </div>
  
  <div class="tab">
    
    
    <div class="category">
      <ul>
	  <?php $_from = get_categories_tree(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['no']['iteration']++;
?>
        <li class="clearfix">
          <div class="info">
            <p class="name"><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></p>
            <div class="data"> <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['no1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no1']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['no1']['iteration']++;
?><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </div>
          </div>
        </li>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		
      </ul>
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
