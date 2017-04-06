var message;
$('body').scrollTop(0);
 var jsonStudy=[],
    jsonGroup=[],
    jsonDevelop=[],
    jsonEmotion=[],
    jsonExperit=[],
    jsonOther=[];
    $.ajax({ 
      type: "GET",  
      url: "http://localhost/coalball/Home/Index/test",
      dataType: "json",
      success: function(data) {
            message = data;
          divideJson(message);
        for(let i=0;i<5;i++)
    {
        let num=i+1;
      
      $('.dataSort').eq(num).html(message[i].cate+':');
      $('.dataHeadline').eq(num).html(message[i].title);
      $('.dataBody').eq(num).html(message[i].content);
      $('.timeStart').eq(num).html('发布时间：'+ message[i].update_time);
      $('.timeStop').eq(num).html('截止时间：'+ message[i].overtime);
        if(message[i].path0){
            $('.img2').eq(num).attr("src", "http://localhost/coalball/Application/Common/Common/Uploads/" + message[i].path0+message[i].savename0);
        }else{
            $('.img2').eq(num).css('display','none');
        }

        if(message[i].path1){
            $('.img1').eq(num).attr("src", "http://localhost/coalball/Application/Common/Common/Uploads/" +message[i].path1+message[i].savename1);
        }else{
            $('.img1').eq(num).css('display','none');
        }

    }
      },
      error: function(jqXHR){     
         alert("发生错误：" + jqXHR.status);  
      },     
    });


function divideJson(message){
    for(var i=0;i<message.length;i++){
        switch (message[i].cate){
            case "学习":jsonStudy.push(message[i]);
                break;
            case "组队/招人":jsonGroup.push(message[i]);
                break;
            case "开发/设计/视频制作":jsonDevelop.push(message[i]);
                break;
            case "情感":jsonEmotion.push(message[i]);
                break;
            case "实验":jsonExperit.push(message[i]);
                break;
            case "其他":jsonOther.push(message[i]);
                break;
        }
    }
}


//懒式加载js开始，修改二
function throttle(fn=load, delay=25, atleast=1000) {
      var timeout = null,
    startTime = new Date();
      return function() {
    var curTime = new Date();
    clearTimeout(timeout);
    if(curTime - startTime >= atleast) {
        fn();
        startTime = curTime;
    }else {
        timeout = setTimeout(fn, delay);
    }
      }
  }
  var p=0,t=0,down=0;  
    $(window).scroll(function(e){  
            p = $(this).scrollTop();    
            if(t<=p){//下滚  
                  down=1;
            }  
              
            else{//上滚 
             down=0;
            }  
            t = p;     
    });  
var num1 = 6,
    num2,
    num3,
    num4,
    num5,
    num6,
    num7;
var off2 = 1,
    off3 = 1,
    off4 = 1,
    off5 = 1,
    off6 = 1,
    off7 = 1;

