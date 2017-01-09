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
<!-- START CONTAINER -->
<div class="container-padding">
	<div class="f-size-20 color11 padding-l-20 margin-b-20 xq_title">总经理</div>
	<div class="row borbox titlepic margin-b-20 padding-t-10">
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
				<div class="posre">
					<a href="#topqiang">
						<img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/>
						<div class="rac text-center posab precentuser" levl="100"></div>
					</a>
				</div>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<img src="/wqac2.0/Public/Home/img/zc_upd.png" class="rac" style="border: 1px solid #000000" onclick="addUser(2)"/>
		</div>
	</div>
	<div class="f-size-20 color11 padding-l-20 margin-b-20 xq_title">副总经理</div>
	<div class="row borbox titlepic margin-b-20 padding-t-10">
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<div class="posre">
				<a href="#topqiang">
					<img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/>
					<div class="rac text-center posab precentuser" levl="70"></div>
				</a>
			</div>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<div class="posre">
				<a href="#topqiang">
					<img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/>
					<div class="rac text-center posab precentuser" levl="20"></div>
				</a>
			</div>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<img src="/wqac2.0/Public/Home/img/zc_upd.png" class="rac" style="border: 1px solid #000000" onclick="addUser(3)"/>
		</div>
	</div>
	<div class="f-size-20 color11 padding-l-20 margin-b-20 xq_title">IOS工程师</div>
	<div class="row borbox titlepic margin-b-20 padding-t-10">
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<div class="posre">
				<a href="#topqiang">
					<img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/>
				</a>
			</div>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<img src="/wqac2.0/Public/Home/img/zc_upd.png" class="rac" style="border: 1px solid #000000" onclick="addUser(8)"/>
		</div>
	</div>
	<div class="f-size-20 color11 padding-l-20 margin-b-20 xq_title">前端</div>
	<div class="row borbox titlepic margin-b-20 padding-t-10">
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
				<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<img src="/wqac2.0/Public/Home/img/zc_upd.png" class="rac" style="border: 1px solid #000000" onclick="addUser(5)"/>
		</div>
	</div>
	<div class="f-size-20 color11 padding-l-20 margin-b-20 xq_title">测试工程师</div>
	<div class="row borbox titlepic margin-b-20 padding-t-10">
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<img src="/wqac2.0/Public/Home/img/zc_upd.png" class="rac" style="border: 1px solid #000000" onclick="addUser(10)"/>
		</div>
	</div>
	<div class="f-size-20 color11 padding-l-20 margin-b-20 xq_title">php工程师</div>
	<div class="row borbox titlepic margin-b-20 padding-t-10">
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<img src="/wqac2.0/Public/Home/img/zc_upd.png" class="rac" style="border: 1px solid #000000" onclick="addUser(6)"/>
		</div>
	</div>
	<div class="f-size-20 color11 padding-l-20 margin-b-20 xq_title">Android工程师</div>
	<div class="row borbox titlepic margin-b-20 padding-t-10">
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<img src="/wqac2.0/Public/Home/img/zc_upd.png" class="rac" style="border: 1px solid #000000" onclick="addUser(7)"/>
		</div>
	</div>
	<div class="f-size-20 color11 padding-l-20 margin-b-20 xq_title">商务BD</div>
	<div class="row borbox titlepic margin-b-20 padding-t-10">
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<img src="/wqac2.0/Public/Home/img/zc_upd.png" class="rac" style="border: 1px solid #000000" onclick="addUser(9)"/>
		</div>
	</div>
	<div class="f-size-20 color11 padding-l-20 margin-b-20 xq_title">UI部</div>
	<div class="row borbox titlepic margin-b-20 padding-t-10">
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<a href="#topqiang"><img src="/wqac2.0/Public/Home/img/profileimg.png" class="rac" title="topqiang"/></a>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-4 margin-b-10">
			<img src="/wqac2.0/Public/Home/img/zc_upd.png" class="rac" style="border: 1px solid #000000" onclick="addUser(4)"/>
		</div>
	</div>


    <!-- Start Panel -->
    <div class="row margin-b-20" style="border: 0px;">
      <div class="panel panel-default padding-b-0">
        <div class="panel-title">
          	团队信息
        </div>
        <div class="panel-body table-responsive">
        <div class="btn btn-primary float-r" onclick="addUser()">+新增</div>
          <p>a platform to promote the development of programmers
