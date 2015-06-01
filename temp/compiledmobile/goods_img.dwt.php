<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="telephone=no" name="format-detection">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="viewport" content="width=320, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<title><?php echo $this->_var['page_title']; ?>触屏版</title>
<link href="themes/default/css/reset.css" rel="stylesheet" type="text/css" />
<link href="themes/default/css/head.css" rel="stylesheet" type="text/css" />
<link href="themes/default/css/foot.css" rel="stylesheet" type="text/css" />
<link href="themes/default/css/style.css" rel="stylesheet" type="text/css" />
<script src="themes/default/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="themes/default/js/jquery.autocomplete.js" type="text/javascript"></script>
<script src="themes/default/js/jquery.touchScroll.js" type="text/javascript"></script>
<script src="themes/default/js/fbi.js" type="text/javascript"></script>
<script type="text/javascript">
	var _hmt=_hmt||[];(function(){var e=document.createElement("script");
	var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)})();
	document.write('<div id="global_loading" style="width: 100%;height: 100%;position: fixed;top: 0;left: 0;background-color: #eee;z-index:999"><div style="width: 100px;height: 75px;margin:auto;top:50%;position:relative"><span style="display:block;float:left;width:32px;height:32px;background:url(themes/default/images/spacer.gif);margin-top:-5px;"></span>&nbsp;&nbsp;加载中...</div></div>');
	</script>
<style>
.pro_cont img{width:100%;height:auto;line-height:1.8em;font-size: .800em;color:#5a5a5a}
</style>	
</head>
<body>
<div class="header"> <a class="back" href="javascript:history.back();"></a> <span class="headline">商品详情</span> <a class="search" href="search.php"></a> </div>
<section>
  <div class="project">
    <h2><?php echo $this->_var['goods']['goods_style_name']; ?></h2>
    
  </div>
  <div class="prodesc">
    <h5><em>商品介绍</em>
      <div>&nbsp;<span>Introduction</span></div>
    </h5>
    <div class="pro_cont clearfix">
      <?php echo $this->_var['goods']['goods_desc']; ?>
    </div>
    <div class="clearfix"></div>
  </div>
</section>
<script type="text/javascript">
		var global_loading=document.getElementById("global_loading");
		global_loading.parentNode.removeChild(global_loading);
</script>


<?php echo $this->fetch('library/page_footer.lbi'); ?>
<script language="javascript">
$('#pc_nav').attr('href', './../goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>');
</script>

</body>
</html>
