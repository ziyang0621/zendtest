<?php
function get_advlist_by_id( $id )
{
		switch ( $id )
		{
		case 1 :
				return get_advlist( "手机版首页-轮播广告", 10 );
		case 2 :
				return get_advlist( "手机版首页-中间广告", 5 );
		case 3 :
				return get_advlist( "手机版首页-特惠广告", 1 );
		case 4 :
				return get_advlist( "手机版首页-新品广告", 1 );
		case 5 :
				return get_advlist( "手机版首页-底部版权", 1 );
		}
}

function get_left_advlist_by_cat_id( $id )
{
		return get_advlist( "手机版首页-分类ID".$id."-图片广告", 1 );
}

function get_article_cat_5( $id )
{
		return get_article_cat( $id, 5 );
}

function get_cat_arts_2( $id )
{
		return get_cat_arts( $id, 2 );
}

function get_cat_new_goods( $id )
{
		return get_cat_recommend_goods( "new", $id, 2 );
}

function get_cat_new_goods_5( $id )
{
		return get_cat_recommend_goods( "new", $id, 5 );
}

function get_cat_promote_goods( $id )
{
		return get_cat_recommend_goods( "promote", $id, 2 );
}

function get_cat_best_goods( $id )
{
		return get_cat_recommend_goods( "best", $id, 4 );
}

function get_cat_hot_goods( $id )
{
		return get_cat_recommend_goods( "hot", $id, 4 );
}

function get_new_comment_4( $type )
{
		return get_new_comment( $type, 4 );
}

function insert_article_content_23( )
{
		return insert_article_content( 23 );
}