A place where dreams set sail</p>
          <table class="table table-hover text-center">
            <thead>
              <tr>
                <td>姓名</td>
                <td>职位</td>
                <td>年龄</td>
                <td>性格</td>
                <td>电话</td>
                <td>工资</td>
                <td>毕业院校</td>
                <td>来源</td>
                <td>操作</td>
              </tr>
            </thead>
            <tbody>
              <tr id="topqiang">
                <td canedi="true">top</td>
                <td canedi="true">web html</td>
                <td canedi="true">22</td>
                <td canedi="true">luckly</td>
                <td canedi="true">0557-8770887</td>
                <td canedi="true">4500</td>
                <td canedi="true">tianjin university</td>
                <td canedi="true">zhilian web</td>
                <td class="text-center box-cen f-size-16">
                	<i class="fa fa-trash color14"></i>
                	<i class="fa fa-eye color9"></i>
                	<i class="fa fa-edit color5"></i>
                </td>
              </tr>
              <tr>
                <td canedi="true">top</td>
                <td canedi="true">web html</td>
                <td canedi="true">22</td>
                <td canedi="true">luckly</td>
                <td canedi="true">0557-8770887</td>
                <td canedi="true">4500</td>
                <td canedi="true">tianjin university</td>
                <td canedi="true">zhilian web</td>
                <td class="text-center box-cen f-size-16">
                	<i class="fa fa-trash color14"></i>
                	<i class="fa fa-eye color9"></i>
                	<i class="fa fa-edit color5"></i>
                </td>
              </tr>
              <tr>
                <td canedi="true">top</td>
                <td canedi="true">web html</td>
                <td canedi="true">22</td>
                <td canedi="true">luckly</td>
                <td canedi="true">0557-8770887</td>
                <td canedi="true">4500</td>
                <td canedi="true">tianjin university</td>
                <td canedi="true">zhilian web</td>
                <td class="text-center box-cen f-size-16">
                	<i class="fa fa-trash color14"></i>
                	<i class="fa fa-eye color9"></i>
                	<i class="fa fa-edit color5"></i>
                </td>
              </tr>
              <tr>
                <td canedi="true">top</td>
                <td canedi="true">web html</td>
                <td canedi="true">22</td>
                <td canedi="true">luckly</td>
                <td canedi="true">0557-8770887</td>
                <td canedi="true">4500</td>
                <td canedi="true">tianjin university</td>
                <td canedi="true">zhilian web</td>
                <td class="text-center box-cen f-size-16">
                	<i class="fa fa-trash color14"></i>
                	<i class="fa fa-eye color9"></i>
                	<i class="fa fa-edit color5"></i>
                </td>
              </tr>
              <tr>
                <td canedi="true">top</td>
                <td canedi="true">web html</td>
                <td canedi="true">22</td>
                <td canedi="true">luckly</td>
                <td canedi="true">0557-8770887</td>
                <td canedi="true">4500</td>
                <td canedi="true">tianjin university</td>
                <td canedi="true">zhilian web</td>
                <td class="text-center box-cen f-size-16">
                	<i class="fa fa-trash color14"></i>
                	<i class="fa fa-eye color9"></i>
                	<i class="fa fa-edit color5"></i>
                </td>
              </tr>
              <tr>
                <td canedi="true">top</td>
                <td canedi="true">web html</td>
                <td canedi="true">22</td>
                <td canedi="true">luckly</td>
                <td canedi="true">0557-8770887</td>
                <td canedi="true">4500</td>
                <td canedi="true">tianjin university</td>
                <td canedi="true">zhilian web</td>
                <td class="text-center box-cen f-size-16">
                	<i class="fa fa-trash color14"></i>
                	<i class="fa fa-eye color9"></i>
                	<i class="fa fa-edit color5"></i>
                </td>
              </tr>
              <tr>
                <td canedi="true">top</td>
                <td canedi="true">web html</td>
                <td canedi="true">22</td>
                <td canedi="true">luckly</td>
                <td canedi="true">0557-8770887</td>
                <td canedi="true">4500</td>
                <td canedi="true">tianjin university</td>
                <td canedi="true">zhilian web</td>
                <td class="text-center box-cen f-size-16">
                	<i class="fa fa-trash color14"></i>
                	<i class="fa fa-eye color9"></i>
                	<i class="fa fa-edit color5"></i>
                </td>
              </tr>
              <tr>
                <td canedi="true">top</td>
                <td canedi="true">web html</td>
                <td canedi="true">22</td>
                <td canedi="true">luckly</td>
                <td canedi="true">0557-8770887</td>
                <td canedi="true">4500</td>
                <td canedi="true">tianjin university</td>
                <td canedi="true">zhilian web</td>
                <td class="text-center box-cen f-size-16">
                	<i class="fa fa-trash color14"></i>
                	<i class="fa fa-eye color9"></i>
                	<i class="fa fa-edit color5"></i>
                </td>
              </tr>
              <tr>
                <td canedi="true">top</td>
                <td canedi="true">web html</td>
                <td canedi="true">22</td>
                <td canedi="true">luckly</td>
                <td canedi="true">0557-8770887</td>
                <td canedi="true">4500</td>
                <td canedi="true">tianjin university</td>
                <td canedi="true">zhilian web</td>
                <td class="text-center box-cen f-size-16"><i class="fa fa-trash color14"></i><i class="fa fa-eye color9"></i><i class="fa fa-edit color5"></i></td>
              </tr>
              <tr>
                <td canedi="true">top</td>
                <td canedi="true">web html</td>
                <td canedi="true">22</td>
                <td canedi="true">luckly</td>
                <td canedi="true">0557-8770887</td>
                <td canedi="true">4500</td>
                <td canedi="true">tianjin university</td>
                <td canedi="true">zhilian web</td>
                <td class="text-center box-cen f-size-16"><i class="fa fa-trash color14"></i><i class="fa fa-eye color9"></i><i class="fa fa-edit color5"></i></td>
              </tr>
              <tr>
                <td canedi="true">top</td>
                <td canedi="true">web html</td>
                <td canedi="true">22</td>
                <td canedi="true">luckly</td>
                <td canedi="true">0557-8770887</td>
                <td canedi="true">4500</td>
                <td canedi="true">tianjin university</td>
                <td canedi="true">zhilian web</td>
                <td class="text-center box-cen f-size-16"><i class="fa fa-trash color14"></i><i class="fa fa-eye color9"></i><i class="fa fa-edit color5"></i></td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </div>
    <!-- End Panel -->
