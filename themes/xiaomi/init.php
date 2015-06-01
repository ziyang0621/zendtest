<?php
function get_advlist_by_id( $id )
{
		switch ( $id )
		{
		case 1 :
				return get_advlist( "首页-轮播底部广告", 3 );
		case 2 :
				return get_advlist( "首页-新品上架广告", 1 );
		case 3 :
				return get_advlist( "首页-推荐产品广告", 1 );
		case 4 :
				return get_advlist( "首页-欧美品牌广告", 15 );
		case 5 :
				return get_advlist( "首页-日韩品牌广告", 15 );
		case 6 :
				return get_advlist( "首页-国货品牌广告", 15 );
		case 7 :
				return get_advlist( "首页-洗护品牌广告", 15 );
		case 8 :
				return get_advlist( "品牌页-热销品牌", 20 );
		case 9 :
				return get_advlist( "积分商城页-活动广告", 50 );
		case 10 :
				return get_advs( "特价卖场页-右侧文字广告", 1 );
		case 11 :
				return get_advs( "天天秒杀页-右侧文字广告", 1 );
		case 12 :
				return get_advs( "商品页-促销文字广告", 1 );
		}
}

function get_flashad_by_index( $id )
{
		return get_advlist( "首页-flash-右侧广告".$id, 3 );
}

function get_hot_cat_navad( )
{
		return get_advlist( "首页-导航菜单-热门推荐-热门标签", 40 );
}

function get_navad1_by_cat_id( $id )
{
		return get_advlist( "首页-导航菜单-分类ID".$id."-热门标签", 40 );
}

function get_navad2_by_cat_id( $id )
{
		return get_advlist( "首页-导航菜单-分类ID".$id."-活动套餐", 40 );
}

function get_left_advlist_by_cat_id( $id )
{
		return get_advlist( "首页-分类ID".$id."-图片广告", 7 );
}

function get_txt_advlist_by_cat_id( $id )
{
		return get_advlist( "首页-分类ID".$id."-文字广告", 9 );
}

function get_brand_advlist_by_cat_id( $id )
{
		return get_advlist( "首页-分类ID".$id."-品牌广告", 10 );
}

function get_top_cat_flash_advlist_by_cat_id( $id )
{
		return get_advlist( "顶级分类页-分类ID".$id."-轮播广告", 3 );
}

function get_top_cat_advlist_by_cat_id( $id )
{
		return get_advlist( "顶级分类页-分类ID".$id."-广告", 2 );
}

function get_channel_flash_advlist_by_cat_id( $id )
{
		return get_advlist( "分类频道页-分类ID".$id."-轮播广告", 3 );
}

function get_channel_right_advlist_by_cat_id( $id )
{
		return get_advlist( "分类频道页-分类ID".$id."-右侧广告", 2 );
}

function get_channel_best_advlist_by_cat_id( $id )
{
		return get_advlist( "分类频道页-分类ID".$id."-精选广告", 6 );
}

function get_channel_floor1_advlist_by_cat_id( $id )
{
		return get_advlist( "分类频道页-分类ID".$id."-1楼广告", 3 );
}

function get_channel_floor1_cat_advlist_by_cat_id( $id )
{
		return get_advlist( "分类频道页-分类ID".$id."-1楼分类", 3 );
}

function get_channel_floor1_tit_advlist_by_cat_id( $id )
{
		return get_advlist( "分类频道页-分类ID".$id."-1楼名称", 1 );
}

function get_channel_floor2_advlist_by_cat_id( $id )
{
		return get_advlist( "分类频道页-分类ID".$id."-2楼广告", 3 );
}

function get_channel_floor2_cat_advlist_by_cat_id( $id )
{
		return get_advlist( "分类频道页-分类ID".$id."-2楼分类", 3 );
}

function get_channel_floor2_tit_advlist_by_cat_id( $id )
{
		return get_advlist( "分类频道页-分类ID".$id."-2楼名称", 1 );
}

function get_channel_floor3_advlist_by_cat_id( $id )
{
		return get_advlist( "分类频道页-分类ID".$id."-3楼广告", 3 );
}

function get_channel_floor3_cat_advlist_by_cat_id( $id )
{
		return get_advlist( "分类频道页-分类ID".$id."-3楼分类", 3 );
}

function get_channel_floor3_tit_advlist_by_cat_id( $id )
{
		return get_advlist( "分类频道页-分类ID".$id."-3楼名称", 1 );
}

function get_article_cat_5( $id )
{
		return get_article_cat( $id, 5 );
}

function get_cat_arts_10( $id )
{
		return get_cat_arts( $id, 10 );
}

function get_cat_new_goods( $id )
{
		return get_cat_recommend_goods( "new", $id, 8 );
}

function get_cat_new_goods_5( $id )
{
		return get_cat_recommend_goods( "new", $id, 5 );
}

function get_cat_new_goods_6( $id )
{
		return get_cat_recommend_goods( "new", $id, 6 );
}

function get_cat_new_goods_10( $id )
{
		return get_cat_recommend_goods( "new", $id, 10 );
}

function get_cat_new_goods_12( $id )
{
		return get_cat_recommend_goods( "new", $id, 12 );
}

function get_cat_new_goods_20( $id )
{
		return get_cat_recommend_goods( "new", $id, 20 );
}

function get_cat_new_goods_8( $id )
{
		return get_cat_recommend_goods( "new", $id, 8 );
}

function get_cat_promote_goods_3( $id )
{
		return get_cat_recommend_goods( "promote", $id, 3 );
}

function get_cat_promote_goods_5( $id )
{
		return get_cat_recommend_goods( "promote", $id, 5 );
}

function get_cat_promote_goods_100( $id )
{
		return get_cat_recommend_goods( "promote", $id, 100 );
}

function get_cat_best_goods( $id )
{
		return get_cat_recommend_goods( "best", $id, 18 );
}

function get_cat_best_goods_2( $id )
{
		return get_cat_recommend_goods( "best", $id, 2 );
}

function get_cat_best_goods_4( $id )
{
		return get_cat_recommend_goods( "best", $id, 4 );
}

function get_cat_best_goods_5( $id )
{
		return get_cat_recommend_goods( "best", $id, 5 );
}

function get_cat_best_goods_6( $id )
{
		return get_cat_recommend_goods( "best", $id, 6 );
}

function get_cat_best_goods_8( $id )
{
		return get_cat_recommend_goods( "best", $id, 8 );
}

function get_cat_hot_goods( $id )
{
		return get_cat_recommend_goods( "hot", $id, 5 );
}

function get_cat_hot_goods_2( $id )
{
		return get_cat_recommend_goods( "hot", $id, 2 );
}

function get_cat_hot_goods_5( $id )
{
		return get_cat_recommend_goods( "hot", $id, 5 );
}

function get_cat_hot_goods_6( $id )
{
		return get_cat_recommend_goods( "hot", $id, 6 );
}

function get_cat_hot_goods_8( $id )
{
		return get_cat_recommend_goods( "hot", $id, 8 );
}

function get_cat_hot_goods_9( $id )
{
		return get_cat_recommend_goods( "hot", $id, 9 );
}

function get_cat_hot_goods_10( $id )
{
		return get_cat_recommend_goods( "hot", $id, 10 );
}

function get_cat_hot_goods_20( $id )
{
		return get_cat_recommend_goods( "hot", $id, 20 );
}

function get_new_comment_8( $type )
{
		return get_new_comment( $type, 8 );
}

function get_rand_comment_8( $type )
{
		return get_rand_comment( $type, 8 );
}

function get_rand_comment_img_1( $type )
{
		return get_rand_comment_img( $type, 1 );
}

function insert_article_content_23( )
{
		return insert_article_content( 23 );
}

function insert_article_content_24( )
{
		return insert_article_content( 24 );
}

function get_goods_fits( $goods_list = array( ) )
{
		$temp_index = 0;
		$arr = array( );
		$sql = "SELECT gg.parent_id, ggg.goods_name AS parent_name, gg.goods_id, gg.goods_price, g.goods_name, g.goods_thumb, g.goods_img, g.shop_price AS org_price, ".( "IFNULL(mp.user_price, g.shop_price * '".$_SESSION['discount']."') AS shop_price " )."FROM ".$GLOBALS['ecs']->table( "group_goods" )." AS gg LEFT JOIN ".$GLOBALS['ecs']->table( "goods" )."AS g ON g.goods_id = gg.goods_id LEFT JOIN ".$GLOBALS['ecs']->table( "member_price" )." AS mp ".( "ON mp.goods_id = gg.goods_id AND mp.user_rank = '".$_SESSION['user_rank']."' " )."LEFT JOIN ".$GLOBALS['ecs']->table( "goods" )." AS ggg ON ggg.goods_id = gg.parent_id WHERE gg.parent_id ".db_create_in( $goods_list )." AND g.is_delete = 0 AND g.is_on_sale = 1 ORDER BY gg.parent_id, gg.goods_id";
		$res = $GLOBALS['db']->query( $sql );
		while ( $row = $GLOBALS['db']->fetchRow( $res ) )
		{
				$arr[$temp_index]['parent_id'] = $row['parent_id'];
				$arr[$temp_index]['parent_name'] = $row['parent_name'];
				$arr[$temp_index]['parent_short_name'] = 0 < $GLOBALS['_CFG']['goods_name_length'] ? sub_str( $row['parent_name'], $GLOBALS['_CFG']['goods_name_length'] ) : $row['parent_name'];
				$arr[$temp_index]['goods_id'] = $row['goods_id'];
				$arr[$temp_index]['goods_name'] = $row['goods_name'];
				$arr[$temp_index]['short_name'] = 0 < $GLOBALS['_CFG']['goods_name_length'] ? sub_str( $row['goods_name'], $GLOBALS['_CFG']['goods_name_length'] ) : $row['goods_name'];
				$arr[$temp_index]['fittings_price_nformat'] = $row['goods_price'];
				$arr[$temp_index]['fittings_price'] = price_format( $row['goods_price'] );
				$arr[$temp_index]['shop_price'] = price_format( $row['shop_price'] );
				$arr[$temp_index]['shop_price_nformat'] = $row['shop_price'];
				$arr[$temp_index]['fittings_price_nformat'] = $row['goods_price'];
				$arr[$temp_index]['goods_thumb'] = get_image_path( $row['goods_id'], $row['goods_thumb'], TRUE );
				$arr[$temp_index]['goods_img'] = get_image_path( $row['goods_id'], $row['goods_img'] );
				$arr[$temp_index]['url'] = build_uri( "goods", array(
						"gid" => $row['goods_id']
				), $row['goods_name'] );
				++$temp_index;
		}
		return $arr;
}

