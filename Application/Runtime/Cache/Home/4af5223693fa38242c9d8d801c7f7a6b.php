<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
    <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
    <title>WQAC 2.0</title>

    <!-- ========== Css Files ========== -->
    <link href="/wqac2.0/Public/Home/css/root.css" rel="stylesheet">
	<link href="/wqac2.0/Public/Home/css/self.css" rel="stylesheet">
	
</head>
<body>
<!-- Start Page Loading -->

<div class="loading" style="display: flex;justify-content: center;align-items: center;">
	<!--<img src="/wqac2.0/Public/Home/img/loading.gif" alt="loading-img">-->
	<style>
	/*.loadout{
		width: 100%;
		height: 100%;
		background: rgba(0,0,0,0.6);
		position: fixed;
		top: 0px;
		left: 0px;
		bottom: 0px;
		right: 0px;
	}*/
	.loadin{
		width: 100px;
		height: 100px;
		border-radius: 50%;
		overflow: hidden;
		position: relative;
		
	}
	.rotate{
		animation: rotateback 3s infinite;
		width: 100px;
		height: 100px;
		overflow: hidden;
	}
	.arcbg{
		border-width: 50px;
		border-style: solid;
		border-bottom-color: green;
		border-top-color: yellow;
		border-left-color: red;
		border-right-color: blue;
		position: absolute;
		height: 0px;
		line-height: 0px;
		top: 0px;
		left: 0px;
	}
	@keyframes rotateback{
		0%{transform: rotate(0deg);}
		100%{transform: rotate(3360deg);}
	}
	.arctent{
		width: 80px;
		height: 80px;
		border-radius: 50%;
		position: absolute;
		top: 10px;
		left: 10px;
		background: white;
		overflow: hidden;
	}
	.arctent img{
		width: 80px;
		height: 80px;
	}
	.content{
		margin-left: 0px;
	}
</style>
<!--<div class="loadout">-->
	<!--旋转loadding效果-->
	<div class="loadin" >
	<!--<div class="rotate">
			<div class="arcbg"></div>
		</div>-->
		<div class="arctent">
			<!--<img src="/wqac2.0/Public/Home/img/logo.png"/>-->
			<img src="/wqac2.0/Public/Home/img/loader.gif"/>
		</div>
	</div>
	<div style="color: #fff;">数据加载中。。。</div>
<!--</div>-->

</div>
<!-- End Page Loading -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START TOP -->
<div id="top" class="clearfix">

    <!-- Start App Logo -->
    <div class="applogo">
        <a href="<?php echo U('Index/index');?>" class="logo">WQAC 2.0</a>
    </div>
    <!-- End App Logo -->

    <!-- Start Sidebar Show Hide Button -->
    <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
    <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
    <!-- End Sidebar Show Hide Button -->

    <!-- Start Searchbox -->
    <form class="searchform">
        <input type="text" class="searchbox" id="searchbox" placeholder="Search">
        <span class="searchbutton"><i class="fa fa-search"></i></span>
    </form>
    <!-- End Searchbox -->

    <!-- Start Top Menu -->
    <ul class="topmenu">
        <li><a href="../Index/adduser.html"><span class="icon color9"><i class="fa fa-graduation-cap f-size-16"></i></span></a></li>
        <li><a href="../Index/adduser.html"><span class="icon color12"><i class="fa fa-group f-size-16"></i></span></a></li>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="icon color4"><i class="fa fa-adjust f-size-16"></i></span></a>
            <ul class="dropdown-menu">
                <li><a href="addpro.html">项目录入</a></li>
				<li><a href="#">项目考评</a></li>
            </ul>
        </li>
    </ul>
    <!-- End Top Menu -->




    <!-- Start Top Right -->
    <ul class="top-right">




        <li class="link">
            <a href="#" class="notifications">6</a>
        </li>

        <li class="dropdown link">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox"><img src="/wqac2.0/Public/Home/img/profileimg.png" alt="img"><b>Jonathan Doe</b><span class="caret"></span></a>
            <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
                <li role="presentation" class="dropdown-header">Profile</li>
                <li><a href="#"><i class="fa falist fa-inbox"></i>Inbox<span class="badge label-danger">4</span></a></li>
                <li><a href="#"><i class="fa falist fa-file-o"></i>Files</a></li>
                <li><a href="#"><i class="fa falist fa-wrench"></i>Settings</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa falist fa-lock"></i> Lockscreen</a></li>
                <li><a href="#"><i class="fa falist fa-power-off"></i> Logout</a></li>
            </ul>
        </li>

    </ul>
    <!-- End Top Right -->

