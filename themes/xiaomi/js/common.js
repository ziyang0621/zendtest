


function openSpeDiv(message, goods_id, parent) 
{
  var newDiv = document.createElement("div");	
	//生成层内内容
  newDiv.innerHTML = '<div class="clearfix title"><div class="Left"><i style="display:inline-block;"></i><span id="JS_addtocart_lb_title">请选择商品属性</span></div></div>';

  for (var spec = 0; spec < message.length; spec++)
  {
      newDiv.innerHTML += '<hr style="color: #EBEBED; height:1px;"><h6 style="text-align:left; background:#ffffff; margin-left:15px;">' +  message[spec]['name'] + '</h6>';

      if (message[spec]['attr_type'] == 1)
      {
        for (var val_arr = 0; val_arr < message[spec]['values'].length; val_arr++)
        {
          if (val_arr == 0)
          {
            newDiv.innerHTML += "<input style='margin-left:15px;' type='radio' name='spec_" + message[spec]['attr_id'] + "' value='" + message[spec]['values'][val_arr]['id'] + "' id='spec_value_" + message[spec]['values'][val_arr]['id'] + "' checked /><font color=#555555>" + message[spec]['values'][val_arr]['label'] + '</font> [' + message[spec]['values'][val_arr]['format_price'] + ']</font><br />';      
          }
          else
          {
            newDiv.innerHTML += "<input style='margin-left:15px;' type='radio' name='spec_" + message[spec]['attr_id'] + "' value='" + message[spec]['values'][val_arr]['id'] + "' id='spec_value_" + message[spec]['values'][val_arr]['id'] + "' /><font color=#555555>" + message[spec]['values'][val_arr]['label'] + '</font> [' + message[spec]['values'][val_arr]['format_price'] + ']</font><br />';      
          }
        } 
        newDiv.innerHTML += "<input type='hidden' name='spec_list' value='" + val_arr + "' />";
      }
      else
      {
        for (var val_arr = 0; val_arr < message[spec]['values'].length; val_arr++)
        {
          newDiv.innerHTML += "<input style='margin-left:15px;' type='checkbox' name='spec_" + message[spec]['attr_id'] + "' value='" + message[spec]['values'][val_arr]['id'] + "' id='spec_value_" + message[spec]['values'][val_arr]['id'] + "' /><font color=#555555>" + message[spec]['values'][val_arr]['label'] + ' [' + message[spec]['values'][val_arr]['format_price'] + ']</font><br />';     
        }
        newDiv.innerHTML += "<input type='hidden' name='spec_list' value='" + val_arr + "' />";
      }
  }

  
  
  
}

function submit_div(goods_id, parentId) 
{
  var goods        = new Object();
  var spec_arr     = new Array();
  var fittings_arr = new Array();
  var number       = 1;
  var input_arr      = document.getElementsByTagName('input'); 
  var quick		   = 1;

  var spec_arr = new Array();
  var j = 0;

  for (i = 0; i < input_arr.length; i ++ )
  {
    var prefix = input_arr[i].name.substr(0, 5);

    if (prefix == 'spec_' && (
      ((input_arr[i].type == 'radio' || input_arr[i].type == 'checkbox') && input_arr[i].checked)))
    {
      spec_arr[j] = input_arr[i].value;
      j++ ;
    }
  }

  goods.quick    = quick;
  goods.spec     = spec_arr;
  goods.goods_id = goods_id;
  goods.number   = number;
  goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);
  
  $.ajax({
					type:"POST",
					url:"flow.php?step=add_to_cart",
					cache:false,
					dataType:'json',     //接受数据格式
					data:'goods=' + $.toJSON(goods),
					success:addToCartResponse
				});


  


}

function getmousepos(e){
  var pos = mousePos(e);
	document.minileft = pos.x;
	document.minitop = pos.y;
}
/*获取鼠标坐标*/
function mousePos(e){
        var x,y;
        e = e || window.event;
        return {
        x:e.pageX||(e.clientX?e.clientX+(document.documentElement.scrollLeft?document.documentElement.scrollLeft:document.body.scrollLeft):0),
        y:e.pageY||(e.clientY?e.clientY+(document.documentElement.scrollTop?document.documentElement.scrollTop:document.body.scrollTop):0)
        };
}