function get_goods_ex( $goods_id )
{
		if ( $goods_id == NULL )
		{
				return;
		}
		$sql = "select IFNULL(sum(og.goods_number), 0) as total_sells from ".$GLOBALS['ecs']->table( "order_goods" )." as og where og.goods_id = ".$goods_id;
		$row = $GLOBALS['db']->GetRow( $sql );
		$total_sells = $row['total_sells'];
		$sql = "select count(*) as total_comments from ".$GLOBALS['ecs']->table( "comment" )." as r where r.id_value = ".$goods_id." AND r.comment_type = 0 AND r.parent_id = 0 AND r.status = 1";
		$row = $GLOBALS['db']->GetRow( $sql );
		$total_comments = $row['total_comments'];
		$sql = "select goods_brief, brand_id,is_best,is_new,is_hot,is_promote, promote_start_date, promote_end_date, promote_price, shop_price, market_price, click_count, goods_thumb from ".$GLOBALS['ecs']->table( "goods" )." where goods_id = ".$goods_id;
		$row = $GLOBALS['db']->GetRow( $sql );
		$goods_brief = $row['goods_brief'];
		$click_count = $row['click_count'];
		$is_promote = $row['is_promote'];
		$is_best = $row['is_best'];
		$is_new = $row['is_new'];
		$is_hot = $row['is_hot'];
		$goods_thumb = $row['goods_thumb'];
		$promote_price = $row['promote_price'];
		$promote_end_date = $row['promote_end_date'] - $row['promote_start_date'];
		$shop_price = 0 < intval( $row['promote_price'] ) ? $row['promote_price'] : $row['shop_price'];
		$market_price = round( $row['market_price'] );
		$goods_brief = $row['goods_brief'];
		$brand_id = $row['brand_id'];
		$sql = "select brand_name from ".$GLOBALS['ecs']->table( "brand" )." where brand_id = ".$brand_id;
		$row = $GLOBALS['db']->GetRow( $sql );
		$brand_name = $row['brand_name'];
		$arr = array( );
		$arr[$goods_id]['total_sells'] = $total_sells;
		$arr[$goods_id]['total_comments'] = $total_comments;
		$arr[$goods_id]['click_count'] = $click_count;
		$arr[$goods_id]['goods_brief'] = $goods_brief;
		$arr[$goods_id]['promote_price'] = $promote_price;
		$arr[$goods_id]['promote_end_date'] = $promote_end_date;
		$arr[$goods_id]['brand_id'] = $brand_id;
		$arr[$goods_id]['shop_price'] = $shop_price;
		$arr[$goods_id]['market_price'] = $market_price;
		$arr[$goods_id]['brand_name'] = $brand_name;
		$arr[$goods_id]['goods_thumb'] = $goods_thumb;
		$goods_flag = "";
		if ( $is_promote == 1 )
		{
				$goods_flag = "promote";
		}
		else if ( $is_new == 1 )
		{
				$goods_flag = "new";
		}
		else if ( $is_best == 1 )
		{
				$goods_flag = "best";
		}
		else if ( $is_hot == 1 )
		{
				$goods_flag = "hot";
		}
		$arr[$goods_id]['goods_flag'] = $goods_flag;
		$arr[$goods_id]['saving'] = $market_price - $promote_price;
		$arr[$goods_id]['saving2'] = $market_price - $shop_price;
		$arr[$goods_id]['save_rate'] = $market_price ? round( $promote_price / $market_price, 2 ) * 10 : 0;
		$arr[$goods_id]['save_rate2'] = $market_price ? round( $shop_price / $market_price, 2 ) * 10 : 0;
		return $arr;
}

function insert_cat_name( $arr )
{
		$cat_id = $arr['id'];
		$sql = "SELECT cat_name FROM ".$GLOBALS['ecs']->table( "category" ).( " WHERE cat_id = '".$cat_id."'" );
		return $GLOBALS['db']->getOne( $sql );
}

function insert_goods_save_rate( $arr )
{
		if ( $arr['id'] == NULL )
		{
				return 0;
		}
		$sql = "select goods_brief, brand_id,is_best,is_new,is_hot,is_promote, promote_start_date, promote_end_date, promote_price, shop_price, market_price, click_count, goods_thumb from ".$GLOBALS['ecs']->table( "goods" )." where goods_id = ".$arr['id'];
		$row = $GLOBALS['db']->GetRow( $sql );
		$is_promote = $row['is_promote'];
		if ( !$is_promote )
		{
				return;
		}
		$promote_price = $row['promote_price'];
		$market_price = round( $row['market_price'] );
		$save_rate = $market_price ? round( $promote_price / $market_price, 2 ) * 10 : 0;
		return "<span class=\"icon-saleoff icon-saleoff-7\">".$save_rate."折</span>";
}

function insert_goods_comment( $arr )
{
		if ( $arr['id'] == NULL )
		{
				return 0;
		}
		$sql = "select count(*) as total_comments from ".$GLOBALS['ecs']->table( "comment" )." as r where r.id_value = ".$arr['id']." AND r.comment_type = 0 AND r.parent_id = 0 AND r.status = 1";
		$row = $GLOBALS['db']->GetRow( $sql );
		return $row['total_comments'];
}

function insert_menu_goods( $arr )
{
		$url = $arr['url'];
		$rs = strpos( $url, "category" );
		$cat_id = 0;
		if ( $rs !== FALSE )
		{
				preg_match( "/\\d+/i", $url, $matches );
				$cat_id = $matches[0];
		}
		$str = "";
		$res = get_cat_best_goods_2( $cat_id );
		if ( 0 < $cat_id && $res )
		{
				$str .= "<div class=\"nav-main-children\"><ul class=\"children-list clearfix\">";
				$index = 0;
				foreach ( $res as $idx => $row )
				{
						$index += 1;
						$temp = $index == 1 ? "class=\"first\"" : "";
						$str .= "<li ".$temp."> <a class=\"item-detail\" href=\"".$row['url']."\"> <span class=\"title\" style=\"font-size:20px;\">".$row['name']."</span> <span class=\"desc\">".$row['brief']."</span> <span class=\"price\">售价<b>".$row['shop_price']."</b></span> <span class=\"thumb\"> <img src=\"".$row['thumb']."\"  style=\"width:160px; height:160px\" alt=\"".$row['name']."\"/> </span> </a> </li>";
				}
				$str .= "</ul></div>";
		}
		return $str;
}

function insert_comment_list( $arr )
{
		$need_cache = $GLOBALS['smarty']->caching;
		$need_compile = $GLOBALS['smarty']->force_compile;
		$GLOBALS['GLOBALS']['smarty']->caching = FALSE;
		$GLOBALS['GLOBALS']['smarty']->force_compile = TRUE;
		if ( intval( $GLOBALS['_CFG']['captcha'] ) & CAPTCHA_COMMENT && 0 < gd_version( ) )
		{
				$GLOBALS['smarty']->assign( "enabled_captcha", 1 );
				$GLOBALS['smarty']->assign( "rand", mt_rand( ) );
		}
		$GLOBALS['smarty']->assign( "username", stripslashes( $_SESSION['user_name'] ) );
		$GLOBALS['smarty']->assign( "email", $_SESSION['email'] );
		$GLOBALS['smarty']->assign( "comment_type", $arr['type'] );
		$GLOBALS['smarty']->assign( "id", $arr['id'] );
		$cmt = assign_comment_list( $arr['id'], $arr['type'] );
		$GLOBALS['smarty']->assign( "comments", $cmt['comments'] );
		$GLOBALS['smarty']->assign( "pager", $cmt['pager'] );
		$val = $GLOBALS['smarty']->fetch( "library/comments_list.lbi" );
		$GLOBALS['GLOBALS']['smarty']->caching = $need_cache;
		$GLOBALS['GLOBALS']['smarty']->force_compile = $need_compile;
		return $val;
}

function assign_comment_list( $id, $type, $page = 1 )
{
		$count = $GLOBALS['db']->getOne( "SELECT COUNT(*) FROM ".$GLOBALS['ecs']->table( "comment" ).( " WHERE id_value = '".$id."' AND comment_type = '{$type}' AND status = 1 AND parent_id = 0" ) );
		$size = !empty( $GLOBALS['_CFG']['comments_number'] ) ? $GLOBALS['_CFG']['comments_number'] : 5;
		$page_count = 0 < $count ? intval( ceil( $count / $size ) ) : 1;
		$sql = "SELECT * FROM ".$GLOBALS['ecs']->table( "comment" ).( " WHERE id_value = '".$id."' AND comment_type = '{$type}' AND status = 1 AND parent_id = 0" )." ORDER BY comment_id DESC";
		$res = $GLOBALS['db']->selectLimit( $sql, $size, ( $page - 1 ) * $size );
		$arr = array( );
		$ids = "";
		while ( ( $row = $GLOBALS['db']->fetchRow( $res ) ) && $ids )
		{
				$ids .= $row['comment_id'];
				$arr[$row['comment_id']]['id'] = $row['comment_id'];
				$arr[$row['comment_id']]['email'] = $row['email'];
				$arr[$row['comment_id']]['username'] = $row['user_name'];
				$arr[$row['comment_id']]['content'] = str_replace( "\\r\\n", "<br />", htmlspecialchars( $row['content'] ) );
				$arr[$row['comment_id']]['content'] = nl2br( str_replace( "\\n", "<br />", $arr[$row['comment_id']]['content'] ) );
				$arr[$row['comment_id']]['rank'] = $row['comment_rank'];
				$arr[$row['comment_id']]['img'] = $row['img'];
				$arr[$row['comment_id']]['add_time'] = local_date( $GLOBALS['_CFG']['time_format'], $row['add_time'] );
		}
		if ( $ids )
		{
				$sql = "SELECT * FROM ".$GLOBALS['ecs']->table( "comment" ).( " WHERE parent_id IN( ".$ids." )" );
				$res = $GLOBALS['db']->query( $sql );
				while ( $row = $GLOBALS['db']->fetch_array( $res ) )
				{
						$arr[$row['parent_id']]['re_content'] = nl2br( str_replace( "\\n", "<br />", htmlspecialchars( $row['content'] ) ) );
						$arr[$row['parent_id']]['re_add_time'] = local_date( $GLOBALS['_CFG']['time_format'], $row['add_time'] );
						$arr[$row['parent_id']]['re_email'] = $row['email'];
						$arr[$row['parent_id']]['re_username'] = $row['user_name'];
				}
		}
		$pager['page'] = $page;
		$pager['size'] = $size;
		$pager['record_count'] = $count;
		$pager['page_count'] = $page_count;
		$pager['page_first'] = "javascript:gotoPage(1,".$id.",{$type})";
		$pager['page_prev'] = 1 < $page ? "javascript:gotoPage(".( $page - 1 ).( ",".$id.",{$type})" ) : "javascript:;";
		$pager['page_next'] = $page < $page_count ? "javascript:gotoPage(".( $page + 1 ).( ",".$id.",{$type})" ) : "javascript:;";
		$pager['page_last'] = $page < $page_count ? "javascript:gotoPage(".$page_count.( ",".$id.",{$type})" ) : "javascript:;";
		$cmt = array(
				"comments" => $arr,
				"pager" => $pager
		);
		return $cmt;
}