</div>
<!-- END TOP -->
<link rel="stylesheet" href="/wqac2.0/Public/Home/css/xq2.css"/>
<style type="text/css">
	.bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
	  width: 100%;
	}
	.testmethod .col-sm-3,.col-sm-3 .col-sm-3{
		text-align: right;
	}
</style>
<!-- START SIDEBAR -->
<div class="sidebar clearfix hidden">
	<ul class="sidebar-panel nav">
		<li class="sidetitle">开发相关</li>
		<li><a href="proindex.html"><span class="icon color11"><i class="fa fa-child"></i></span>首页<span class="label label-danger">5</span></a></li>
		</li>
		<li><a href="#"><span class="icon color9"><i class="fa fa-graduation-cap"></i></span>员工管理<span class="caret"></span></a>
			<ul>
				<li><a href="../Index/adduser.html">录入管理</a></li>
				<li><a href="#">性价比分析</a></li>
				<li><a href="#">能力评估</a></li>
			</ul>
		</li>
		<li><a href="#"><span class="icon color12"><i class="fa fa-group"></i></span>客户关系管理<span class="caret"></span></a>
			<ul>
				<li><a href="adduser.html">客户录入</a></li>
				<li><a href="#">交流评估</a></li>
			</ul>
		</li>
		<li><a href="#"><span class="icon color4"><i class="fa fa-adjust"></i></span>项目管理<span class="caret"></span></a>
			<ul>
				<li><a href="addpro.html">项目录入</a></li>
				<li><a href="#">项目考评</a></li>
			</ul>
		</li>
	</ul>
    <ul class="sidebar-panel nav">
        <li class="sidetitle">用户相关</li>
        <li><a href="index.html"><span class="icon color5"><i class="fa fa-home"></i></span>仪表盘<span class="label label-default">2</span></a></li>
        <li><a href="mailbox.html"><span class="icon color6"><i class="fa fa-envelope-o"></i></span>邮箱<span class="label label-default">19</span></a></li>
        <li><a href="#"><span class="icon color7"><i class="fa fa-flask"></i></span>UI 举例<span class="caret"></span></a>
            <ul>
                <li><a href="icons.html">Icons</a></li>
                <li><a href="tabs.html">Tabs</a></li>
                <li><a href="buttons.html">Buttons</a></li>
                <li><a href="panels.html">Panels</a></li>
                <li><a href="notifications.html">Notifications</a></li>
                <li><a href="modal-boxes.html">Modal Boxes</a></li>
                <li><a href="progress-bars.html">Progress Bars</a></li>
                <li><a href="others.html">Others<span class="label label-danger">NEW</span></a></li>
            </ul>
        </li>
        <li><a href="charts.html"><span class="icon color8"><i class="fa fa-bar-chart"></i></span>图标相关</a></li>
        <li><a href="#"><span class="icon color9"><i class="fa fa-th"></i></span>表格<span class="caret"></span></a>
            <ul>
                <li><a href="basic-table.html">基本表格</a></li>
                <li><a href="data-table.html">数据表格</a></li>
            </ul>
        </li>
        <li><a href="#"><span class="icon color10"><i class="fa fa-check-square-o"></i></span>表单<span class="caret"></span></a>
            <ul>
                <li><a href="form-elements.html">Form Elements</a></li>
                <li><a href="layouts.html">Form Layouts</a></li>
                <li><a href="text-editors.html">Text Editors</a></li>
            </ul>
        </li>
        <li><a href="widgets.html"><span class="icon color11"><i class="fa fa-diamond"></i></span>窗口小组件</a></li>
        <li><a href="calendar.html"><span class="icon color8"><i class="fa fa-calendar-o"></i></span>日历<span class="label label-danger">NEW</span></a></li>
        <li><a href="typography.html"><span class="icon color12"><i class="fa fa-font"></i></span>字体相关</a></li>
        <li><a href="#"><span class="icon color14"><i class="fa fa-paper-plane-o"></i></span>额外页面<span class="caret"></span></a>
            <ul>
                <li><a href="social-profile.html">Social Profile</a></li>
                <li><a href="invoice.html">Invoice<span class="label label-danger">NEW</span></a></li>
                <li><a href="login.html">Login Page</a></li>
                <li><a href="register.html">Register</a></li>
                <li><a href="forgot-password.html">Forgot Password</a></li>
                <li><a href="lockscreen.html">Lockscreen</a></li>
                <li><a href="blank.html">Blank Page</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="404.html">404 Page</a></li>
                <li><a href="500.html">500 Page</a></li>
            </ul>
        </li>
    </ul>

    <ul class="sidebar-panel nav">
        <li class="sidetitle">MORE</li>
        <li><a href="grid.html"><span class="icon color15"><i class="fa fa-columns"></i></span>Grid System</a></li>
        <li><a href="maps.html"><span class="icon color7"><i class="fa fa-map-marker"></i></span>地图</a></li>
        <li><a href="customizable.html"><span class="icon color10"><i class="fa fa-lightbulb-o"></i></span>可定制的</a></li>
        <li><a href="helper-classes.html"><span class="icon color8"><i class="fa fa-code"></i></span>Helper Classes</a></li>
        <li><a href="changelogs.html"><span class="icon color12"><i class="fa fa-file-text-o"></i></span>Changelogs</a></li>
    </ul>

    <div class="sidebar-plan">
        Pro Plan<a href="#" class="link">Upgrade</a>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
            </div>
        </div>
        <span class="space">42 GB / 100 GB</span>
    </div>

