<?php

/**
* ECSHOP 支付宝转账付款插件
* ============================================================================
* 版权所有 2005-2008 上海商派网络科技有限公司，并保留所有权利。
* 网站地址: http://www.ecshop.com；
* ----------------------------------------------------------------------------
* 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
* 使用；不允许对程序代码以任何形式任何目的的再发布。
* ============================================================================
* @author:     ECSHOP插件网 <zhen-an.taobao.com>
* @version:    v1.0
* ---------------------------------------------
*/

if (!defined('IN_ECS'))
{
die('Hacking attempt');
}

$payment_lang = ROOT_PATH . 'languages/' .$GLOBALS['_CFG']['lang']. '/payment/alipay_twd.php';

if (file_exists($payment_lang))
{
global $_LANG;

include_once($payment_lang);
}

/* 模块的基本信息 */
if (isset($set_modules) && $set_modules == TRUE)
{
$i = isset($modules) ? count($modules) : 0;

/* 代码 */
$modules[$i]['code']    = basename(__FILE__, '.php');

/* 描述对应的语言项 */
$modules[$i]['desc']    = 'alipay_desc';

/* 是否支持货到付款 */
$modules[$i]['is_cod']  = '0';

/* 是否支持在线支付 */
$modules[$i]['is_online']  = '1';

/* 作者 */
$modules[$i]['author']  = '第九购物';

/* 网址 */
$modules[$i]['website'] = 'http://cyao.taobao.com';

/* 版本号 */
$modules[$i]['version'] = '1.0';

/* 配置信息 */
$modules[$i]['config']  = array(
array('name' => 'alipay_account',        'type' => 'text',   'value' => ''),
array('name' => 'alipay_memo',           'type' => 'text',   'value' => ''),
array('name' => 'alipay_smsNo',          'type' => 'text',   'value' => ''),
array('name' => 'alipay_pay_sms',        'type' => 'select', 'value' => '')
);

return;
}

/**
* 类
*/
class alipay_twd
{

function get_code($order, $payment)
{
$button  = '<div style="text-align:center">';
$button .= "<form method=post accept-charset=gbk action='https://shenghuo.alipay.com/send/payment/fill.htm' target='_blank'>";
$button .= "<input type='hidden' name='optEmail' value='".$payment['alipay_account']."'>";  //收款人支付宝帐户
$button .= "<input type='hidden' name='payAmount' value='".$order['order_amount']."'>";     //付款金额
$button .= "<input type='hidden' name='title' value='Dingdan:".$order['order_sn']."'>";      //付款说明
if (!empty($order['postscript'])){
$button .= "<input type='hidden' name='memo' value='".$order['postscript']."'>";            //订单附言
}else{
$button .= "<input type='hidden' name='memo' value='".$payment['alipay_memo']."'>";         //备注
}
$button .= "<input type='hidden' name='isSend' value='".$payment['alipay_pay_sms']."'>"; //是否勾选免费