function insert_comments_rank( $arr )
{
		$sql = "SELECT * FROM ".$GLOBALS['ecs']->table( "comment" )." WHERE id_value = ".$arr['id']." AND comment_type = 0 AND status = 1 AND parent_id = 0 ORDER BY comment_id DESC";
		$res = $GLOBALS['db']->getAll( $sql );
		$count5 = 0;
		$count4 = 0;
		$count3 = 0;
		$count2 = 0;
		$count1 = 0;
		if ( !empty( $res ) )
		{
			foreach ( $res as $row ){
		$rank = $row['comment_rank'];
				switch ( $rank )
				{				
						case 5 :
								++$count5;
								continue;
						case 4 :
								++$count4;
								continue;
						case 3 :
								++$count3;
								continue;
						case 2 :
								++$count2;
								continue;				
				        case 1 :
					   	        ++$count1;
						        continue;
				}
		}
		}
		$str = $count5."-".$count4."-".$count3."-".$count2."-".$count1;
		return $str;
}

function get_cat_rec_3( )
{
		$cat_rec = array( );
		$sql = "SELECT c.cat_id, c.cat_name, cr.recommend_type FROM ".$GLOBALS['ecs']->table( "cat_recommend" )." AS cr INNER JOIN ".$GLOBALS['ecs']->table( "category" )." AS c ON cr.cat_id=c.cat_id";
		$cat_recommend_res = $GLOBALS['db']->getAll( $sql );
		if ( !empty( $cat_recommend_res ) )
		{
				$cat_rec_array = array( );
				foreach ( $cat_recommend_res as $cat_recommend_data )
				{
						$cat_rec[$cat_recommend_data['recommend_type']][] = array(
								"cat_id" => $cat_recommend_data['cat_id'],
								"cat_name" => $cat_recommend_data['cat_name']
						);
				}
				return $cat_rec[3];
		}
}

function get_cat_rec_1( )
{
		$cat_rec = array( );
		$sql = "SELECT c.cat_id, c.cat_name, cr.recommend_type FROM ".$GLOBALS['ecs']->table( "cat_recommend" )." AS cr INNER JOIN ".$GLOBALS['ecs']->table( "category" )." AS c ON cr.cat_id=c.cat_id";
		$cat_recommend_res = $GLOBALS['db']->getAll( $sql );
		if ( !empty( $cat_recommend_res ) )
		{
				$cat_rec_array = array( );
				foreach ( $cat_recommend_res as $cat_recommend_data )
				{
						$cat_rec[$cat_recommend_data['recommend_type']][] = array(
								"cat_id" => $cat_recommend_data['cat_id'],
								"cat_name" => $cat_recommend_data['cat_name']
						);
				}
				return $cat_rec[1];
		}
}

function group_buy_list_ex( $size, $page = 1 )
{
		$gb_list = array( );
		$now = gmtime( );
		$sql = "SELECT b.*, IFNULL(g.goods_thumb, '') AS goods_thumb,g.goods_name, g.market_price, g.shop_price, b.act_id AS group_buy_id, b.start_time AS start_date, b.end_time AS end_date FROM ".$GLOBALS['ecs']->table( "goods_activity" )." AS b LEFT JOIN ".$GLOBALS['ecs']->table( "goods" )." AS g ON b.goods_id = g.goods_id WHERE b.act_type = '".GAT_GROUP_BUY."' ".( "AND b.start_time <= '".$now."' AND b.is_finished < 3 ORDER BY b.act_id DESC" );
		$res = $GLOBALS['db']->selectLimit( $sql, $size, ( $page - 1 ) * $size );
		while ( $group_buy = $GLOBALS['db']->fetchRow( $res ) )
		{
				$ext_info = unserialize( $group_buy['ext_info'] );
				$group_buy = array_merge( $group_buy, $ext_info );
				$group_buy['formated_start_date'] = local_date( $GLOBALS['_CFG']['time_format'], $group_buy['start_date'] );
				$group_buy['formated_end_date'] = local_date( $GLOBALS['_CFG']['time_format'], $group_buy['end_date'] );
				$group_buy['formated_deposit'] = price_format( $group_buy['deposit'], FALSE );
				$price_ladder = $group_buy['price_ladder'];
				if ( !is_array( $price_ladder ) && empty( $price_ladder ) )
				{
						$price_ladder = array(
								array( "amount" => 0, "price" => 0 )
						);
				}
				else
				{
						foreach ( $price_ladder as $key => $amount_price )
						{
								$price_ladder[$key]['formated_price'] = price_format( $amount_price['price'] );
						}
				}
				$group_buy['price_ladder'] = $price_ladder;
				if ( empty( $group_buy['goods_thumb'] ) )
				{
						$group_buy['goods_thumb'] = get_image_path( $group_buy['goods_id'], $group_buy['goods_thumb'], TRUE );
				}
				$group_buy['url'] = build_uri( "group_buy", array(
						"gbid" => $group_buy['group_buy_id']
				) );
				$stat = group_buy_stat( $group_buy['group_buy_id'], $group_buy['deposit'] );
				$group_buy = array_merge( $group_buy, $stat );
				$cur_price = $price_ladder[0]['price'];
				$cur_amount = $stat['valid_goods'];
				foreach ( $price_ladder as $amount_price )
				{
						if ( !( $amount_price['amount'] <= $cur_amount ) )
						{
								break;
						}
						$cur_price = $amount_price['price'];
				}
				$group_buy['cur_price'] = price_format( $cur_price );
				$group_buy['cur_amount'] = $cur_amount + $group_buy['product_id'];
				$market_price = $group_buy['market_price'];
				$group_buy['saving'] = $market_price - $cur_price;
				$group_buy['save_rate'] = $market_price ? round( $cur_price / $market_price, 2 ) * 10 : 0;
				$group_buy['market_price'] = price_format( $group_buy['market_price'] );
				$gb_list[] = $group_buy;
		}
		return $gb_list;
}

function get_catid_byurl( $url )
{
		$rs = strpos( $url, "category" );
		$cat_id = 0;
		if ( $rs !== FALSE )
		{
				preg_match( "/\\d+/i", $url, $matches );
				$cat_id = $matches[0];
		}
		return $cat_id;
}

function get_subcate_byurl( $url )
{
		$rs = strpos( $url, "category" );
		if ( $rs !== FALSE )
		{
				preg_match( "/\\d+/i", $url, $matches );
				$cid = $matches[0];
				$cat_arr = array( );
				$sql = "select * from ".$GLOBALS['ecs']->table( "category" )." where parent_id=".$cid." and is_show=1 order by sort_order asc, cat_id asc";
				$res = $GLOBALS['db']->getAll( $sql );
				foreach ( $res as $idx => $row )
				{
						$cat_arr[$idx]['id'] = $row['cat_id'];
						$cat_arr[$idx]['name'] = $row['cat_name'];
						$cat_arr[$idx]['url'] = build_uri( "category", array(
								"cid" => $row['cat_id']
						), $row['cat_name'] );
						$cat_arr[$idx]['children'] = get_clild_list( $row['cat_id'] );
				}
				return $cat_arr;
		}
		return FALSE;
}

function get_clild_list( $pid )
{
		$sql_sub = "select * from ".$GLOBALS['ecs']->table( "category" )." where parent_id=".$pid." and is_show=1 order by sort_order asc, cat_id asc";
		$subres = $GLOBALS['db']->getAll( $sql_sub );
		if ( $subres )
		{
				foreach ( $subres as $sidx => $subrow )
				{
						$children[$sidx]['id'] = $subrow['cat_id'];
						$children[$sidx]['name'] = $subrow['cat_name'];
						$children[$sidx]['url'] = build_uri( "category", array(
								"cid" => $subrow['cat_id']
						), $subrow['cat_name'] );
						$children[$sidx]['children'] = get_clild_list( $subrow['cat_id'] );
				}
				return $children;
		}
		$children = NULL;
		return $children;
}

function insert_article_content( $article_id )
{
		$sql = "SELECT a.*, IFNULL(AVG(r.comment_rank), 0) AS comment_rank FROM ".$GLOBALS['ecs']->table( "article" )." AS a LEFT JOIN ".$GLOBALS['ecs']->table( "comment" )." AS r ON r.id_value = a.article_id AND comment_type = 1 ".( "WHERE a.is_open = 1 AND a.article_id = '".$article_id."' GROUP BY a.article_id" );
		$row = $GLOBALS['db']->getRow( $sql );
		return $row['content'];
}