</div>
<!-- END SIDEBAR -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTENT -->
<div class="content">
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
 <div class="box-cen margin-b-20">
 	<img src="/wqac2.0/Public/Home/img/logo1.png" class="disb macen"/>
 </div>
<div class="container-default">
	<div class="margin-t-20 dis-n">
		<div class="btn btn-default float-r">导出该项目所有API</div>
		<p><span class="btn btn-danger margin-r-10">e路同城</span><a href="#">http://yltc.txunda.com/index.php/Api</a></p>
	</div>
	<div class="row padding-t-10 margin-b-20">
		<div class="col-md-3 col-sm-4 col-xl-6 ih36">
			<!--<div class="text-center margin-b-10 f-bold f-size-18">测试工具</div>-->
			<!--<ul class="list-group mukuai">
				<li class="list-group-item" formk="user">用户端登陆注册</li>
				<li class="list-group-item" formk="good">用户端用户模块</li>
				<li class="list-group-item" formk="mesg">用户端地址模块</li>
			</ul>-->
			<div class="row margin-b-10 border-none">
				<div class="col-sm-4 col-xl-6">返回格式</div>
				<div class="col-sm-8 col-xl-6 f-size-16">JSON</div>
			</div>
			<div class="row margin-b-10 border-none">
				<div class="col-sm-4 col-xl-6">所属项目</div>
				<div class="col-sm-8 col-xl-6">
					<select class="selectpicker">
						<option value="0">淘艺</option>
						<option value="1">海猿网</option>
						<option value="2">食品供应链</option>
						<option value="3">房前屋后</option>
					</select>
				</div>
			</div>
			<div class="row margin-b-10 border-none">
				<div class="col-sm-4 col-xl-6">当前模块</div>
				<div class="col-sm-8 col-xl-6">
					<select class="selectpicker">
						<option value="0">用户管理</option>
						<option value="1">商品管理</option>
						<option value="2">客户关系管理</option>
						<option value="3">ERP管理</option>
					</select>
				</div>
			</div>
			<div class="row margin-b-10 border-none">
				<div class="col-sm-4 col-xl-6">当前方法</div>
				<div class="col-sm-8 col-xl-6">
					<select class="selectpicker methodselect">
						<option value="0">用户登录</option>
						<option value="1">用户注册</option>
						<option value="2">修改密码</option>
						<option value="3">设置自定义主题包</option>
					</select>
				</div>
			</div>
			<div class="testmethod margin-b-10">
				<!--<div class="margin-b-10"><input type="text" placeholder="模块名称"></div>
				<div><input type="text" placeholder="模块英文名称"></div>
				<button class="btn btn-default addmk">提交测试</button>-->
			</div>
		</div>
		<div class="col-md-9 col-sm-8 col-xl-6">
			<!--<div class="f-size-18 padding-b-10" style="border-bottom:1px solid #ccc">使用说明<a href="#" class="color10">首次试用请务必认真阅读</a></div>-->
			<div class="playinfo" style="min-height: 700px;">
				<h5 class="color5">API请求参数：</h5>
				<pre style="min-height: 150px;" class="reqargs"></pre>
				<h5 class="color5">整理后的返回结果：</h5>
				<pre style="min-height: 200px;" class="afresargs"></pre>
				<h5 class="color5">源生返回结果：</h5>
				<pre style="min-height: 150px;" class="resargs"></pre>
			</div>	
		</div>
	</div>
