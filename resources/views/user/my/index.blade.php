@extends('user.my.layout')
@section('title','个人信息')
@section('content')

        @include('user.my.left')
        <div class="col-md-10 p-right">
            <div class="panel panel-default">
                <div class="panel-heading">
                    您的基本资料
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">会员名: <span>{{$user->name}}</span></li>
                        <li class="list-group-item">注册时间: <span>{{$user->created_at}}</span></li>
                        <li class="list-group-item">登录邮箱: <span>{{$user->email}}</span><span class="fr"><a href="#" class="badge">修改邮箱</a></span></li>
                        {{--<li class="list-group-item">绑定手机: <span>13878888888</span> <span class="fr"><a href="#" class="badge">修改手机</a></span></li>--}}
                    </ul>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        您的安全服务
                    </h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>已完成</td>
                            <td>身份认证</td>
                            <td>用于提升账号的安全性和信任级别。认证后的有卖家记录的账号不能修改认证信息。</td>
                            <td><a href="">查看</a></td>
                        </tr>
                        <tr>
                            <td>已设置</td>
                            <td>登录密码</td>
                            <td>安全性高的密码可以使账号更安全。建议您定期更换密码，且设置一个包含数字和字母，并长度超过6位以上的密码。</td>
                            <td><a href="">修改</a></td>
                        </tr>
                        <tr>
                            <td>已设置</td>
                            <td>密保问题</td>
                            <td>是您找回登录密码的方式之一。建议您设置一个容易记住，且最不容易被他人获取的问题及答案，更有效保障您的密码安全。</td>
                            <td><a href="">维护</a></td>
                        </tr>

                        <tr>
                            <td>已绑定</td>
                            <td>绑定手机</td>
                            <td>绑定手机后，您即可享受淘爱心丰富的手机服务，如手机找回密码等。</td>
                            <td><a href="">修改</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection