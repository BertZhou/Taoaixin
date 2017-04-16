@extends('user.my.layout')
@section('title','爱心大使')
@section('content')
@include('user.my.left')
    <input type="hidden" id="selectedMenu" value="ambassador">
    <div class="col-md-10 p-right order">
        <div class="panel panel-default address-order">
            <div class="panel-heading">
                爱心大使身份认证
            </div>
            <ul class="list-group">
                <li class="list-group-item"><em>*</em>您当前身份：<span>普通会员</span></li>
                <li class="list-group-item"><em>*</em>您当前是
                    <select class="form-control identity yonghu">
                        <option value="0">个人用户 </option>
                        <option value="1">企业用户</option>
                    </select>
                </li>
                
                <li class="list-group-item personalUser"><em>*</em>认证方式
                    <select class="form-control identity authentication">
                        <option value="0">积分认证</option>
                        <option value="1">交纳诚意金</option>
                    </select>
                </li>
                
                <!--积分认证部分-->
                <li class="list-group-item integral"><em>*</em>您当前积分：<span style="color: red">15926</span></li>
                <li class="list-group-item integral"><em>*</em>恭喜！您当前可升级为爱心大使！</li>
                <li class="list-group-item personalUser"><em>*</em>手机认证
                    <input type="text" placeholder="长度不超过11个字符" maxlength="11" class="form-control"
                           style="margin-left: 23px;" name="mobile" value="{{$info->mobile or ''}}">
                </li>

                <!--交纳诚意金部分-->
                <li class="list-group-item deposit" style="display:none"><em>*</em>请交纳诚意金：<span style="color: red">￥12299</span>，诚意金可原路<a href="#" class="content">退回</a> 
                </li>
                <li class="list-group-item deposit" style="display:none"><button type="submit" class="btn btn-info  col-md-offset-1">确认支付</button></li>
                <li class="list-group-item personalUser"><em>*</em>手持证件照片
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

                <!--企业认证部分-->
                <li class="list-group-item enterpriseUser" style="display: none;"><em>*</em>恭喜！您当前已提供：<span style="color: red;font-size: 16px;">121</span>个爱心岗位，已达到爱心大使申请的<a style="color:red;">最低要求！</a></li>
                <li class="list-group-item enterpriseUser" style="display: none;"><em>*</em>您当前共完成：<span style="color: red;font-size: 16px;">85</span>笔爱心岗位交易，共有<span style="color:red;font-size: 16px;">0</span>笔不良交易记录</li>
                <li class="list-group-item enterpriseUser" style="display: none;"><em>*</em>企业执照照片
                    <div class="row">
                        <div class="col-md-offset-3">
                            <img src="/img/Account/03.jpg" alt="" style="width:310px;height:200px;">
                            <input type="file" class="uploder" >
                        </div>
                        
                    </div>
                </li>

            </ul>
            <button type="submit" class="btn btn-danger col-md-offset-10 btn-address">点击进行认证</button>
        </div>
        <div class="panel panel-default integral">
            <div class="panel-heading" style="font-weight: bold;">
                爱心大使积分介绍
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">爱心大使是淘爱心会员通过购物所获得的经验值，由累计金额计算获得，它标志着您在淘爱心累计的网购经验值，积分越高爱心大使等级越高，享受更多的爱心大使服务哦！ </li>
                    <li class="list-group-item">·成长值获得根据确认收货时间计算，成长值每日封顶值根据当天交易创建时间计算。</li>
                    <li class="list-group-item">·成长值按照交易金额的个位数取整计算 如，购买88.2元的商品，则确认收货后可以得到88点成长值。 </li>
                    <li class="list-group-item">·以下交易类型无法获得成长值：旅游产品（不包括国内机票，指旅游套餐、门票等）、分销、酒店类型交易、保险、理财、司法拍卖、电子凭证交易等。</li>
                    <li class="list-group-item">·成长值等级每日封顶 </li>
                </ul>
            </div>
        </div>
    </div>
@endsection