</div>
<!-- Start Footer -->
 <!-- Start Footer -->
<div class="row footer">
	<div class="col-md-6 text-left">
		Copyright &copy; 2016.TXUNDA All rights reserved.<a target="_blank" href="http://www.txunda.com/">天迅达科技</a>
	</div>
	<div class="col-md-6 text-right">
		Design and Developed by 天迅达
	</div>
</div>
<!-- End Footer -->
<!-- End Footer -->


</div>
<!-- End Content -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- ================================================
jQuery Library
================================================ -->
<script type="text/javascript" src="/wqac2.0/Public/Home/js/jquery.min.js"></script>

<!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
<script src="/wqac2.0/Public/Home/js/bootstrap/bootstrap.min.js"></script>

<!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
<!-- ================================================
Sweet Alert
================================================ -->
<script src="/wqac2.0/Public/Home/js/sweet-alert/sweet-alert.min.js"></script>

<!-- ================================================
Kode Alert
================================================ -->
<script src="/wqac2.0/Public/Home/js/kode-alert/main.js"></script>

<!-- ================================================
Bootstrap Select
================================================ -->
<script type="text/javascript" src="/wqac2.0/Public/Home/js/bootstrap-select/bootstrap-select.js"></script>
<script type="text/javascript" src="/wqac2.0/Public/Home/js/plugins.js"></script>
<script type="text/javascript" src="/wqac2.0/Public/Home/js/self.js"></script>
<script type="text/javascript" src="/wqac2.0/Public/Home/js/layer/layer.js"></script>
<script type="text/javascript">
	$(function  () {
		//控制添加模块输入框出现或隐藏
		$(".addmk").on('click',function(){
			$(".mkinput").slideToggle();
		});
		//获取表单数据，objson描述表单属性
		$(".methodselect").on('change',function(){
			var objson=[
				{
				"method":"radio",
				"value":"GET"
			},{
				"m_id":"text",
				"decrip":"用户ID",
				"value":"123"
			},{
				"name":"text",
				"decrip":"用户姓名",
				"value":"张三"
			},{
				"age":"text",
				"decrip":"年龄",
				"value":"12"
			}];
			createform(objson);
		});
	});
	var names=[];//用来存放表单需要提交的参数名集合
	function createform(objson){
		var html="";
		for (var i=0;i<objson.length;i++) {
			var curobj=objson[i];
			for (var name in curobj) {
				if(name=="method"){
					html='<div class="row margin-b-10 border-none"><div class="col-sm-4 col-xl-6">请求方式</div><div class="col-sm-8 col-xl-6"><input type="radio" name="'+curobj[name]+'" class="form-controller" checked>'+curobj["value"]+'</div></div>'+html;
					break;
				}else if(curobj[name] == "text"){
					names.push(name);
					var decrip="";
					if(curobj[decrip] != ""){
						decrip='<span class="float-r color8" style="cursor:pointer" title="'+curobj["decrip"]+'">说明</span>';
					}
					html+='<div class="row margin-b-10 border-none"><div class="col-sm-4 col-xl-6">'+name+'</div><div class="col-sm-8 col-xl-6"><input type="'+curobj[name]+'" name="'+name+'" class="form-controller" value="'+curobj["value"]+'">'+decrip+'</div></div>';
					break;
				}
			}
		}
		if(names.length != 0){
			html+='<div class="btn btn-default" onclick="putest()">提交测试</div>';
			$(".testmethod").html(html);	
		}
	}
	function putest(){
		var json={};
		for (var index=0;index<names.length;index++) {
			var key=names[index];
			json[key]=$("input[name='"+names[index]+"']").val();
		}
		var jsonstr=JSON.stringify(json);
		$(".reqargs").text(jsonstr);
		$(".afresargs").text(jsonStringify(json,4));
		$(".resargs").text(jsonstr);
	}
	function jsonStringify(data,space){
    var seen=[];
    return JSON.stringify(data,function(key,val){
	        if(!val||typeof val !=='object'){
	            return val;
	        }
	        if(seen.indexOf(val)!==-1){
	            return '[Circular]';
	        }
	        seen.push(val);
	        return val;
	    },space);
	}
</script>
</body>
</html>