function addToCart(goodsId, parentId)
{
  var goods        = new Object();
  var spec_arr     = new Array();
  var fittings_arr = new Array();
  var number       = 1;
  var formBuy      = document.forms['ECS_FORMBUY'];
  var quick		   = 0;

  // 检查是否有商品规格 
  if (formBuy)
  {
    spec_arr = getSelectedAttributes(formBuy);

    if (formBuy.elements['number'])
    {
      number = formBuy.elements['number'].value;
    }

	quick = 1;
  }

  goods.quick    = quick;
  goods.spec     = spec_arr;
  goods.goods_id = goodsId;
  goods.number   = number;
  goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);
  
  
 
  $.ajax({
					type:"POST",
					url:"flow.php?step=add_to_cart",
					cache:false,
					dataType:'json',     //接受数据格式
					data:'goods=' + $.toJSON(goods),
					success:addToCartResponse
				});
  
  if(document.getElementById("shoploading")){
		document.getElementById("shoploading").style.display = "block";
  }
  if(document.getElementById("shopbox")){
		document.getElementById("shopbox").style.display = "block";
		document.getElementById("shopbox").style.top = document.minitop+"px";
		document.getElementById("shopbox").style.left = (document.minileft-300)+"px";
  }
}
function addToCartResponse(result)
{
  if (result.error > 0)
  {
    // 如果需要缺货登记，跳转
    if (result.error == 2)
    {
      if (confirm(result.message))
      {
        location.href = 'user.php?act=add_booking&id=' + result.goods_id + '&spec=' + result.product_spec;
      }
    }
    // 没选规格，弹出属性选择框
    else if (result.error == 6)
    {
      openSpeDiv(result.message, result.goods_id, result.parent);
    }
    else
    {
      //alert(result.message);
    }
  }
  else
  {
	    
		if(document.getElementById("shopboxcount")&&result.goods_number){
			document.getElementById("shopboxcount").innerHTML = result.goods_number;
		}
		if(document.getElementById("shopboxprice")&&result.goods_price){
			document.getElementById("shopboxprice").innerHTML = result.goods_price;
		}
		if(document.getElementById("fuckprice")&&result.goods_price){
			document.getElementById("fuckprice").innerHTML = result.goods_price;
		}
		if(document.getElementById("shoploading")){
			document.getElementById("shoploading").style.display = "none";
		}
			
		$('.J_cartNum').html('(' + result.goods_number + ')');
		
		
		
		$.ajax({
					type:"POST",
					url:"flow.php?step=get_cart_list",
					cache:false,
					dataType:'json',     //接受数据格式
					data:'',
					success:function(result){
						$('#J_miniCartList').html(result.message);
					}
				});
  }
}

function collect(goodsId)
{
  $.ajax({
					type:"GET",
					url:"user.php?act=collect",
					cache:false,
					dataType:'json',     //接受数据格式
					data:'id=' + goodsId,
					success:collectResponse
				});

}

function collectResponse(result)
{
  alert(result.message);
}

	/* *
	 * 添加礼包到购物车
	 */
	function addPackageToCart(packageId)
	{
	  var package_info = new Object();
	  var number       = 1;
	
	  package_info.package_id = packageId
	  package_info.number     = number;
	  
	  $.ajax({
					type:"POST",
					url:"flow.php?step=add_package_to_cart",
					cache:false,
					dataType:'json',     //接受数据格式
					data:'package_info=' + $.toJSON(package_info),
					success:addPackageToCartResponse
				});
	
	  
	}
	
	/* *
	 * 处理添加礼包到购物车的反馈信息
	 */
	function addPackageToCartResponse(result)
	{
	  if (result.error > 0)
	  {
		if (result.error == 2)
		{
		  if (confirm(result.message))
		  {
			location.href = 'user.php?act=add_booking&id=' + result.goods_id;
		  }
		}
		else
		{
		  $.alert(result.message);    
		}
	  }
	  else
	  {	
		if (result.one_step_buy == '1')
		{
		  location.href = cart_url;
		}
		else
		{
		  $('.J_cartNum').html('(' + result.goods_number + ')');
		
		  $.ajax({
					type:"POST",
					url:"flow.php?step=get_cart_list",
					cache:false,
					dataType:'json',     //接受数据格式
					data:'',
					success:function(result){
						$('#J_miniCartList').html(result.message);
					}
				});
		}
	  }
	}
