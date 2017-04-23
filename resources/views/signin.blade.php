<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url('css/import.css') }}">
    <link rel="shortcut icon" href="img/logo/tax-logo.ico" />

    <title>淘爱心登录</title>
</head>
<body style="margin-top: 0;">
<div class="headerBar">
    <div class="logoBar login_logo">
        <div class="comWidth clearfix">
            <div class="logo fl">
                <a href="{{url('')}}"> <img src="/img/logo/1.jpg" alt=""></a>
            </div>
            <h3 class="welcome_title">欢迎登陆</h3>
        </div>
    </div>
</div>

<div class="h_1"></div>
<!--登录表单-->
<div class="loginBox">
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal"  name="signin" ng-controller="userInfoController">
                <div class="form-group">
                    <label class="col-md-3 control-label" for="username">
                        用户名
                    </label>
                    <div class="col-md-7">
                        <input type="text" id="username" class="form-control username" placeholder="邮箱/用户名/已验证手机" ng-model="userInfo.username" ng-minlength="8" ng-maxlength="20" required name="username">
                    </div>
                </div>
                <div class="form-group">
                    <!-- <div class="col-md-offset-3 col-md-10 error"
                        ng-messages="signin.username.$error">
                        <div ng-message="required">Make sure you enter your name!</div>
                        <div ng-message="minlength">Your name must be at least 3 charactors!</div>
                        <div ng-message="maxlength">Your name connot be longer than 20 charactors!</div>
                    </div> -->
                    <div class="error col-md-offset-3 col-md-10"
                         ng-show="signin.username.$dirty && signin.username.$invalid">
                        <!-- {{--<small class="error"--}}
                               {{--ng-show="signin.username.$error.required">--}}
                            {{--用户名不能为空--}}
                        {{--</small>--}}
                        {{--<small class="error"--}}
                               {{--ng-show="signin.username.$error.minlength">--}}
                            {{--8-20位，可由数字、字母和“_”组成--}}
                        {{--</small>--}}
                        {{--<small class="error"--}}
                               {{--ng-show="signin.username.$error.maxlength">--}}
                            {{--用户名长度不能超多20个字符--}}
                        {{--</small>--}} -->
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="password">
                        密码
                    </label>
                    <div class="col-md-7">
                        <input class="form-control password" id="password" type="password" placeholder="密码" ng-model="userInfo.password" ng-minlength="3" ng-maxlength="20" required name="password">
                    </div>
                </div>
                <div class="form-group">
                    <!-- <div class="col-md-offset-3 col-md-10 error"
                        ng-messages="signin.password.$error">
                        <div ng-message="required">Make sure you enter your name!</div>
                        <div ng-message="minlength">Your name must be at least 3 charactors!</div>
                        <div ng-message="maxlength">Your name connot be longer than 20 charactors!</div>
                    </div> -->
                    <div class="error col-md-offset-3 col-md-10"
                         ng-show="signin.password.$dirty && signin.password.$invalid">
                        <!-- {{--<small class="error"--}}
                               {{--ng-show="signin.password.$error.required">--}}
                            {{--密码不能为空--}}
                        {{--</small>--}}
                        {{--<small class="error"--}}
                               {{--ng-show="signin.password.$error.minlength">--}}
                            {{--至少8个字符--}}
                        {{--</small>--}}
                        {{--<small class="error"--}}
                               {{--ng-show="signin.password.$error.maxlength">--}}
                            {{--密码长度不能超多20个字符--}}
                        {{--</small>--}} -->
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-3 col-md-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" ng-model="userInfo.autoLogin">自动登录
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="forget-password">忘记密码？</label>
                    </div>
                </div>
            </form>

            <button type="submit" class="login_btn btn btn-primary col-md-4 col-md-offset-4"
                        ng-disabled="!(userInfo.password && userInfo.username)"
                        class="">登 &nbsp 录</button>
        </div>

    </div>
    <a class="reg_link" href="{{url('register')}}"></a>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">淘爱心登录</h4>
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
</div>
<div class="login_45">
    <p>Copyright&nbsp;&nbsp;&nbsp;2016&nbsp;&nbsp;taoaixin.com&nbsp;&nbsp;杭州电子科技大学版权所有</p>
</div>

<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
<script type="text/javascript" src="js/angular.min.js"></script>
{{--<script type="text/javascript" src="js/angular-messages.min.js"></script>--}}
{{--<script type="text/javascript" src="js/myangularjs.js"></script>--}}
<!--<script type="text/javascript" src="js/easyPay.js"></script>!-->
<script type="text/javascript" src="/js/libs/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/myjs.js"></script>
<script type="text/javascript">
    $('body').keydown(function(){
        if(event.keyCode == "13"){
            $('.login_btn').click();
        }
    });
</script>

</body>
</html>