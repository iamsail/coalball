<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width,initial-scale=1.0,user-scalable=no'/>
	<title>煤球网</title>
	<link rel="stylesheet" type="text/css" href="Application/Home/Common/css/reset.css">
	<link rel="stylesheet" type="text/css" href="Application/Home/Common/css/index.css">
	<script>
		(function(){
			var  html = document.documentElement;
			var htmlWidth = html.getBoundingClientRect().width;
			html.style.fontSize = htmlWidth/15 +'px';
		})()
		window.onresize=function(){
			var  html = document.documentElement;
			var need=document.getElementById('need1');
			var htmlWidth = html.getBoundingClientRect().width;
			html.style.fontSize = htmlWidth/15 +'px';
			  if(htmlWidth<=479)
	         {
	         	need.innerHTML='最近';
	         }
	          if(htmlWidth>=480)
	         {
	         	need.innerHTML='需求分类';
	         }
		};
	</script>

</head>
<body>
	<!-- 左边信息栏开始 -->
	<header id='left-bar'>
		<img id='coal' src="Application/Home/Common/img/资源 5.png">
		<div id='left-text'>
			<input type="text" name="">
		</div>
		<div id='box'></div>
		<ul id='need'>
		    <li class="leftNeed" id='need1'>需求分类</li>
			<li class='needGroup'>学习</li>
			<li class='needGroup'>组队/招人</li>
			<li class='needGroup'>开发/设计/视频制作</li>
			<li class='needGroup'>情感</li>
			<li class='needGroup'>实验</li>
			<li class='needGroup'>其他</li>
			<li class="leftNeed" id='need2'>物理实验</li>
		</ul>
		<div class='btnGroup' id='student-online'><a href="http://flyingstudio.online/" target="_blank"></a></div>
		<div class='btnGroup' id='cumt-office'><a href="http://www.cumt.edu.cn/" target="_blank"></a></div>
	</header>
	<!-- 左边信息栏结束 -->

	<!-- 中间浏览区开始 -->
   <article id='middle-bar'>
     <div id='middle-upload'>
     	<div id='title1'>发布需求</div>
     	<div id='title2'>物理实验(敬请期待)</div>
     	<div id='triangle'><</div>
     	<form action="/coalball/Home/Index/upload" method="post" enctype="multipart/form-data">
     	  <div id='upload'>
     		<span id='chacter-type'><i>*</i>需求类型：</span>

     		<select id='need-select'>
     			<option value="" selected="selected" disabled="disabled">请选择</option>
     			<option value="">学习</option>
     			<option value="">组队/招人</option>
     			<option value="">开发/设计/视频制作</option>
     			<option value="">情感</option>
     			<option value="">实验</option>
     			<option value="">其他</option>
     		</select>
 		  <hr class="upload-hr1">
     		<label class='radioGroup selected'><input  type='radio' title='button' name="cate" value="学习" checked="checked" index=1>学习</label>
     		<label class='radioGroup'><input type='radio'  title='button' name="cate" value="组队/招人" index=2>组队/招人</label>
     		<label class='radioGroup'><input type='radio'  title='button' name="cate" value="开发/设计/视频制作" index=3>开发/设计/视频制作</label>
     		<label class='radioGroup'><input type='radio'  title='button' name="cate" value="情感" index=4>情感</label>
     		<label class='radioGroup'><input type='radio'  title='button' name="cate" value="实验" index=5>实验</label>
     		<label class='radioGroup'><input type='radio'  title='button' name="cate" value="其他" index=6>其他</label>
			  <br>
     		<span id='chacter-headline'><i>*</i>标题：</span>
     		<input id='upload-headline' class='upload-text' type="text" name="title"><br>
            <hr class="upload-hr2">
     		<span id='chacter-time'>持续时间：</span><input id='day-num' class='upload-text' type="text" name="timeLength">
     		<span id='chacter-day'>天</span><br>
     		<hr class="upload-hr3">
     		<span id='chacter-describe'><i>*</i>描述：</span><textarea id='upload-content' name="content" placeholder="这里输入内容，不要忘记留下联系方式，最多666字哦~"></textarea><br>
     		<hr class="upload-hr4">
     		<span id='chacter-img'>插入图片：</span><label id='upload-btn' for="xfile">浏览</label>
     		<span id='inputimg'>
     		<input id="xfile"  name="xfile[]" type="file" multiple='multiple' >
     		</span>
			<span id='inputimg'>
     		<input id="xfile"  name="xfile[]" type="file" multiple='multiple' >
     		</span>

     		<p id='img-num'>
     		已选择<span id='img-number'>0</span>张图
     		</p>
     		 <div  id='empty'>清空</div> <br>     		
     		<p id='img-tip'>温馨提示：鼠标点击时按住Ctrl键加选/减选，按住Shift键连续选择</p>
     	   </div>
     		<span id='preview'>这是预览↓↓↓</span><button type='button' id='refresh'>刷新</button>
     		<section class='upload-data data'>
     			<div class='leftData upload-leftDate'>
     				<span class='dataSort' ></span>
   		            <span class='dataHeadline' ></span>
   		            <p class='dataBody'></p>
                    <span class='time timeStart'></span>
   		            <span class='time timeStop'></span>
     			</div>
     			<img id='pic1' class='img img1' src="">
     			<img id='pic2' class='img img2' src="">
     		</section>
            <input id='finish-btn' type="submit" value='完成' name="submit">
            <input id='reset-btn' type="reset"  value='重置'>
     	</form>
     </div>


	   <div id='middle-show'>
		   <?php if(is_array($xqinfo)): $i = 0; $__LIST__ = array_slice($xqinfo,0,null,true);if( count($__LIST__)==0 ) : echo "还没有需求" ;else: foreach($__LIST__ as $key=>$water): $mod = ($i % 2 );++$i;?><section class='data dataSort6'>
				   <div class='leftData'>
					   <span class='dataSort'><?php echo ($water["cate"]); ?>:</span>
					   <span class='dataHeadline'><?php echo ($water["title"]); ?></span>
					   <p class='dataBody'><?php echo ($water["content"]); ?></p>
					   <span class='time timeStart'>发布时间：<?php echo ($water["update_time"]); ?></span>
					   <span class='time timeStop'>截止时间：<?php echo ($water["overtime"]); ?></span>
				   </div>
				   <?php if($water["path0"] != '' ): ?><img class='img img2' src="/coalball/Application/Common/Common/Uploads/<?php echo ($water["path0"]); echo ($water["savename0"]); ?>">
					   <?php if($water["path1"] != '' ): ?><img class='img img1' src="/coalball/Application/Common/Common/Uploads/<?php echo ($water["path1"]); echo ($water["savename1"]); ?>"><?php endif; endif; ?>
			   </section><?php endforeach; endif; else: echo "还没有需求" ;endif; ?>
	   </div>

       </div>
   </article>
	<!-- 中间浏览区结束 -->

	<!-- 右边状态区开始 -->
   <section id='right-state'>
   	<!--<img id='head' src="Application/Home/Common/img/资源 1.png">-->


	   <?php if(null != $_SESSION['name'] ): ?><!--这儿需要调用数据库存放的url-->
		   <!--<?php echo "<img class='head' src=". $headImgUrl[1][headimg].">" ?>-->
		   <?php echo "<img class='head' src=". $_SESSION['img'].">" ?>
		   <span class='login-state'><?php echo $_SESSION['name'] ?></span>
		   <div class='btnGroup1' id='logout'><a href="Home/Index/logout">注销</a></div>
		   <?php else: ?>
		   <img class='head' src="Application/Home/Common/img/资源 1.png">
		   <span class='login-state'>没有登录</span>
		   <div class='btnGroup1' id='login'>登录</div><?php endif; ?>


   	<!--<div class='btnGroup1' id='login'>登录</div>-->
