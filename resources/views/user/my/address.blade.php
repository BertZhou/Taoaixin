@extends('user.my.layout')
@section('title','收货地址')
@section('content')
    @include('user.my.left')
    <input type="hidden" id="selectedMenu" value="address">
    <div class="col-md-10 p-right order">
        <div class="panel panel-default address-order">
            <div class="panel-heading">
                选择收货地址
            </div>
            <!--<div class="panel-body">-->
            <ul class="list-group">
                <li class="list-group-item">
                    <form role="form">
                        <div class="form-group select-address">
                            <span class="choose-span"><em>*</em>选择地区</span>
                            <input type="hidden" name="province" value="{{$info->province or '浙江省'}}">
                            <input type="hidden" name="city" value="{{$info->city or '杭州市'}}">
                            <input type="hidden" name="area" value="{{$info->area or '江干区'}}">
                            <select class="form-control select-control" name="province">
                            </select>
                            <select class="form-control select-control" name="city">
                            </select>
                            <select class="form-control select-control" name="area">
                            </select>
                        </div>
                    </form>
                <li class="list-group-item"><em>*</em>详细地址
                    <input type="text" placeholder="建议您如实填写详细收货地址，例如街道名称，门牌号码，楼层和房间号等信息"
                           maxlength="20" class="form-control" style="margin-left: 22px;" name="address" value="{{$info->address or ''}}">
                </li>
                <li class="list-group-item"><em>*</em>收货人姓名
                    <input type="text" placeholder="长度不超过25个字符" maxlength="25"
                           class="form-control" name="name" value="{{$info->name or ''}}">
                </li>
                <li class="list-group-item"><em>*</em>手机
                    <input type="text" placeholder="长度不超过11个字符" maxlength="11" class="form-control"
                           style="margin-left: 46px;" name="mobile" value="{{$info->mobile or ''}}">
                </li>
            </ul>
            <button type="submit" class="btn btn-danger col-md-offset-10 btn-address">确认收货地址</button>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">淘爱心收货地址添加</h4>
                </div>
                <div class="modal-body">
                    <p class="status">收货地址添加成功</p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn  btn-fav" data-dismiss="modal">Close</button>
                    {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                </div>
            </div>
        </div>
    </div>
@endsection