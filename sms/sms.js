		function sendSms(){
		  var mobile = document.getElementById('mobilename').value;
		  Ajax.call('sms/sms.php?act=send&t='+new Date(), 'mobile=' + mobile, sendSmsResponse, 'POST', 'JSON');
		}
		function sendSmsResponse(result){
		  if (result.code==2){
			    RemainTime();		
				alert('手机验证码已经成功发送到您的手机');
		  }else{
			  if(result.msg){
				alert(result.msg);
			  }else{
				alert('手机验证码发送失败');
			  }
		  }
		}
		
		
		var iTime = 59;
		var Account;
		function RemainTime(){
			document.getElementById('sendRegister').disabled = true;
			var iSecond,sSecond="",sTime="";
			if (iTime >= 0){
				iSecond = parseInt(iTime%60);
				if (iSecond >= 0){
					sSecond = iSecond + "秒";
				}
				sTime=sSecond;
				if(iTime==0){
					clearTimeout(Account);
					sTime='获取验证码';
					iTime = 59;
					document.getElementById('sendRegister').disabled = false;
				}else{
					Account = setTimeout("RemainTime()",1000);
					iTime=iTime-1;
				}
			}else{
				sTime='没有倒计时';
			}
			document.getElementById('sendRegister').value = sTime;
		}		