function insert_brand_logo( $arr )
{
		if ( $arr['id'] == NULL )
		{
				return "";
		}
		$sql = "select brand_logo from ".$GLOBALS['ecs']->table( "brand" )." where brand_id = ".$arr['id']."";
		return $GLOBALS['db']->getOne( $sql );
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

function insert_goods_save_rate( $arr )
{
		if ( $arr['id'] == NULL )
		{
				return 0;
		}
		$goods_id = $arr['id'];
		$sql = "select goods_brief, brand_id,is_best,is_new,is_hot,is_promote, promote_start_date, promote_end_date, promote_price, shop_price, market_price, click_count, goods_thumb from ".$GLOBALS['ecs']->table( "goods" )." where goods_id = ".$goods_id;
		$row = $GLOBALS['db']->GetRow( $sql );
		$is_promote = $row['is_promote'];
		$shop_price = 0 < intval( $row['promote_price'] ) ? $row['promote_price'] : $row['shop_price'];
		$market_price = round( $row['market_price'] );
		$save_rate = $market_price ? round( $shop_price / $market_price, 2 ) * 10 : 0;
		return $save_rate;
}

function insert_goods_save( $arr )
{
		if ( $arr['id'] == NULL )
		{
				return 0;
		}
		$goods_id = $arr['id'];
		$sql = "select goods_brief, brand_id,is_best,is_new,is_hot,is_promote, promote_start_date, promote_end_date, promote_price, shop_price, market_price, click_count, goods_thumb from ".$GLOBALS['ecs']->table( "goods" )." where goods_id = ".$goods_id;
		$row = $GLOBALS['db']->GetRow( $sql );
		$is_promote = $row['is_promote'];
		$shop_price = 0 < intval( $row['promote_price'] ) ? $row['promote_price'] : $row['shop_price'];
		$market_price = round( $row['market_price'] );
		$save = $market_price ? $market_price - $shop_price : 0;
		return price_format( $save );
}

function insert_goods_is_shipping( $arr )
{
		if ( $arr['id'] == NULL )
		{
				return 0;
		}
		$goods_id = $arr['id'];
		$sql = "select is_shipping from ".$GLOBALS['ecs']->table( "goods" )." where goods_id = ".$goods_id;
		$row = $GLOBALS['db']->GetRow( $sql );
		$is_shipping = $row['is_shipping'];
		$str = "";
		if ( $is_shipping )
		{
				$str = "<span class=\"free_shipping_ico\">&nbsp;</span>";
		}
		return $str;
}

function insert_goods_keywords( $arr )
{
		if ( $arr['id'] == NULL )
		{
				return 0;
		}
		$goods_id = $arr['id'];
		$sql = "select keywords from ".$GLOBALS['ecs']->table( "goods" )." where goods_id = ".$goods_id;
		$row = $GLOBALS['db']->GetRow( $sql );
		$keywords = $row['keywords'];
		$str = "";
		if ( $keywords )
		{
				$key = explode( " ", $keywords );
				$index = 0;
				for ( ;	$index < count( $key );	++$index	)
				{
						$str .= "<span>".$key[$index]."</span>";
				}
		}
		return $str;
}

function insert_goods_total_sells( $arr )
{
		if ( $arr['id'] == NULL )
		{
				return 0;
		}
		$goods_id = $arr['id'];
		$sql = "select IFNULL(sum(og.goods_number), 0) as total_sells from ".$GLOBALS['ecs']->table( "order_goods" )." as og where og.goods_id = ".$goods_id;
		$row = $GLOBALS['db']->GetRow( $sql );
		$total_sells = $row['total_sells'];
		return $total_sells;
}

function get_brand_goods( $brand_id, $num = 0, $cat_id = 0, $order_rule = "" )
{
		$sql = "SELECT g.goods_id, g.goods_name, g.market_price, g.shop_price AS org_price, ".( "IFNULL(mp.user_price, g.shop_price * '".$_SESSION['discount']."') AS shop_price, " )."(select IFNULL(sum(og.goods_number), 0) from ".$GLOBALS['ecs']->table( "order_goods" )." as og where og.goods_id = g.goods_id) AS sell_number, g.promote_price, g.promote_start_date, g.promote_end_date, g.goods_brief, g.goods_thumb, g.goods_img FROM ".$GLOBALS['ecs']->table( "goods" )." AS g LEFT JOIN ".$GLOBALS['ecs']->table( "member_price" )." AS mp ".( "ON mp.goods_id = g.goods_id AND mp.user_rank = '".$_SESSION['user_rank']."' " ).( "WHERE g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 AND g.brand_id = '".$brand_id."'" );
		if ( 0 < $cat_id )
		{
				$sql .= get_children( $cat_id );
		}
		$order_rule = empty( $order_rule ) ? " ORDER BY g.sort_order, g.goods_id DESC" : $order_rule;
		$sql .= $order_rule;
		if ( 0 < $num )
		{
				$res = $GLOBALS['db']->selectLimit( $sql, $num );
		}
		else
		{
				$res = $GLOBALS['db']->query( $sql );
		}
		$idx = 0;
		$goods = array( );
		while ( $row = $GLOBALS['db']->fetchRow( $res ) )
		{
				if ( 0 < $row['promote_price'] )
				{
						$promote_price = bargain_price( $row['promote_price'], $row['promote_start_date'], $row['promote_end_date'] );
				}
				else
				{
						$promote_price = 0;
				}
				$goods[$idx]['id'] = $row['goods_id'];
				$goods[$idx]['name'] = $row['goods_name'];
				$goods[$idx]['short_name'] = 0 < $GLOBALS['_CFG']['goods_name_length'] ? sub_str( $row['goods_name'], $GLOBALS['_CFG']['goods_name_length'] ) : $row['goods_name'];
				$goods[$idx]['market_price'] = price_format( $row['market_price'] );
				$goods[$idx]['shop_price'] = price_format( $row['shop_price'] );
				$goods[$idx]['promote_price'] = 0 < $promote_price ? price_format( $promote_price ) : "";
				$goods[$idx]['brief'] = $row['goods_brief'];
				$goods[$idx]['thumb'] = get_image_path( $row['goods_id'], $row['goods_thumb'], TRUE );
				$goods[$idx]['goods_img'] = get_image_path( $row['goods_id'], $row['goods_img'] );
				$goods[$idx]['url'] = build_uri( "goods", array(
						"gid" => $row['goods_id']
				), $row['goods_name'] );
				++$idx;
		}
		$sql = "SELECT brand_name FROM ".$GLOBALS['ecs']->table( "brand" ).( " WHERE brand_id = '".$brand_id."'" );
		$brand['id'] = $brand_id;
		$brand['name'] = $GLOBALS['db']->getOne( $sql );
		$brand['url'] = build_uri( "brand", array(
				"bid" => $brand_id
		), $brand['name'] );
		$brand_goods = array(
				"brand" => $brand,
				"goods" => $goods
		);
		return $brand_goods;
}

function get_cat_goods( $cat_id, $num = 0, $from = "web", $order_rule = "", $brand, $min, $max, $ext )
{
		$children = get_children( $cat_id );
		$where = " ";
		if ( 0 < $brand )
		{
				$where .= "AND g.brand_id=".$brand." ";
		}
		if ( 0 < $min )
		{
				$where .= " AND g.shop_price >= ".$min." ";
		}
		if ( 0 < $max )
		{
				$where .= " AND g.shop_price <= ".$max." ";
		}
		$sql = "SELECT g.goods_id, g.goods_name, g.market_price, g.shop_price AS org_price,g.click_count, ".( "IFNULL(mp.user_price, g.shop_price * '".$_SESSION['discount']."') AS shop_price, " )."(select IFNULL(sum(og.goods_number), 0) from ".$GLOBALS['ecs']->table( "order_goods" )." as og where og.goods_id = g.goods_id) AS sell_number, g.promote_price, promote_start_date, promote_end_date, g.goods_brief, g.goods_thumb, g.goods_img FROM ".$GLOBALS['ecs']->table( "goods" )." AS g LEFT JOIN ".$GLOBALS['ecs']->table( "member_price" )." AS mp ".( "ON mp.goods_id = g.goods_id AND mp.user_rank = '".$_SESSION['user_rank']."' " )."WHERE g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 AND (".$children."OR ".get_extension_goods( $children ).") ".$where;
		$order_rule = empty( $order_rule ) ? "ORDER BY g.sort_order, g.goods_id DESC" : $order_rule;
		$sql .= $order_rule;
		if ( 0 < $num )
		{
				$sql .= " LIMIT ".$num;
		}
		$res = $GLOBALS['db']->getAll( $sql );
		$goods = array( );
		foreach ( $res as $idx => $row )
		{
				if ( 0 < $row['promote_price'] )
				{
						$promote_price = bargain_price( $row['promote_price'], $row['promote_start_date'], $row['promote_end_date'] );
						$goods[$idx]['promote_price'] = 0 < $promote_price ? price_format( $promote_price ) : "";
				}
				else
				{
						$goods[$idx]['promote_price'] = "";
				}
				$goods[$idx]['id'] = $row['goods_id'];
				$goods[$idx]['name'] = $row['goods_name'];
				$goods[$idx]['brief'] = $row['goods_brief'];
				$goods[$idx]['market_price'] = price_format( $row['market_price'] );
				$goods[$idx]['short_name'] = 0 < $GLOBALS['_CFG']['goods_name_length'] ? sub_str( $row['goods_name'], $GLOBALS['_CFG']['goods_name_length'] ) : $row['goods_name'];
				$goods[$idx]['shop_price'] = price_format( $row['shop_price'] );
				$goods[$idx]['thumb'] = get_image_path( $row['goods_id'], $row['goods_thumb'], TRUE );
				$goods[$idx]['goods_img'] = get_image_path( $row['goods_id'], $row['goods_img'] );
				$goods[$idx]['url'] = build_uri( "goods", array(
						"gid" => $row['goods_id']
				), $row['goods_name'] );
		}
		if ( $from == "web" )
		{
				$GLOBALS['smarty']->assign( "cat_goods_".$cat_id, $goods );
		}
		else if ( $from == "wap" )
		{
				$cat['goods'] = $goods;
		}
		$sql = "SELECT cat_name FROM ".$GLOBALS['ecs']->table( "category" ).( " WHERE cat_id = '".$cat_id."'" );
		$cat['name'] = $GLOBALS['db']->getOne( $sql );
		$cat['url'] = build_uri( "category", array(
				"cid" => $cat_id
		), $cat['name'] );
		$cat['id'] = $cat_id;
		return $cat;
}

function insert_cart_html( )
{
		$sql = "SELECT SUM(goods_number) AS number, SUM(goods_price * goods_number) AS amount FROM ".$GLOBALS['ecs']->table( "cart" )." WHERE session_id = '".SESS_ID."' AND rec_type = '".CART_GENERAL_GOODS."'";
		$row = $GLOBALS['db']->GetRow( $sql );
		if ( $row )
		{
				$number = intval( $row['number'] );
				$amount = floatval( $row['amount'] );
		}
		else
		{
				$number = 0;
				$amount = 0;
		}
		if ( $number != 0 )
		{
				$str = "<span class=\"ctip\">".$number."</span>";
		}
		return $str;
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
								$three_arr[$row['cat_id']]['url'] = build_uri( "category", array(
										"cid" => $row['cat_id']
								), $row['cat_name'] );
						}
				}
		}
		return $three_arr;
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