</div>
<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 


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

<div class="dis-n addUserForm">
	<div class="title text-center f-size-20 ih50">录入员工信息</div>
	<div class="padding-20 xq_form xq_form1">
		<div class="form-group">
			<input type="text" class="form-control" id="username" placeholder="请确认账号"/>
		</div>
		<div class="form-group">
			<input type="password" class="form-control" id="password" placeholder="请输入密码"/>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" id="realname" placeholder="请输入姓名"/>
		</div>
		<div class="form-group">
			<input type="tel" class="form-control" id="tel" placeholder="请输入电话"/>
		</div>
		<div class="form-group" style="display: flex;justify-content: flex-start;">
			<div class="radio radio-info">
				<input id="radio1" type="radio" name="sex" value="0" checked="checked"/>
				<label for="radio1">男</label>
			</div>
			<div class="radio radio-info">
				<input id="radio2" type="radio" name="sex" value="1"/>
				<label for="radio2">女</label>
			</div>
		</div>
		<div class="form-group">
			<input type="number" class="form-control" id="age" placeholder="请输入年龄"/>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" id="parent" placeholder="请输入家长姓名和电话"/>
		</div>
		<div class="form-group">
			<select class="form-control selectpicker" name="branch">
				<option value="1">所属部门</option>
				<option value="2">总经理</option>
				<option value="3" selected="selected">副总经理</option>
				<option value="4">UI部</option>
				<option value="5">HTML部</option>
				<option value="6">PHP部</option>
				<option value="7">Android部</option>
				<option value="8">IOS部</option>
				<option value="9">商务部</option>
				<option value="10">测试</option>
			</select>
		</div>
	</div>
	<!---->
	<div class="padding-20 xq_form2 dis-n xq_form">
		<div class="form-group xq_upimg">
			<img src="/wqac2.0/Public/Home/img/zc_upd.png"/>
			<input type="file" class="form-control" id="idlo" accept=".jpg,.png,.bmp"/>
		</div>
		<div class="form-group xq_upimg">
			<img src="/wqac2.0/Public/Home/img/zc_upd.png"/>
			<input type="file" class="form-control" id="idpa" accept=".jpg,.png,.bmp"/>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" id="locpro" placeholder="请输入户籍"/>
		</div>
		<div class="form-group">
			<input type="number" class="form-control" id="idnum" placeholder="请输入身份证编号"/>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" id="address" placeholder="请输入家庭住址"/>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" id="school" placeholder="所在院校"/>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" id="record" placeholder="学历"/>
		</div>
		<div class="form-group" style="display: flex;justify-content: flex-start;">
			<div class="radio radio-info">
				<input type="radio" id="radio3" name="gratu" value="0" checked="checked"/>
				<label for="radio3">已毕业</label>
			</div>
			<div class="radio radio-info">
				<input type="radio" id="radio4" name="gratu" value="0"/>
				<label for="radio4">已毕业</label>
			</div>
		</div>
	</div>
	<!---->
	<div class="padding-20 xq_form3 dis-n xq_form">
		<div class="form-group">
			<input type="text" class="form-control" id="fromin" placeholder="来源"/>
		</div>
		<div class="form-group">
			<select class="form-control selectpicker">
				<option>性格</option>
				<option>内项</option>
				<option>中庸</option>
				<option>外项</option>
			</select>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" id="testman" placeholder="实习薪资"/>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" id="testord" placeholder="实习时长"/>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" id="levman" placeholder="转正薪资"/>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" id="levord" placeholder="在职时长"/>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" id="leavf" placeholder="离职时间"/>
		</div>
		<div class="form-group">
			<textarea class="form-control" id="remark" placeholder="备注"></textarea>
		</div>
	</div>
	<div class="box-cen padding-20">、
		<div class="btn btn-lg btn-default prevpu">上一步</div>
		<div class="btn btn-lg btn-default dis-n editor-btn">编辑</div>
		<div class="btn btn-lg btn-default save-btn">保存</div>
		<div class="btn btn-lg btn-default nextpu">下一步</div>
	</div>
