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
 <div class="box-cen">
 	<img src="/wqac2.0/Public/Home/img/logo1.png" class="disb macen"/>
 </div>
<div class="container-default">
	<div class="margin-t-20">
		<div class="btn btn-default float-r">导出该项目所有API</div>
		<p><span class="btn btn-danger margin-r-10">e路同城</span><a href="#">http://yltc.txunda.com/index.php/Api</a></p>
	</div>
	<div class="row padding-t-10 margin-b-20">
		<div class="col-sm-2 col-xl-1">
			<div class="text-center margin-b-10">模块名称<i class="fa fa-plus color6 float-r margin-r-5 mkbtn"></i></div>
			<ul class="list-group mukuai">
				<li class="list-group-item" formk="user"><i class="fa fa-close"></i>用户端登陆注册</li>
				<li class="list-group-item" formk="good"><i class="fa fa-close"></i>用户端用户模块</li>
				<li class="list-group-item" formk="mesg"><i class="fa fa-close"></i>用户端地址模块</li>
			</ul>
			<!--<div class="dis-n mkinput margin-b-10">
				<div class="margin-b-10"><input type="text" placeholder="模块名称"></div>
				<div><input type="text" placeholder="模块英文名称"></div>
			</div>
			<button class="btn btn-default addmk">新建模块</button>-->
		</div>
		<div class="col-sm-2 col-xl-1 method dis-n">
			<div class="text-center margin-b-10">方法名称<i class="fa fa-plus color6 metbtn"></i></div>
			<ul class="list-group dis-n" mk="user">
				<li class="list-group-item" m_id=""><i class="fa fa-close"></i><i class="fa fa-code"></i>发送验证码</li>
				<li class="list-group-item" m_id=""><i class="fa fa-close"></i><i class="fa fa-code"></i>用户注册</li>
				<li class="list-group-item" m_id=""><i class="fa fa-close"></i><i class="fa fa-code"></i>登陆</li>
				<li class="list-group-item" m_id=""><i class="fa fa-close"></i><i class="fa fa-code"></i>忘记密码</li>
				<li class="list-group-item" m_id=""><i class="fa fa-close"></i><i class="fa fa-code"></i>第三方账户</li>
			</ul>
			<ul class="list-group dis-n" mk="good">
				<li class="list-group-item" m_id=""><i class="fa fa-close"></i><i class="fa fa-code"></i>新增订单</li>
				<li class="list-group-item" m_id=""><i class="fa fa-close"></i><i class="fa fa-code"></i>余额支付</li>
				<li class="list-group-item" m_id=""><i class="fa fa-close"></i><i class="fa fa-code"></i>支付订单状态查询</li>
				<li class="list-group-item" m_id=""><i class="fa fa-close"></i><i class="fa fa-code"></i>商品查</li>
			</ul>
			<ul class="list-group dis-n" mk="mesg">
				<li class="list-group-item" m_id=""><i class="fa fa-close"></i><i class="fa fa-code"></i>开启页</li>
				<li class="list-group-item" m_id=""><i class="fa fa-close"></i><i class="fa fa-code"></i>用户端-收藏模块</li>
				<li class="list-group-item" m_id=""><i class="fa fa-close"></i><i class="fa fa-code"></i>配送员端-订单模块</li>
				<li class="list-group-item" m_id=""><i class="fa fa-close"></i><i class="fa fa-code"></i>自动更新</li>
			</ul>
		</div>
		<div class="col-sm-10 col-xl-11">
			<div class="playinfo">
				<div class="f-size-18 padding-b-10" style="border-bottom:1px solid #ccc">使用说明<a href="#" class="color10">首次试用请务必认真阅读</a></div>
				<h5 class="color5">总则：</h5>
				<p>随着公司APP业务的加大，我们开发了本API提交平台，用户更好的服务于我们的工作， 本平台beta版支持thinkphp书写的接口，以及使用其他程序编写的接口。为了更大限度的控制服务器端API的编写错误 我们开发ApiTools在线调试 工具，请认真填写模块名称、方法名称以及参数名称，并认真检查自动生成的URL是否正确。天迅达科技愿于你共同进步 ！</p>
				<h5 class="color5">第一步：创建模块（对象/控制器）</h5>
				<p>请为项目创建一个模块（对象/控制器），模块名称为对象名称，英文名称为控制器名称，请针对自己的项目认真添加 如果您的程序没有PATHINFO的分组和模块概念，请务必认真检查接口URL。</p>
				<h5 class="color5">第二步：创建方法</h5>
				<p>请在模块下为控制器创建请求方法，创建方法时英文模块名称和英文方法名称将会自动拼接在请求URL中，当然请求URL也支持自定义，如果拼接有误请手动填写请求URL。请认真填写请求参数和参数说明这将关乎到ApiTools能否正常运作。</p>
				<h5 class="color5">第三步：方法返回</h5>
				<p>1，请通过json返回数据<br />2，每个方法的返回值固定有三段即：<br />flag：验证状态，成功为success，失败为error；<br />message：错误原因或成功输出的信息；<br />data：返回的数据。<br />3，返回的图片或文件请务必转换为网络路径，多图片时请分别添加网络路径然后使用英文逗号将路径分开（此处要特别注意管理员使用web在线编辑器时上传的本地图片路径转换）<br />4，请务必保证任何情况下都要有数据返回，数据不合法就要报错<br />5，在保证功能的前提下请使接口尽量的少<br />6，编写之前请认真查看DEMO项目的接口，有问题或是提建议请随时沟通。<br />
				</p>
			</div>
			<div class="methodinfo dis-n">
				<div class="f-size-18 padding-b-10" style="border-bottom:1px solid #ccc"><span canedi="true" class="methodname">新增意见反馈</span>【/UserFeedback/<span canedi="true" class="egname">addFeedback</span>】</div>
				<h5 class="color5">方法描述：</h5>
				<pre class="method_info" style="padding-right: 9.5px;" canedi="true">通过该方法修改头像/昵称/性别</pre>
				<h5 class="color5">接口调用请求说明：</h5>
				<div>
					http请求方式：
					<select name="method_type" style="height: auto;" disabled="true" class="selectpicker">
						<option value="post" checked>POST</option>
						<option value="get">GET</option>
					</select>
					<pre class="margin-t-10" canedi="true">http://pickheart.txunda.com/index.php/Api/MemberCenter/shortcut</pre>
				</div>
				<h5 class="color5"><i class="fa fa-plus-circle float-r f-size-20"></i>参数说明：</h5>
				<table class="argsinfo">
					<tr class="row">
						<th class="col-sm-2">参数名称</th>
						<th class="col-sm-4">参数描述</th>
						<th class="col-sm-2">是否为空</th>
						<th class="col-sm-2">参数类型</th>
						<th class="col-sm-1">示例值</th>
						<th class="col-sm-1">操作</th>
					</tr>
					<tr class="row" >
						<td class="col-sm-2" canedi="true">m_id</td>
						<td class="col-sm-4" canedi="true">用户ID</td>
						<td class="col-sm-2" play="empty">否</td>
						<td class="col-sm-2" play="type">文本</td>
						<td class="col-sm-1" canedi="true">1</td>
						<td class="col-sm-1"><i class="fa fa-check color6 f-size-16"></i><i class="fa fa-trash color10 f-size-16"></i></td>
					</tr>
					<tr class="row" >
						<td class="col-sm-2" canedi="true">m_id</td>
						<td class="col-sm-4" canedi="true">用户ID</td>
						<td class="col-sm-2" play="empty">否</td>
						<td class="col-sm-2" play="type">文本</td>
						<td class="col-sm-1" canedi="true">1</td>
						<td class="col-sm-1"><i class="fa fa-check color6 f-size-16"></i><i class="fa fa-trash color10 f-size-16"></i></td>
					</tr>
					<tr class="row" >
						<td class="col-sm-2" canedi="true">m_id</td>
						<td class="col-sm-4" canedi="true">用户ID</td>
						<td class="col-sm-2" play="empty">否</td>
						<td class="col-sm-2" play="type">文本</td>
						<td class="col-sm-1" canedi="true">1</td>
						<td class="col-sm-1"><i class="fa fa-check color6 f-size-16"></i><i class="fa fa-trash color10 f-size-16"></i></td>
					</tr>
				</table>
				<h5 class="color5">返回说明：</h5>
				<pre canedi="true">{
    "flag": "success",
    "message": "修改成功",
    "data": ""
}</pre>
				<h5 class="color5">接口动态：</h5>
				<pre><i class="fa fa-eye float-r color8 f-size-16"></i>2015-6-25：“@熊永进”修改了【方法描述】【http请求方式】【请求URL】【参数说明】【返回说明】</pre>
				<div class="btn btn-default float-r dis-n savemethod">提交</div>
			</div>			
		</div>
	</div>
