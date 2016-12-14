/**
 * Created by Ting Gao on 2016/3/15.
 */
//shopping购物车
window.onload=function(){
    //兼容IE 低版本IE不支持getElementsByClassName

    if(!document.getElementsByClassName){
        document.getElementsByClassName=function(cls){
            var ret=[];
            var els=document.getElementsByTagName("*");
            for(var i=0;i<els.length;i++){
                // 'aaa ' 'aaa bbb' 'bbb aaa' 'bbb aaa ccc' indexOf()--可以返回一个字符的下标值,不存在返回-1
                if(els[i].className==="cls"
                    ||els[i].className.indexOf(cls+" ")>=0
                    ||els[i].className.indexOf(" "+cls)>=0
                    ||els[i].className.indexOf(" "+cls+" ")>=0){
                    ret.push(els[i]);
                }
            }
        }
        return ret;
    }

    var checkAllInputs=document.getElementsByClassName("check-all");//获取全选框
    var checkInputs=document.getElementsByClassName("check");//获取所有选择框
    var checkShopInputs=document.getElementsByClassName("check-shop");//获取所有店铺的选择框
    var shopcontent=document.getElementsByClassName("shop-content");//获取每个店铺的父节点
    var checkboxshop=document.getElementsByClassName("checkboxshop");//获取店铺内商品的选择框
    var selectedTotal=document.getElementById("selectedTotal");//获取已选商品件数
    var selected=document.getElementById("selected");//已选商品
    var topPriceTotal=document.getElementsByClassName("priceTotal")[0];
    
    var bottom_priceTotal=document.getElementsByClassName("bottom_priceTotal")[0];//获取已选商品总价的ID
    var deleteAll=document.getElementById("deleteAll");
    var floatBar=document.getElementById("floatBar");
    var selectedViewList=document.getElementById("selectedViewList");//浮层已选商品列表容器


    function getTotal() {
        var price = 0;
        var seleted = 0;
        var HTMLstr =" ";
        for (var i = 0; i < shopcontent.length; i++) {
            if (shopcontent[i].getElementsByTagName("input")[0].checked) {
                seleted += parseInt(shopcontent[i].getElementsByTagName("input")[1].value);
                price += parseFloat(document.getElementsByClassName("td-total")[i].innerHTML);
                HTMLstr += '<div><img src="'+shopcontent[i].getElementsByTagName("img")[0].src+'"><span class="del" index="'+i+'">取消选择></span></div>'
            }
        }
            selectedTotal.innerHTML = seleted;
            topPriceTotal.innerHTML = price.toFixed(2);
            bottom_priceTotal.innerHTML = price.toFixed(2);
            selectedViewList.innerHTML = HTMLstr;
        if(seleted == 0){
            floatBar.className = "floatBar";
        }
    }

    //点击事件
    for(var i = 0 ; i < checkInputs.length ; i++){
        checkInputs[i].onclick = function(){
            if(this.className.indexOf("check-all")>=0){
                for(var j = 0 ; j < checkInputs.length ; j++){
                    checkInputs[j].checked = this.checked;
                }
            }else if(!this.checked){
                for(var k=0 ; k < checkAllInputs.length ; k++){
                    checkAllInputs[k].checked = false;
                }
            }
              getTotal();
            
        }
    }

    selected.onclick=function () {
        if(floatBar.className == "floatBar"){
            if(selectedTotal.innerHTML!= 0){
                floatBar.className = "floatBar show";
            }else{
                floatBar.className = "floatBar";
            }
        }
    }

    selectedViewList.onclick=function(e){//当事件被触发时，有一个特殊的对象会被传到事件函数里面 这个对象叫做事件对象
            e=e||window.event;//为了兼容低版本的IE
        var el= e.srcElement;//当发生点击事件时，在控制台可以通过srcElement=？ 确定鼠标点击到哪个元素上
        if(el.className=="del"){
            var index=el.getAttribute("index");
            var input=shopcontent[index].getElementsByTagName("input")[0];
            // var inputShop=checkShopInputs[index].getElementsByTagName("input")[0];

            input.checked=false;
            input.onclick();//触发input的onclick事件，可以达到使浮窗显示或者不显示商品
        }
    }

        //增、减商品
    for(i=0;i<shopcontent.length;i++){
        shopcontent[i].onclick=function(e){
            e=e||window.event;
            var el= e.srcElement;//获取点击的元素
            var cls=el.className;
            var input=this.getElementsByTagName("input")[1];
            var val=parseInt(input.value);//类型转化一下
            var reduce=this.getElementsByTagName("span")[1];
            switch(cls){
                case "add":
                    input.value=val+1;
                    // reduce.innerHTML="-";
                    getSubTotal(this);
                    break;
                case "reduce":
                    if(val>1){
                    input.value=val-1;

                    }//注意参数不同
                    if(input.value<=1){
                        reduce.innerHTML="";
                    }
                    getSubTotal(this);
                    break;
                case "delete":
                    var conf=confirm("确定要删除么？");
                    if(conf){
                    this.parentNode.removeChild(this);
                    break;
                    }
                default:
                    break;
            }
            getTotal();//增减完成之后 调用函数 算总和
        }
            shopcontent[i].getElementsByTagName("input")[1].onkeyup=function(){
            var val=parseInt(this.value);
            var tr=this.parentNode.parentNode;
            var reduce=tr.getElementsByTagName("span")[1];
            if(isNaN(val)||val<1){
                val=1;
            }
            this.value=val;
            if(val<=1){
                reduce.innerHTML="";
            }
            else{
                reduce.innerHTML="-";
            }
            getSubTotal(tr);
            getTotal();
        }
    }
        //小计 计算每一行的总价
    function getSubTotal(shopcontent){
        var price=parseFloat(document.getElementsByClassName("td-total")[1].innerHTML);
        var count=parseInt(shopcontent.getElementsByTagName("input")[1].value);
        var subTotal=parseFloat(price*count);
        // shopcontent.getElementsByTagName("td")[4].innerHTML=subTotal.toFixed(2);
            topPriceTotal.innerHTML = subTotal.toFixed(2);
            bottom_priceTotal.innerHTML = subTotal.toFixed(2);

    }
        // for(var i = 0 ; i < checkInputs.length ; i++){
        //      var m=(i-1)/2;
        // checkInputs[i].onclick = function(){
        //     if(this.className.indexOf('check-all') >= 0){
        //         for(var j = 0 ; j < checkInputs.length ; j++){
        //             checkInputs[j].checked = this.checked;
        //         }
        //     }else if(this.className.indexOf('check-shop') >= 0){
        //         checkboxshop[m].checked = false;
        //     }else if(!this.checked){
        //         for(var k=0 ; k < checkAllInputs.length ; k++){
        //             checkAllInputs[k].checked = false;
        //         }
        //     }
        //       getTotal();
        // }
    // }

}
