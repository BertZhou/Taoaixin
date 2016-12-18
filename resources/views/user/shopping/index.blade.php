@extends('user.shopping.layout')
@section('title','购物车')
@section('content')
    <div class="cart-layout clearfix">
        <div class="cart-top clearfix">
            <ul class="switch-cart">
                <li><a href="#">全部商品</a><span class="number">15</span><span class="pipe"></span></li>
                <li><a href="#">降价商品</a><span class="number">5</span><span class="pipe"></span></li>
                <li><a href="#">库存紧张</a><span class="number">5</span><span class="pipe"></span></li>
            </ul>
            <a href="#" class="submit-btn fr">结算</a>
            <div class="cart-sum fr">¥<span class="priceTotal">0.00</span></div>
            <div class="cart-selected fr">
                已选商品（不含运费）
            </div>
        </div>
        <div class="shopTop">
            <div class="th item0">
                <div class="cart"> <!--&nbsp;空格占位符-->
                    <label><input class="check-all check" type="checkbox">&nbsp;全选</input></label>
                </div>
            </div>
            <div class="th item1">商品信息</div>
            <div class="th item2">&nbsp;</div>
            <div class="th item3">单价（元）</div>
            <div class="th item4">数量</div>
            <div class="th item5">金额（元）</div>
            <div class="th item6">操作</div>
        </div>

        <div class="shopBar clearfix">

            <div class="J_Order ">
                <div class="cart-checkbox">
                    &nbsp;
                    <input class="check-shop check" type="checkbox"></input>&nbsp;店铺：
                    <a href="#">Apple</a>
                </div>
                <div class="shop-content clearfix">
                    <input class="checkboxshop check" type="checkbox"></input>
                    <div class="td ">
                        <a href="#" class="productPic"><img src="/img/details/taxxq-2.jpg"></a>
                    </div>
                    <div class="td cart-shopInfo">
                        <p class="cart-link"><a href="#">全网底价 Apple 苹果 iPad mini 16G wifi版 平板电脑 前白后银 MD531CH/A 银白两色生 产批次不同混合发货</a></p>
                    </div>
                    <div class="td td-props">类型：</div>
                    <div class="td td-price">1450.00</div>
                    <div class="td td-amount">
                        <span class="prereduce"></span>
                        <input class="text" type="text" value="1"></input>
                        <span class="add">+</span>
                    </div>
                    <div class="td td-total">1450.00</div>
                    <div class="td td-op">
                        <a href="#">移出收藏夹</a>
                        <a href="#" class="delete">删除</a>
                    </div>
                </div>

                <div class="shop-content clearfix">
                    <input class="checkboxshop check" type="checkbox"></input>
                    <div class="td ">
                        <a href="#" class="productPic"><img src="/img/details/taxxq-2.jpg"></a>
                    </div>
                    <div class="td cart-shopInfo">
                        <p class="cart-link"><a href="#">全网底价 Apple 苹果 iPad mini 16G wifi版 平板电脑 前白后银 MD531CH/A 银白两色生 产批次不同混合发货</a></p>
                    </div>
                    <div class="td td-props">类型：</div>
                    <div class="td td-price">1450.00</div>
                    <div class="td td-amount">
                        <span class="prereduce"></span>
                        <input class="text" type="text" value="1"></input>
                        <span class="add">+</span>
                    </div>
                    <div class="td td-total">1450.00</div>
                    <div class="td td-op">
                        <a href="#">移出收藏夹</a>
                        <a href="#" class="delete">删除</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="shopBar clearfix">
            <div class="J_Order clearfix">
                <div class="cart-checkbox">
                    &nbsp;
                    <input class="check-shop check" type="checkbox"></input>&nbsp;店铺：
                    <a href="#">常山胡柚</a>
                </div>
                <div class="shop-content clearfix">
                    <input class="checkboxshop check" type="checkbox"></input>
                    <div class="td ">
                        <a href="#" class="productPic"><img src="/img/shopping/1.jpg"></a>
                    </div>
                    <div class="td cart-shopInfo">
                        <p class="cart-link"><a href="#">胡柚起源于常山县青石乡胡家村，是优良的柚子自然杂交群体品种</a></p>
                    </div>
                    <div class="td td-props">类型：</div>
                    <div class="td td-price">13.00</div>
                    <div class="td td-amount">
                        <span class="prereduce"></span>
                        <input class="text" type="text" value="1"></input>
                        <span class="add">+</span>
                    </div>
                    <div class="td td-total">13.00</div>
                    <div class="td td-op">
                        <a href="#">移出收藏夹</a>
                        <a href="#" class="delete">删除</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shopBar">
            <div class="J_Order clearfix">
                <div class="cart-checkbox">
                    &nbsp;
                    <input class="check-shop check" type="checkbox"></input>&nbsp;店铺：
                    <a href="#">常山胡柚</a>
                </div>
                <div class="shop-content clearfix">

                    <input class="checkboxshop check" type="checkbox"></input>
                    <div class="td ">
                        <a href="#" class="productPic"><img src="/img/shopping/1.jpg"></a>
                    </div>
                    <div class="td cart-shopInfo">
                        <p class="cart-link"><a href="#">胡柚起源于常山县青石乡胡家村，是优良的柚子自然杂交群体品种</a></p>
                    </div>
                    <div class="td td-props">类型：</div>
                    <div class="td td-price">13.00</div>
                    <div class="td td-amount">
                        <span class="prereduce"></span>
                        <input class="text" type="text" value="1"></input>
                        <span class="add">+</span>
                    </div>
                    <div class="td td-total">13.00</div>
                    <div class="td td-op">
                        <a href="#">移出收藏夹</a>
                        <a href="#" class="delete">删除</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shopBar clearfix">
            <div class="J_Order clearfix">
                <div class="cart-checkbox">
                    &nbsp;
                    <input class="check-shop check" type="checkbox"></input>&nbsp;店铺：
                    <a href="#">常山胡柚</a>
                </div>
                <div class="shop-content clearfix">

                    <input class="checkboxshop check" type="checkbox"></input>
                    <div class="td ">
                        <a href="#" class="productPic"><img src="/img/shopping/1.jpg"></a>
                    </div>
                    <div class="td cart-shopInfo">
                        <p class="cart-link"><a href="#">胡柚起源于常山县青石乡胡家村，是优良的柚子自然杂交群体品种</a></p>
                    </div>
                    <div class="td td-props">类型：</div>
                    <div class="td td-price">13.00</div>
                    <div class="td td-amount">
                        <span class="prereduce"></span>
                        <input class="text" type="text" value="1"></input>
                        <span class="add">+</span>
                    </div>
                    <div class="td td-total">13.00</div>
                    <div class="td td-op">
                        <a href="#">移出收藏夹</a>
                        <a href="#" class="delete">删除</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shopBar">
            <div class="J_Order clearfix">
                <div class="cart-checkbox">
                    &nbsp;
                    <input class="check-shop check" type="checkbox">&nbsp;店铺：
                    <a href="#">常山胡柚</a>
                </div>
                <div class="shop-content clearfix">

                    <input class="checkboxshop check" type="checkbox">
                    <div class="td ">
                        <a href="#" class="productPic"><img src="/img/shopping/1.jpg"></a>
                    </div>
                    <div class="td cart-shopInfo">
                        <p class="cart-link"><a href="#">胡柚起源于常山县青石乡胡家村，是优良的柚子自然杂交群体品种</a></p>
                    </div>
                    <div class="td td-props">类型：</div>
                    <div class="td td-price">13.00</div>
                    <div class="td td-amount">
                        <span class="prereduce"></span>
                        <input class="text" type="text" value="1">
                        <span class="add">+</span>
                    </div>
                    <div class="td td-total">13.00</div>
                    <div class="td td-op">
                        <a href="#">移出收藏夹</a>
                        <a href="#" class="delete">删除</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shopBar">
            <div class="J_Order clearfix">
                <div class="cart-checkbox">
                    &nbsp;
                    <input class="check-shop check" type="checkbox">&nbsp;店铺：
                    <a href="#">常山胡柚</a>
                </div>
                <div class="shop-content clearfix">
                    <input class="checkboxshop check" type="checkbox">
                    <div class="td ">
                        <a href="#" class="productPic"><img src="/img/shopping/1.jpg"></a>
                    </div>
                    <div class="td cart-shopInfo">
                        <p class="cart-link"><a href="#">胡柚起源于常山县青石乡胡家村，是优良的柚子自然杂交群体品种</a></p>
                    </div>
                    <div class="td td-props">类型：</div>
                    <div class="td td-price">13.00</div>
                    <div class="td td-amount">
                        <span class="prereduce"></span>
                        <input class="text" type="text" value="1">
                        <span class="add">+</span>
                    </div>
                    <div class="td td-total">13.00</div>
                    <div class="td td-op">
                        <a href="#">移出收藏夹</a>
                        <a href="#" class="delete">删除</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="floatBar" id="floatBar">
            <label class="select-all fl"><input class="check-all check" type="checkbox">&nbsp;全选</input></label>
            <div class="operations">
                <a href="#" class="deleteAll fl" id="deleteAll">删除</a>
                <a href="#" class="clear fl">清除消失宝贝</a>
                <a href="#" class="clear fl">移入收藏夹</a>
            </div>

            <div class="closing fr" >
                <a href="order.html">
                    <input type="submit" id="jiesuan" disabled="true" value="结算">
                </a>
            </div>
            <div class="total fr">合计：¥<span class="bottom_priceTotal">&nbsp;0.00</span></div>
            <div class="selected fr" id="selected">
                已选商品<span id="selectedTotal">0</span>件
                <span class="choosedPro up">︽</span>
                <span class="choosedPro down">︾</span>
            </div>
            <div class="selected-view">
                <div id="selectedViewList" class="clearfix">
                    <!-- <div><img src="/img/account/1.gif"><span>取消选择</span></div> -->
                </div>
                <span class="choosedPro">◆<span>◆</span></span>
            </div>
        </div>
    </div>
    <div class="success">
        <div class="prompt">
            <p>删除宝贝</p>
            <span class="icon-del">&#xe60a;</span>
        </div>
        <div class="proDelete">
            <p>确定要删除该宝贝么？</p>
        </div>
        <ul class="clearfix">
            <li class="btn_confirm">
                <p>确&nbsp定</p>
            </li>
            <li class="btn_close">
                <p>关&nbsp闭</p>
            </li>
        </ul>
        <input type="button" class="del_btn">
    </div>
    <div class="message">
        <div class="prompt">
            <span class="icon-sign">&#xe60c;</span>
            <p>提示信息</p>
            <span class="icon-del">&#xe60a;</span>
        </div>

        <div class="choosePro">
            <p>请选择宝贝</p>
        </div>
        <input type="button" class="del_btn">
    </div>

    <script type="text/javascript" src="/js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="/js/myjs.js"></script>
    <script type="text/javascript" src="/js/common.js"></script>
    <script type="text/javascript" src="/js/shoppingnew.js"></script>
@endsection