<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>淘爱心注册</title>
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

<div class="regBox clearfix">
	<div class="reg_item2 reg_current" id="reg_student">
		<div class="line"></div>
		<a href="#">学生注册</a>
	</div>
	<div class="reg_item2" id="reg_other">
		<div class="line"></div>
		<a href="#">其他用户注册</a>
	</div>
	<div class="reg_item3">已有账号？<a href="{{url('signin')}}">去登录</a></div>
</div>

	<div class="regBox1" id="reg_student2">
		<div class="login_cont">
			<ul class="login">
				<li><span class="reg_item"><i>*</i>用户名: </span>
					<div class="input_item"><input type="text" name="user" class="login_input user_icon username"><img src="getVerify.php" alt=""/></div></li>
				<li><span class="reg_item"><i>*</i>请设置密码: </span>
					<div class="input_item"><input type="password" name="pass1" class="login_input user_icon password"></div></li>
				<li><span class="reg_item"><i>*</i>请确认密码: </span>
					<div class="input_item"><input type="password" name="pass2" class="login_input user_icon"></div></li>
				<li><span class="reg_item"><!-- <i>*</i> -->证件号: </span>
					<div class="input_item"><input type="text" name="doc" class="login_input user_icon"><a href="#" >上传证件照片</a></div></li>
				<li><span class="reg_item"><i>*</i>联系方式: </span>
					<div class="input_item"><input type="text" name="contact" class="login_input user_icon contact"></div></li>
				<li><span class="reg_item"><i>*</i>所在院校: </span>
					<div class="input_item"><input type="text" class="login_input user_icon"></div></li>
				<li class="check"><span class="reg_item fk"><i>*</i>是否为贫困生： </span>
					<div class="sc"><label for="d1">是</label><input type="checkbox" id="d1" class="checked">
					<a href="#">上传贫困生证明照片</a></div></li>
				<li class="check"><span class="reg_item">&nbsp;</span><label for="d1">否</label><input type="checkbox" id="d1" class="checked">
				</li>
				<li class="aotoLogoin"><span class="reg_item">&nbsp;</span>
					<input type="checkbox" id="agree">
					<label for="agree">我已阅读并同意<a href="#">《用户注册协议》</a></label></li>
				<li><input type="submit" value="" class="reg_btn" data-type="1"><span class="reg_item">&nbsp;</span></li>
			</ul>
		</div>
	</div>

	<div class="regBox1" id="reg_other2">
		<div class="login_cont">
			<ul class="login">
				<li><span class="reg_item"><i>*</i>用户名: </span>
					<div class="input_item"><input type="text" name="user" class="login_input user_icon username"></div></li>
				<li><span class="reg_item"><i>*</i>请设置密码: </span>
					<div class="input_item"><input type="password" name="pass1" class="login_input user_icon password"></div></li>
				<li><span class="reg_item"><i>*</i>请确认密码: </span>
					<div class="input_item"><input type="password" name="pass2" class="login_input user_icon password"></div></li>
				<li><span class="reg_item"><!-- <i>*</i> -->证件号: </span>
					<div class="input_item"><input type="text" name="doc" class="login_input user_icon"><a href="#" >上传证件照片</a></div></li>
				<li><span class="reg_item"><i>*</i>联系方式：</span>
					<div class="input_item"><input type="text" name="contact" class="login_input user_icon contact"></div></li>
				<li class="aotoLogoin"><span class="reg_item">&nbsp;</span>
					<input type="checkbox" id="other-agree">
					<label for="other-agree">我已阅读并同意<a href="#">《用户注册协议》</a></label></li>
				<li><input type="submit" value="" class="reg_btn_other" data-type="2"><span class="reg_item">&nbsp;</span></li>
			</ul>
		</div>
	</div>

<div class="login_45">
<p>Copyright&nbsp;&nbsp;&nbsp;2015&nbsp;&nbsp;taoaixin.com&nbsp;&nbsp;杭州电子科技大学版权所有</p>
</div>
	<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="js/easypay.js"></script>
	<script type="text/javascript" src="js/myjs.js"></script>
	<script type="text/javascript" src="js/signup.js"></script>
</body>
</html>
</body>
</html>
