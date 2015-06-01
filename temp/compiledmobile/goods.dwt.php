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
<link rel='stylesheet' type='text/css' href='themes/default/css/product-intro.css' />
<link href="themes/default/css/reset.css" rel="stylesheet" type="text/css" />
<link href="themes/default/css/head.css" rel="stylesheet" type="text/css" />
<link href="themes/default/css/foot.css" rel="stylesheet" type="text/css" />
<link href="themes/default/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="themes/default/css/xmapp.css"/>
<script src="themes/default/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="themes/default/js/jquery.json.js" type="text/javascript"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
<script type="text/javascript" src="themes/default/js/fbi.js"></script>
<script type="text/javascript">
	var _hmt=_hmt||[];(function(){var e=document.createElement("script");
	var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)})();
	document.write('<div id="global_loading" style="width: 100%;height: 100%;position: fixed;top: 0;left: 0;background-color: #eee;z-index:999"><div style="width: 100px;height: 75px;margin:auto;top:50%;position:relative"><span style="display:block;float:left;width:32px;height:32px;background:url(themes/default/images/spacer.gif);margin-top:-5px;"></span>&nbsp;&nbsp;加载中...</div></div>');
	</script>
</head>
<body>
<div class="header_03">
  <div class="back"> <a href="index.php" class="arrow"></a> </div>
  <div style="" class="tit">
    <h3><?php echo $this->_var['goods']['goods_style_name']; ?></h3>
  </div>
  <div class="nav">
    <ul>
      <li class="cart"> <a href="flow.php">购物车</a> <span style="display:none" id="ShoppingCartNum"></span> </li>
    </ul>
  </div>
</div>
<section class="sp">
  <div class="product-intro">
    <div id="cont_show">
      
      <script type="text/javascript">
var $$ = function (obj) {
    if (obj != null && obj != undefined && obj.toString().length > 0) {
        if (obj[0] == '#') {
            return document.getElementById(obj.substr(1, obj.length - 1));
        }
    }
}
function chgNum(a) {
    var number = $$("#number");
    var p = parseInt(number.value);
    if (a == 1) {
        if (p < 1038) number.value = ++p;
    }
    else {
        if (p > 1) number.value = --p;
    }
}
</script>
      
      <div class="show">
        <div class="icon"> <a class="no-collect" href="javascript:;"  onClick="alert('正在加载,请稍候...');" id='goods_collect'></a> </div>
        <div class="flexslider">
          <ul class="slides">
            <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['no']['iteration']++;