</div>

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
<script type="text/javascript" src="/wqac2.0/Public/Home/js/plugins.js"></script>
<script type="text/javascript" src="/wqac2.0/Public/Home/js/self.js"></script>
<script type="text/javascript" src="/wqac2.0/Public/Home/js/layer/layer.js"></script>
<!-- ================================================
Bootstrap Select
================================================ -->
<script type="text/javascript" src="/wqac2.0/Public/Home/js/bootstrap-select/bootstrap-select.js"></script>
<!-- ================================================
Sweet Alert
================================================ -->
<script src="/wqac2.0/Public/Home/js/sweet-alert/sweet-alert.min.js"></script>

<!-- ================================================
Kode Alert
================================================ -->
<script src="/wqac2.0/Public/Home/js/kode-alert/main.js"></script>
<!-- ================================================
<!-- main file -->
<script type="text/javascript" src="/wqac2.0/Public/Home/js/easypiechart/easypiechart.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="/wqac2.0/Public/Home/js/easypiechart/easypiechart-plugin.js"></script>
<script type="text/javascript">
	$(function  () {
		var length=$(".precentuser").size();
		if(length != 0){
			$(".titlepic .posre").on('mouseover',function(){
				var self=$(this).find(".precentuser");
				self.css('display','flex');
				var num=self.attr('levl');
				var begin=0;
				var interval=setInterval(function(){
					self.text(begin+"%");
					begin++;
					if(begin>num){
						clearInterval(interval);
					}
				},10)
			}).on('mouseout',function(){
				var self=$(this).find(".precentuser");
				self.css('display','none');
			})
		}
	});
	function addUser (name) {
		if(name && name != ""){
			$("select[name='branch']").val(name);
		}
		layer.open({
			type:1,
			title:false,
			area:['600px','auto'],
			content:$(".addUserForm")
		});
	}
	$(function () {
		$("[canedi='true']").on('dblclick',function () {
			$(this).attr("contenteditable","true").trigger("focus");
		}).on("blur",function () {
			$(this).attr("contenteditable","false");
		});
		$(".fa-trash").on('click',function(){
			var self=$(this);
			swal({
	        title: "请确认?",
	        text: "您删除该用户，将无法挽回!",
	        type: "warning",
	        showCancelButton: true,
	        confirmButtonColor: "#DD6B55",
	        confirmButtonText: "确认",
	        cancelButtonText: "取消",
	        closeOnConfirm: false
	      },
	      function(){
	      	self.parents("tr").remove();
	          swal("已删除!", "恭喜您删除成功.", "success");
	      });
		});
		$(".fa-edit").on('click',function(){
			window.open("loglis.html","loglis");
		});
		$(".fa-eye").on('click',function(){
			$("input,select,textarea").attr("disabled","true");
			$(".save-btn").hide();
	    $(".editor-btn").show();
			layer.open({
				type:1,
				title:false,
				area:['600px','auto'],
				content:$(".addUserForm")
			});
		});
		$(".editor-btn").on('click',function(){
			$("input,select,textarea").removeAttr("disabled");
			$(".save-btn").show();
	    $(".editor-btn").hide();
		});
	});
