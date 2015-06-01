<?php exit;?>a:3:{s:8:"template";a:5:{i:0;s:49:"E:/ECCS/ecshop_xiaomi2014/themes/xiaomi/index.dwt";i:1;s:63:"E:/ECCS/ecshop_xiaomi2014/themes/xiaomi/library/page_header.lbi";i:2;s:64:"E:/ECCS/ecshop_xiaomi2014/themes/xiaomi/library/cat_articles.lbi";i:3;s:61:"E:/ECCS/ecshop_xiaomi2014/themes/xiaomi/library/cat_goods.lbi";i:4;s:63:"E:/ECCS/ecshop_xiaomi2014/themes/xiaomi/library/page_footer.lbi";}s:7:"expires";i:1413733299;s:8:"maketime";i:1413729699;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="ecshop模板_小米2014模板 PHP源码吧http://php8.taobao.com/" />
<meta name="Description" content="ecshop模板_小米2014模板 PHP源码吧http://php8.taobao.com/" />
<title>ecshop小米2014旗舰版 PHP源码吧</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<script src="themes/xiaomi/js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="themes/xiaomi/css/index.min.css?2014050501" />
<script type="text/javascript">
/*<![CDATA[*/
var isCategoryToggled = "toggled";
var isSekillOpen = 1;
var isCommentOpen = 1;
/*]]>*/
</script>
<link rel="alternate" type="application/rss+xml" title="RSS|ecshop小米2014旗舰版 PHP源码吧" href="feed.php" />
</head>
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
        <li class="nav-main-item current"> <a  href="index.php"><span class="text">首页</span></a> </li>
                <li class="nav-main-item "> <a  href="category.php?id=1" ><span class="text">小米手机</span><span class="arrow"></span></a> 554fcae493e564ee0dc75bdf2ebf94camenu_goods|a:2:{s:4:"name";s:10:"menu_goods";s:3:"url";s:17:"category.php?id=1";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                <li class="nav-main-item "> <a  href="category.php?id=5" ><span class="text">配件</span><span class="arrow"></span></a> 554fcae493e564ee0dc75bdf2ebf94camenu_goods|a:2:{s:4:"name";s:10:"menu_goods";s:3:"url";s:17:"category.php?id=5";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                <li class="nav-main-item "> <a  href="topic.php?topic_id=1" ><span class="text">专题页</span><span class="arrow"></span></a> 554fcae493e564ee0dc75bdf2ebf94camenu_goods|a:2:{s:4:"name";s:10:"menu_goods";s:3:"url";s:20:"topic.php?topic_id=1";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                <li class="nav-main-item "> <a  href="exchange.php" ><span class="text">积分商城</span><span class="arrow"></span></a> 554fcae493e564ee0dc75bdf2ebf94camenu_goods|a:2:{s:4:"name";s:10:"menu_goods";s:3:"url";s:12:"exchange.php";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                <li class="nav-main-item "> <a  href="group_buy.php" ><span class="text">团购商品</span><span class="arrow"></span></a> 554fcae493e564ee0dc75bdf2ebf94camenu_goods|a:2:{s:4:"name";s:10:"menu_goods";s:3:"url";s:13:"group_buy.php";}554fcae493e564ee0dc75bdf2ebf94ca </li>
              </ul>
    </div>
  </div>
  <div class="open-buy-info"></div>
</div>
<script>
/*css*/
if (window.screen.width < 1280)
{	
	document.write("<link rel='stylesheet' type='text/css' href='themes/xiaomi/css/980base.css'>");
	document.write("<link rel='stylesheet' type='text/css' href='themes/xiaomi/css/980index.css'>");
}
</script>
<div class="container">
  <div class="row">
    <div class="col col-16 offset4">
      <div class="home-slider">
        <div id="J_homeSlider" class="xm-slider">
		          <div class="slide"> <a href="http://" target="_blank"><img src="data/afficheimg/20140921cqgiip.jpg" /></a> </div>
		           <div class="slide"> <a href="http://" target="_blank"><img src="data/afficheimg/20140921yuasok.jpg" /></a> </div>
		           <div class="slide"> <a href="http://" target="_blank"><img src="data/afficheimg/20140505judonc.jpg" /></a> </div>
		  
         
        </div>
      </div>
      <div class="home-hd-show clearfix">
	          <div class="hd-show-item hd-show-item-first"> <a href="affiche.php?ad_id=1&uri="><img alt="3" src="data/afficheimg/1399296353451217960.jpg" /></a> </div>
	          <div class="hd-show-item "> <a href="affiche.php?ad_id=2&uri="><img alt="3" src="data/afficheimg/1399296360726327112.jpg" /></a> </div>
	          <div class="hd-show-item "> <a href="affiche.php?ad_id=3&uri="><img alt="3" src="data/afficheimg/1399296367947605205.jpg" /></a> </div>
	  	
     
      </div>
    </div>
  </div>
  <div class="home-star-goods">
    <div class="xm-plain-box J_starGoodsCarousel">
      <div class="box-hd">
        <h3 class="title">小米明星单品</h3>
        <div class="more">
          <div class="xm-recommend-page clearfix"> <a class="page-btn-prev page-btn-prev-disabled iconfont J_carouselPrev" href="javascript: void(0);">&#xe604;</a><a class="page-btn-next iconfont J_carouselNext" href="javascript: void(0);">&#xe605;</a> </div>
        </div>
      </div>
      <div class="box-bd">
        <div class="xm-star-goods-list-wrap J_carouselWrap">
          <div class="xm-star-goods-list clearfix J_carouselList">
		              <div class="xm-star-goods-item">
              <div class="item-content"> <span class="item-thumb"> <a href="goods.php?id=5"><img src="images/201310/thumb_img/5_thumb_G_1381081130578.jpg" alt="冰淇淋色后盖（黄）-非NFC" /></a> </span> <span class="item-title"><a href="goods.php?id=5">冰淇淋色后盖（黄）-非NFC</a></span> <span class="item-desc"></span> </div>
            </div>
			            <div class="xm-star-goods-item">
              <div class="item-content"> <span class="item-thumb"> <a href="goods.php?id=4"><img src="images/201310/thumb_img/4_thumb_G_1381081094117.jpg" alt="鳄鱼纹真皮后盖（豹纹黄）" /></a> </span> <span class="item-title"><a href="goods.php?id=4">鳄鱼纹真皮后盖（豹纹黄）</a></span> <span class="item-desc"></span> </div>
            </div>
			            <div class="xm-star-goods-item">
              <div class="item-content"> <span class="item-thumb"> <a href="goods.php?id=7"><img src="images/201310/thumb_img/7_thumb_G_1381081297850.jpg" alt="小米定制版拉卡拉刷卡器" /></a> </span> <span class="item-title"><a href="goods.php?id=7">小米定制版拉卡拉刷卡器</a></span> <span class="item-desc"></span> </div>
            </div>
			            <div class="xm-star-goods-item">
              <div class="item-content"> <span class="item-thumb"> <a href="goods.php?id=8"><img src="images/201310/thumb_img/8_thumb_G_1381081330475.jpg" alt="学院风帆布双肩包（黑）" /></a> </span> <span class="item-title"><a href="goods.php?id=8">学院风帆布双肩包（黑）</a></span> <span class="item-desc"></span> </div>
            </div>
						
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="home-new-goods">
    <div class="xm-plain-box">
      <div class="box-hd">
        <h3 class="title">新品上架</h3>
        <div class="more"> <a class="more-link" href="search.php?intro=new">更多<i class="iconfont">&#xe605;</i></a> </div>
      </div>
      <div class="box-bd">
        <div class="row">
          <div class="col col-15">
            <div class="brick-list">
              <div class="brick-item brick-item-l">
                <div class="item">
					                    <div class="item-content"> <a href="affiche.php?ad_id=4&uri="> <span class="item-thumb"> <img src="data/afficheimg/1399297446302746234.jpg" alt="首页-新品上架广告" /> </span> </a> </div>
				  	
	                  </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
								                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=11">魔声Beats Studio ...</a></span> <span class="item-price">￥3000</span> </span> <span class="item-thumb"> <a href="goods.php?id=11"><img src="images/201405/thumb_img/11_thumb_G_1399531296734.jpg" alt="魔声Beats Studio HD 2.0耳机 白色" style="width:220px" /></a> </span> </div>
					
		   							
		   							
		   							
		   							
		   							
		   							
		   							
		   				        </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="brick-item brick-item-s">
                  <div class="item">
				  					
		   				                    <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=4">鳄鱼纹真皮后盖（豹纹黄）</a></span> <span class="item-price">￥98</span> </span> <span class="item-thumb"> <a href="goods.php?id=4"><img src="images/201310/thumb_img/4_thumb_G_1381081094117.jpg" alt="鳄鱼纹真皮后盖（豹纹黄）" style="width:135px" /></a> </span> </div>
						
		   					
		   					
		   					
		   					
		   					
		   					
		                     </div>
                </div>
                <div class="brick-item brick-item-s">
                  <div class="item">
				  					
		   					
		   				                    <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=1">双口USB充电器</a></span> <span class="item-price">￥40</span> </span> <span class="item-thumb"> <a href="goods.php?id=1"><img src="images/201310/thumb_img/1_thumb_G_1381080926818.jpg" alt="双口USB充电器" style="width:135px" /></a> </span> </div>
						
		   					
		   					
		   					
		   					
		   					
		                     </div>
                </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
									
		   							
		   							
		   						                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=2">Adiaos限量T恤（白色L）</a></span> <span class="item-price">￥28</span> </span> <span class="item-thumb"> <a href="goods.php?id=2"><img src="images/201310/thumb_img/2_thumb_G_1381081006658.jpg" alt="Adiaos限量T恤（白色L）" style="width:220px" /></a> </span> </div>
					
		   							
		   							
		   							
		   							
		   				        </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
									
		   							
		   							
		   							
		   						                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=3">小米超薄5055mAh移动电源...</a></span> <span class="item-price">￥99</span> </span> <span class="item-thumb"> <a href="goods.php?id=3"><img src="images/201310/thumb_img/3_thumb_G_1381081063005.jpg" alt="小米超薄5055mAh移动电源（白）" style="width:220px" /></a> </span> </div>
					
		   							
		   							
		   							
		   				        </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
									
		   							
		   							
		   							
		   							
		   						                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=6">社区帽衫版米兔</a></span> <span class="item-price">￥18</span> </span> <span class="item-thumb"> <a href="goods.php?id=6"><img src="images/201310/thumb_img/6_thumb_G_1381081160153.jpg" alt="社区帽衫版米兔" style="width:220px" /></a> </span> </div>
					
		   							
		   							
		   				        </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
									
		   							
		   							
		   							
		   							
		   							
		   						                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=7">小米定制版拉卡拉刷卡器</a></span> <span class="item-price">￥88</span> </span> <span class="item-thumb"> <a href="goods.php?id=7"><img src="images/201310/thumb_img/7_thumb_G_1381081297850.jpg" alt="小米定制版拉卡拉刷卡器" style="width:220px" /></a> </span> </div>
					
		   							
		   				        </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
									
		   							
		   							
		   							
		   							
		   							
		   							
		   						                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=8">学院风帆布双肩包（黑）</a></span> <span class="item-price">￥59</span> </span> <span class="item-thumb"> <a href="goods.php?id=8"><img src="images/201310/thumb_img/8_thumb_G_1381081330475.jpg" alt="学院风帆布双肩包（黑）" style="width:220px" /></a> </span> </div>
					
		   				        </div>
              </div>
            </div>
          </div>
          <div class="col col-5">
            <div class="channel-section">
              <ul class="channel-list">
              
				                <li ><a href="goods.php?id=5" target="_blank"><span class="item-info"><span class="item-title">冰淇淋色后盖（黄）-非NFC</span><span class="item-price">￥39 <del>￥59</del></span><span class="item-thumb"><img src="images/201310/thumb_img/5_thumb_G_1381081130578.jpg" alt=""></span><span class="item-flag"><span class="icon-flag">特价商品</span></span></span></a></li>
				                <li ><a href="goods.php?id=4" target="_blank"><span class="item-info"><span class="item-title">鳄鱼纹真皮后盖（豹纹黄）</span><span class="item-price">￥98 <del>￥119</del></span><span class="item-thumb"><img src="images/201310/thumb_img/4_thumb_G_1381081094117.jpg" alt=""></span><span class="item-flag"><span class="icon-flag">特价商品</span></span></span></a></li>
				                <li ><a href="goods.php?id=1" target="_blank"><span class="item-info"><span class="item-title">双口USB充电器</span><span class="item-price">￥40 <del>￥59</del></span><span class="item-thumb"><img src="images/201310/thumb_img/1_thumb_G_1381080926818.jpg" alt=""></span><span class="item-flag"><span class="icon-flag">特价商品</span></span></span></a></li>
				                <li ><a href="goods.php?id=2" target="_blank"><span class="item-info"><span class="item-title">Adiaos限量T恤（白色L）</span><span class="item-price">￥28 <del>￥36</del></span><span class="item-thumb"><img src="images/201310/thumb_img/2_thumb_G_1381081006658.jpg" alt=""></span><span class="item-flag"><span class="icon-flag">特价商品</span></span></span></a></li>
				                <li style="border-bottom:0px"><a href="goods.php?id=3" target="_blank"><span class="item-info"><span class="item-title">小米超薄5055mAh移动电源...</span><span class="item-price">￥99 <del>￥155</del></span><span class="item-thumb"><img src="images/201310/thumb_img/3_thumb_G_1381081063005.jpg" alt=""></span><span class="item-flag"><span class="icon-flag">特价商品</span></span></span></a></li>
				  
				  
               
              </ul>
            </div>
            
            <div class="news-section">
              <h3>新闻公告</h3>
              <ul>
                
<li class="first"><a href="article.php?id=21"><span class="dot">&middot;</span>国庆节客服、小米之家服务时间<i class="iconfont">&#xe605;</i></a></li>
<li ><a href="article.php?id=20"><span class="dot">&middot;</span>企业用户采购通道<i class="iconfont">&#xe605;</i></a></li>
<li ><a href="article.php?id=19"><span class="dot">&middot;</span>小米手机官翻版<i class="iconfont">&#xe605;</i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="home-hot-goods">
    <div class="xm-plain-box">
      <div class="box-hd">
        <h3 class="title">大家都喜欢</h3>
      </div>
      <div class="box-bd">
        <div class="row">
          <div class="col col-15">
            <div class="brick-list">
              <div class="brick-item brick-item-l">
                <div class="item">
					                    <div class="item-content"> <a href="affiche.php?ad_id=4&uri="> <span class="item-thumb"> <img src="data/afficheimg/1399297446302746234.jpg" alt="首页-新品上架广告" /> </span> </a> </div>
				  	
	                  </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
								                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=5">冰淇淋色后盖（黄）-非NFC</a></span> <span class="item-price">￥39</span> </span> <span class="item-thumb"> <a href="goods.php?id=5"><img src="images/201310/thumb_img/5_thumb_G_1381081130578.jpg" alt="冰淇淋色后盖（黄）-非NFC" style="width:220px" /></a> </span> </div>
					
		   							
		   							
		   							
		   				        </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
									
		   						                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=10">魔声Beats Studio ...</a></span> <span class="item-price">￥3000</span> </span> <span class="item-thumb"> <a href="goods.php?id=10"><img src="images/201405/thumb_img/10_thumb_G_1399531258195.jpg" alt="魔声Beats Studio HD 2.0耳机 红色" style="width:220px" /></a> </span> </div>
				  	
		   							
		   							
		   		                </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
									
		   							
		   						                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=12">小米短袖POLO男款 浅灰</a></span> <span class="item-price">￥49</span> </span> <span class="item-thumb"> <a href="goods.php?id=12"><img src="images/201405/thumb_img/12_thumb_G_1399531363015.jpg" alt="小米短袖POLO男款 浅灰" style="width:220px" /></a> </span> </div>
				  	
		   							
		   		                </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
									
		   							
		   							
		   						                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=4">鳄鱼纹真皮后盖（豹纹黄）</a></span> <span class="item-price">￥98</span> </span> <span class="item-thumb"> <a href="goods.php?id=4"><img src="images/201310/thumb_img/4_thumb_G_1381081094117.jpg" alt="鳄鱼纹真皮后盖（豹纹黄）" style="width:220px" /></a> </span> </div>
				  	
		   		                </div>
              </div>
            </div>
          </div>
          <div class="col col-5">
            <div class="board-section">
              <h3><span>HOT</span>热销商品排行</h3>
              <ul class="board-list">
			                  <li class="top"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=5">冰淇淋色后盖（黄）-非NFC</a></span> <span class="item-price">￥39</span> </span> <span class="item-thumb"> <a href="goods.php?id=5"><img src="images/201310/thumb_img/5_thumb_G_1381081130578.jpg" alt="冰淇淋色后盖（黄）-非NFC" style="width:70px" /></a> </span> <span class="item-num">1</span> </li>
			                  <li class="top"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=10">魔声Beats Studio ...</a></span> <span class="item-price">￥3000</span> </span> <span class="item-thumb"> <a href="goods.php?id=10"><img src="images/201405/thumb_img/10_thumb_G_1399531258195.jpg" alt="魔声Beats Studio HD 2.0耳机 红色" style="width:70px" /></a> </span> <span class="item-num">2</span> </li>
			                  <li class="top"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=4">鳄鱼纹真皮后盖（豹纹黄）</a></span> <span class="item-price">￥98</span> </span> <span class="item-thumb"> <a href="goods.php?id=4"><img src="images/201310/thumb_img/4_thumb_G_1381081094117.jpg" alt="鳄鱼纹真皮后盖（豹纹黄）" style="width:70px" /></a> </span> <span class="item-num">3</span> </li>
			                  <li > <span class="item-info"> <span class="item-title"><a href="goods.php?id=2">Adiaos限量T恤（白色L）</a></span> <span class="item-price">￥28</span> </span> <span class="item-thumb"> <a href="goods.php?id=2"><img src="images/201310/thumb_img/2_thumb_G_1381081006658.jpg" alt="Adiaos限量T恤（白色L）" style="width:70px" /></a> </span> <span class="item-num">4</span> </li>
			                  <li > <span class="item-info"> <span class="item-title"><a href="goods.php?id=3">小米超薄5055mAh移动电源...</a></span> <span class="item-price">￥99</span> </span> <span class="item-thumb"> <a href="goods.php?id=3"><img src="images/201310/thumb_img/3_thumb_G_1381081063005.jpg" alt="小米超薄5055mAh移动电源（白）" style="width:70px" /></a> </span> <span class="item-num">5</span> </li>
			  	
             
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="home-commented-goods">
    <div class="xm-plain-box">
      <div class="box-hd">
        <h3 class="title">热评产品</h3>
      </div>
      <div class="box-bd">
        <div class="xm-commented-goods-list-wrap">
          <div class="xm-commented-goods-list clearfix">
		  		 
            <div class="xm-commented-goods-item J_commentedGoods">
              <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=1">双口USB充电器</a></span> <span class="item-meta"><span class="icon-stat icon-stat-5"></span></span> <span class="item-price">￥49.00</span> </span> <span class="item-thumb"> <a href="goods.php?id=1"><img src="images/201310/thumb_img/1_thumb_G_1381080926818.jpg" style="width:220px; height:220px" alt="双口USB充电器" /></a> </span> <span class="item-comment">dsaf</span> </div>
            </div>
				  		 
            <div class="xm-commented-goods-item J_commentedGoods">
              <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=2">Adiaos限量T恤（白色L）</a></span> <span class="item-meta"><span class="icon-stat icon-stat-5"></span></span> <span class="item-price">￥30.00</span> </span> <span class="item-thumb"> <a href="goods.php?id=2"><img src="images/201310/thumb_img/2_thumb_G_1381081006658.jpg" style="width:220px; height:220px" alt="Adiaos限量T恤（白色L）" /></a> </span> <span class="item-comment">sdaf</span> </div>
            </div>
				  		 
            <div class="xm-commented-goods-item J_commentedGoods">
              <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=13">小米女款短袖POLO衫 浅蓝</a></span> <span class="item-meta"><span class="icon-stat icon-stat-5"></span></span> <span class="item-price">￥49.00</span> </span> <span class="item-thumb"> <a href="goods.php?id=13"><img src="images/201405/thumb_img/13_thumb_G_1399531406684.jpg" style="width:220px; height:220px" alt="小米女款短袖POLO衫 浅蓝" /></a> </span> <span class="item-comment">面料棉含量是70%，布料不會太薄，洗了不...</span> </div>
            </div>
				  		 
            <div class="xm-commented-goods-item J_commentedGoods">
              <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=10">魔声Beats Studio HD 2.0耳机 红色</a></span> <span class="item-meta"><span class="icon-stat icon-stat-5"></span></span> <span class="item-price">￥3000.00</span> </span> <span class="item-thumb"> <a href="goods.php?id=10"><img src="images/201405/thumb_img/10_thumb_G_1399531258195.jpg" style="width:220px; height:220px" alt="魔声Beats Studio HD 2.0耳机 红色" /></a> </span> <span class="item-comment">很喜欢的一件POLO衫，款式、布料都不错...</span> </div>
            </div>
				  				  				  				  				   	
            
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  
<div class="home-commented-goods home-miui-goods">
    <div class="xm-plain-box">
      <div class="box-hd">
        <h3 class="title">小米手机</h3>
        <div class="more"> <a class="more-link" href="category.php?id=1" target="_blank">更多<i class="iconfont">&#xe605;</i></a> </div>
      </div>
      <div class="box-bd">
        <div class="xm-commented-goods-list-wrap">
          <div class="xm-commented-goods-list clearfix">
		              <div class="xm-commented-goods-item">
              <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=8" target="_blank">学院风帆布双肩包（黑）</a></span> <span class="item-price">￥59</span> </span> <span class="item-thumb"> <a href="goods.php?id=8" target="_blank"><img src="images/201310/thumb_img/8_thumb_G_1381081330475.jpg" alt=""  /></a> </span> </div>
            </div>
		            <div class="xm-commented-goods-item">
              <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=7" target="_blank">小米定制版拉卡拉刷卡器</a></span> <span class="item-price">￥88</span> </span> <span class="item-thumb"> <a href="goods.php?id=7" target="_blank"><img src="images/201310/thumb_img/7_thumb_G_1381081297850.jpg" alt=""  /></a> </span> </div>
            </div>
		            <div class="xm-commented-goods-item">
              <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=6" target="_blank">社区帽衫版米兔</a></span> <span class="item-price">￥18</span> </span> <span class="item-thumb"> <a href="goods.php?id=6" target="_blank"><img src="images/201310/thumb_img/6_thumb_G_1381081160153.jpg" alt=""  /></a> </span> </div>
            </div>
		            <div class="xm-commented-goods-item">
              <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=5" target="_blank">冰淇淋色后盖（黄）-非NFC</a></span> <span class="item-price">￥39</span> </span> <span class="item-thumb"> <a href="goods.php?id=5" target="_blank"><img src="images/201310/thumb_img/5_thumb_G_1381081130578.jpg" alt=""  /></a> </span> </div>
            </div>
			
            
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="home-commented-goods home-miui-goods">
    <div class="xm-plain-box">
      <div class="box-hd">
        <h3 class="title">配件</h3>
        <div class="more"> <a class="more-link" href="category.php?id=5" target="_blank">更多<i class="iconfont">&#xe605;</i></a> </div>
      </div>
      <div class="box-bd">
        <div class="xm-commented-goods-list-wrap">
          <div class="xm-commented-goods-list clearfix">
		              <div class="xm-commented-goods-item">
              <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=13" target="_blank">小米女款短袖POLO衫 浅蓝</a></span> <span class="item-price">￥49</span> </span> <span class="item-thumb"> <a href="goods.php?id=13" target="_blank"><img src="images/201405/thumb_img/13_thumb_G_1399531406684.jpg" alt=""  /></a> </span> </div>
            </div>
		            <div class="xm-commented-goods-item">
              <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=12" target="_blank">小米短袖POLO男款 浅灰</a></span> <span class="item-price">￥49</span> </span> <span class="item-thumb"> <a href="goods.php?id=12" target="_blank"><img src="images/201405/thumb_img/12_thumb_G_1399531363015.jpg" alt=""  /></a> </span> </div>
            </div>
		            <div class="xm-commented-goods-item">
              <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=11" target="_blank">魔声Beats Studio ...</a></span> <span class="item-price">￥3000</span> </span> <span class="item-thumb"> <a href="goods.php?id=11" target="_blank"><img src="images/201405/thumb_img/11_thumb_G_1399531296734.jpg" alt=""  /></a> </span> </div>
            </div>
		            <div class="xm-commented-goods-item">
              <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=10" target="_blank">魔声Beats Studio ...</a></span> <span class="item-price">￥3000</span> </span> <span class="item-thumb"> <a href="goods.php?id=10" target="_blank"><img src="images/201405/thumb_img/10_thumb_G_1399531258195.jpg" alt=""  /></a> </span> </div>
            </div>
			
            
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
</div>
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
    </script>
<script type="text/javascript" src="themes/xiaomi/js/index.min.js?2014042901"></script>
</body>
</html>