function is_top_cat_id( $nid )
{
		$sql = "select parent_id from ".$GLOBALS['ecs']->table( "category" )." where cat_id = ".$nid."";
		$pid = $GLOBALS['db']->getOne( $sql );
		if ( $pid == 0 )
		{
				return TRUE;
		}
		return FALSE;
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

function get_new_comment( $type, $count )
{
		$arr = array( );
		$sql = "select c.*, g.goods_id, g.goods_thumb, g.goods_name from ".$GLOBALS['ecs']->table( "comment" )." AS c  LEFT JOIN ".$GLOBALS['ecs']->table( "goods" )." AS g ON c.id_value = g.goods_id where c.comment_type = ".$type." and c.status=1 order by c.add_time desc limit ".$count;
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
				$arr[$idx]['goods_thumb'] = get_image_path( $row['goods_id'], $row['goods_thumb'], TRUE );
				$arr[$idx]['url'] = build_uri( "goods", array(
						"gid" => $row['goods_id']
				), $row['goods_name'] );
		}
		return $arr;
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
		$sql = "SELECT g.goods_id, g.goods_name, g.goods_name_style,g.goods_sn,  g.market_price, g.shop_price AS org_price, g.promote_price,g.seller_note, ".( "IFNULL(mp.user_price, g.shop_price * '".$_SESSION['discount']."') AS shop_price, " )."(select AVG(r.comment_rank) from ".$GLOBALS['ecs']->table( "comment" )." as r where r.id_value = g.goods_id AND r.comment_type = 0 AND r.parent_id = 0 AND r.status = 1) AS comment_rank, (select IFNULL(sum(og.goods_number), 0) from ".$GLOBALS['ecs']->table( "order_goods" )." as og where og.goods_id = g.goods_id) AS sell_number, promote_start_date, promote_end_date, g.goods_brief, g.goods_thumb, goods_img, b.brand_name,b.brand_id,b.brand_logo FROM ".$GLOBALS['ecs']->table( "goods" )." AS g LEFT JOIN ".$GLOBALS['ecs']->table( "brand" )." AS b ON b.brand_id = g.brand_id LEFT JOIN ".$GLOBALS['ecs']->table( "member_price" )." AS mp ".( "ON mp.goods_id = g.goods_id AND mp.user_rank = '".$_SESSION['user_rank']."' " )."WHERE g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 ".$brand_where.$price_where.$ext;
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
				$goods[$idx]['id'] = $row['goods_id'];
				$goods[$idx]['name'] = $row['goods_name'];
				$goods[$idx]['goods_sn'] = $row['goods_sn'];
				$goods[$idx]['comment_rank'] = $row['comment_rank'];
				$goods[$idx]['sell_number'] = $row['sell_number'];
				$goods[$idx]['seller_note'] = $row['seller_note'];
				$goods[$idx]['is_new'] = $row['is_new'];
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
		else if ( $type == "hot" )
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
				$arr[$row['ad_id']]['url'] = $row['ad_link'];
				$arr[$row['ad_id']]['image'] = "/data/afficheimg/".$row['ad_code'];
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
				if ( $rtype == "best" )
				{
						$where .= " AND recommend_type=1 ";
				}
				else if ( $rtype == "new" )
				{
						$where .= " AND recommend_type=2 ";
				}
				else if ( $type == "hot" )
				{
						$where .= " AND recommend_type=3 ";
				}
				else
				{
						$where .= " AND recommend_type in (1,2,3) ";
				}
				$sql = "SELECT cat_id,cat_name ,parent_id,is_show FROM ".$GLOBALS['ecs']->table( "category" ).( "WHERE parent_id = '".$parent_id."' AND is_show = 1 AND cat_id in (SELECT DISTINCT cat_id FROM " ).$GLOBALS['ecs']->table( "cat_recommend" ).( " WHERE is_show=1 ".$where." ) ORDER BY sort_order ASC, cat_id ASC" );
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

/*$host_name = $_SERVER['HTTP_HOST'];
$web_name = array( "azg2.test.com", "xm.58ecshop.com", "xm.58ecshop.com", "127.0.0.1", "localhost" );
if ( !in_array( $host_name, $web_name ) )
{
		exit( "err" );
}*/
?>
