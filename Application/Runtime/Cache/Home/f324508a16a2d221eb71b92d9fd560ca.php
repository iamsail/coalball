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
<div id='back-top'>^</div>
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
              <input id='upload-userid' type="hidden" name="userid">
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

   <section class='data needData'>
         <div class='leftData'>
            <span class='dataSort'></span>
            <span class='dataHeadline'></span>
            <p class='dataBody'></p>
            <span class='time timeStart'></span>
            <span class='time timeStop'></span>
         </div>
         <img class='img img1' src=''>
         <img class='img img2' src=''>
   </section>
   <section class='data needData'>
         <div class='leftData'>
            <span class='dataSort'></span>
            <span class='dataHeadline'></span>
            <p class='dataBody'></p>
            <span class='time timeStart'></span>
            <span class='time timeStop'></span>
         </div>
         <img class='img img1' src=''>
         <img class='img img2' src=''>
   </section>
   <section class='data needData'>
         <div class='leftData'>
            <span class='dataSort'></span>
            <span class='dataHeadline'></span>
            <p class='dataBody'></p>
            <span class='time timeStart'></span>
            <span class='time timeStop'></span>
         </div>
         <img class='img img1' src=''>
         <img class='img img2' src=''>
   </section>
   <section class='data needData'>
         <div class='leftData'>
            <span class='dataSort'></span>
            <span class='dataHeadline'></span>
            <p class='dataBody'></p>
            <span class='time timeStart'></span>
            <span class='time timeStop'></span>
         </div>
         <img class='img img1' src=''>
         <img class='img img2' src=''>
   </section>
   <section class='data needData'>
         <div class='leftData'>
            <span class='dataSort'></span>
            <span class='dataHeadline'></span>
            <p class='dataBody'></p>
            <span class='time timeStart'></span>
            <span class='time timeStop'></span>
         </div>
         <img class='img img1' src=''>
         <img class='img img2' src=''>
   </section>





	   </div>
     <!-- 个人详情页 -->
     <div id='middle-detail'>
     <div id='detail-header'><a href="#" id='detail-back'><</a>个人页</div>
       <div id='user-data'>
         <div id='user-head'><img id='user-headimg' src="Application/Home/Common/img/lol1.png" alt="用户头像"></div>
         <span id='user-name'>Simple</span>
         <input type="text" id='user-sign' value='吊二郎的小用户' disabled="disabled">
         <input id='user-changedata' type="button" value="修改">
         <div id='user-cancel'>注销</div>
       </div>

       <div id='user-publish'>
       <div id='publish-info'>
         <div id='publish-header'>发布</div>
         <div id='publish-num'></div>
       </div>
         
        <!--  <div class='publish-data'>
           <span class='publish-headline'></span>
           <span class='publish-start'></span>
           <span class='publish-stop'></span>
           <input class='publish-alter' type='button' value='修改'>
           <input class='publish-remove' type='button' value='删除'>
         </div> -->
 

       </div>
     </div>
     
   </article>
	<!-- 中间浏览区结束 -->

	<!-- 右边状态区开始 -->
   <section id='right-state'>

	   <!--img存在一定处于登录状态-->
	   <?php if(null != $_SESSION['img']): echo "<img class='head' src=". $_SESSION['img'].">" ?>
		   <?php else: endif; ?>

	   <?php if(null != $_SESSION['name']): ?><!--<span class='login-state'><?php echo $_SESSION['name'] ?>-->
		   <span class='login-state'><?php echo $_SESSION['name'] ?>

			   <div class='btnGroup1' id='logout'><a href="Home/Index/logout">注销</a></div>
		   <?php else: ?>
			   <!--<span class='login-state'>没有登录</span>-->
			   <div class='btnGroup1' id='login'>登录</div><?php endif; ?>
       
       <span id='user-id'><?php echo $_SESSION['usrid'] ?></span>

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
      <form action="/coalball/Home/Index/login" method="get" autocomplete="on" id='login-form'>
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
       <form action="/coalball/Home/Index/register" method="post" autocomplete="on">
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
<script src='Application/Home/Common/js/jquery-3.1.1.js'></script>
<script src='Application/Home/Common/js/index.js'></script>
<script  src="Application/Home/Common/js/ds.js"></script>
<script src='Application/Home/Common/js/jquery.cookie.js'></script>

</body>
</html>