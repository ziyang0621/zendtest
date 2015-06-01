<?php exit;?>a:3:{s:8:"template";a:5:{i:0;s:58:"E:/ECCS/ecshop_xiaomi2014/themes/xiaomi/group_buy_list.dwt";i:1;s:63:"E:/ECCS/ecshop_xiaomi2014/themes/xiaomi/library/page_header.lbi";i:2;s:59:"E:/ECCS/ecshop_xiaomi2014/themes/xiaomi/library/ur_here.lbi";i:3;s:58:"E:/ECCS/ecshop_xiaomi2014/themes/xiaomi/library/pages2.lbi";i:4;s:63:"E:/ECCS/ecshop_xiaomi2014/themes/xiaomi/library/page_footer.lbi";}s:7:"expires";i:1413733292;s:8:"maketime";i:1413729692;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>团购商品_ecshop小米2014旗舰版 PHP源码吧</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/xiaomi/style.css" rel="stylesheet" type="text/css" />
<link rel='stylesheet' type='text/css' href='themes/xiaomi/css/group.css'>
<style>
.w950 .block{width:1235px;margin:0 auto;padding:0;}
</style>
<script type="text/javascript" src="js/common.js"></script></head>
<body>
<link rel="stylesheet" href="themes/xiaomi/css/base.min.css?2014050501" />
<script src="themes/xiaomi/js/jquery.js"></script>
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<script type="text/javascript">
var isWidescreen=screen.width<1200;
if (isWidescreen){
document.getElementsByTagName("body")[0].className="w950";
document.write("<link rel='stylesheet' type='text/css' href='themes/xiaomi/css/980base.css'>");
}
</script>
<div class="site-topbar">
  <div class="container">
    <div class="topbar-nav">
            <a href="#" 
            >小米网</a>
            <span class="sep">|</span>
                  <a href="#" 
            >MIUI</a>
            <span class="sep">|</span>
                  <a href="#" 
            >米聊</a>
            <span class="sep">|</span>
                  <a href="#" 
            >游戏</a>
            <span class="sep">|</span>
                  <a href="#" 
            >多看阅读</a>
            <span class="sep">|</span>
                  <a href="mobile" 
            >小米网移动版</a>
                </div>
    <div class="topbar-info J_userInfo"> 554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca </div>
  </div>
</div>
<div class="site-header container" id="site_header">
  <div class="site-logo"> <a class="logo" href="index.php"><img src="themes/xiaomi/images/logo.gif" /> </a> </div>
  <div class="header-info">
    <div class="search-section">
      <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("请输入搜索关键词！");
            return false;
        }
    }
    -->
    
    </script>
	<script language="javascript">
	function drop_cart_goods(id)
	{
		$.ajax({
						type:"POST",
						url:"flow.php?step=drop_cart_goods&id=" + id,
						cache:false,
						dataType:'json',     //接受数据格式
						data:'',
						success:function(result){
							$('#J_miniCartList').html(result.message);
							$('.J_cartNum').html('(' + result.goods_num + ')');
						}
					});
	}
	
	</script>
      <form id="J_searchForm" class="search-form clearfix" action="search.php" method="get" onSubmit="return checkSearchForm()" >
        <input class="search-text" type="search" name="keywords" id="keyword" autocomplete="off" value="" placeholder="搜索您需要的商品" />
        <input type="submit" class="search-btn iconfont" value="&#xe630;" />
        <!--[if IE 6]><div class="ie6-fix"></div><![endif]-->
        <div class="hot-words">  <a href="search.php?keywords=%E5%B0%8F%E7%B1%B3%E6%89%8B%E6%9C%BA3">小米手机3</a>  <a href="search.php?keywords=%E5%B0%8F%E7%B1%B3%E7%94%B5%E8%A7%86">小米电视</a>  <a href="search.php?keywords=PHP%E6%BA%90%E7%A0%81%E5%90%A7">PHP源码吧</a>  </div>
      </form>
    </div>
    <div class="cart-section"> <a id="J_miniCart" class="mini-cart" href="flow.php"><i class="iconfont">&#xe609;</i>购物车<span class="mini-cart-num J_cartNum">(554fcae493e564ee0dc75bdf2ebf94cacart_count|a:1:{s:4:"name";s:10:"cart_count";}554fcae493e564ee0dc75bdf2ebf94ca)</span></a>
      <div id="J_miniCartList" class="mini-cart-list">
        		554fcae493e564ee0dc75bdf2ebf94cacart_data|a:1:{s:4:"name";s:9:"cart_data";}554fcae493e564ee0dc75bdf2ebf94ca      </div>
    </div>
  </div>
  <div class="header-nav clearfix">
    <div id="J_categoryContainer" class="nav-category"> <a class="btn-category-list" href="catalog.php">全部商品分类</a>
      <div class="nav-category-section" style="display: none;">
        <ul class="nav-category-list">
          		  <li class="nav-category-item ">
            <div class="nav-category-content"><a class="title" href="category.php?id=1">小米手机</a>
              <div class="links">
			  			  			  <a href="category.php?id=10">小米手机1</a>
			  			  			  			  <a href="category.php?id=11">小米手机1s</a>
			  			  			  			  			  </div>
			                <div class="nav-category-children">
                <ul class="children-list">
				                  <li><a href="category.php?id=10"><img src="themes/xiaomi/images/index/cat_10.jpg" alt=""><span class="text">小米手机1</span></a></li>
				                    <li><a href="category.php?id=11"><img src="themes/xiaomi/images/index/cat_11.jpg" alt=""><span class="text">小米手机1s</span></a></li>
				                    <li><a href="category.php?id=12"><img src="themes/xiaomi/images/index/cat_12.jpg" alt=""><span class="text">小米手机2</span></a></li>
				                  </ul>
                <div class="children-special-section">
                  <h4>热门商品</h4>
                  <ul>
				                      <li><a href="goods.php?id=5">冰淇淋色后盖（黄）-... ￥39</a></li>
                                      <li><a href="goods.php?id=4">鳄鱼纹真皮后盖（豹纹... ￥98</a></li>
                                    </ul>
                </div>
              </div>
			              </div>
          </li>
		  		  <li class="nav-category-item ">
            <div class="nav-category-content"><a class="title" href="category.php?id=2">小米电视与盒子</a>
              <div class="links">
			  			  			  <a href="category.php?id=13">小米电视</a>
			  			  			  			  <a href="category.php?id=14">新小米盒子</a>
			  			  			  			  			  </div>
			                <div class="nav-category-children">
                <ul class="children-list">
				                  <li><a href="category.php?id=13"><img src="themes/xiaomi/images/index/cat_13.jpg" alt=""><span class="text">小米电视</span></a></li>
				                    <li><a href="category.php?id=14"><img src="themes/xiaomi/images/index/cat_14.jpg" alt=""><span class="text">新小米盒子</span></a></li>
				                    <li><a href="category.php?id=15"><img src="themes/xiaomi/images/index/cat_15.jpg" alt=""><span class="text">盒子配件</span></a></li>
				                  </ul>
                <div class="children-special-section">
                  <h4>热门商品</h4>
                  <ul>
				                    </ul>
                </div>
              </div>
			              </div>
          </li>
		  		  <li class="nav-category-item ">
            <div class="nav-category-content"><a class="title" href="category.php?id=3">手机优惠套装</a>
              <div class="links">
			  			  			  <a href="category.php?id=16">小米2/2S</a>
			  			  			  			  <a href="category.php?id=17">小米2A</a>
			  			  			  			  			  			  			  </div>
			                <div class="nav-category-children">
                <ul class="children-list">
				                  <li><a href="category.php?id=16"><img src="themes/xiaomi/images/index/cat_16.jpg" alt=""><span class="text">小米2/2S</span></a></li>
				                    <li><a href="category.php?id=17"><img src="themes/xiaomi/images/index/cat_17.jpg" alt=""><span class="text">小米2A</span></a></li>
				                    <li><a href="category.php?id=18"><img src="themes/xiaomi/images/index/cat_18.jpg" alt=""><span class="text">小米1/1S</span></a></li>
				                    <li><a href="category.php?id=19"><img src="themes/xiaomi/images/index/cat_19.jpg" alt=""><span class="text">红米</span></a></li>
				                  </ul>
                <div class="children-special-section">
                  <h4>热门商品</h4>
                  <ul>
				                    </ul>
                </div>
              </div>
			              </div>
          </li>
		  		  <li class="nav-category-item ">
            <div class="nav-category-content"><a class="title" href="category.php?id=4">按机型选配件</a>
              <div class="links">
			  			  			  <a href="category.php?id=20">小米2/2S配件</a>
			  			  			  			  <a href="category.php?id=21">小米2A配件</a>
			  			  			  			  			  			  			  </div>
			                <div class="nav-category-children">
                <ul class="children-list">
				                  <li><a href="category.php?id=20"><img src="themes/xiaomi/images/index/cat_20.jpg" alt=""><span class="text">小米2/2S配件</span></a></li>
				                    <li><a href="category.php?id=21"><img src="themes/xiaomi/images/index/cat_21.jpg" alt=""><span class="text">小米2A配件</span></a></li>
				                    <li><a href="category.php?id=22"><img src="themes/xiaomi/images/index/cat_22.jpg" alt=""><span class="text">小米1/1S配件</span></a></li>
				                    <li><a href="category.php?id=23"><img src="themes/xiaomi/images/index/cat_23.jpg" alt=""><span class="text">红米配件</span></a></li>
				                  </ul>
                <div class="children-special-section">
                  <h4>热门商品</h4>
                  <ul>
				                    </ul>
                </div>
              </div>
			              </div>
          </li>
		  		  <li class="nav-category-item ">
            <div class="nav-category-content"><a class="title" href="category.php?id=5">配件</a>
              <div class="links">
			  			  </div>
			              </div>
          </li>
		  		  <li class="nav-category-item ">
            <div class="nav-category-content"><a class="title" href="category.php?id=6">手机外壳</a>
              <div class="links">
			  			  </div>
			              </div>
          </li>
		  		  <li class="nav-category-item ">
            <div class="nav-category-content"><a class="title" href="category.php?id=7">软件</a>
              <div class="links">
			  			  </div>
			              </div>
          </li>
		  		  <li class="nav-category-item ">
            <div class="nav-category-content"><a class="title" href="category.php?id=9">特卖商品</a>
              <div class="links">
			  			  			  <a href="category.php?id=24">每日10点特价秒杀</a>
			  			  			  			  <a href="category.php?id=25">特价配件</a>
			  			  			  </div>
			                <div class="nav-category-children">
                <ul class="children-list">
				                  <li><a href="category.php?id=24"><img src="themes/xiaomi/images/index/cat_24.jpg" alt=""><span class="text">每日10点特价秒杀</span></a></li>
				                    <li><a href="category.php?id=25"><img src="themes/xiaomi/images/index/cat_25.jpg" alt=""><span class="text">特价配件</span></a></li>
				                  </ul>
                <div class="children-special-section">
                  <h4>热门商品</h4>
                  <ul>
				                    </ul>
                </div>
              </div>
			              </div>
          </li>
		  		  <li class="nav-category-item ">
            <div class="nav-category-content"><a class="title" href="category.php?id=26">PHP源码吧</a>
              <div class="links">
			  			  </div>
			              </div>
          </li>
		            
        </ul>
      </div>
    </div>
    <div class="nav-main">
      <ul class="nav-main-list J_menuNavMain clearfix">
        <li class="nav-main-item "> <a  href="index.php"><span class="text">首页</span></a> </li>
                <li class="nav-main-item "> <a  href="category.php?id=1" ><span class="text">小米手机</span><span class="arrow"></span></a> 554fcae493e564ee0dc75bdf2ebf94camenu_goods|a:2:{s:4:"name";s:10:"menu_goods";s:3:"url";s:17:"category.php?id=1";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                <li class="nav-main-item "> <a  href="category.php?id=5" ><span class="text">配件</span><span class="arrow"></span></a> 554fcae493e564ee0dc75bdf2ebf94camenu_goods|a:2:{s:4:"name";s:10:"menu_goods";s:3:"url";s:17:"category.php?id=5";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                <li class="nav-main-item "> <a  href="topic.php?topic_id=1" ><span class="text">专题页</span><span class="arrow"></span></a> 554fcae493e564ee0dc75bdf2ebf94camenu_goods|a:2:{s:4:"name";s:10:"menu_goods";s:3:"url";s:20:"topic.php?topic_id=1";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                <li class="nav-main-item "> <a  href="exchange.php" ><span class="text">积分商城</span><span class="arrow"></span></a> 554fcae493e564ee0dc75bdf2ebf94camenu_goods|a:2:{s:4:"name";s:10:"menu_goods";s:3:"url";s:12:"exchange.php";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                <li class="nav-main-item current"> <a  href="group_buy.php" ><span class="text">团购商品</span><span class="arrow"></span></a> 554fcae493e564ee0dc75bdf2ebf94camenu_goods|a:2:{s:4:"name";s:10:"menu_goods";s:3:"url";s:13:"group_buy.php";}554fcae493e564ee0dc75bdf2ebf94ca </li>
              </ul>
    </div>
  </div>
  <div class="open-buy-info"></div>
</div>
<div class="blank"></div>
<div class="block clearfix">
  <div class="new_pinpai_body" style="background-color:#FFFFFF">
  <div class="new_pinpai_con" style="">
    <div class="location"> 当前位置: <a href=".">首页</a> <code>&gt;</code> <a href="group_buy.php">团购商品</a> </div>
    
      <link rel="stylesheet" href="themes/xiaomi/css/base.min.css?2014050501" />
      <div class="block">
        <div class="tuan">
          <ul class="tuan_list clearfix">
                        <li onmouseover="this.className='cur'" onmouseout="this.className=''" >
              <div>
                <h3> <a target="_blank" href="group_buy.php?act=view&amp;id=5" title="<全国包邮>恒源祥家纺精品高支全棉斜纹印花四件套系列，15款任选。采用优质的棉作为原材料，棉纤维的强度高，透气性好，与皮肤接触不会产生任何刺激，面料柔软细腻不起球。"><全国包邮>恒源祥家纺精品高支全棉斜纹印花四件套系列，15款任选。采用优质的棉作为原材料，棉纤维的强度高，透气性好，与皮肤接触不会产生任何刺激，面料柔软细腻不起球。</a> </h3>
                <a target="_blank" href="group_buy.php?act=view&amp;id=5"> <img src="data/group_img/1399474272849414746.jpg" alt="Adiaos限量T恤（白色L）" style="margin-left:8px;width:277px; height:185px"> </a>
                <p class="buy"><a target="_blank" href="group_buy.php?act=view&amp;id=5">立即抢购</a><s>¥</s>
                                                      20                                                    </p>
                <p class="buy_info"> <span class="first" id="marketPrice">原价:<b>￥36</b></span> <span id="discount">折扣：<b>5.6</b>折</span> <span class="last" id="buyCount">已购买<strong>500</strong>件</span> </p>
              </div>
            </li>
                        <li onmouseover="this.className='cur'" onmouseout="this.className=''" >
              <div>
                <h3> <a target="_blank" href="group_buy.php?act=view&amp;id=3" title="<全国包邮> 翼铂YBTG-063手机数码移动电源13600毫安！拒绝低电量！钢琴烤漆外观！超大容量，绝不虚标！支持双USB充电！进口锂电芯打造！带LED强光手电筒！超安全便携！直供正品保障！智能识别电路！在火车上，在地铁上，在旅途中，在游戏中随时随刻保持满格电量
"><全国包邮> 翼铂YBTG-063手机数码移动电源13600毫安！拒绝低电量！钢琴烤漆外观！超大容量，绝不虚标！支持双USB充电！进口锂电芯打造！带LED强光手电筒！超安全便携！直供正品保障！智能识别电路！在火车上，在地铁上，在旅途中，在游戏中随时随刻保持满格电量
</a> </h3>
                <a target="_blank" href="group_buy.php?act=view&amp;id=3"> <img src="data/group_img/1399474147896074860.jpg" alt="社区帽衫版米兔" style="margin-left:8px;width:277px; height:185px"> </a>
                <p class="buy"><a target="_blank" href="group_buy.php?act=view&amp;id=3">立即抢购</a><s>¥</s>
                                                      10                                                    </p>
                <p class="buy_info"> <span class="first" id="marketPrice">原价:<b>￥22</b></span> <span id="discount">折扣：<b>4.6</b>折</span> <span class="last" id="buyCount">已购买<strong>0</strong>件</span> </p>
              </div>
            </li>
                        <li onmouseover="this.className='cur'" onmouseout="this.className=''" >
              <div>
                <h3> <a target="_blank" href="group_buy.php?act=view&amp;id=4" title="<全国包邮>优衣美2012秋冬新款 韩版修身提臀显瘦大码休闲长裤，保暖加绒VS完美微喇，立体裁剪工艺，2款7色任选，打造你的美腿style！"><全国包邮>优衣美2012秋冬新款 韩版修身提臀显瘦大码休闲长裤，保暖加绒VS完美微喇，立体裁剪工艺，2款7色任选，打造你的美腿style！</a> </h3>
                <a target="_blank" href="group_buy.php?act=view&amp;id=4"> <img src="data/group_img/1399474211007394475.jpg" alt="学院风帆布双肩包（黑）" style="margin-left:8px;width:277px; height:185px"> </a>
                <p class="buy"><a target="_blank" href="group_buy.php?act=view&amp;id=4">立即抢购</a><s>¥</s>
                                                      10                                                    </p>
                <p class="buy_info"> <span class="first" id="marketPrice">原价:<b>￥71</b></span> <span id="discount">折扣：<b>1.4</b>折</span> <span class="last" id="buyCount">已购买<strong>0</strong>件</span> </p>
              </div>
            </li>
                        <li onmouseover="this.className='cur'" onmouseout="this.className=''" class="list_right">
              <div>
                <h3> <a target="_blank" href="group_buy.php?act=view&amp;id=2" title="<全国包邮>丝路宝典二级（四星）和田枣500g*3袋。源自北纬37°水果优生带，自然风干晾晒，肉厚核小，个大均匀，营养丰富，补血养颜，适合各类人群食用。 
"><全国包邮>丝路宝典二级（四星）和田枣500g*3袋。源自北纬37°水果优生带，自然风干晾晒，肉厚核小，个大均匀，营养丰富，补血养颜，适合各类人群食用。 
</a> </h3>
                <a target="_blank" href="group_buy.php?act=view&amp;id=2"> <img src="data/group_img/1399474041824989147.jpg" alt="冰淇淋色后盖（黄）-非NFC" style="margin-left:8px;width:277px; height:185px"> </a>
                <p class="buy"><a target="_blank" href="group_buy.php?act=view&amp;id=2">立即抢购</a><s>¥</s>
                                                      10                                                    </p>
                <p class="buy_info"> <span class="first" id="marketPrice">原价:<b>￥59</b></span> <span id="discount">折扣：<b>1.7</b>折</span> <span class="last" id="buyCount">已购买<strong>300</strong>件</span> </p>
              </div>
            </li>
                        <li onmouseover="this.className='cur'" onmouseout="this.className=''" >
              <div>
                <h3> <a target="_blank" href="group_buy.php?act=view&amp;id=1" title="<全国包邮>杭州果品 新鲜大樱桃 智利空运进口车厘子2斤装，车厘子表面呈暗红色，果实硕大、坚实而多汁，入口甜美果肉细腻。且营养丰富，含铁量特别高，位于各种水果之首，号称 “百果第一枝”。常吃樱桃可改善贫血，美白淡斑，令人美志气好颜色！"><全国包邮>杭州果品 新鲜大樱桃 智利空运进口车厘子2斤装，车厘子表面呈暗红色，果实硕大、坚实而多汁，入口甜美果肉细腻。且营养丰富，含铁量特别高，位于各种水果之首，号称 “百果第一枝”。常吃樱桃可改善贫血，美白淡斑，令人美志气好颜色！</a> </h3>
                <a target="_blank" href="group_buy.php?act=view&amp;id=1"> <img src="data/group_img/1399473878401162596.jpg" alt="双口USB充电器" style="margin-left:8px;width:277px; height:185px"> </a>
                <p class="buy"><a target="_blank" href="group_buy.php?act=view&amp;id=1">立即抢购</a><s>¥</s>
                                                      10                                                    </p>
                <p class="buy_info"> <span class="first" id="marketPrice">原价:<b>￥59</b></span> <span id="discount">折扣：<b>1.7</b>折</span> <span class="last" id="buyCount">已购买<strong>0</strong>件</span> </p>
              </div>
            </li>
                      </ul>
        </div>
        <div class="blank"></div>
         </div>
  
    <div class="clear"></div>
  </div>
</div>
</div>
<div class="blank5"></div>
<div class="site-footer">
  <div class="container">
    <div class="footer-service">
      <ul class="list-service clearfix">
        <li> <a target="_blank"> <i class="iconfont">&#xe63a;</i> <strong>1小时快修服务</strong> <span>小米之家承诺1小时内完成维修</span> </a> </li>
        <li> <a target="_blank"> <i class="iconfont">&#xe638;</i> <strong>7天无理由退货</strong> <span>收到商品7天内无理由退货服务</span> </a> </li>
        <li> <a target="_blank"> <i class="iconfont">&#xe651;</i> <strong>15天免费换货</strong> <span>故障、质量问题免费换新货承诺</span> </a> </li>
        <li> <a target="_blank"> <i class="iconfont">&#xe64d;</i> <strong>满100元包邮</strong> <span>在线支付满百元免邮费（除电视）</span> </a> </li>
        <li> <a target="_blank"> <i class="iconfont">&#xe63b;</i> <strong>451家售后网点</strong> <span>遍布全国31个省市的售后服务点</span> </a> </li>
      </ul>
    </div>
    <div class="footer-links clearfix">
	      <dl class="col-links col-links-first">
        <dt>购物指南</dt>
                  <dd><a href="article.php?id=7" title="购物常见问题">购物常见问题</a></dd>
                  <dd><a href="article.php?id=8" title="订单状态">订单状态</a></dd>
                  <dd><a href="article.php?id=9" title="购物流程">购物流程</a></dd>
              </dl>
	        <dl class="col-links ">
        <dt>支付方式</dt>
                  <dd><a href="article.php?id=10" title="货到付款">货到付款</a></dd>
                  <dd><a href="article.php?id=11" title="配送支付智能查询">配送支付智能查询</a></dd>
                  <dd><a href="article.php?id=12" title="在线支付">在线支付</a></dd>
              </dl>
	        <dl class="col-links ">
        <dt>配送方式</dt>
                  <dd><a href="article.php?id=13" title="配送范围与费用">配送范围与费用</a></dd>
                  <dd><a href="article.php?id=14" title="签收须知">签收须知</a></dd>
                  <dd><a href="article.php?id=15" title="快递送货">快递送货</a></dd>
              </dl>
	        <dl class="col-links ">
        <dt>售后服务</dt>
                  <dd><a href="article.php?id=16" title="退换货流程">退换货流程</a></dd>
                  <dd><a href="article.php?id=17" title="退换货政策">退换货政策</a></dd>
                  <dd><a href="article.php?id=18" title="服务政策">服务政策</a></dd>
              </dl>
	        <dl class="col-links ">
        <dt>关于我们</dt>
                  <dd><a href="article.php?id=22" title="新浪微博">新浪微博</a></dd>
                  <dd><a href="article.php?id=23" title="QQ空间">QQ空间</a></dd>
                  <dd><a href="article.php?id=24" title="官方微信">官方微信</a></dd>
              </dl>
	        
      <div class="col-contact">
        <p class="phone">400-100-5678</p>
        <p>周一至周日 8:00-18:00<br />
          （仅收市话费）</p>
		  
		 		         <a class="btn btn-primary btn-small" href="http://wpa.qq.com/msgrd?V=1&amp;Uin=136349117&amp;Site=ecshop小米2014旗舰版 PHP源码吧http://php8.taobao.com/&amp;Menu=yes" target="_blank">24小时在线客服</a> 
						 		</div>
    </div>
    <div class="footer-info clearfix" style="width:100%">
      <div class="info-text" style="position:relative; text-align:center;width:100%">
        <p>
				<a href="article.php?id=26" >免责条款</a><span class="sep">|</span>				<a href="article.php?id=26" >隐私保护</a><span class="sep">|</span>				<a href="article.php?id=26" >咨询热点 </a><span class="sep">|</span>				<a href="article.php?id=26" >联系我们</a><span class="sep">|</span>				<a href="article.php?id=26" >公司简介</a><span class="sep">|</span>				<a href="article.php?id=26" >批发方案</a><span class="sep">|</span>				<a href="article.php?id=26" >配送方式</a>				</p>
        <p>
		&copy; 2005-2014 ecshop小米2014旗舰版 PHP源码吧http://php8.taobao.com/ 版权所有，并保留所有权利。<br />
		PHP源码吧http://php8.taobao.com/        Tel: 400-100-5678               <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=136349117&amp;Site=ecshop小米2014旗舰版 PHP源码吧http://php8.taobao.com/&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:136349117:4" height="16" border="0" alt="QQ" /> 136349117</a>
                                                                                <br />
  		</p>
      </div>
      
      <div class="info-links" style="text-align:center"> <a target="_blank"><img src="http://p.www.xiaomi.com/zt/12052601/cnnicVerifyseal.png" alt="可信网站" /></a> <a target="_blank"><img alt="诚信网站" src="http://p.www.xiaomi.com/zt/12052601/szfwVerifyseal.gif" /></a> <a target="_blank"><img alt="诚信网站" src="http://p.www.xiaomi.com/zt/12052601/save.jpg" /></a> </div>
    </div>
  </div>
</div>
<script>
        function createurlcdn(url, t) {
            t = t || 5;
            var date = new Date();
            var hour = date.getHours();
            hour = (hour < 10 ? "0" : "") + hour;
            var min = date.getMinutes();
            min = ( parseInt(min / t) < 10 ? "0" : "") + parseInt(min / 5);
            var day = date.getDate();
            day = (day < 10 ? "0" : "") + day;
            var version = day + hour + min;
            document.write('<script src="' + url + '?ver=' + version + 'xiaomi"><\/script>');
        }
        createurlcdn("themes/xiaomi/js/categoryTree.js",5);
    </script>
<script src="themes/xiaomi/js/base.min.js?2014042901"></script>
<script>
        XIAOMI.namespace("GLOBAL_CONFIG,GLOBAL_VAR");
        XIAOMI.GLOBAL_CONFIG = {
            orderSite:"",
            wwwSite:"",
            damiaoSite:"",
            logoutUrl:"",
            quickLoginUrl:"",
            //图片上传路径地址
            uploadUrl:"",
            //图片远程存储地址
            imgSaveUrl:"",
            //评论查询地址
            commentUrl:"",
            //评论Api地址
            commentApiUrl:"",
            //侧边栏数据接口
            sideBarApiUrl:""
        }
        XIAOMI.app.setLoginInfo.orderUrl = XIAOMI.GLOBAL_CONFIG.orderSite + '/user/order';
        XIAOMI.app.setLoginInfo.logoutUrl = XIAOMI.GLOBAL_CONFIG.logoutUrl;
        XIAOMI.app.setLoginInfo.init(XIAOMI.GLOBAL_CONFIG);
        //全站需要直接执行的函数
        jQuery(function ($) {
            var oLogin = new XIAOMI.app.miniLogin();
            oLogin.init();
            // 搜索
            XIAOMI.app.search.init();
            // miniCart
            XIAOMI.app.miniCart.init();
            // 更新miniCart数量
            XIAOMI.app.updateMiniCart();
            // 商品分类导航
            XIAOMI.app.navMenus.init($('.J_menuNavMain'), {
                menuSelector: '.nav-main-item',
                submenuSelector: '.nav-main-children',
                effect: 'toggle',
                triggerEvent: 'hover'
            });
            XIAOMI.app.navCategory.init();
            // 绑定尾部公共事件
            XIAOMI.app.footer.init();
        });
    </script></body>
</html>