function get_child_cat( $tree_id = 0 )
{
		$three_arr = array( );
		$sql = "SELECT count(*) FROM ".$GLOBALS['ecs']->table( "category" ).( " WHERE parent_id = '".$tree_id."' AND is_show = 1 " );
		if ( $GLOBALS['db']->getOne( $sql ) || $tree_id == 0 )
		{
				$child_sql = "SELECT cat_id, cat_name, parent_id, is_show FROM ".$GLOBALS['ecs']->table( "category" ).( "WHERE parent_id = '".$tree_id."' AND is_show = 1 ORDER BY sort_order ASC, cat_id ASC" );
				$res = $GLOBALS['db']->getAll( $child_sql );
				foreach ( $res as $row )
				{
						if ( $row['is_show'] )
						{
								$three_arr[$row['cat_id']]['id'] = $row['cat_id'];
								$three_arr[$row['cat_id']]['name'] = $row['cat_name'];
								$three_arr[$row['cat_id']]['name2'] = mb_substr( $row['cat_name'], 0, 2, "utf-8" );
								$three_arr[$row['cat_id']]['url'] = build_uri( "category", array(
										"cid" => $row['cat_id']
								), $row['cat_name'] );
						}
				}
		}
		return $three_arr;
}

function get_goods_thumb( $goods_id )
{
		$sql = "select goods_id,goods_thumb from ".$GLOBALS['ecs']->table( "goods" )." where goods_id = ".$goods_id;
		$row = $GLOBALS['db']->GetRow( $sql );
		$goods_thumb = get_image_path( $row['goods_id'], $row['goods_thumb'], TRUE );
		return $goods_thumb;
}

function insert_cart_count( )
{
		$sql = "SELECT SUM(goods_number) AS number, SUM(goods_price * goods_number) AS amount FROM ".$GLOBALS['ecs']->table( "cart" )." WHERE session_id = '".SESS_ID."' AND rec_type = '".CART_GENERAL_GOODS."'";
		$row = $GLOBALS['db']->GetRow( $sql );
		if ( $row )
		{
				$number = intval( $row['number'] );
				$amount = floatval( $row['amount'] );
				return $number;
		}
		$number = 0;
		$amount = 0;
		return $number;
}

function get_cart_data( )
{
		$goods_list = array( );
		$total = array( "goods_price" => 0, "market_price" => 0, "saving" => 0, "save_rate" => 0, "goods_amount" => 0 );
		$sql = "SELECT *, IF(parent_id, parent_id, goods_id) AS pid  FROM ".$GLOBALS['ecs']->table( "cart" )."  WHERE session_id = '".SESS_ID."' AND rec_type = '".CART_GENERAL_GOODS."' ORDER BY pid, parent_id";
		$res = $GLOBALS['db']->query( $sql );
		$virtual_goods_count = 0;
		$real_goods_count = 0;
		while ( $row = $GLOBALS['db']->fetchRow( $res ) )
		{
				$total['goods_price'] += $row['goods_price'] * $row['goods_number'];
				$total['market_price'] += $row['market_price'] * $row['goods_number'];
				$row['total_price'] += $row['goods_price'] * $row['goods_number'];
				$row['subtotal'] = price_format( $row['goods_price'] * $row['goods_number'], FALSE );
				$row['goods_price'] = price_format( $row['goods_price'], FALSE );
				$row['market_price'] = price_format( $row['market_price'], FALSE );
				if ( $row['is_real'] )
				{
						++$real_goods_count;
				}
				else
				{
						++$virtual_goods_count;
				}
				$row['short_name'] = 0 < $GLOBALS['_CFG']['goods_name_length'] ? sub_str( $row['goods_name'], $GLOBALS['_CFG']['goods_name_length'] ) : $row['goods_name'];
				if ( trim( $row['goods_attr'] ) != "" )
				{
						$sql = "SELECT attr_value FROM ".$GLOBALS['ecs']->table( "goods_attr" )." WHERE goods_attr_id ".db_create_in( $row['goods_attr'] );
						$attr_list = $GLOBALS['db']->getCol( $sql );
						foreach ( $attr_list as $attr )
						{
								$row['goods_name'] .= " [".$attr."] ";
						}
				}
				if ( ( $GLOBALS['_CFG']['show_goods_in_cart'] == "2" || $GLOBALS['_CFG']['show_goods_in_cart'] == "3" ) && $row['extension_code'] != "package_buy" )
				{
						$goods_thumb = $GLOBALS['db']->getOne( "SELECT `goods_thumb` FROM ".$GLOBALS['ecs']->table( "goods" ).( " WHERE `goods_id`='".$row['goods_id']."'" ) );
						$row['goods_thumb'] = get_image_path( $row['goods_id'], $goods_thumb, TRUE );
				}
				if ( $row['extension_code'] == "package_buy" )
				{
						$row['package_goods_list'] = get_package_goods( $row['goods_id'] );
				}
				$goods_list[] = $row;
		}
		$total['goods_amount'] = $total['goods_price'];
		$total['saving'] = price_format( $total['market_price'] - $total['goods_price'], FALSE );
		if ( 0 < $total['market_price'] )
		{
				$total['save_rate'] = $total['market_price'] ? round( ( $total['market_price'] - $total['goods_price'] ) * 100 / $total['market_price'] )."%" : 0;
		}
		$total['goods_price'] = price_format( $total['goods_price'], FALSE );
		$total['market_price'] = price_format( $total['market_price'], FALSE );
		$total['real_goods_count'] = $real_goods_count;
		$total['virtual_goods_count'] = $virtual_goods_count;
		return array(
				"goods_list" => $goods_list,
				"total" => $total
		);
}

function get_link_goods( $goods_id )
{
		$sql = "SELECT g.goods_id, g.goods_name, g.goods_thumb, g.goods_img, g.shop_price AS org_price, ".( "IFNULL(mp.user_price, g.shop_price * '".$_SESSION['discount']."') AS shop_price, " )."g.market_price, g.promote_price, g.promote_start_date, g.promote_end_date FROM ".$GLOBALS['ecs']->table( "link_goods" )." lg LEFT JOIN ".$GLOBALS['ecs']->table( "goods" )." AS g ON g.goods_id = lg.link_goods_id LEFT JOIN ".$GLOBALS['ecs']->table( "member_price" )." AS mp ".( "ON mp.goods_id = g.goods_id AND mp.user_rank = '".$_SESSION['user_rank']."' " ).( "WHERE lg.goods_id = '".$goods_id."' AND g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 " )."LIMIT ".$GLOBALS['_CFG']['related_goods_number'];
		$res = $GLOBALS['db']->query( $sql );
		$arr = array( );
		while ( $row = $GLOBALS['db']->fetchRow( $res ) )
		{
				$arr[$row['goods_id']]['goods_id'] = $row['goods_id'];
				$arr[$row['goods_id']]['properties'] = get_goods_properties( $row['goods_id'] );
				$arr[$row['goods_id']]['goods_name'] = $row['goods_name'];
				$arr[$row['goods_id']]['short_name'] = 0 < $GLOBALS['_CFG']['goods_name_length'] ? sub_str( $row['goods_name'], $GLOBALS['_CFG']['goods_name_length'] ) : $row['goods_name'];
				$arr[$row['goods_id']]['goods_thumb'] = get_image_path( $row['goods_id'], $row['goods_thumb'], TRUE );
				$arr[$row['goods_id']]['goods_img'] = get_image_path( $row['goods_id'], $row['goods_img'] );
				$arr[$row['goods_id']]['market_price'] = price_format( $row['market_price'] );
				$arr[$row['goods_id']]['shop_price'] = price_format( $row['shop_price'] );
				$arr[$row['goods_id']]['url'] = build_uri( "goods", array(
						"gid" => $row['goods_id']
				), $row['goods_name'] );
				if ( 0 < $row['promote_price'] )
				{
						$arr[$row['goods_id']]['promote_price'] = bargain_price( $row['promote_price'], $row['promote_start_date'], $row['promote_end_date'] );
						$arr[$row['goods_id']]['formated_promote_price'] = price_format( $arr[$row['goods_id']]['promote_price'] );
				}
				else
				{
						$arr[$row['goods_id']]['promote_price'] = 0;
				}
		}
		return $arr;
}

function get_activity_by_id( $id )
{
		$sql = "SELECT * FROM ".$GLOBALS['ecs']->table( "topic" ).( " WHERE topic_id = '".$topic_id."'" );
		$res = $GLOBALS['db']->query( $sql );
		while ( $row = $GLOBALS['db']->fetchRow( $res ) )
		{
				$row['formated_start_time'] = local_date( "Y年m月d日", $row['start_time'] );
				$row['formated_end_time'] = local_date( "Y年m月d日", $row['end_time'] );
				$arr[] = $row;
		}
		return $arr;
}

function get_activity( )
{
		$sql = "SELECT * FROM ".$GLOBALS['ecs']->table( "topic" );
		$res = $GLOBALS['db']->query( $sql );
		while ( $row = $GLOBALS['db']->fetchRow( $res ) )
		{
				$row['formated_start_time'] = local_date( "Y年m月d日", $row['start_time'] );
				$row['formated_end_time'] = local_date( "Y年m月d日", $row['end_time'] );
				$arr[] = $row;
		}
		return $arr;
}