<!--    	<div class='btnGroup1' id='login'><a href="http://f.yiban.cn/iapp97545" class="login">登录</a></div> -->
	<div  name="dashmain" id="dash-main-id-87903d" class="dash-main-4 87903d-2"  ></div>
  <div class='btnGroup1' id='pay'>打赏</div>
   	<div class='btnGroup1' id='publish'>发布</div>
   </section>
	<!-- 右边状态区结束 -->

  <!-- 登录弹出层开始 -->
  <div id="mask"></div>
    <div id="login-box">
      <div id='login-header'>
        <h1>
        <span id='login-headline' class="loginHeadline activeHeadline">登录</span>
        <span id='register-headline' class="loginHeadline">注册</span>
        </h1>
        <a href="#" id='close'>x</a>
      </div>
      <div id='login-body'>
      <form action="" autocomplete="on" id='login-form'>
        <input id='login-email' type="text" name='email' placeholder="请输入登录邮箱" maxlength="37">
        <p id='email-tip'>&nbsp;</p>
        <input id='login-password' type="password" name='password' placeholder="6-16位密码，区分大小写，不能使用空格" maxlength="16">
        <p id='password-tip'>&nbsp;</p>
        <label for="remeber-password"><input type="checkbox" id='remeber-password' checked="checked">记住密码</label>
        <a href="#">忘记密码？</a>
        <input id='login-button' type="submit" value='登录'>
        </form>
      </div>
      <div id='register'>
       <form action="" autocomplete="on">
        <input id='register-email' type="text" name='email' placeholder="请输入注册邮箱" maxlength="37">
        <p id='register-tip1'>&nbsp;</p>
        <input id='register-password' type="password" name='password' placeholder="6-16位密码，区分大小写，不能使用空格" maxlength="16">
        <p id='register-tip2'>&nbsp;</p>
        <input id='register-button' type="submit" value='注册'>
        </form>
      </div>
      <div id='login-footer'>
        <p>第三方登录：</p>
        <a href="http://localhost/coalball/login.php"><img src="Application/Home/Common/img/QQ.png" alt="qq登录" id='login-img1'></a>
        <a href="http://f.yiban.cn/iapp97545"><img src="Application/Home/Common/img/yiban-logo.png" alt="易班登录" id='login-img2'></a>
      </div>
    </div>
  <!-- 登录弹出层结束 -->

