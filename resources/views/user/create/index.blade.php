@extends('user.create.layout')
@section('title','商品上架')


@section('content')
    <div class="smallcomWidth">
        <div class="content smallcomWidth">
            <ol class="tb-rate-nav-steps fbsty">
                <li class="done current-prev">
                    <span class="first" id="first">1.选择爱心大类</span>
                </li>
                <li class=" zhifufukuan">
                    <span id="second">2.填写信息</span>
                </li>
                <li class=" fklast-current">
                    <strong id="third">3.完成上架</strong>
                </li>
            </ol>
            <div class="block_wrap hide" id="Item_details">
                <div class="block_title">
                    <h2>基本信息</h2>
                </div>
                <div class="block_content">
                    <div class="rows_wrap clearfix">
                        <div class="rows_content">
                            <div class="radio_wrap clearfix" name="isBiz">
                                <div class="radio" id="radio1">
                                    <i></i>
                                    <span>在校学生</span>
                                </div>
                                <div class="radio" id="radio2">
                                    <i></i>
                                    <span>爱心大使</span>
                                </div>
                            </div>
                        </div>
                        <div class="rows_title">
                        	<span>
                            	<span class="rows_title_star">*</span>
                                身份
                            </span>
                        </div>

                    </div>
                    {{--<div class="rows_wrap clearfix" id="goodtype">--}}
                        {{--<div class="rows_content">--}}
                            {{--<div class="volatile_wrap">--}}
                                {{--<div class="volatile_required_wrap clearfix">--}}
                                    {{--<div class="selectordef" style="width:165px;">--}}
                                        {{--<div class="title" id="name">--}}
                                            {{--<span class="seled">请选择</span>--}}
                                            {{--<span class="arrow"></span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="rows_title">--}}
                        	{{--<span>--}}
                            	{{--<span class="rows_title_star">*</span>  --}}
                                {{--类别--}}
                            {{--</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="rows_wrap clearfix" id="condition">
                        <div class="rows_content">
                            <div class="volatile_wrap">
                                <div class="volatile_required_wrap clearfix">
                                    <div class="selectordef" style="width: 150px;">
                                        <input type="text" value="" name="">
                                        {{--<div class="title">--}}
                                            {{--<span class="seled new-old">请选择</span>--}}
                                            {{--<span class="arrow"></span>--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rows_title">
                        	<span>
                            	<span class="rows_title_star">*</span>
                                新旧
                            </span>
                        </div>
                    </div>
                    <div class="rows_wrap clearfix" id="goodprice">
                        <div class="rows_content">
                            <div class="input_text_wrap clearfix success">
                                <input style="width: 132px;"type="inputText" id="product-price">
                                {{--@if($user->type)--}}
                                <span class="unit">元</span>
                            </div>
                        </div>
                        <div class="rows_title">
                        	<span>
                            	<span class="rows_title_star">*</span>
                                价格
                            </span>
                        </div>
                    </div>
                    <div class="rows_wrap clearfix" id="payment">
                        <div class="rows_content">
                            <div class="input_text_wrap clearfix success">
                                <input style="width: 132px;"type="inputText" id="time-price"><span>/小时</span>
                            </div>
                        </div>
                        <div class="rows_title">
                        	<span>
                            	<span class="rows_title_star">*</span>
                                薪酬
                            </span>
                        </div>
                    </div>
                    <div class="rows_wrap clearfix">
                        <div class="rows_content">
                            <div class="input_text_wrap clearfix success">
                                <input style="width: 132px;"type="inputText" id="amount">
                                <span>个</span>
                            </div>
                        </div>
                        <div class="rows_title">
                            <span>
                                <span class="rows_title_star">*</span>
                                数量
                            </span>
                        </div>
                    </div>
                    <div class="rows_wrap clearfix" id="timestr">
                        <div class="rows_content">
                            <div class="timeselect">
                                <input placeholder="请输入日期" class="laydate-icon start" onClick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})">
                            </div>
                        </div>

                        <div class="rows_title">
                        	<span>
                            	<span class="rows_title_star">*</span>
                                开始时间
                            </span>
                        </div>
                    </div>
                    <div class="rows_wrap clearfix" id="timefin">
                        <div class="rows_content">
                            <div class="timeselect">
                                <input placeholder="请输入日期" class="laydate-icon end" onClick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})">
                            </div>
                        </div>
                        <div class="rows_title">
                        	<span>
                            	<span class="rows_title_star">*</span>
                                结束时间
                            </span>
                        </div>
                    </div>
                    <div class="rows_wrap clearfix">
                        <div class="rows_content">
                            <div class="input_text_wrap clearfix success">
                                <input style="width: 395px;"type="inputText" name="name">
                            </div>
                        </div>
                        <div class="rows_title">
                        	<span>
                            	<span class="rows_title_star">*</span>
                                商品名
                            </span>
                        </div>
                    </div>
                    <div class="rows_wrap clearfix">
                        <div class="rows_content">
                            <div class="input_text_wrap clearfix success">
                                <input type="file"   style="width: 395px;">
                            </div>
                        </div>
                        <div class="rows_title">
                            <span>
                                <span class="rows_title_star">*</span>
                                上传商品图片
                            </span>
                        </div>
                    </div>
                    <div class="rows_wrap clearfix" id="textbox">
                        <div class="rows_content">
                            <div class="content">
                                <div class="container-fluid">
                                    <div id='pad-wrapper'>
                                        <div id="editparent">
                                            <div id='editControls' class='span9' style=' padding:5px;'>
                                                <div class='btn-group'>
                                                    <a class='btn' data-role='undo' href='javascript:void(0)'><i class='icon-undo'></i></a>
                                                    <a class='btn' data-role='redo' href='javascript:void(0)'><i class='icon-repeat'></i></a>
                                                </div>
                                                <!-- <div class='btn-group'>
                                                    <a class='btn' data-role='cut' href='#'><i class='icon-cut'></i></a>
                                                    <a class='btn' data-role='copy' href='#'><i class='icon-copy'></i></a>
                                                    <a class='btn' data-role='paste' href='#'><i class='icon-paste'></i></a>
                                                </div> -->
                                                <div class='btn-group'>
                                                    <a class='btn' data-role='bold' href='javascript:void(0)'><b>Bold</b></a>
                                                    <a class='btn' data-role='italic' href='javascript:void(0)'><em>Italic</em></a>
                                                    <a class='btn' data-role='underline' href='javascript:void(0)'><u><b>U</b></u></a>
                                                    <a class='btn' data-role='strikeThrough' href='javascript:void(0)'><strike>abc</strike></a>
                                                </div>
                                                <div class='btn-group'>
                                                    <a class='btn' data-role='justifyLeft' href='javascript:void(0)'><i class='icon-align-left'></i></a>
                                                    <a class='btn' data-role='justifyCenter' href='javascript:void(0)'><i class='icon-align-center'></i></a>
                                                    <a class='btn' data-role='justifyRight' href='javascript:void(0)'><i class='icon-align-right'></i></a>
                                                    <a class='btn' data-role='justifyFull' href='javascript:void(0)'><i class='icon-align-justify'></i></a>
                                                </div>
                                                <div class='btn-group'>
                                                    <a class='btn' data-role='indent' href='javascript:void(0)'><i class='icon-indent-right'></i></a>
                                                    <a class='btn' data-role='outdent' href='javascript:void(0)'><i class='icon-indent-left'></i></a>
                                                </div>
                                                <div class='btn-group'>
                                                    <a class='btn' data-role='insertUnorderedList' href='javascript:void(0)'><i class='icon-list-ul'></i></a>
                                                    <a class='btn' data-role='insertOrderedList' href='javascript:void(0)'><i class='icon-list-ol'></i></a>
                                                </div>
                                                <div class='btn-group'>
                                                    <a class='btn' data-role='h1' href='javascript:void(0)'>h<sup>1</sup></a>
                                                    <a class='btn' data-role='h2' href='javascript:void(0)'>h<sup>2</sup></a>
                                                    <a class='btn' data-role='p' href='javascript:void(0)'>p</a>
                                                </div>
                                                <div class='btn-group'>
                                                    <a class='btn' data-role='subscript' href='javascript:void(0)'><i class='icon-subscript'></i></a>
                                                    <a class='btn' data-role='superscript' href='javascript:void(0)'><i class='icon-superscript'></i></a>
                                                </div>
                                            </div>
                                            <div id='editor' class='span9' style='' contenteditable>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>

                                $(function() {
                                    $('#editControls a').click(function(e) {
                                        switch($(this).data('role')) {
                                            case 'h1':
                                            case 'h2':
                                            case 'p':
                                                document.execCommand('formatBlock', false, '<' + $(this).data('role') + '>');
                                                break;
                                            default:
                                                document.execCommand($(this).data('role'), false, null);
                                                break;
                                        }

                                    })
                                });

                            </script>
                        </div>
                        <div class="rows_title">
                        	<span>
                            	<span class="rows_title_star">*</span>
                                商品详情
                            </span>
                        </div>
                    </div>
                    <div class="rows_wrap clearfix" id="place">
                        <div class="rows_content">
                            <div class="volatile_wrap">
                                <div class="volatile_required_wrap clearfix">
                                    <div class="selectordef" style="width: 150px;">
                                        <div class="title">
                                            <span class="seled way">请选择</span>
                                            <span class="arrow"></span>
                                        </div>
                                    </div>
                                    <div class="selectordef" style="width: 150px;">
                                        <div class="title" >
                                            <span class="seled location">请选择地段</span>
                                            <span class="arrow"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rows_title">
                        	<span>
                            	<span class="rows_title_star">*</span>
                                交易方式及地点
                            </span>
                        </div>
                    </div>
                    <div class="rows_wrap clearfix">
                        <div class="rows_content">
                            <div class="input_text_wrap clearfix success">
                                <input style="width: 240px;"type="inputText" id="provider">
                            </div>
                        </div>
                        <div class="rows_title">
                        	<span>
                            	<span class="rows_title_star">*</span>
                                联系人
                            </span>
                        </div>
                    </div>
                    <div class="rows_wrap clearfix">
                        <div class="rows_content">
                            <div class="input_text_wrap clearfix success">
                                <input style="width: 240px;"type="inputText" class="tel">
                            </div>
                        </div>
                        <div class="rows_title">
                        	<span>
                            	<span class="rows_title_star">*</span>
                                联系电话
                            </span>
                        </div>
                    </div>
                    <div class="cart_btnBox">
                        <input type="button" class="cart_btn" value="上  架" id="item_fb">
                    </div>
                </div>

            </div>


            <div class="block_wrap" id="select">
                <div class="block_title">
                    <h2>请根据商品选择大类</h2>
                </div>
                <div class="block_content">
                    <div class="type_select">
                        <div class="type">
                            <ul>
                                <li>
                                    <div id="type_select1" data-type="2" id="time" class="create">
                                        <i></i>
                                        <label for="time"><span class="xuanxiang">爱心时间</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div id="type_select2" data-type="1" class="create">
                                        <i></i>
                                        <label class="xuanxiang">爱心商品</label>
                                    </div>
                                </li>
                                <li>
                                    <div id="type_select3" data-type="3" class="create">
                                        <i></i>
                                        <label class="xuanxiang">爱心岗位</label>
                                    </div>
                                <li>
                            </ul>
                        </div>
                    </div>
                    <div class="cart_btnBox">
                        <input type="button" class="cart_btn" value="下一步" id="item_next">
                    </div>
                </div>
            </div>


            <div class="block_wrap hide" id="fbsuccess">
                <div class="trade-info">
                    <p class="status">
                        发布成功
                    </p>
                    <div class="delivery">
                        <em>物品发布至：</em>
                        <span class="address">
                            <a href="#">杭州-闲置-数码</a>
                         </span>
                    </div>
                </div>
                <div class="operate">
                    <p>
                        <a class="view-more">点击查看详情</a>
                        <a class="view-more">修改商品信息</a>
                        <span>
                    	联系方式：
                        <a class="phone"></a>
                    </span>
                    </p>
                </div>
                <div class="cart_btnBox">
                    <input type="button" class="cart_btn" value="确定" id="item_finish">
                </div>
            </div>

        </div>
    </div>
@endsection


