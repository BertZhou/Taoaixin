<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>淘爱心注册</title>
	<link href="css/normalize.css" rel="stylesheet"/>
    <link href="css/jquery-ui.css" rel="stylesheet"/>
    <link href="css/jquery.idealforms.min.css" rel="stylesheet" media="screen"/>
    <link type="text/css" rel="stylesheet" href="css/import.css">
	<link rel="shortcut icon" href="img/logo/tax-logo.ico" />

</head>


<body>
<div class="headerBar">
	<div class="logoBar reg_logo">
		<div class="comWidth clearfix">
			<div class="logo fl">
				<a href="{{url('')}}"><img src="/img/logo/1.jpg" alt="淘爱心" ></a>
			</div>
			<h3 class="welcome_title">欢迎注册</h3>
		</div>
	</div>
</div>

<div class="h_1"></div>
<div class="row" style="width: 100%;">

	<div class="eightcol last">
		<form id="my-form" action="signup_check" method="post">

			<section name="用户注册">
				<div><label for="">邮箱：</label><input type="email" name="email" data-ideal="required email"></div>
				<div><label>用户名:</label><input id="username" name="username" type="text"/></div>
				<div><label>密码:</label><input id="pass" name="password" type="password"/></div>
				<div><label>确认密码:</label><input id="pass" name="password" type="password"/></div>
				{{--<div><label>手机号:</label><input type="tel" name="telphone" maxlength="11">--}}
				{{--<input type="button" id="regGetcodeBtn" class="regGetcodeBtn regGetcodeBtnColorCCC" value="获取验证码">--}}
				{{--</div>--}}
				{{--<div><label>验证码:</label><input type="text" name="number" data-ideal="required"></div>--}}
				<div><label>我的身份:</label>
					<label><input type="radio" name="radio" checked/>学生</label>
					<label><input type="radio" name="radio"/>非学生</label>
				</div>
				<div class="agree-div"><label for="agree"><input type="checkbox" id="agree" checked>我已阅读并同意 <a href="" class="agree-a">《用户注册协议》</a></label></div>
			</section>
			{{--<div><hr/></div>--}}
			<div>
				<span>
				<button type="submit" class="btn col-md-12 btn-submit">提交</button>
					已有账号？<a href="{{url('signin')}}" class="go-signin">去登录</a>
					</span>
			</div>
		</form>
	</div>
</div>


<div class="login_45">
<p>Copyright&nbsp;&nbsp;&nbsp;2015&nbsp;&nbsp;taoaixin.com&nbsp;&nbsp;杭州电子科技大学版权所有</p>
</div>
<script type="text/javascript" src="js/signup/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/signup/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/signup/jquery.idealforms.js"></script>
{{--<script type="text/javascript" src="js/signup.js"></script>--}}
<script type="text/javascript">
    var options = {
        onFail: function(){
            alert( $myform.getInvalid().length +' invalid fields.' )
        },
        inputs: {
            'password': {
                filters: 'required pass',
            },
            'username': {
                filters: 'required username',
                data: {
                    //ajax: { url:'validate.php' }
                }
            }
        }
    };

    var $myform = $('#my-form').idealforms(options).data('idealforms');

    $myform.focusFirst();
    var $validateCode = $('#regGetcodeBtn');
    var $tel = $('input[type="tel"]');
	$tel.blur(function () {
		if($tel.val().length == 11) {
//			$validateCode.attr('disabled','false');
		}else {
//			$validateCode.attr('disabled','true');
		}
	});

	var num = 60;
	var counter = function(_self) {
		num--;
		$(_self).val(num + '秒后重新获取');
		var timer = setTimeout(function(){
			counter(_self);
		}, 1000);
		if(num == 0) {
			clearTimeout(timer);
			$(_self).val('重新获取').css({'color':'#ff552e'});
		}
	};

    $validateCode.bind('click',function() {
		var _self = this;
		counter(_self);
    });

</script>
</body>
</html>
</body>
</html>
