@extends('user.my.layout')
@section('title','我的认证')
@section('content')
    @include('user.my.left')
    <input type="hidden" id="selectedMenu" value="verification">
    <div class="col-md-10 p-right order">
        <div class="panel panel-default address-order">
            <div class="panel-heading">
                身份认证
            </div>
            <!--<div class="panel-body">-->
            <ul class="list-group">
                <li class="list-group-item"><em>*</em>真实姓名
                    <input type="text" placeholder="长度不超过10个字符" maxlength="25"
                           class="form-control" name="name" value="{{$info->name or ''}}" style="margin-left: 23px;">
                </li>
                <li class="list-group-item"><em>*</em>您的身份
                    <select class="form-control identity">
                        <option>学生</option>
                        <option>非学生</option>
                    </select>
                <li class="list-group-item"><em>*</em>证件名称
                    <select class="form-control identity">
                        <option>身份证</option>
                        <option>学生证</option>
                    </select>
                </li>

                <li class="list-group-item"><em>*</em>身份证号码
                    <input type="text" placeholder="长度不超过18个字符" maxlength="11" class="form-control"
                           style="margin-left: 13px;" name="mobile" value="{{$info->mobile or ''}}">
                </li>
                <li class="list-group-item"><em>*</em>手持证件照片
                    <div class="row">
                        <div class="col-md-6">
                            <img src="/img/Account/01.png" alt="">
                            <input type="file" class="uploder" >
                        </div>
                        <div class="col-md-6">
                            <input type="file" class="uploder" >
                            <img src="/img/Account/02.png" alt="">
                        </div>
                    </div>
                </li>
            </ul>
            <button type="submit" class="btn btn-danger col-md-offset-10 btn-address">点击进行认证</button>
        </div>

    </div>
@endsection