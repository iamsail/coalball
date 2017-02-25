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
   	<img id='head' src="Application/Home/Common/img/资源 1.png">
   	<span id='login-state'>没有登录</span>
   	<div class='btnGroup1' id='login'>登录</div>
   	<!--<div class='btnGroup1' id='pay'>打赏</div>-->
	<div  name="dashmain" id="dash-main-id-87903d" class="dash-main-4 87903d-2"  ></div>
  <div class='btnGroup1' id='pay'>打赏</div>
   	<div class='btnGroup1' id='publish'>发布</div>
   </section>
	<!-- 右边状态区结束 -->
<script  src="Application/Home/Common/js/ds.js"></script>
<script src='Application/Home/Common/js/jquery-3.1.1.js'></script>
  <script type= "application/javascript">
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

//$("form").submit(function(e){
//
//if($('#upload-content').val()==''||$('#upload-headline').val()=='')
//   {e.preventDefault();}
//if(!$('button').is('.selected'))
//   {e.preventDefault();}
//if($('#day-num').val()<0)
//   {e.preventDefault();}
//   });
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