<script  src="Application/Home/Common/js/ds.js"></script>
<script src='Application/Home/Common/js/jquery-3.1.1.js'></script>
<script src='Application/Home/Common/js/jquery.cookie.js'></script>
<script type= "application/javascript">
  // 登录弹出层js开始
  $('#close').click(function(){
  $('#mask').css('display','none');
  $('#login-box').css('display','none');

});
  $('#login').click(function(){
  $("#login-email").html($.cookie("userName")); 
   $("#login-password").val($.cookie("passWord"));

    var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    var scrollLeft = document.documentElement.scrollLeft || document.body.scrollLeft;

    $('#mask').css('display','block');
    var width1 = Math.max( document.body.offsetWidth, document.documentElement.clientWidth ) + 'px';
    var height1 = Math.max( document.body.offsetHeight, document.documentElement.clientHeight ) + 'px';
    $('#mask').css('width',width1);
        $('#mask').css('height',height1);

        $('#login-box').css('display','block');
         var width2 = (document.documentElement.clientWidth - $('#login-box').outerWidth() ) / 2 + scrollLeft + 'px';

         var height2 = ( document.documentElement.clientHeight - $('#login-box').outerHeight() ) / 2 + scrollTop + 'px';
         $('#login-box').css('left',width2);
        $('#login-box').css('top',height2);
  })
  $(window).scroll(function(){
    if ($('#login-box').css("display")=='none') return ;
    var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    var scrollLeft = document.documentElement.scrollLeft || document.body.scrollLeft;
    var width3 = ( document.documentElement.clientWidth - $('#login-box').outerWidth()) / 2 + scrollLeft + 'px';
    var height3 = ( document.documentElement.clientHeight - $('#login-box').outerHeight() ) / 2 + scrollTop + 'px';
    $('#login-box').css("left",width3);
    $('#login-box').css("top",height3);
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

	$('#need>li').click(function(){
		var need = $(this).index();	
      $(".data").css('display','none');
      $(".dataSort"+need).css('display','block');
      if(need==0)
      {
       $(".data").css('display','block');  
      }
	});
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

</script>
</body>
</html>