?> 
            <li <?php if ($this->_foreach['no']['iteration'] > 1): ?>style="display:none"<?php endif; ?>><img src="<?php echo $this->_var['picture']['img_url']; ?>" /></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
        </div>
      </div>
	  <link href="themes/default/css/flexslider.css" rel="stylesheet" type="text/css" />
	  <script type="text/javascript" src="themes/default/js/jquery.flexslider-min.js"></script>
      <script type="text/javascript">
	
		$('.flexslider').flexslider({
			 animation: "slide",
			 slideDirection: "horizontal"
		 });
		
	
	</script>
      <div class="pro-info">
        <p class="pro-name"><strong><?php echo $this->_var['goods']['goods_style_name']; ?></strong></br>
          <?php echo $this->_var['goods']['goods_brief']; ?></p>
        <div class="price clearfix">
          <p class="jx-price">售价&nbsp;&nbsp;&nbsp;<strong><?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price_formated']; ?><?php endif; ?></strong></p>
          <p class="market-price"><strong><?php echo $this->_var['goods']['market_price']; ?></strong></p>
        </div>
		<?php if ($this->_var['goods']['goods_brand'] != "" && $this->_var['cfg']['show_brand']): ?>
        <div class="brand clearfix">
          <p class="name">品牌</p>
          <p class="detial"><a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a></p>
        </div>
		<?php endif; ?>

		<div class='goods_number clearfix'>
          <p class="name">人气</p>
          <span id="msg"><?php echo $this->_var['goods']['click_count']; ?> </span>
		</div>
		<style>
		    .catt{width:85%;height:auto;overflow:hidden;padding-bottom:5px;}
			.catt a{border: #7E7E7E 1px solid;  text-align: center; background-color: #fff; margin-
			left:0px;margin-top:0px;padding-left: 10px;padding-right: 10px;display: block; white-space: nowrap;
			color:#000; text-decoration:none; float:left; margin-right:5px}
			.catt a:hover {border:#ED0036 1px solid;}
			.catt a:focus {outline-style:none;}
			.catt .cattsel {border:#ED0036 1px solid; background: url("themes/default/images/com/test.gif") no-repeat
			bottom right; background-color:#FFFFFF}
			.catt .cattsel a:hover {border: #ED0036 1px solid;background: url("themes/default/images/com/test.gif") no-
			repeat bottom right;}
		 </style>
		 
        <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
		<?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
		<div class='goods_number clearfix'>
          <p class="name"><?php echo $this->_var['spec']['name']; ?></p>
          <div class="catt">
			<?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
			<a <?php if ($this->_var['key'] == 0): ?>class="cattsel"<?php endif; ?> onclick="changeAtt(this,<?php echo $this->_var['value']['id']; ?>,<?php echo $this->_var['goods']['goods_id']; ?>)"
			href="javascript:;" name="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?><input style="display:none"
			id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>
			checked<?php endif; ?> /></a>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</div>
		</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
		  <script language="javascript">
		  
		  function changeAtt(t,a,goods_id) {
			t.lastChild.checked='checked';
			for (var i = 0; i<t.parentNode.childNodes.length;i++) {
			if (t.parentNode.childNodes[i].className == 'cattsel') {
			t.parentNode.childNodes[i].className = '';
			}
			}
			t.className = "cattsel";

			changePrice();
			}
		  </script>
          <div class="goods_number clearfix">
            <p class="name">数量</p>
            <div class="addForm">
              <input type="button" value="-" class="btn" onClick="chgNum(-1);changePrice();" />
              <input type="text" id='number' name="number" onBlur="changePrice()" value="1" class="text"/>
              <input type="button" value="+" class="btn" onClick="chgNum(1);changePrice();" />
            </div>
            
          </div>
          
          <div class='goods_number clearfix'>
            <p class="detial clearfix">购买可使用：<font class="red"><?php echo $this->_var['goods']['integral']; ?> <?php echo $this->_var['points_name']; ?></font></p>
          </div>
          
          
          
          <div class='goods_number clearfix'>
            <p class="name">商品总价:</p>
            <span class="shopcount" id="ECS_GOODS_AMOUNT"></span> </div>
        </form>
        <div class="div_but1 clearfix" id='btn1' style="display: ;">
          <div class="buybut" onClick="alert('正在加载,请稍候...');"  id="goods_addToCart_1"> <a class='ljgm' name="goods_buy" href="javascript:void()"> <i></i> 立即购买 </a> </div>
          <div class="cartbut" onClick="alert('正在加载,请稍候...');"  id="goods_addToCart_2"> <a class='add' name="goods_cart" href="javascript:void()"> <i></i> 加入购物车 </a> </div>
        </div>
		
      <div id="spinner2" class="spinner" style="left: 43%; position: absolute; height: 120px; transform-origin: 0px 0px 0px; opacity: 1; transform: scale(1, 1); display: none;"></div>
      
        <div class="div_but1 clearfix" id='btn2'  style="display: none;">
          <div class="buy"> <a class='ljgm1' name="goods_buy" href="javascript:void()"> <i></i> 立即购买 </a> </div>
          <div class="cart"> <a class='add1' name="goods_cart" href="javascript:void()"> <i></i> 加入购物车 </a> </div>
        </div>
      </div>
      <div class="active">
        <p class="tip"></p>
      </div>
      <div class="pro-detial">
        <div class="judge clearfix"> <a href="goods.php?act=view_comment&id=<?php echo $this->_var['goods']['goods_id']; ?>"><span class="m-ratescore"><i style="WIDTH: 100%">100%</i></span> <span class="all"><strong><?php 
$k = array (
  'name' => 'goods_comment',
  'id' => $this->_var['goods']['goods_id'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></strong>人评论</span> <span class="nice"><strong>100%</strong>好评</span></a> <span class="arrow"></span> </div>
        <div class="pro-intro clearfix"> <a href="goods.php?act=view_img&id=<?php echo $this->_var['goods']['goods_id']; ?>"><span>商品详细介绍</span></a> <span class="arrow"></span> </div>
      </div>
      
<div class="recommend">
	<h2>相关推荐<span></span></h2>
	<a class="scroll-page pre-page" style="background-position: -2px -43px;float:left;left:10px;" id="prev" onclick="myScroll.scrollToPage('prev', 0);return false"></a>
	<a class="scroll-page next-page" style="background-position: -305px -42px;float:right;right:10px;" id="next" onclick="myScroll.scrollToPage('next', 0);return false"></a>
	<div class="item-container" id="item-container">
		<div class="item-list" id="item_list">
		<ul>
        <?php $_from = $this->_var['related_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'releated_goods_data');$this->_foreach['promotion_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promotion_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['releated_goods_data']):
        $this->_foreach['promotion_foreach']['iteration']++;
?> 
			<li>
			<a href="<?php echo $this->_var['goods']['url']; ?>" class="item-pic"><img src="<?php echo $this->_var['releated_goods_data']['goods_thumb']; ?>" /></a>
            <p class="price"><?php if ($this->_var['releated_goods_data']['promote_price'] != 0): ?><?php echo $this->_var['releated_goods_data']['formated_promote_price']; ?><?php else: ?><?php echo $this->_var['releated_goods_data']['shop_price']; ?><?php endif; ?> </p>
			</li>
		
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
		</div>
	</div>
</div>

      
      
      <script type="text/javascript" src="themes/default/js/iscroll.js"></script>
      <script type="text/javascript">
	var myScroll;
	
		var w = $('.item-list ul li').length*100+'px';
		$('.item-list').width(w);
 		 myScroll = new iScroll('item-container', { 
 			snap: true,
 			hScrollbar: false,
 			vScrollbar: false,
 			momentum:false			 
 		});
	
</script>
    </div>
  </div>
</section>
<script type="text/javascript">
		var global_loading=document.getElementById("global_loading");
		global_loading.parentNode.removeChild(global_loading);
</script>
<script type="text/javascript" src="themes/default/js/jquery.json.min.js"></script>
<script type="text/javascript" src="themes/default/js/util.js"></script>

<style>
.cart-pop{position:absolute;left:30px;bottom:1px;width:228px;background-color:rgba(0,0,0,.65);color:#fff;border-radius:2px;border:1px solid #3d3c3b;box-shadow:1px 1px 1px rgba(0,0,0,.5);}.cart-pop .ico-succ{padding:11px 15px 9px 52px;background:url(themes/default/images/com/icon_suc.png) 11px 20px no-repeat;border-bottom:1px solid rgba(130,128,127,.5);text-shadow:0 1px 0 rgba(0,0,0,1);}.cart-pop .att-succ{font-size:16px;}.cart-pop .cart-succ{font-size:14px;}.cart-pop .ico-succ span{display:block;}.cart-pop .cp-lnk{display:table;width:100%;}.cart-pop .cp-lnk a{display:table-cell;width:50%;padding:7px 0 9px;font-size:14px;color:#fff;text-shadow:0 1px 0 rgba(0,0,0,1);text-align:center;}.cart-pop .bar{height:17px;margin-top:4px;background:rgba(130,128,127,.65);}
</style>
<div class="cart-pop" id="user_cart" style="display:none;position:absolute;bottom:50%;z-index:9999;">
  <div class="ico-succ" > <span class="att-succ">添加成功！</span> <span class="cart-succ">商品已成功加入购物车</span> </div>
  <div class="cp-lnk" > <a href="javascript:void(0)" onClick="$('#user_cart').hide();$('#user_cart_mask').hide();" id="stroll">再逛逛</a> <a  id="goCart" href="javascript:;" onClick="$('#user_cart').hide();$('#user_cart_mask').hide();location.href = 'flow.php';"><span class="bar"></span>去购物车</a> </div>
</div>
<div class="cart-pop" id="user_collect" style="display:none;position:absolute;bottom:50%;z-index:9999;">
  <div class="ico-succ" > <span class="cart-succ" id="user_collect_title"></span> </div>
  <div class="cp-lnk" > <a href="javascript:void(0)" onClick="$('#user_collect').hide();$('#user_collect_mask').hide();" id="stroll">关闭</a></div>
</div>
<script type="text/javascript">
    $('#goods_collect').attr('onclick', '');
	$('#goods_collect').click(function(){
		collect(<?php echo $this->_var['goods']['goods_id']; ?>);
	});
	$('#goods_addToCart_1').attr('onclick', '');
	$('#goods_addToCart_1').click(function(){
		addToCart(<?php echo $this->_var['goods']['goods_id']; ?>, true);
	});
	$('#goods_addToCart_2').attr('onclick', '');
	$('#goods_addToCart_2').click(function(){
		addToCart(<?php echo $this->_var['goods']['goods_id']; ?>, false);
	});

</script>

<script type="text/javascript">
var addto_cart_success = "该商品已添加到购物车。";
var goods_id = <?php echo $this->_var['goods']['goods_id']; ?>;
var goodsattr_style = 1;
var goodsId = <?php echo $this->_var['goods']['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;
onload = function(){
  changePrice();
  try {onload_leftTime();}
  catch (e) {}
}
/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}
/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;
    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}
/*
*选择信息处理
*/
function changeP(b, c) {
	var frm=document.forms['ECS_FORMBUY'];
	var cur_id="";
    document.getElementById('spec_value_' + c).checked=true;
	document.getElementById('url_' + c).className="selected";
	for (var i = 0; i < frm.elements[b].length; i++) {
		cur_id=frm.elements[b][i].id.substr(11);
        document.getElementById('url_' + cur_id).className="";
		if (frm.elements[b][i].checked)
		{
		   document.getElementById('url_' + c).className="selected";
		}
    }
	changePrice();
}
</script>


<?php echo $this->fetch('library/page_footer.lbi'); ?>
<script language="javascript">
$('#pc_nav').attr('href', './../goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>');
</script>

</body>
</html>