</div>
<div class="addmethod dis-n padding-20 padding-b-0">
	<div class="margin-b-20">
		<input class="form-control" placeholder="接口中文名称"/>
	</div>
	<div>
		<input class="form-control" placeholder="接口名称"/>
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
//		$(".addmk").on('click',function(){
//			$(".mkinput").slideToggle();
//		});
		//绑定可双击编辑框双击事件和失去焦点事件
		$("[canedi='true']").on('dblclick',function () {
			$(this).attr("contenteditable","true").trigger("focus");
		}).on("blur",function () {
			console.log($(this).text());
			$(this).attr("contenteditable","false");
		});
		//绑定切换不同模块方法出现
		$(".mukuai li").on('click',function(){
			$(".method").show().next("div").removeClass("col-sm-10 col-xl-11").addClass("col-sm-8 col-xl-10");
			$(".methodinfo").hide();
			$(".playinfo").show();
			var mk=$(this).attr("formk");
			$("[mk]").hide();
			$("[mk='"+mk+"']").show();
			$(".fa-plus").attr("mkd","mkid");//接入后端，传入模块的id值
			$(".liactive").removeClass("liactive").find(".fa-close").show();
			$(this).addClass("liactive").find(".fa-close").hide();
		});
		//绑定方法切换
		$(".method ul li").on('click',function(){
			$(".playinfo").hide();
			//添加渲染页面代码
			$(".methodinfo").show();
			$(this).siblings(".liactive").removeClass("liactive").find(".fa-close").show();
			$(this).addClass("liactive").find(".fa-close").hide();
		});
		//绑定添加方法参数输出表单
		$(".fa-plus-circle").on('click',function(){
			$(".argsinfo").append('<tr class="row" ><td class="col-sm-2" canedi="true"></td><td class="col-sm-4" canedi="true"></td><td class="col-sm-2" play="empty"><select style="height: auto;" class="selectpicker"><option value="否">否</option><option value="是">是</option></select></td><td class="col-sm-2" play="type"><select style="height: auto;" class="selectpicker"><option value="文本">文本</option><option value="图片">图片</option></select></td><td class="col-sm-1" canedi="true"></td><td class="col-sm-1"><i class="fa fa-check color6 f-size-16"></i><i class="fa fa-trash color10 f-size-16"></i></td></tr>');
			$(".fa-trash").on("click",deleteMethod);
			$(".argsinfo [canedi='true']").attr("contenteditable","true");
			$(".argsinfo tr:last-child td[canedi='true']").on('dblclick',function(){
				$(this).attr('contenteditable','true').trigger("focus");
			});
			$('.selectpicker',$('.argsinfo')).each(function () {
		      	var $selectpicker = $(this);
				$selectpicker.selectpicker($selectpicker.data());
		   	});
			$(".argsinfo tr:last-child td[play]").on('dblclick',updselect);
			$(".fa-check").on('click',comupd);//绑定确认修改事件
		});
		//
		$(".fa-plus.mkbtn").on('click',function(){
			layer.open({
				type:1,
				title:false,
				area:['300px','auto'],
				content:$(".addmethod"),
				btn:['确定','取消'],
				yes:function(){
					
				},
				btn2:function(){
					console.log("取消");
				}
			})
		});
		//绑定新建方法表单输出
		$(".fa-plus.metbtn").on('click',function(){
			if($(this).attr("mkd") == undefined){
				layer.msg("请先选择所创接口属于哪个模块",{time:2000});
			}else{
				$("[canedi='true']").off('dblclick');
				$("[canedi='true']").off('blur');
				$(".playinfo").hide();
				$(".methodinfo,.fa-plus-circle").show();
				$(".savemethod").show();
				$(".argsinfo").html('<tr class="row"><th class="col-sm-2">参数名称</th><th class="col-sm-4">参数描述</th><th class="col-sm-2">是否为空</th><th class="col-sm-2">参数类型</th><th class="col-sm-1">示例值</th><th class="col-sm-1">操作</th></tr><tr class="row" ><td class="col-sm-2" canedi="true"></td><td class="col-sm-4" canedi="true"></td><td class="col-sm-2" play="empty"><select style="height: auto;" class="selectpicker"><option value="否">否</option><option value="是">是</option></select></td><td class="col-sm-2" play="type"><select style="height: auto;" class="selectpicker"><option value="文本">文本</option><option value="图片">图片</option></select></td><td class="col-sm-1" canedi="true"></td><td class="col-sm-1"><i class="fa fa-check color6 f-size-16"></i><i class="fa fa-trash color10 f-size-16"></i></td></tr>');
				$('.selectpicker',$('.argsinfo')).each(function () {
			      	var $selectpicker = $(this);
					$selectpicker.selectpicker($selectpicker.data());
			   	});
			   	$(".fa-check").on('click',comupd);
				$(".fa-trash").on("click",deleteMethod);
				$("[canedi='true']").text("").attr("contenteditable","true");
				$(".methodname").text("中文方法名");
				console.log($(".methodname"));
				$(".egname").text("English_Name");
				$("select[name='method_type']").removeAttr("disabled").next().find("button").removeClass("disabled").next().find("ul li").removeClass("disabled");
			}
		});
		//绑定删除模块事件
		$(".fa-close").on('click',function(e){
			swal({
                title: "你确定要删除吗?", 
                text: "该模块删除后，您将无法恢复!", 
                type: "warning", 
                showCancelButton: true, 
                confirmButtonColor: "#DD6B55", 
                confirmButtonText: "确定，请单击!", 
                closeOnConfirm: false 
            },
            function(){
                swal("成功!", "恭喜您，已经成功的删除.", "success"); 
            });
            e.stopPropagation();
		});
		$(".fa-trash").on("click",deleteMethod);
		//确认修改，方法绑定
		$(".fa-check").on('click',comupd);
	});
	//绑定测试接口跳转
	$(".fa-code").on('click',function(e){
//		window.location.target="_blank";
//		window.location.href='apitools.html';
		window.open("apitools.html","apitools"); 
		e.stopPropagation();
	});
	//绑定下拉框修改事件
	$("td[play]").on('dblclick',updselect);
	//双击动态修改下拉框
	function updselect(){
		if($(this).attr("play")=="empty"){
			$(this).html('<select style="height: auto;" class="selectpicker"><option value="否">否</option><option value="是">是</option></select>');
//			var self=$(this);
//			$(this).find("select").on('blur',function(){
//				if($(this).val()=="1"){
//					self.html("是");
//				}else{
//					self.html("否");
//				}
//			})
		}
		if($(this).attr("play")=="type"){
			$(this).html('<select style="height: auto;" class="selectpicker"><option value="文本">文本</option><option value="图片">图片</option></select>');
//			var self=$(this);
//			$(this).find("select").on('blur',function(){
//				if($(this).val()=="1"){
//					self.html("图片");
//				}else{
//					self.html("文本");
//				}
//			})
		}
		$('.selectpicker',$(this)).each(function () {
	      	var $selectpicker = $(this);
			$selectpicker.selectpicker($selectpicker.data());
	   	});
	}
	//点击删除所要进行的操作
	function deleteMethod(){
		var self=$(this);
		swal({
            title: "你确定要删除吗?", 
            text: "该方法参数信息删除后，您将无法恢复!", 
            type: "warning", 
            showCancelButton: true, 
            confirmButtonColor: "#DD6B55", 
            confirmButtonText: "确定，请单击!", 
            closeButtonText:'取消',
            closeOnConfirm: false 
        },
        function(){
          	self.parents("tr").remove();
            swal("成功!", "恭喜您，已经成功的删除.", "success"); 
        });
	}
	//点击对号所要进行的操作
	function comupd(){
		var node=$(this).parent().parent().find("td[play]");
		node.each(function(){
			$(this).html($(this).find("select").val());
		});
		swal("修改成功!", "恭喜您，已经成功的修改.", "success"); 
		$(".argsinfo [canedi='true']").attr("contenteditable","false");
	}
</script>
</body>
</html>