function group_buy_goods_info( $group_buy_id, $current_num = 0 )
{
		$group_buy_id = intval( $group_buy_id );
		$sql = "SELECT b.*, b.act_id AS group_buy_id, b.act_desc AS group_buy_desc, b.start_time AS start_date, g.market_price, g.shop_price,  b.end_time AS end_date FROM ".$GLOBALS['ecs']->table( "goods_activity" )." AS b LEFT JOIN ".$GLOBALS['ecs']->table( "goods" )." AS g ON b.goods_id = g.goods_id ".( "WHERE b.act_id = '".$group_buy_id."' " )."AND b.act_type = '".GAT_GROUP_BUY."'";
		$group_buy = $GLOBALS['db']->getRow( $sql );
		if ( empty( $group_buy ) )
		{
				return array( );
		}
		$ext_info = unserialize( $group_buy['ext_info'] );
		$group_buy = array_merge( $group_buy, $ext_info );
		$group_buy['formated_start_date'] = local_date( "Y-m-d H:i", $group_buy['start_time'] );
		$group_buy['formated_end_date'] = local_date( "Y-m-d H:i", $group_buy['end_time'] );
		$group_buy['formated_deposit'] = price_format( $group_buy['deposit'], FALSE );
		$price_ladder = $group_buy['price_ladder'];
		if ( !is_array( $price_ladder ) && empty( $price_ladder ) )
		{
				$price_ladder = array(
						array( "amount" => 0, "price" => 0 )
				);
		}
		else
		{
				foreach ( $price_ladder as $key => $amount_price )
				{
						$price_ladder[$key]['formated_price'] = price_format( $amount_price['price'], FALSE );
				}
		}
		$group_buy['price_ladder'] = $price_ladder;
		$stat = group_buy_stat( $group_buy_id, $group_buy['deposit'] );
		$group_buy = array_merge( $group_buy, $stat );
		$cur_price = $price_ladder[0]['price'];
		$cur_amount = $stat['valid_goods'] + $current_num;
		foreach ( $price_ladder as $amount_price )
		{
				if ( !( $amount_price['amount'] <= $cur_amount ) )
				{
						break;
				}
				$cur_price = $amount_price['price'];
		}
		$group_buy['cur_price'] = $cur_price;
		$group_buy['cur_amount'] = $cur_amount + $group_buy['product_id'];
		$group_buy['formated_cur_price'] = price_format( $cur_price, FALSE );
		$group_buy['trans_price'] = $group_buy['cur_price'];
		$group_buy['formated_trans_price'] = $group_buy['formated_cur_price'];
		$group_buy['trans_amount'] = $group_buy['valid_goods'];
		$group_buy['status'] = group_buy_status( $group_buy );
		if ( isset( $GLOBALS['_LANG']['gbs'][$group_buy['status']] ) )
		{
				$group_buy['status_desc'] = $GLOBALS['_LANG']['gbs'][$group_buy['status']];
		}
		$group_buy['start_time'] = $group_buy['formated_start_date'];
		$group_buy['end_time'] = $group_buy['formated_end_date'];
		$market_price = $group_buy['market_price'];
		$group_buy['saving'] = $market_price - $cur_price;
		$group_buy['save_rate'] = $market_price ? round( $cur_price / $market_price, 2 ) * 10 : 0;
		return $group_buy;
}

function group_buy_list_goods( $size = 100, $page = 1 )
{
		$gb_list = array( );
		$now = gmtime( );
		$sql = "SELECT b.*, IFNULL(g.goods_thumb, '') AS goods_thumb, g.market_price, g.shop_price, b.act_id AS group_buy_id, b.start_time AS start_date, b.end_time AS end_date FROM ".$GLOBALS['ecs']->table( "goods_activity" )." AS b LEFT JOIN ".$GLOBALS['ecs']->table( "goods" )." AS g ON b.goods_id = g.goods_id WHERE b.act_type = '".GAT_GROUP_BUY."' ".( "AND b.start_time <= '".$now."' AND b.is_finished < 3 ORDER BY b.act_id DESC" );
		$res = $GLOBALS['db']->selectLimit( $sql, $size, ( $page - 1 ) * $size );
		while ( $group_buy = $GLOBALS['db']->fetchRow( $res ) )
		{
				$ext_info = unserialize( $group_buy['ext_info'] );
				$group_buy = array_merge( $group_buy, $ext_info );
				$group_buy['formated_start_date'] = local_date( $GLOBALS['_CFG']['time_format'], $group_buy['start_date'] );
				$group_buy['formated_end_date'] = local_date( $GLOBALS['_CFG']['time_format'], $group_buy['end_date'] );
				$group_buy['formated_deposit'] = price_format( $group_buy['deposit'], FALSE );
				$price_ladder = $group_buy['price_ladder'];
				if ( !is_array( $price_ladder ) && empty( $price_ladder ) )
				{
						$price_ladder = array(
								array( "amount" => 0, "price" => 0 )
						);
				}
				else
				{
						foreach ( $price_ladder as $key => $amount_price )
						{
								$price_ladder[$key]['formated_price'] = price_format( $amount_price['price'] );
						}
				}
				$group_buy['price_ladder'] = $price_ladder;
				if ( empty( $group_buy['goods_thumb'] ) )
				{
						$group_buy['goods_thumb'] = get_image_path( $group_buy['goods_id'], $group_buy['goods_thumb'], TRUE );
				}
				$group_buy['url'] = build_uri( "group_buy", array(
						"gbid" => $group_buy['group_buy_id']
				) );
				$stat = group_buy_stat( $group_buy['group_buy_id'], $group_buy['deposit'] );
				$group_buy = array_merge( $group_buy, $stat );
				$cur_price = $price_ladder[0]['price'];
				$cur_amount = $stat['valid_goods'];
				foreach ( $price_ladder as $amount_price )
				{
						if ( !( $amount_price['amount'] <= $cur_amount ) )
						{
								break;
						}
						$cur_price = $amount_price['price'];
				}
				$group_buy['cur_price'] = $cur_price;
				$group_buy['cur_amount'] = $cur_amount + $group_buy['product_id'];
				$market_price = $group_buy['market_price'];
				$group_buy['saving'] = $market_price - $cur_price;
				$group_buy['save_rate'] = $market_price ? round( $cur_price / $market_price, 2 ) * 10 : 0;
				$gb_list[] = $group_buy;
		}
		return $gb_list;
}

function brand_related_cats( $brand )
{
		$sql = "SELECT c.cat_id, c.cat_name, COUNT(g.goods_id) AS goods_count FROM ".$GLOBALS['ecs']->table( "category" )." AS c, ".$GLOBALS['ecs']->table( "goods" )." AS g ".( "WHERE g.brand_id = '".$brand."' AND c.cat_id = g.cat_id " )."GROUP BY g.cat_id";
		$res = $GLOBALS['db']->query( $sql );
		while ( $row = $GLOBALS['db']->fetchRow( $res ) )
		{
				$row['url'] = build_uri( "brand", array(
						"cid" => $row['cat_id'],
						"bid" => $brand
				), $row['cat_name'] );
				$arr[] = $row;
		}
		return $arr;
}

function get_extend_user_info( )
{
		$sql = "SELECT * FROM ".$GLOBALS['ecs']->table( "reg_fields" )." WHERE type < 2 AND display = 1 ORDER BY dis_order, id";
		return $GLOBALS['db']->getAll( $sql );
}

function insert_all_brand_info( )
{
		$sql = "SELECT b.brand_id, b.brand_name, b.brand_logo, b.brand_desc, replace(b.site_url, 'http://', '') as site_url, COUNT(*) AS goods_num, IF(b.brand_logo > '', '1', '0') AS tag FROM ".$GLOBALS['ecs']->table( "brand" )."AS b, ".$GLOBALS['ecs']->table( "goods" )." AS g ".( "WHERE g.brand_id = b.brand_id ".$children." AND is_show = 1 " )." AND g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 GROUP BY b.brand_id HAVING goods_num > 0 ORDER BY  replace(b.site_url, 'http://', '') ASC";
		$brand_array = $GLOBALS['db']->getall( $sql );
		$brand_list = array( );
		$i = 0;
		for ( ;	$i < count( $brand_array );	++$i	)
		{
				$l = get_first_char( $brand_array[$i]['site_url'] );
				$brand_list[$l][$brand_array[$i]['brand_id']] = $brand_array[$i]['brand_id']."-".$brand_array[$i]['brand_name']."-".$brand_array[$i]['site_url']."-".$brand_array[$i]['brand_logo'];
		}
		$show = "";
		foreach ( $brand_list as $row => $idx )
		{
				$show .= "<dl class=\"item\">\r\n\t\t\t\t<dt><a name=\"".$row."\">".$row."</a></dt>\r\n\t\t\t\t<dd>";
				foreach ( $idx as $row2 => $idx2 )
				{
						$idx2 = explode( "-", $idx2 );
						$show .= "<a href=\"brand.php?id=".$idx2[0]."\">".$idx2[1]."</a>";
				}
				$show .= "</dd>\r\n      \t\t </dl>";
		}
		return $show;
}

function get_first_char( $str )
{
		$fchar = $str[0];
		if ( ord( "A" ) <= ord( $fchar ) && ord( $fchar ) <= ord( "z" ) )
		{
				return strtoupper( $fchar );
		}
		$str = iconv( "UTF-8", "gb2312", $str );
		$asc = ord( $str[0] ) * 256 + ord( $str[1] ) - 65536;
		if ( -20319 <= $asc && $asc <= -20284 )
		{
				return "A";
		}
		if ( -20283 <= $asc && $asc <= -19776 )
		{
				return "B";
		}
		if ( -19775 <= $asc && $asc <= -19219 )
		{
				return "C";
		}
		if ( -19218 <= $asc && $asc <= -18711 )
		{
				return "D";
		}
		if ( -18710 <= $asc && $asc <= -18527 )
		{
				return "E";
		}
		if ( -18526 <= $asc && $asc <= -18240 )
		{
				return "F";
		}
		if ( -18239 <= $asc && $asc <= -17923 )
		{
				return "G";
		}
		if ( -17922 <= $asc && $asc <= -17418 )
		{
				return "H";
		}
		if ( -17417 <= $asc && $asc <= -16475 )
		{
				return "I";
		}
		if ( -16474 <= $asc && $asc <= -16213 )
		{
				return "J";
		}
		if ( -16212 <= $asc && $asc <= -15641 )
		{
				return "K";
		}
		if ( -15640 <= $asc && $asc <= -15166 )
		{
				return "L";
		}
		if ( -15165 <= $asc && $asc <= -14923 )
		{
				return "M";
		}
		if ( -14922 <= $asc && $asc <= -14915 )
		{
				return "N";
		}
		if ( -14914 <= $asc && $asc <= -14631 )
		{
				return "P";
		}
		if ( -14630 <= $asc && $asc <= -14150 )
		{
				return "Q";
		}
		if ( -14149 <= $asc && $asc <= -14091 )
		{
				return "R";
		}
		if ( -14090 <= $asc && $asc <= -13319 )
		{
				return "S";
		}
		if ( -13318 <= $asc && $asc <= -12839 )
		{
				return "T";
		}
		if ( -12838 <= $asc && $asc <= -12557 )
		{
				return "W";
		}
		if ( -12556 <= $asc && $asc <= -11848 )
		{
				return "X";
		}
		if ( -11847 <= $asc && $asc <= -11056 )
		{
				return "Y";
		}
		if ( -11055 <= $asc && $asc <= -10247 )
		{
				return "Z";
		}
}