//===================开始封装 addSomeNodes

    function addSomeNodes(whichJsonArray,whichNum,whichOff,whichNeed){         //
        if(need == whichNeed && whichOff){
            let i = whichNum;
            if(whichNum<=whichJsonArray.length){
                $('#middle-show').append("<section class='data'><div class='leftData'><span class='dataSort'></span><span class='dataHeadline'></span><p class='dataBody'></p><span class='time timeStart'></span><span class='time timeStop'></span></div><img class='img img1' ><img class='img img2' ></section>");
            }

            $('.dataSort').eq(whichNum).html(whichJsonArray[i].cate+':');
            $('.dataHeadline').eq(whichNum).html(whichJsonArray[i].title);
            $('.dataBody').eq(whichNum).html(whichJsonArray[i].content);
            $('.timeStart').eq(whichNum).html('发布时间：'+ whichJsonArray[i].update_time);
            $('.timeStop').eq(whichNum).html('截止时间：'+ whichJsonArray[i].overtime);


            if(whichJsonArray[i].path0){
                $('.img2').eq(whichNum).attr("src", "http://localhost/coalball/Application/Common/Common/Uploads/" + whichJsonArray[i].path0+whichJsonArray[i].savename0);
            }else{
                $('.img2').eq(whichNum).css('display','none');
            }

            if(whichJsonArray[i].path1){
                $('.img1').eq(whichNum).attr("src", "http://localhost/coalball/Application/Common/Common/Uploads/" +whichJsonArray[i].path1+whichJsonArray[i].savename1);
            }else{
                $('.img1').eq(whichNum).css('display','none');
            }

            whichNum++;
            if(whichNum == whichJsonArray.length){
                whichOff = 0;
            }
    }


//===================开始封装 removeSomeNodes

        function removeSomeNodes(whichJsonArray,whichNum,whichOff,whichNeed){
            if(need == whichNeed)
            {
                off2 = whichOff;
                $(".data").remove();
                let i;
                for(let num=0;num<5;num++){
                    i=num;
                    $('#middle-show').append("<section class='data'><div class='leftData'><span class='dataSort'></span><span class='dataHeadline'></span><p class='dataBody'></p><span class='time timeStart'></span><span class='time timeStop'></span></div><img class='img img1' ><img class='img img2' ></section>");
                    $('.dataSort').eq(num).text(whichJsonArray[i].cate+':');
                    $('.dataHeadline').eq(num).html(whichJsonArray[i].title);
                    $('.dataBody').eq(num).html(whichJsonArray[i].content);
                    $('.timeStart').eq(num).html('发布时间：'+ whichJsonArray[i].update_time);
                    $('.timeStop').eq(num).html('截止时间：'+ whichJsonArray[i].overtime);

                    if(whichJsonArray[i].path0){
                        $('.img2').eq(num).attr("src", "http://localhost/coalball/Application/Common/Common/Uploads/" + whichJsonArray[i].path0+whichJsonArray[i].savename0);
                    }else{
                        $('.img2').eq(num).css('display','none');
                    }

                    if(whichJsonArray[i].path1){
                        $('.img1').eq(num).attr("src", "http://localhost/coalball/Application/Common/Common/Uploads/" +whichJsonArray[i].path1+whichJsonArray[i].savename1);
                    }else{
                        $('.img1').eq(num).css('display','none');
                    }

                }

                num1 = whichNum;
            }
        }




function lazyload() {
      return function() {
            var seeHeight = $(window).height(),
                scrollTop = document.documentElement.scrollTop || document.body.scrollTop;

      if($('section:last').offset().top < seeHeight + scrollTop&&down  ) {

          addSomeNodes(message,num1,off2,0);
          addSomeNodes(jsonStudy,num2,off3,1);
          addSomeNodes(jsonGroup,num3,off4,2);
          addSomeNodes(jsonDevelop,num4,off5,3);
          addSomeNodes(jsonEmotion,num5,off6,4);
          addSomeNodes(jsonExperit,num6,off7,5);
          addSomeNodes(jsonOther,num7,off8,6);

         }
    }
}
  var load = lazyload();
  window.addEventListener('scroll', throttle(), false);
  // window.removeEventListener('scroll', throttle, false);

//懒式加载js结束

  var need = 0;
  $('#need>li').click(function(){
    $('body').scrollTop(0);
     need = $(this).index();

      removeSomeNodes(message,num1,off2,0);
      removeSomeNodes(jsonStudy,num2,off3,1);
      removeSomeNodes(jsonGroup,num3,off4,2);
      removeSomeNodes(jsonDevelop,num4,off5,3);
      removeSomeNodes(jsonEmotion,num5,off6,4);
      removeSomeNodes(jsonExperit,num6,off7,5);
      removeSomeNodes(jsonOther,num7,off8,6);

  });

  // 登录弹出1层js开始
  $('#close').click(function(){
  $('#mask').css('display','none');
  $('#login-box').css('display','none');
  $('body').css('overflowY','scroll');
});
  $('#login').click(function(){
  $('body').css('overflowY','hidden');
  $("#login-email").html($.cookie("userName")); 
   $("#login-password").val($.cookie("passWord"));

    var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    var scrollLeft = document.documentElement.scrollLeft || document.body.scrollLeft;

    $('#mask').css('display','block');
    var width1 = Math.max( document.body.offsetWidth, document.documentElement.clientWidth ) + 'px';
    var height1 = Math.max( document.body.offsetHeight, document.documentElement.clientHeight ) + 'px';
    $('#mask').css('width',width1);
    $('#mask').css('height',height1);
     // $('#mask').css('top',scrollTop); 
        $('#login-box').css('display','block');
         var width2 = (document.documentElement.clientWidth - $('#login-box').outerWidth() ) / 2 + scrollLeft + 'px';
         var height2 = ( document.documentElement.clientHeight - $('#login-box').outerHeight() ) / 2 + scrollTop + 'px';
         $('#login-box').css('left',width2);
        $('#login-box').css('top',height2);
  })
  $(window).resize(function(){
    if ($('#mask').css("display")=='none') return ;
    var width1 = Math.max( document.body.offsetWidth, document.documentElement.clientWidth ) + 'px';
    var height1 = Math.max( document.body.offsetHeight, document.documentElement.clientHeight ) + 'px';
    $('#mask').css('width',width1);
        $('#mask').css('height',height1);
    if ($('#login-box').css("display")=='none') return ;
    var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    var scrollLeft = document.documentElement.scrollLeft || document.body.scrollLeft;
    var width3 = ( document.documentElement.clientWidth - $('#login-box').outerWidth()) / 2 + scrollLeft + 'px';
    var height3 = ( document.documentElement.clientHeight - $('#login-box').outerHeight() ) / 2 + scrollTop + 'px';
    $('#login-box').css("left",width3);
    $('#login-box').css("top",height3);
  })
  $('#login-headline').click(function(){
    $("#login-body").css('display','block');
    $("#register").css('display','none');
    $('.activeHeadline').removeClass('activeHeadline');
    $(this).addClass('activeHeadline');
  });

    $('#register-headline').click(function(){
    $("#login-body").css('display','none');
    $("#register").css('display','block');
    $('.activeHeadline').removeClass('activeHeadline');
    $(this).addClass('activeHeadline');
  });
    $('#login-email').blur(function(){
      let re=/^\w+[\.\_]?\w+\@\w+\.[a-zA-Z]+[\.a-zA-Z]*$/;
          if (!re.test($('#login-email').val())){
        $('#email-tip').text('你的邮箱格式不正确');
      }else{
         $('#email-tip').html('&nbsp');
      }
    });
        $('#register-email').blur(function(){
      let re=/^\w+[\.\_]?\w+\@\w+\.[a-zA-Z]+[\.a-zA-Z]*$/;
          if (!re.test($('#register-email').val())){
        $('#register-tip1').text('你的邮箱格式不正确');
      }else{
         $('#register-tip1').html('&nbsp');
      }
    });
        $('#login-password').blur(function(){
      let re=/^\S{6,16}$/;
          if (!re.test($('#login-password').val())){
        $('#password-tip').text('你的密码格式不正确');
      }else{
         $('#password-tip').html('&nbsp');
      }
    });
          $('#register-password').blur(function(){
      let re=/^\S{6,16}$/;
          if (!re.test($('#register-password').val())){
        $('#register-tip2').text('你的密码格式不正确');
      }else{
         $('#register-tip2').html('&nbsp');
      }
    });
      $('#login-form').submit(function(){
         if ($("#remeber-password").attr("checked") == 'checked') { 
       var userName = $("#login-email").val(); 
       var passWord = $("#login-password").val();  
       $.cookie("remeber-password", "true", { expires: 14 }); 
       $.cookie("userName", userName, { expires: 14 });
       $.cookie("passWord", passWord, { expires: 14 }); 
          } 
      });   
  // 登录弹出层js结束
  // 修改一，之前已改过，但此文件未改动的，原代码为上面注释的


     if($("html").width()<=479)
  {
         $(".leftNeed:first").text("最近");
  }
         var off=true;
  $('#publish').click(function(){
    if(off){
      if($(document.body).outerWidth(true)<479){
      $('#right-state').css('display','none');
      $('#left-bar').css('display','none');
      $('.upload-leftDate').css('display','none');
      $("#finish-btn").val('完成');
      $("#upload-btn").html('+');
      $('#need-select').css('display','block');
      }
      $('#middle-show').css('display','none');
    $('#middle-headline').css('display','none');
    $('#middle-upload').css('display','block');
     off=false;
    }else{
      $('#middle-show').css('display','block');
      if($(document.body).outerWidth(true)>479){
      
      $('#middle-headline').css('display','block');
      }
    
    $('#middle-upload').css('display','none');
    $('#need-select').css('display','none');
     off=true;
    }   
  });
   $('#triangle').click(function(){
    if($(document.body).outerWidth(true)<479){
      $('#right-state').css('display','block');
        $('#left-bar').css('display','block');
      $('#middle-show').css('display','block');
    $('#middle-upload').css('display','none');
    $('#need-select').css('display','none');
        off=true;
    }
  });


 $('#empty').click(function(){
      $("#pic1").attr("src", '');
      $("#pic2").attr("src", '');
      $('#img-number').html(0);
      filesLength=0;
      return false;
  });



var filesLength=1;
$("#xfile").change(function checkurl(){
  
  if(this.files.length){
    filesLength=this.files.length;
  }
  var objUrl1 = getObjectURL(this.files[0]);
  if (objUrl1) {
    $("#pic1").attr("src", objUrl1) ;
    
  }
  if(this.files.length>=2){
  var objUrl2 = getObjectURL(this.files[1]);
  if (objUrl2) {
    $("#pic2").attr("src", objUrl2);
  }
}
   $('#img-number').html(filesLength);

});

function getObjectURL(file) {
  var url = null ; 
  if (window.createObjectURL!=undefined) { // basic
    url = window.createObjectURL(file) ;
  } else if (window.URL!=undefined) { // mozilla(firefox)
    url = window.URL.createObjectURL(file) ;
  } else if (window.webkitURL!=undefined) { // webkit or chrome
    url = window.webkitURL.createObjectURL(file) ;
  }
  return url;
}


   var str1;
   var str2;
$('#refresh').click(function(){
  time();
  $('.upload-data').css('display','block');
    var text1 =$('#upload-headline').val();
    var text2 =$('#upload-content').val();
  $(".upload-data .dataHeadline").html(text1);
  $(".upload-data .dataBody").html(text2);
  $(".upload-data .dataSort").html(text3);
  $(".upload-data .timeStart").html('开始时间：'+str1);
  $(".upload-data .timeStop").html('截止时间：'+str2);
    if(filesLength==1){
  
    $("#pic2").attr("src", '');
  }
      if(filesLength==0){
  
    $("#pic1").attr("src", '');
    $("#pic2").attr("src", '');

  }

  
});

function time(){
   var mydate = new Date();
   str1 = "" + mydate.getFullYear() + ".";
   str1 += (mydate.getMonth()+1) + ".";
   str1 += mydate.getDate();
   var daynumber=$('#day-num').val();
var str3=mydate.getFullYear() +"-"+(mydate.getMonth()+1)+"-"+mydate.getDate();
console.log(str3);
var d= new Date(str3);
d.setDate(d.getDate() + Number(daynumber));
 str2=d.getFullYear()+"."+(d.getMonth()+1)+"."+d.getDate();
};

$('#day-num').change(function(){
  time();
});


  var text3="学习:";
$("[title='button']").click(function(){
    $('.selected').removeClass('selected');
    $("[title='button']").attr("checked", false);
  $(this).parent().addClass('selected');
  $(this).attr("checked", true);
  switch ($(this).index())
{
case 3:
  text3="学习:";
  break;
case 4:
  text3="组队/招人:";
  break;
case 5:
  text3="开发/设计/视频制作:";
  break;
case 6:
  text3="情感:";
  break;
case 7:
  text3="实验:";
  break;
case 8:
  text3="其他:";
  break;

}
});