//表单列表名	
var forms=['.xq_form1','.xq_form2','.xq_form3'];
var index=0;
	$(function  () {
		$(".nextpu").on('click',function(){
//			$(forms[index]).html($(".xq_form").html());
			$(forms[index]).slideUp();
			index++;
			$(forms[index]).slideDown();
			if(index==forms.length-1){
				$(".nextpu").hide();
				$(".prevpu").show();
			}else{
				$(".nextpu").show();
				$(".prevpu").show();
			}
			$(".layui-layer-content").css('height','auto');
//			var newclass=forms[index];
//			var self=$(this);
//			self.parent().hide();
//			$(".xq_form").html($(".loading").html());
//			$(".xq_form").html("");
//			setTimeout(function () {
//				var thisdiv=$(newclass).children();
//				for (var index=0; index< thisdiv.size();index++) {
//					$(".xq_form")[0].appendChild(thisdiv.eq(index)[0]);
//				}
//			$(".layui-layer-content").css('height','auto');
//			self.parent().show();
//			},500);
		});
		$(".prevpu").on('click',function(){
//			$(forms[index]).html($(".xq_form").html());
			$(forms[index]).slideUp();
			index--;
			$(forms[index]).slideDown();
			if(index==0){
				$(".prevpu").hide();
				$(".nextpu").show();
			}else{
				$(".prevpu").show();
				$(".nextpu").show();
			}
			$(".layui-layer-content").css('height','auto');
//			var newclass=forms[index];
//			var self=$(this);
//			self.parent().hide();
//			$(".xq_form").html($(".loading").html());
//			$(".xq_form").html("");
//			setTimeout(function () {
//				var thisdiv=$(newclass).children();
//				for (var index=0; index < thisdiv.size();index++) {
//					$(".xq_form")[0].appendChild(thisdiv.eq(index)[0]);
//				}
//			$(".layui-layer-content").css('height','auto');
//			self.parent().show();
//			},500);
		});
});
</script>
</body>
</html>