function get_user_name( $id )
{
		$sql = "select user_name from ".$GLOBALS['ecs']->table( "users" )." where user_id = ".$id."";
		return $GLOBALS['db']->getOne( $sql );
}

function get_brand_name( $id )
{
		$sql = "select brand_name from ".$GLOBALS['ecs']->table( "brand" )." where brand_id = ".$id."";
		return $GLOBALS['db']->getOne( $sql );
}

function get_top_cat_id( $nid )
{
		$sql = "select parent_id from ".$GLOBALS['ecs']->table( "category" )." where cat_id = ".$nid."";
		$temp_id = 0;
		$pid = $GLOBALS['db']->getOne( $sql );
		if ( 0 < $pid )
		{
				$temp_id = get_top_cat_id( $pid );
				return $temp_id;
		}
		$temp_id = $nid;
		return $temp_id;
}

function get_parent_cat_id( $nid )
{
		$sql = "select parent_id from ".$GLOBALS['ecs']->table( "category" )." where cat_id = ".$nid."";
		$pid = $GLOBALS['db']->getOne( $sql );
		return $pid;
}

function get_top_art_cat_id( $nid )
{
		$sql = "select parent_id from ".$GLOBALS['ecs']->table( "article_cat" )." where cat_id = ".$nid."";
		$temp_id = 0;
		$pid = $GLOBALS['db']->getOne( $sql );
		if ( 0 < $pid )
		{
				$temp_id = get_top_art_cat_id( $pid );
				return $temp_id;
		}
		$temp_id = $nid;
		return $temp_id;
}

function get_goods_gallerys( $goods_id )
{
		$sql = "SELECT img_id, img_url, thumb_url,img_original, img_desc FROM ".$GLOBALS['ecs']->table( "goods_gallery" ).( " WHERE goods_id = '".$goods_id."' LIMIT " ).$GLOBALS['_CFG']['goods_gallery_number'];
		$row = $GLOBALS['db']->getAll( $sql );
		foreach ( $row as $key => $gallery_img )
		{
				$row[$key]['img_url'] = get_image_path( $goods_id, $gallery_img['img_url'], FALSE, "gallery" );
				$row[$key]['thumb_url'] = get_image_path( $goods_id, $gallery_img['thumb_url'], TRUE, "gallery" );
				$row[$key]['original_url'] = get_image_path( $goods_id, $gallery_img['img_original'], TRUE, "gallery" );
		}
		return $row;
}

function get_new_comment( $type, $count )
{
		$arr = array( );
		$sql = "select c.*, g.goods_id, g.goods_thumb, g.shop_price,g.goods_name from ".$GLOBALS['ecs']->table( "comment" )." AS c  LEFT JOIN ".$GLOBALS['ecs']->table( "goods" )." AS g ON c.id_value = g.goods_id where c.comment_type = ".$type." and c.status=1 order by c.add_time desc limit ".$count;
		$res = $GLOBALS['db']->getAll( $sql );
		foreach ( $res as $idx => $row )
		{
				$arr[$idx]['id_value'] = $row['id_value'];
				$arr[$idx]['user_name'] = get_user_name( $row['id_value'] );
				$arr[$idx]['content'] = $row['content'];
				$arr[$idx]['comment_rank'] = $row['comment_rank'];
				$arr[$idx]['time'] = local_date( "m-d", $row['add_time'] );
				$arr[$idx]['goods_id'] = $row['goods_id'];
				$arr[$idx]['goods_name'] = $row['goods_name'];
				$arr[$idx]['shop_price'] = price_format( $row['shop_price'], FALSE );
				$arr[$idx]['goods_thumb'] = get_image_path( $row['goods_id'], $row['goods_thumb'], TRUE );
				$arr[$idx]['url'] = build_uri( "goods", array(
						"gid" => $row['goods_id']
				), $row['goods_name'] );
		}
		return $arr;
}

function get_rand_comment( $type, $count )
{
		$arr = array( );
		$sql = "select c.*, g.goods_id, g.goods_thumb,g.shop_price, g.goods_name from ".$GLOBALS['ecs']->table( "comment" )." AS c  LEFT JOIN ".$GLOBALS['ecs']->table( "goods" )." AS g ON c.id_value = g.goods_id where c.comment_type = ".$type." and c.status=1 order by RAND() desc limit ".$count;
		$res = $GLOBALS['db']->getAll( $sql );
		foreach ( $res as $idx => $row )
		{
				$arr[$idx]['id_value'] = $row['id_value'];
				$arr[$idx]['user_name'] = get_user_name( $row['id_value'] );
				$arr[$idx]['content'] = $row['content'];
				$arr[$idx]['comment_rank'] = $row['comment_rank'];
				$arr[$idx]['time'] = local_date( "m-d", $row['add_time'] );
				$arr[$idx]['goods_id'] = $row['goods_id'];
				$arr[$idx]['goods_name'] = $row['goods_name'];
				$arr[$idx]['shop_price'] = price_format( $row['shop_price'], FALSE );
				$arr[$idx]['goods_thumb'] = get_image_path( $row['goods_id'], $row['goods_thumb'], TRUE );
				$arr[$idx]['url'] = build_uri( "goods", array(
						"gid" => $row['goods_id']
				), $row['goods_name'] );
		}
		return $arr;
}

function get_rand_comment_img( $type, $count )
{
		$arr = array( );
		$sql = "select c.*, g.goods_id, g.goods_thumb, g.goods_name from ".$GLOBALS['ecs']->table( "comment" )." AS c  LEFT JOIN ".$GLOBALS['ecs']->table( "goods" )." AS g ON c.id_value = g.goods_id where c.comment_type = ".$type." and c.status=1 and c.img <> '' order by RAND() desc limit ".$count;
		$res = $GLOBALS['db']->getAll( $sql );
		foreach ( $res as $idx => $row )
		{
				$arr[$idx]['id_value'] = $row['id_value'];
				$arr[$idx]['user_name'] = get_user_name( $row['id_value'] );
				$arr[$idx]['content'] = $row['content'];
				$arr[$idx]['comment_rank'] = $row['comment_rank'];
				$arr[$idx]['time'] = local_date( "m-d", $row['add_time'] );
				$arr[$idx]['goods_id'] = $row['goods_id'];
				$arr[$idx]['goods_name'] = $row['goods_name'];
				$arr[$idx]['img'] = $row['img'];
				$arr[$idx]['goods_thumb'] = get_image_path( $row['goods_id'], $row['goods_thumb'], TRUE );
				$arr[$idx]['url'] = build_uri( "goods", array(
						"gid" => $row['goods_id']
				), $row['goods_name'] );
		}
		return $arr;
}

function get_flash_xml( )
{
		$flashdb = array( );
		if ( file_exists( ROOT_PATH.DATA_DIR."/flash_data.xml" ) )
		{
				if ( !preg_match_all( "/item_url=\"([^\"]+)\"\\slink=\"([^\"]+)\"\\stext=\"([^\"]*)\"\\ssort=\"([^\"]*)\"/", file_get_contents( ROOT_PATH.DATA_DIR."/flash_data.xml" ), $t, PREG_SET_ORDER ) )
				{
						preg_match_all( "/item_url=\"([^\"]+)\"\\slink=\"([^\"]+)\"\\stext=\"([^\"]*)\"/", file_get_contents( ROOT_PATH.DATA_DIR."/flash_data.xml" ), $t, PREG_SET_ORDER );
				}
				if ( !empty( $t ) )
				{
						$index = 0;
						foreach ( $t as $key => $val )
						{
								++$index;
								$val[4] = isset( $val[4] ) ? $val[4] : 0;
								$flashdb[] = array(
										"src" => $val[1],
										"url" => $val[2],
										"text" => $val[3],
										"sort" => $val[4],
										"index" => $index
								);
						}
				}
		}
		return $flashdb;
}

function get_cat_brands( $cat, $app = "category" )
{
		$children = 0 < $cat ? " AND ".get_children( $cat ) : "";
		$sql = "SELECT b.brand_id, b.brand_name, b.brand_logo, COUNT(g.goods_id) AS goods_num, IF(b.brand_logo > '', '1', '0') AS tag FROM ".$GLOBALS['ecs']->table( "brand" )."AS b, ".$GLOBALS['ecs']->table( "goods" )." AS g ".( "WHERE g.brand_id = b.brand_id ".$children." " )."GROUP BY b.brand_id HAVING goods_num > 0 ORDER BY tag DESC, b.sort_order ASC";
		$row = $GLOBALS['db']->getAll( $sql );
		foreach ( $row as $key => $val )
		{
				$row[$key]['id'] = $val['brand_id'];
				$row[$key]['name'] = $val['brand_name'];
				$row[$key]['logo'] = $val['brand_logo'];
				$row[$key]['url'] = build_uri( $app, array(
						"cid" => $cat,
						"bid" => $val['brand_id']
				), $val['brand_name'] );
		}
		return $row;
}

