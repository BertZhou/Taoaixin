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


<body style="margin-top: 0;">
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
		<div style="width:800px;margin: 0 auto 76px;">
		<form id="my-form" style="padding: 3em 3em 0px 100px;">
			<section name="用户注册">
				<div><label for="">邮箱：</label><input type="email" name="email" data-ideal="required email"></div>
				<div><label>用户名:</label><input id="username" name="username" type="text"/></div>
				<div><label>密码:</label><input id="pass" name="password" type="password"/></div>
				<div><label>确认密码:</label><input id="passagain" name="password" type="password"/></div>
				<!-- {{--<div><label>手机号:</label><input type="tel" name="telphone" maxlength="11">--}}
				{{--<input type="button" id="regGetcodeBtn" class="regGetcodeBtn regGetcodeBtnColorCCC" value="获取验证码">--}}
				{{--</div>--}}
				{{--<div><label>验证码:</label><input type="text" name="number" data-ideal="required"></div>--}} -->
				<div><label>我的身份:</label>
					<label><input type="radio" name="radio" checked class="student" data-id	="1"/>学生</label>
					<label><input type="radio" name="radio" class="business" data-id="0"/>非学生</label>
				</div>
				<div class="agree-div" ><label for="agree"><input type="checkbox" id="agree" checked>我已阅读并同意 <a href="" class="agree-a">《用户注册协议》</a></label></div>
			</section>
			{{--<div><hr/></div>--}}
		</form>
			<div style="margin-left:-134px;text-align: center;">
				<span>
				<button type="submit" id="submitButton" class="btn col-md-12 btn-submit">提交</button>
					已有账号？<a href="{{url('signin')}}" class="go-signin">去登录</a>
					</span>
			</div>

		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">淘爱心注册</h4>
			</div>
			<div class="modal-body">
				<p class="fail-icon">&#xe60c;<span class="status">  密码错误！</span></p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn  btn-fav" data-dismiss="modal">Close</button>
				{{--<button type="button" class="btn btn-primary">Save changes</button>--}}
			</div>
		</div>
	</div>
</div>

<div class="login_45">
<p>Copyright&nbsp;&nbsp;&nbsp;2016&nbsp;&nbsp;taoaixin.com&nbsp;&nbsp;杭州电子科技大学版权所有</p>
</div>
<script type="text/javascript" src="js/libs/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="js/signup/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/signup/jquery.idealforms.js"></script>
<script type="text/javascript" src="/js/libs/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/signup.js"></script>
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

    $('body').keydown(function(){
    	if(event.keyCode == "13"){
    		$('#submitButton').click();
    	}
    });



</script>
</body>
</html>
