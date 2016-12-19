$(function () {
    var userId = sessionStorage.getItem('id');
    var username = sessionStorage.getItem('username');
    var token = sessionStorage.getItem('token');
    var money = sessionStorage.getItem('money');
    var topUp = sessionStorage.getItem('topUp');
    var pay_id = sessionStorage.getItem('pay_id');
    var receive_id = sessionStorage.getItem('receive_id');
    var trade_pay = sessionStorage.getItem('trade_pay');
    var jiaoyi_id = sessionStorage.getItem('jiaoyi_id');
    var created_time = sessionStorage.getItem('created_time');

    $('.login_btn').bind('click',function () {
        var username = $('.username').val();
        var password = $('.password').val();
        $.ajax({
            url : 'signin_check',
            data : {
                username : username,
                password : password
            },
            method : 'POST',
            dataType : 'json',
            success : function (json){
                if(!json.code || json.code == 200){
                    //方法一通过在地址栏中添加键值对进行数值传递
                    // location.href = 'indexLogin.html?username=' + json.user.username + '&id=' + json.user.id;
                    // userId = json.user.id;
                    //方法二 通过sessionStorage
                    sessionStorage.setItem('username',username);
                    sessionStorage.setItem('id',json.user.id);
                    sessionStorage.setItem('token',json.token);
                    sessionStorage.setItem('money',json.user.money);
                   // location.href = 'indexLogin.html';
                }

            }
        });
   });

    // var url = location2obj(location.href);
    // $('#sign-success').html(json.user.username);
    // $('.sign-success').html(username);
    // console.log(sessionStorage.getItem('username'));

    var $agree = $('#agree');
    var $otherAgree = $('#other-agree');
    // var agree = $agree[0];
     $('.reg_btn').bind('click', function () {
        var username = $('.username')[0].value;
        var password = $('.password')[0].value;
        var contact=$('.contact')[0].value;
          if($agree.is(':checked')) {
              registerFetch(username, password,contact);
          }else {
            alert('请同意用户注册协议');
          }
    });
     $('.reg_btn_other').bind('click' , function () {
          if($otherAgree.is(':checked')) {
            var username = $('.username')[1].value;
            var password = $('.password')[1].value;
            var contact=$('.contact')[1].value;
              registerFetch(username, password,contact);
          }else {
            alert('请同意用户注册协议');
          }
        });

      var registerFetch = function (username, password,contact) {
        $.ajax({
              url : 'signup_check',
              data : {
                  username : username,
                  password : password,
                  contact  : contact
              },
              method : 'POST',
              dataType : 'json',
              success : function (json){
                  if(!json.code || json.code == 200){
                      // location.href = 'indexLogin.html?username='+json.username + '&id=' + json.id;
                      sessionStorage.setItem('username',username);
                      // sessionStorage.setItem('id',json.user.id);
                      //location.href = 'signin';
                  }
              }
          });
      }

        // $.ajax({
        //     url : 'http://120.27.131.127:12450/user/' + userId,
        //     data : {
        //         userId : userId
        //     },
        //     method : 'get',
        //     dataType : 'json',
        //     success : function (json){
        //         if(!json.code || json.code == 200){
        //             sessionStorage.setItem('username',username);
        //             sessionStorage.setItem('id',json.id);
        //             sessionStorage.setItem('money',json.money);
        //         }
        //     }
        // });


        //  $.ajax({
        //     url : '120.27.131.127:12450/user/userId/tradeList',

        //     type : 'get',
        //     dataType : 'json',
        //     success : function (json){

        //     }
        //  });
        //   $.ajax({
        //     url : 'http://120.27.131.127:12450/trade',
        //     data : {
        //         token : token,
        //         receiver : userId,
        //         money : money
        //     },
        //     method : 'post',
        //     dataType : 'json',
        //     success : function (json){
        //         if(!json.code || json.code == 200){
        //             sessionStorage.setItem('pay_id',json.pay_user_id);//支付用户的id
        //             sessionStorage.setItem('receive_id',json.receive_user_id);//接收用户的id
        //             sessionStorage.setItem('trade_pay',json.trade_py);//交易金额
        //             sessionStorage.setItem('jiaoyi_id',json.id);//本次交易id
        //             sessionStorage.setItem('created_time',json.created_at);//交易时间
        //         }
        //     }
        //   });

          // $.ajax({
          //       url : 'http://120.27.131.127:12450/recharge',
          //       data : {
          //           userId : userId,
          //           money : money  //之后改成topUP
          //       },
          //       method : 'post',
          //       dataType : 'json',
          //       success : function (json){
          //           console.log('recharge');
          //   }
          // });

     function location2obj(url) {
        url = url || window.location.href;
        if (url.indexOf('?') == -1) {
            return {};
        }
        url = url.substr(url.indexOf('?') + 1);
        url = url.substring(0, url.lastIndexOf('#') == -1 ? undefined : url.lastIndexOf('#'));
        var params = url.split('&');
        var obj = {};
        for ( var i = 0, len = params.length; i < len; i++) {
            var ps = params[i].split('=');
            obj[ps[0]] = decodeURI(ps.slice(1).join('='));
        }
        return obj;
    };

});

    // 对象解析成search name=li&ds=ds
    function obj2search(obj){
        var strs = [],
            len = 0;
        for (var i in obj) {
            strs[len] = i + '=' + (obj[i] == null ? '' : obj[i]);
            len ++;
        }
        return strs.join('&');
    }