function get_history( )
{
		$str = "";
		if ( !empty( $_COOKIE['ECS']['history'] ) )
		{
				$where = db_create_in( $_COOKIE['ECS']['history'], "goods_id" );
				$sql = "SELECT goods_id, goods_name, goods_thumb, shop_price FROM ".$GLOBALS['ecs']->table( "goods" ).( " WHERE ".$where." AND is_on_sale = 1 AND is_alone_sale = 1 AND is_delete = 0" );
				$query = $GLOBALS['db']->query( $sql );
				$res = array( );
				while ( $row = $GLOBALS['db']->fetch_array( $query ) )
				{
						$goods['goods_id'] = $row['goods_id'];
						$goods['goods_name'] = $row['goods_name'];
						$goods['short_name'] = 0 < $GLOBALS['_CFG']['goods_name_length'] ? sub_str( $row['goods_name'], $GLOBALS['_CFG']['goods_name_length'] ) : $row['goods_name'];
						$goods['goods_thumb'] = get_image_path( $row['goods_id'], $row['goods_thumb'], TRUE );
						$goods['shop_price'] = price_format( $row['shop_price'] );
						$goods['url'] = build_uri( "goods", array(
								"gid" => $row['goods_id']
						), $row['goods_name'] );
						$res[] = $goods;
				}
		}
		return $res;
}

function get_cat_recommend_goods( $type = "", $cat_id = 0, $cat_num = 0, $brand = 0, $min = 0, $max = 0, $ext = "" )
{
		$brand_where = 0 < $brand ? " AND g.brand_id = '".$brand."'" : "";
		$price_where = 0 < $min ? " AND g.shop_price >= ".$min." " : "";
		$price_where .= 0 < $max ? " AND g.shop_price <= ".$max." " : "";
		$sql = "SELECT g.goods_id, g.goods_name, g.goods_name_style,g.goods_sn,  g.market_price, g.shop_price AS org_price, g.promote_price,g.seller_note,g.is_shipping, ".( "IFNULL(mp.user_price, g.shop_price * '".$_SESSION['discount']."') AS shop_price, " )."(select AVG(r.comment_rank) from ".$GLOBALS['ecs']->table( "comment" )." as r where r.id_value = g.goods_id AND r.comment_type = 0 AND r.parent_id = 0 AND r.status = 1) AS comment_rank, (select IFNULL(sum(og.goods_number), 0) from ".$GLOBALS['ecs']->table( "order_goods" )." as og where og.goods_id = g.goods_id) AS sell_number, promote_start_date, promote_end_date, g.goods_brief, g.goods_thumb, goods_img, b.brand_name,b.brand_id,b.brand_logo FROM ".$GLOBALS['ecs']->table( "goods" )." AS g LEFT JOIN ".$GLOBALS['ecs']->table( "brand" )." AS b ON b.brand_id = g.brand_id LEFT JOIN ".$GLOBALS['ecs']->table( "member_price" )." AS mp ".( "ON mp.goods_id = g.goods_id AND mp.user_rank = '".$_SESSION['user_rank']."' " )."WHERE g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 ".$brand_where.$price_where.$ext;
		$num = 0;
		$type2lib = array( "best" => "recommend_best", "new" => "recommend_new", "hot" => "recommend_hot", "promote" => "recommend_promotion" );
		if ( $cat_num == 0 )
		{
				$num = get_library_number( $type2lib[$type] );
		}
		else
		{
				$num = $cat_num;
		}
		switch ( $type )
		{
		case "best" :
				$sql .= " AND is_best = 1";
				break;
		case "new" :
				$sql .= " AND is_new = 1";
				break;
		case "hot" :
				$sql .= " AND is_hot = 1";
				break;
		case "promote" :
				$time = gmtime( );
				$sql .= " AND is_promote = 1 AND promote_start_date <= '".$time."' AND promote_end_date >= '{$time}'";
		}
		$cats = get_children( $cat_id );
		if ( !empty( $cats ) )
		{
				$sql .= " AND (".$cats." OR ".get_extension_goods( $cats ).")";
		}
		$order_type = $GLOBALS['_CFG']['recommend_order'];
		$sql .= $order_type == 0 ? " ORDER BY g.sort_order, g.last_update DESC" : " ORDER BY RAND()";
		$res = $GLOBALS['db']->selectLimit( $sql, $num );
		$idx = 0;
		$index = 1;
		$goods = array( );
		while ( $row = $GLOBALS['db']->fetchRow( $res ) )
		{
				if ( 0 < $row['promote_price'] )
				{
						$promote_price = bargain_price( $row['promote_price'], $row['promote_start_date'], $row['promote_end_date'] );
						$goods[$idx]['promote_price'] = 0 < $promote_price ? price_format( $promote_price ) : "";
						$goods[$idx]['promote_price2'] = $promote_price;
						$goods[$idx]['saving'] = $row['market_price'] - $promote_price;
				}
				else
				{
						$goods[$idx]['promote_price'] = "";
				}
				++$index;
				$goods[$idx]['i'] = $index;
				$goods[$idx]['id'] = $row['goods_id'];
				$goods[$idx]['name'] = $row['goods_name'];
				$goods[$idx]['goods_sn'] = $row['goods_sn'];
				$goods[$idx]['comment_rank'] = $row['comment_rank'];
				$goods[$idx]['sell_number'] = $row['sell_number'];
				$goods[$idx]['seller_note'] = $row['seller_note'];
				$goods[$idx]['is_new'] = $row['is_new'];
				$goods[$idx]['is_shipping'] = $row['is_shipping'];
				$goods[$idx]['brief'] = $row['goods_brief'];
				$goods[$idx]['brand_name'] = $row['brand_name'];
				$goods[$idx]['brand_id'] = $row['brand_id'];
				$goods[$idx]['brand_logo'] = $row['brand_logo'];
				$goods[$idx]['short_name'] = 0 < $GLOBALS['_CFG']['goods_name_length'] ? sub_str( $row['goods_name'], $GLOBALS['_CFG']['goods_name_length'] ) : $row['goods_name'];
				$goods[$idx]['market_price'] = price_format( $row['market_price'] );
				$goods[$idx]['shop_price'] = price_format( $row['shop_price'] );
				$goods[$idx]['thumb'] = get_image_path( $row['goods_id'], $row['goods_thumb'], TRUE );
				$goods[$idx]['goods_img'] = get_image_path( $row['goods_id'], $row['goods_img'] );
				$goods[$idx]['url'] = build_uri( "goods", array(
						"gid" => $row['goods_id']
				), $row['goods_name'] );
				$goods[$idx]['promote_end_date'] = local_date( "m/d/Y H:i:s", $row['promote_end_date'] );
				$goods[$idx]['promote_end_date2'] = $row['promote_end_date'];
				$goods[$idx]['short_style_name'] = add_style( $goods[$idx]['short_name'], $row['goods_name_style'] );
				++$idx;
		}
		return $goods;
}

function get_article_cat( $tree_id = 0, $num = 0 )
{
		$three_arr = array( );
		$sql = "SELECT count(*) FROM ".$GLOBALS['ecs']->table( "article_cat" ).( " WHERE parent_id = '".$tree_id."'" );
		if ( 0 < $num )
		{
				$where = " limit ".$num;
		}
		if ( $GLOBALS['db']->getOne( $sql ) || $tree_id == 0 )
		{
				$child_sql = "SELECT * FROM ".$GLOBALS['ecs']->table( "article_cat" ).( "WHERE parent_id = '".$tree_id."' ORDER BY sort_order ASC, cat_id ASC {$where}" );
				$res = $GLOBALS['db']->getAll( $child_sql );
				foreach ( $res as $row )
				{
						$three_arr[$row['cat_id']]['id'] = $row['cat_id'];
						$three_arr[$row['cat_id']]['name'] = $row['cat_name'];
				}
		}
		return $three_arr;
}

function get_cat_top_arts( $cat_id, $size = 20 )
{
		if ( $cat_id == "-1" )
		{
				$cat_str = "cat_id > 0";
		}
		else
		{
				$cat_str = get_article_children( $cat_id );
		}
		$sql = "SELECT article_id, title, author, add_time, file_url, description, open_type FROM ".$GLOBALS['ecs']->table( "article" )." WHERE is_open = 1 AND article_type = 1 AND ".$cat_str." ORDER BY article_type DESC, article_id DESC";
		$res = $GLOBALS['db']->selectLimit( $sql, $size );
		$arr = array( );
		while ( $res && ( $row = $GLOBALS['db']->fetchRow( $res ) ) )
		{
				$article_id = $row['article_id'];
				$arr[$article_id]['id'] = $article_id;
				$arr[$article_id]['title'] = $row['title'];
				$arr[$article_id]['file_url'] = $row['file_url'];
				$arr[$article_id]['description'] = $row['description'];
				$arr[$article_id]['short_title'] = 0 < $GLOBALS['_CFG']['article_title_length'] ? sub_str( $row['title'], $GLOBALS['_CFG']['article_title_length'] ) : $row['title'];
				$arr[$article_id]['author'] = empty( $row['author'] ) || $row['author'] == "_SHOPHELP" ? $GLOBALS['_CFG']['shop_name'] : $row['author'];
				$arr[$article_id]['url'] = build_uri( "article", array(
						"aid" => $article_id
				), $row['title'] );
				$arr[$article_id]['add_time'] = date( $GLOBALS['_CFG']['date_format'], $row['add_time'] );
		}
		return $arr;
}

function get_cat_arts( $cat_id, $size = 20 )
{
		if ( $cat_id == "-1" )
		{
				$cat_str = "cat_id > 0";
		}
		else
		{
				$cat_str = get_article_children( $cat_id );
		}
		$sql = "SELECT article_id, title, author, add_time, file_url, description, open_type FROM ".$GLOBALS['ecs']->table( "article" )." WHERE is_open = 1 AND ".$cat_str." ORDER BY article_type DESC, article_id DESC";
		$res = $GLOBALS['db']->selectLimit( $sql, $size );
		$arr = array( );
		while ( $res && ( $row = $GLOBALS['db']->fetchRow( $res ) ) )
		{
				$article_id = $row['article_id'];
				$arr[$article_id]['id'] = $article_id;
				$arr[$article_id]['title'] = $row['title'];
				$arr[$article_id]['file_url'] = $row['file_url'];
				$arr[$article_id]['description'] = $row['description'];
				$arr[$article_id]['short_title'] = 0 < $GLOBALS['_CFG']['article_title_length'] ? sub_str( $row['title'], $GLOBALS['_CFG']['article_title_length'] ) : $row['title'];
				$arr[$article_id]['author'] = empty( $row['author'] ) || $row['author'] == "_SHOPHELP" ? $GLOBALS['_CFG']['shop_name'] : $row['author'];
				$arr[$article_id]['url'] = build_uri( "article", array(
						"aid" => $article_id
				), $row['title'] );
				$arr[$article_id]['add_time'] = date( $GLOBALS['_CFG']['date_format'], $row['add_time'] );
		}
		return $arr;
}

