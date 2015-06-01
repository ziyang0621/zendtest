<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

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
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
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
		<?php $_from = get_flash_xml(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'playerdb');$this->_foreach['get_flash_xml'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['get_flash_xml']['total'] > 0):
    foreach ($_from AS $this->_var['playerdb']):
        $this->_foreach['get_flash_xml']['iteration']++;
?>
          <div class="slide"> <a href="<?php echo $this->_var['playerdb']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['playerdb']['src']; ?>" /></a> </div>
		 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
         
        </div>
      </div>
      <div class="home-hd-show clearfix">
	  <?php $_from = get_advlist_by_id(1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
        <div class="hd-show-item <?php if ($this->_foreach['index_image']['iteration'] == 1): ?>hd-show-item-first<?php endif; ?>"> <a href="<?php echo $this->_var['ad']['url']; ?>"><img alt="3" src="<?php echo $this->_var['ad']['image']; ?>" /></a> </div>
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
     
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
		  <?php $_from = get_cat_best_goods_4(1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['new_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['new_goods']['iteration']++;
?>
            <div class="xm-star-goods-item">
              <div class="item-content"> <span class="item-thumb"> <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['short_name']); ?>" /></a> </span> <span class="item-title"><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a></span> <span class="item-desc"><?php echo htmlspecialchars($this->_var['goods']['brief']); ?></span> </div>
            </div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			
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
				<?php $_from = get_advlist_by_id(2); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
	  <?php if ($this->_foreach['index_image']['iteration'] == 1): ?>
                  <div class="item-content"> <a href="<?php echo $this->_var['ad']['url']; ?>"> <span class="item-thumb"> <img src="<?php echo $this->_var['ad']['image']; ?>" alt="<?php echo $this->_var['ad']['name']; ?>" /> </span> </a> </div>
				  <?php endif; ?>	
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
				<?php $_from = get_cat_new_goods(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['new_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['new_goods']['iteration']++;
?>
				<?php if ($this->_foreach['new_goods']['iteration'] == 1): ?>
                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a></span> <span class="item-price"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span> </span> <span class="item-thumb"> <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" style="width:220px" /></a> </span> </div>
				<?php endif; ?>	
		   		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		        </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="brick-item brick-item-s">
                  <div class="item">
				  <?php $_from = get_cat_new_goods(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['new_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['new_goods']['iteration']++;
?>
				<?php if ($this->_foreach['new_goods']['iteration'] == 2): ?>
                    <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a></span> <span class="item-price"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span> </span> <span class="item-thumb"> <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" style="width:135px" /></a> </span> </div>
					<?php endif; ?>	
		   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  </div>
                </div>
                <div class="brick-item brick-item-s">
                  <div class="item">
				  <?php $_from = get_cat_new_goods(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['new_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['new_goods']['iteration']++;
?>
				<?php if ($this->_foreach['new_goods']['iteration'] == 3): ?>
                    <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a></span> <span class="item-price"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span> </span> <span class="item-thumb"> <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" style="width:135px" /></a> </span> </div>
					<?php endif; ?>	
		   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  </div>
                </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
				<?php $_from = get_cat_new_goods(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['new_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['new_goods']['iteration']++;
?>
				<?php if ($this->_foreach['new_goods']['iteration'] == 4): ?>
                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a></span> <span class="item-price"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span> </span> <span class="item-thumb"> <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" style="width:220px" /></a> </span> </div>
				<?php endif; ?>	
		   		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		        </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
				<?php $_from = get_cat_new_goods(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['new_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['new_goods']['iteration']++;
?>
				<?php if ($this->_foreach['new_goods']['iteration'] == 5): ?>
                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a></span> <span class="item-price"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span> </span> <span class="item-thumb"> <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" style="width:220px" /></a> </span> </div>
				<?php endif; ?>	
		   		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		        </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
				<?php $_from = get_cat_new_goods(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['new_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['new_goods']['iteration']++;
?>
				<?php if ($this->_foreach['new_goods']['iteration'] == 6): ?>
                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a></span> <span class="item-price"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span> </span> <span class="item-thumb"> <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" style="width:220px" /></a> </span> </div>
				<?php endif; ?>	
		   		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		        </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
				<?php $_from = get_cat_new_goods(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['new_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['new_goods']['iteration']++;
?>
				<?php if ($this->_foreach['new_goods']['iteration'] == 7): ?>
                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a></span> <span class="item-price"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span> </span> <span class="item-thumb"> <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" style="width:220px" /></a> </span> </div>
				<?php endif; ?>	
		   		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		        </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
				<?php $_from = get_cat_new_goods(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['new_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['new_goods']['iteration']++;
?>
				<?php if ($this->_foreach['new_goods']['iteration'] == 8): ?>
                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a></span> <span class="item-price"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span> </span> <span class="item-thumb"> <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" style="width:220px" /></a> </span> </div>
				<?php endif; ?>	
		   		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		        </div>
              </div>
            </div>
          </div>
          <div class="col col-5">
            <div class="channel-section">
              <ul class="channel-list">
              
				<?php $_from = get_cat_promote_goods_5(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['new_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['new_goods']['iteration']++;
?>
                <li <?php if (($this->_foreach['new_goods']['iteration'] == $this->_foreach['new_goods']['total'])): ?>style="border-bottom:0px"<?php endif; ?>><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"><span class="item-info"><span class="item-title"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></span><span class="item-price"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?> <del><?php echo $this->_var['goods']['market_price']; ?></del></span><span class="item-thumb"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt=""></span><span class="item-flag"><span class="icon-flag">特价商品</span></span></span></a></li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
				  
               
              </ul>
            </div>
            
            <div class="news-section">
              <h3>新闻公告</h3>
              <ul>
                
<?php $this->assign('articles',$this->_var['articles_8']); ?><?php $this->assign('articles_cat',$this->_var['articles_cat_8']); ?><?php echo $this->fetch('library/cat_articles.lbi'); ?>

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
				<?php $_from = get_advlist_by_id(2); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
	  <?php if ($this->_foreach['index_image']['iteration'] == 1): ?>
                  <div class="item-content"> <a href="<?php echo $this->_var['ad']['url']; ?>"> <span class="item-thumb"> <img src="<?php echo $this->_var['ad']['image']; ?>" alt="<?php echo $this->_var['ad']['name']; ?>" /> </span> </a> </div>
				  <?php endif; ?>	
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
				<?php $_from = get_cat_best_goods_4(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['new_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['new_goods']['iteration']++;
?>
				<?php if ($this->_foreach['new_goods']['iteration'] == 1): ?>
                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a></span> <span class="item-price"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span> </span> <span class="item-thumb"> <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" style="width:220px" /></a> </span> </div>
				<?php endif; ?>	
		   		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		        </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
				<?php $_from = get_cat_best_goods_4(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['new_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['new_goods']['iteration']++;
?>
				<?php if ($this->_foreach['new_goods']['iteration'] == 2): ?>
                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a></span> <span class="item-price"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span> </span> <span class="item-thumb"> <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" style="width:220px" /></a> </span> </div>
				  <?php endif; ?>	
		   		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
				<?php $_from = get_cat_best_goods_4(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['new_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['new_goods']['iteration']++;
?>
				<?php if ($this->_foreach['new_goods']['iteration'] == 3): ?>
                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a></span> <span class="item-price"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span> </span> <span class="item-thumb"> <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" style="width:220px" /></a> </span> </div>
				  <?php endif; ?>	
		   		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
				<?php $_from = get_cat_best_goods_4(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['new_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['new_goods']['iteration']++;
?>
				<?php if ($this->_foreach['new_goods']['iteration'] == 4): ?>
                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a></span> <span class="item-price"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span> </span> <span class="item-thumb"> <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" style="width:220px" /></a> </span> </div>
				  <?php endif; ?>	
		   		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-5">
            <div class="board-section">
              <h3><span>HOT</span>热销商品排行</h3>
              <ul class="board-list">
			  <?php $_from = get_cat_hot_goods_5(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['new_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['new_goods']['iteration']++;
?>
                <li <?php if ($this->_foreach['new_goods']['iteration'] < 4): ?>class="top"<?php endif; ?>> <span class="item-info"> <span class="item-title"><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a></span> <span class="item-price"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span> </span> <span class="item-thumb"> <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" style="width:70px" /></a> </span> <span class="item-num"><?php echo $this->_foreach['new_goods']['iteration']; ?></span> </li>
			  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
             
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
		  <?php $_from = get_new_comment_8(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'msg');$this->_foreach['message_lists'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['message_lists']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['msg']):
        $this->_foreach['message_lists']['iteration']++;
?>
		<?php if ($this->_foreach['message_lists']['iteration'] < 5): ?> 
            <div class="xm-commented-goods-item J_commentedGoods">
              <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=<?php echo $this->_var['msg']['goods_id']; ?>"><?php echo $this->_var['msg']['goods_name']; ?></a></span> <span class="item-meta"><span class="icon-stat icon-stat-5"></span></span> <span class="item-price"><?php echo $this->_var['msg']['shop_price']; ?></span> </span> <span class="item-thumb"> <a href="goods.php?id=<?php echo $this->_var['msg']['goods_id']; ?>"><img src="<?php echo $this->_var['msg']['goods_thumb']; ?>" style="width:220px; height:220px" alt="<?php echo $this->_var['msg']['goods_name']; ?>" /></a> </span> <span class="item-comment"><?php echo sub_str($this->_var['msg']['content'],20); ?></span> </div>
            </div>
		<?php endif; ?>
		  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 	
            
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  
<?php $this->assign('cat_goods',$this->_var['cat_goods_1']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_1']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_5']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_5']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

  
  
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>



<script type="text/javascript" src="themes/xiaomi/js/index.min.js?2014042901"></script>

</body>
</html>