function get_linked_arts( $goods_id )
{
		$sql = "SELECT a.article_id, a.title, a.file_url, a.open_type,file_url, description, a.add_time FROM ".$GLOBALS['ecs']->table( "goods_article" )." AS g, ".$GLOBALS['ecs']->table( "article" )." AS a ".( "WHERE g.article_id = a.article_id AND g.goods_id = '".$goods_id."' AND a.is_open = 1 " )."ORDER BY a.add_time DESC";
		$res = $GLOBALS['db']->selectLimit( $sql, 4 );
		$arr = array( );
		while ( $row = $GLOBALS['db']->fetchRow( $res ) )
		{
				$row['url'] = $row['open_type'] != 1 ? build_uri( "article", array(
						"aid" => $row['article_id']
				), $row['title'] ) : trim( $row['file_url'] );
				$row['file_url'] = $row['file_url'];
				$row['description'] = $row['description'];
				$row['add_time'] = local_date( $GLOBALS['_CFG']['date_format'], $row['add_time'] );
				$row['short_title'] = 0 < $GLOBALS['_CFG']['article_title_length'] ? sub_str( $row['title'], $GLOBALS['_CFG']['article_title_length'] ) : $row['title'];
				$arr[] = $row;
		}
		return $arr;
}

function get_hotcate( $num = 0, $rtype = "" )
{
		$sql = "SELECT cat_id,cat_name,parent_id FROM ".$GLOBALS['ecs']->table( "category" )." WHERE cat_id in (SELECT DISTINCT cat_id FROM ".$GLOBALS['ecs']->table( "cat_recommend" )." WHERE is_show=1 ";
		if ( $rtype == "best" )
		{
				$sql .= "AND recommend_type=1)";
		}
		else if ( $rtype == "new" )
		{
				$sql .= "AND recommend_type=2)";
		}
		else if ( $rtype == "hot" )
		{
				$sql .= "AND recommend_type=3)";
		}
		else
		{
				$sql .= "AND recommend_type in (1,2,3))";
		}
		$sql .= " ORDER BY sort_order ASC";
		if ( 0 < $num )
		{
				$sql .= " LIMIT ".$num;
		}
		$res = $GLOBALS['db']->getAll( $sql );
		foreach ( $res as $key => $val )
		{
				$arr[$key]['id'] = $val['cat_id'];
				$arr[$key]['name'] = $val['cat_name'];
				$arr[$key]['url'] = build_uri( "category", array(
						"cid" => $val['cat_id']
				), $val['cat_name'] );
		}
		return $arr;
}

function get_advlist( $position, $num = 0 )
{
		$arr = array( );
		$limit_string = "";
		if ( 0 < $num )
		{
				$limit_string = "limit ".$num;
		}
		$sql = "select ap.ad_width,ap.ad_height,ad.ad_id,ad.ad_name,ad.ad_code,ad.ad_link,ad.ad_id from ".$GLOBALS['ecs']->table( "ad_position" )." as ap left join ".$GLOBALS['ecs']->table( "ad" )." as ad on ad.position_id = ap.position_id where ap.position_name='".$position.( "' and UNIX_TIMESTAMP()>ad.start_time and UNIX_TIMESTAMP()<ad.end_time and ad.enabled=1 ".$limit_string );
		$res = $GLOBALS['db']->getAll( $sql );
		foreach ( $res as $idx => $row )
		{
				$arr[$row['ad_id']]['name'] = $row['ad_name'];
				$arr[$row['ad_id']]['url'] = "affiche.php?ad_id=".$row['ad_id']."&uri=".$row['ad_link'];
				$arr[$row['ad_id']]['image'] = "data/afficheimg/".$row['ad_code'];
				$arr[$row['ad_id']]['ad_code'] = $row['ad_code'];
				$arr[$row['ad_id']]['content'] = "<a href='".$arr[$row['ad_id']]['url']."' title='".$row['ad_name']."' target='_blank'><img src='data/afficheimg/".$row['ad_code']."' title='".$row['ad_name']."' alt='".$row['ad_name']."'/></a>";
		}
		return $arr;
}

function get_advs( $position, $num = 0 )
{
		$arr = array( );
		$limit_string = "";
		if ( 0 < $num )
		{
				$limit_string = "limit ".$num;
		}
		$sql = "select ap.ad_width,ap.ad_height,ad.ad_id,ad.ad_name,ad.ad_code,ad.ad_link,ad.ad_id from ".$GLOBALS['ecs']->table( "ad_position" )." as ap left join ".$GLOBALS['ecs']->table( "ad" )." as ad on ad.position_id = ap.position_id where ap.position_name='".$position.( "' and UNIX_TIMESTAMP()>ad.start_time and UNIX_TIMESTAMP()<ad.end_time and ad.enabled=1 ".$limit_string );
		$res = $GLOBALS['db']->getAll( $sql );
		foreach ( $res as $idx => $row )
		{
				$arr[$row['ad_id']]['name'] = $row['ad_name'];
				$arr[$row['ad_id']]['url'] = $row['ad_link'];
				$arr[$row['ad_id']]['image'] = "data/afficheimg/".$row['ad_code'];
				$arr[$row['ad_id']]['ad_code'] = $row['ad_code'];
				$arr[$row['ad_id']]['content'] = "<a href='".$arr[$row['ad_id']]['url']."' target='_blank'><img src='data/afficheimg/".$row['ad_code']."' width='".$row['ad_width']."' height='".$row['ad_height']."' /></a>";
		}
		return $arr;
}

function get_hotcate_tree( $rtype = "hot" )
{
		$parent_id = 0;
		$sql = "SELECT count(*) FROM ".$GLOBALS['ecs']->table( "category" ).( " WHERE parent_id = '".$parent_id."' AND is_show = 1 " );
		if ( $GLOBALS['db']->getOne( $sql ) || $parent_id == 0 )
		{
				$sql = "SELECT cat_id,cat_name ,parent_id,is_show FROM ".$GLOBALS['ecs']->table( "category" ).( "WHERE parent_id = '".$parent_id."' AND is_show = 1 ORDER BY sort_order ASC, cat_id ASC" );
				$res = $GLOBALS['db']->getAll( $sql );
				foreach ( $res as $row )
				{
						if ( $row['is_show'] )
						{
								$cat_arr[$row['cat_id']]['id'] = $row['cat_id'];
								$cat_arr[$row['cat_id']]['name'] = $row['cat_name'];
								$cat_arr[$row['cat_id']]['url'] = build_uri( "category", array(
										"cid" => $row['cat_id']
								), $row['cat_name'] );
								if ( isset( $row['cat_id'] ) != NULL )
								{
										$hotcat = get_hotcate( 0, $rtype );
										if ( $hotcat )
										{
												foreach ( $hotcat as $key => $val )
												{
														$pid = get_top_parentid( $val['id'], "index" );
														$hpid = $pid['cate_parentid'];
														if ( !( $hpid == $cat_arr[$row['cat_id']]['id'] ) && !( $val['id'] != $cat_arr[$row['cat_id']]['id'] ) )
														{
																$cat_arr[$row['cat_id']]['cat_id'][$key] = $val;
														}
												}
										}
								}
						}
				}
		}
		if ( isset( $cat_arr ) )
		{
				return $cat_arr;
		}
}

function get_top_parentid( $id = 0, $type = "" )
{
		if ( 0 < $id && $type != "" )
		{
				if ( $type == "goods" )
				{
						$sql = "SELECT cat_id FROM ".$GLOBALS['ecs']->table( "goods" )." WHERE goods_id=".$id;
						$id = $GLOBALS['db']->getOne( $sql );
						$res['goods_parentid'] = $id;
				}
				while ( $id )
				{
						$sql = "SELECT\tcat_id,parent_id FROM ".$GLOBALS['ecs']->table( "category" )." WHERE cat_id=".$id;
						$cat = $GLOBALS['db']->getRow( $sql );
						$id = $cat['parent_id'];
				}
				$res['cate_parentid'] = $cat['cat_id'];
				return $res;
		}
		return FALSE;
}

function insert_cart_data( )
{
		$cart = get_cart_data( );
		$list = $cart['goods_list'];
		$total = $cart_goods['total'];
		$str = "";
		if ( $list )
		{
				$total_price = 0;
				$total_count = 0;
				$str .= "<ul style=\"\">";
				foreach ( $list as $item )
				{
						if ( $item['extension_code'] == "package_buy" )
						{
								$index = 2;
								foreach ( $item['package_goods_list'] as $packitem )
								{
										if ( $index == 2 )
										{
												$img_src = get_goods_thumb( $packitem['goods_id'] );
										}
										$index += 2;
								}
						}
						else
						{
								$img_src = $item['goods_thumb'] == "" ? "images/blank.gif" : $item['goods_thumb'];
						}
						$total_count += $item['goods_number'];
						$str .= "<li class=\"clearfix\"><a href=\"goods.php?id=".$item['goods_id']."\" class=\"pic\"><img alt=\"\" src=\"".$img_src."\"></a><a href=\"goods.php?id=".$item['goods_id']."\" class=\"name\">".$item['short_name']."</a><span class=\"price\">".$item['goods_price']." x ".$item['goods_number']."</span><a class=\"btn-del delItem\" href=\"javascript:drop_cart_goods(".$item['rec_id'].");\" ><i class=\"iconfont\">&#xe607;</i></a></li>";
				}
				$total_price = price_format( $item['total_price'], FALSE );
				$str .= "<div class=\"count clearfix\"><span class=\"total\">共计 <em>".$total_count."</em> 件商品<strong>合计：<em>".$total_price."</em></strong></span><a href=\"flow.php\"  class=\"btn btn-primary\">去购物车结算</a></div>";
				return $str;
		}
		$str = "<p class=\"loading\">购物车中还没有商品，赶紧选购吧！</p>";
		return $str;
}
?>
