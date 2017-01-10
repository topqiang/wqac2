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
 <div class="box-cen">
 	<img src="/wqac2.0/Public/Home/img/logo1.png" class="disb macen"/>
 </div>
<div class="container-default">
	<div class="margin-t-20">
		<div class="btn btn-danger float-r addpro-btn">新建项目</div>
		<p class="f-size-18 color7 ih34">没有旗鼓相当，唯有独领风骚</p>
	</div>
	<div class="f-size-16 margin-b-20"><a href="#" class="margin-r-10">全部</a><a href="#" class="margin-r-10">进行中</a><a href="" class="margin-r-10">修改中</a><a href="#" class="margin-r-10">已完成</a><a href="#" class="margin-r-10">未开始</a></div>
	<div class="row ovhid padding-t-30 margin-b-20" style="display: flex;flex-direction: row;flex-wrap: wrap;justify-content: center;">
		<div class="disib float-l project posre f-size-20">
			<img src="/wqac2.0/Public/Home/img/example1.jpg"/>
			<canvas width="150" height="150" style="position:absolute;left:0px;top:0px;opacity:0.7" prencet="0.25"></canvas>
			<span class="posab disib text-center p_tj"><a href="procharts.html"><i class="fa fa-bar-chart color8" title="统计图"></i></a></span>
			<span class="posab disib text-center p_api"><a href="apiman.html"><i class="fa fa-building-o color10" title="API"></i></a></span>
			<span class="posab disib text-center p_rz"><a href="loglis.html"><i class="fa fa-edit color5" title="日志"></i></a></span>
			<span class="posab disib text-center p_xq"><i class="fa fa-eye color9" title="详情"></i></span>
			<a href="probug.html"><i class="badge posab">10</i></a>
		</div>
		<div class="disib float-l project posre f-size-20">
			<img src="/wqac2.0/Public/Home/img/example1.jpg"/>
			<canvas width="150" height="150" style="position:absolute;left:0px;top:0px;opacity:0.7" prencet="0.375"></canvas>
			<span class="posab disib text-center p_tj"><a href="procharts.html"><i class="fa fa-bar-chart color8" title="统计图"></i></a></span>
			<span class="posab disib text-center p_api"><a href="apiman.html"><i class="fa fa-building-o color10" title="API"></i></a></span>
			<span class="posab disib text-center p_rz"><a href="loglis.html"><i class="fa fa-edit color5" title="日志"></i></a></span>
			<span class="posab disib text-center p_xq"><i class="fa fa-eye color9" title="详情"></i></span>
		</div>
		<div class="disib float-l project posre f-size-20">
			<img src="/wqac2.0/Public/Home/img/example1.jpg"/>
			<canvas width="150" height="150" style="position:absolute;left:0px;top:0px;opacity:0.7" prencet="0.5"></canvas>
			<span class="posab disib text-center p_tj"><a href="procharts.html"><i class="fa fa-bar-chart color8" title="统计图"></i></a></span>
			<span class="posab disib text-center p_api"><a href="apiman.html"><i class="fa fa-building-o color10" title="API"></i></a></span>
			<span class="posab disib text-center p_rz"><a href="loglis.html"><i class="fa fa-edit color5" title="日志"></i></a></span>
			<span class="posab disib text-center p_xq"><i class="fa fa-eye color9" title="详情"></i></span>
		</div>
		<div class="disib float-l project posre f-size-20">
			<img src="/wqac2.0/Public/Home/img/example1.jpg"/>
			<canvas width="150" height="150" style="position:absolute;left:0px;top:0px;opacity:0.7" prencet="0.125"></canvas>
			<span class="posab disib text-center p_tj"><a href="procharts.html"><i class="fa fa-bar-chart color8" title="统计图"></i></a></span>
			<span class="posab disib text-center p_api"><a href="apiman.html"><i class="fa fa-building-o color10" title="API"></i></a></span>
			<span class="posab disib text-center p_rz"><a href="loglis.html"><i class="fa fa-edit color5" title="日志"></i></a></span>
			<span class="posab disib text-center p_xq"><i class="fa fa-eye color9" title="详情"></i></span>
		</div>
		<div class="disib float-l project posre f-size-20">
			<img src="/wqac2.0/Public/Home/img/example1.jpg"/>
			<canvas width="150" height="150" style="position:absolute;left:0px;top:0px;opacity:0.7" prencet="0.625"></canvas>
			<span class="posab disib text-center p_tj"><a href="procharts.html"><i class="fa fa-bar-chart color8" title="统计图"></i></a></span>
			<span class="posab disib text-center p_api"><a href="apiman.html"><i class="fa fa-building-o color10" title="API"></i></a></span>
			<span class="posab disib text-center p_rz"><a href="loglis.html"><i class="fa fa-edit color5" title="日志"></i></a></span>
			<span class="posab disib text-center p_xq"><i class="fa fa-eye color9" title="详情"></i></span>
		</div>
		<div class="disib float-l project posre f-size-20">
			<img src="/wqac2.0/Public/Home/img/example1.jpg"/>
			<canvas width="150" height="150" style="position:absolute;left:0px;top:0px;opacity:0.7" prencet="0.75"></canvas>
			<span class="posab disib text-center p_tj"><a href="procharts.html"><i class="fa fa-bar-chart color8" title="统计图"></i></a></span>
			<span class="posab disib text-center p_api"><a href="apiman.html"><i class="fa fa-building-o color10" title="API"></i></a></span>
			<span class="posab disib text-center p_rz"><a href="loglis.html"><i class="fa fa-edit color5" title="日志"></i></a></span>
			<span class="posab disib text-center p_xq"><i class="fa fa-eye color9" title="详情"></i></span>
		</div>
		<div class="disib float-l project posre f-size-20">
			<img src="/wqac2.0/Public/Home/img/example1.jpg"/>
			<canvas width="150" height="150" style="position:absolute;left:0px;top:0px;opacity:0.7" prencet="0.875"></canvas>
			<span class="posab disib text-center p_tj"><a href="procharts.html"><i class="fa fa-bar-chart color8" title="统计图"></i></a></span>
			<span class="posab disib text-center p_api"><a href="apiman.html"><i class="fa fa-building-o color10" title="API"></i></a></span>
			<span class="posab disib text-center p_rz"><a href="loglis.html"><i class="fa fa-edit color5" title="日志"></i></a></span>
			<span class="posab disib text-center p_xq"><i class="fa fa-eye color9" title="详情"></i></span>
		</div>
		<div class="disib float-l project posre f-size-20">
			<img src="/wqac2.0/Public/Home/img/example1.jpg"/>
			<canvas width="150" height="150" style="position:absolute;left:0px;top:0px;opacity:0.7" prencet="1"></canvas>
			<span class="posab disib text-center p_tj"><a href="procharts.html"><i class="fa fa-bar-chart color8" title="统计图"></i></a></span>
			<span class="posab disib text-center p_api"><a href="apiman.html"><i class="fa fa-building-o color10" title="API"></i></a></span>
			<span class="posab disib text-center p_rz"><a href="loglis.html"><i class="fa fa-edit color5" title="日志"></i></a></span>
			<span class="posab disib text-center p_xq"><i class="fa fa-eye color9" title="详情"></i></span>
		</div>
		<div class="disib float-l project posre f-size-20">
			<img src="/wqac2.0/Public/Home/img/example1.jpg"/>
			<canvas width="150" height="150" style="position:absolute;left:0px;top:0px;opacity:0.7" prencet="0"></canvas>
			<span class="posab disib text-center p_tj"><a href="procharts.html"><i class="fa fa-bar-chart color8" title="统计图"></i></a></span>
			<span class="posab disib text-center p_api"><a href="apiman.html"><i class="fa fa-building-o color10" title="API"></i></a></span>
			<span class="posab disib text-center p_rz"><a href="loglis.html"><i class="fa fa-edit color5" title="日志"></i></a></span>
			<span class="posab disib text-center p_xq"><i class="fa fa-eye color9" title="详情"></i></span>
		</div>
		<div class="disib float-l project posre f-size-20">
			<img src="/wqac2.0/Public/Home/img/example1.jpg"/>
			<canvas width="150" height="150" style="position:absolute;left:0px;top:0px;opacity:0.7" prencet="0.3"></canvas>
			<span class="posab disib text-center p_tj"><a href="procharts.html"><i class="fa fa-bar-chart color8" title="统计图"></i></a></span>
			<span class="posab disib text-center p_api"><a href="apiman.html"><i class="fa fa-building-o color10" title="API"></i></a></span>
			<span class="posab disib text-center p_rz"><a href="loglis.html"><i class="fa fa-edit color5" title="日志"></i></a></span>
			<span class="posab disib text-center p_xq"><i class="fa fa-eye color9" title="详情"></i></span>
		</div>
		<div class="disib float-l project posre f-size-20">
			<img src="/wqac2.0/Public/Home/img/example1.jpg"/>
			<canvas width="150" height="150" style="position:absolute;left:0px;top:0px;opacity:0.7" prencet="0.4"></canvas>
			<span class="posab disib text-center p_tj"><a href="procharts.html"><i class="fa fa-bar-chart color8" title="统计图"></i></a></span>
			<span class="posab disib text-center p_api"><a href="apiman.html"><i class="fa fa-building-o color10" title="API"></i></a></span>
			<span class="posab disib text-center p_rz"><a href="loglis.html"><i class="fa fa-edit color5" title="日志"></i></a></span>
			<span class="posab disib text-center p_xq"><i class="fa fa-eye color9" title="详情"></i></span>
		</div>
		<div class="disib float-l project posre f-size-20">
			<img src="/wqac2.0/Public/Home/img/example1.jpg"/>
			<canvas width="150" height="150" style="position:absolute;left:0px;top:0px;opacity:0.7" prencet="0.2"></canvas>
			<span class="posab disib text-center p_tj"><a href="procharts.html"><i class="fa fa-bar-chart color8" title="统计图"></i></a></span>
			<span class="posab disib text-center p_api"><a href="apiman.html"><i class="fa fa-building-o color10" title="API"></i></a></span>
			<span class="posab disib text-center p_rz"><a href="loglis.html"><i class="fa fa-edit color5" title="日志"></i></a></span>
			<span class="posab disib text-center p_xq"><i class="fa fa-eye color9" title="详情"></i></span>
		</div>
		<div class="disib float-l project posre f-size-20">
			<img src="/wqac2.0/Public/Home/img/example1.jpg"/>
			<canvas width="150" height="150" style="position:absolute;left:0px;top:0px;opacity:0.7" prencet="0.8"></canvas>
			<span class="posab disib text-center p_tj"><a href="procharts.html"><i class="fa fa-bar-chart color8" title="统计图"></i></a></span>
			<span class="posab disib text-center p_api"><a href="apiman.html"><i class="fa fa-building-o color10" title="API"></i></a></span>
			<span class="posab disib text-center p_rz"><a href="loglis.html"><i class="fa fa-edit color5" title="日志"></i></a></span>
			<span class="posab disib text-center p_xq"><i class="fa fa-eye color9" title="详情"></i></span>
		</div>
		<div class="disib float-l project posre f-size-20">
			<img src="/wqac2.0/Public/Home/img/example1.jpg"/>
			<canvas width="150" height="150" style="position:absolute;left:0px;top:0px;opacity:0.7" prencet="0.7"></canvas>
			<span class="posab disib text-center p_tj"><a href="procharts.html"><i class="fa fa-bar-chart color8" title="统计图"></i></a></span>
			<span class="posab disib text-center p_api"><a href="apiman.html"><i class="fa fa-building-o color10" title="API"></i></a></span>
			<span class="posab disib text-center p_rz"><a href="loglis.html"><i class="fa fa-edit color5" title="日志"></i></a></span>
			<span class="posab disib text-center p_xq"><i class="fa fa-eye color9" title="详情"></i></span>
		</div>
		<div class="disib float-l project posre f-size-20">
			<img src="/wqac2.0/Public/Home/img/example1.jpg"/>
			<canvas width="150" height="150" style="position:absolute;left:0px;top:0px;opacity:0.7" prencet="0.9"></canvas>
			<span class="posab disib text-center p_tj"><a href="procharts.html"><i class="fa fa-bar-chart color8" title="统计图"></i></a></span>
			<span class="posab disib text-center p_api"><a href="apiman.html"><i class="fa fa-building-o color10" title="API"></i></a></span>
			<span class="posab disib text-center p_rz"><a href="loglis.html"><i class="fa fa-edit color5" title="日志"></i></a></span>
			<span class="posab disib text-center p_xq"><i class="fa fa-eye color9" title="详情"></i></span>
		</div>
		<div class="disib float-l project posre f-size-20">
			<img src="/wqac2.0/Public/Home/img/example1.jpg"/>
			<canvas width="150" height="150" style="position:absolute;left:0px;top:0px;opacity:0.7" prencet="0.6"></canvas>
			<span class="posab disib text-center p_tj"><a href="procharts.html"><i class="fa fa-bar-chart color8" title="统计图"></i></a></span>
			<span class="posab disib text-center p_api"><a href="apiman.html"><i class="fa fa-building-o color10" title="API"></i></a></span>
			<span class="posab disib text-center p_rz"><a href="loglis.html"><i class="fa fa-edit color5" title="日志"></i></a></span>
			<span class="posab disib text-center p_xq"><i class="fa fa-eye color9" title="详情"></i></span>
		</div>
		<!--<div class="col-lg-2 probag margin-b-10 col-md-3 col-sm-4 col-xs-6">
			<img src="/wqac2.0/Public/Home/img/example1.jpg"/>
			<div class="precent_p"><div class="precent text-center"  precen="60"></div></div>
			<div class="easy_des">
				<div class="f-size-16">心生活</div>
				<p>幸福来源于点点滴滴</p>
				<ul class="doplay">
					<li><i class="fa fa-edit color5"></i></li>
					<li><i class="fa fa-eye color9"></i></li>
					<li><i class="fa fa-trash color10"></i></li>
				</ul>
			</div>
		</div>-->
	</div>
</div>

</div>
<!-- End Content -->
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
<div class="dis-n addpro">
	<div class="title text-center f-size-20 ih50">创建项目</div>
	<div class="padding-20 xq_form1 xq_form">
		<div class="clearfix">
			<label class="col-sm-3">项目名称</label>
			<div class="col-sm-9">
				<input class="form-control pjname" type="text" placeholder="请输入项目名称">
			</div>
		</div>
		<div class="clearfix">
			<label class="col-sm-3">项目logo</label>
			<div class="col-sm-9">
				<div class="xq_upimg">
					<img src="/wqac2.0/Public/Home/img/zc_upd.png"/>
					<input type="file">
				</div>
			</div>
		</div>
		<div class="clearfix">
			<label class="col-sm-3">所属客户</label>
			<div class="col-sm-9">
				<select class="form-control bdman selectpicker" type="text">
					<option value="0">请选择所属客户</option>
					<option value="1">张三</option>
					<option value="2">李四</option>
					<option value="3">王五</option>
				</select>
			</div>
		</div>
		<div class="clearfix">
			<label class="col-sm-3">交易顾问</label>
			<div class="col-sm-9">
				<select class="form-control custom selectpicker" type="text">
					<option value="0">请选择交易顾问</option>
					<option value="1">张三</option>
					<option value="2">李四</option>
					<option value="3">王五</option>
				</select>
			</div>
		</div>
	</div>
	<!---->
	<div class="padding-20 xq_form2 dis-n xq_form">
	<div class="clearfix">
		<label class="col-sm-3">项目类别</label>
		<div class="col-sm-9">
			<select class="form-control pjtype selectpicker">
				<option value="0">餐饮外卖</option>
				<option value="1">社区网超</option>
				<option value="2">兼职</option>
				<option value="3">O2O</option>
				<option value="4">互联网教育</option>
				<option value="5">美容美发</option>
				<option value="6">P2P理财</option>
			</select>
		</div>
	</div>
	<div class="clearfix">
		<label class="col-sm-3">项目构成</label>
		<div class="col-sm-9 pjsection" style="display: flex;justify-content: space-between;">
			<div class="checkbox checkbox-primary">
				<input type="checkbox" id="checkbox1" name="pjsection" value="0" data-toggle="toggle"/>
				<label for="checkbox1">ios</label>
			</div>
			<div class="checkbox checkbox-primary">
				<input type="checkbox" id="checkbox2" name="pjsection" value="1" data-toggle="toggle"/>
				<label for="checkbox2">安卓</label>
			</div>
			<div class="checkbox checkbox-primary">
				<input type="checkbox" id="checkbox3" name="pjsection" value="2" data-toggle="toggle"/>
				<label for="checkbox3">PC网站</label>
			</div>
			<div class="checkbox checkbox-primary">
				<input type="checkbox" id="checkbox4" name="pjsection" value="3" checked="checked" data-toggle="toggle"/>
				<label for="checkbox4">Wap网站</label>
			</div>
			<div class="checkbox checkbox-primary">
				<input type="checkbox" id="checkbox5" name="pjsection" value="4" checked="checked" data-toggle="toggle"/>
				<label for="checkbox5">公众平台</label>
			</div>
			
			<!--<input type="checkbox" name="pjsection" value="1" data-toggle="toggle"/><span>安卓</span>
			<input type="checkbox" name="pjsection" value="2" data-toggle="toggle"/><span>PC网站</span>
			<input type="checkbox" name="pjsection" value="3" data-toggle="toggle"/><span>Wap网站</span>
			<input type="checkbox" name="pjsection" value="4" data-toggle="toggle"/><span>公众平台</span>-->
		</div>
	</div>
	<div class="clearfix">
		<label class="col-sm-3">项目金额</label>
		<div class="col-sm-9">
			<input type="text" class="form-control price" placeholder="请输入项目金额"/>
		</div>
	</div>
	<div class="clearfix">
		<label class="col-sm-3">项目准备事项</label>
		<div class="col-sm-9">
			<input type="text" class="form-control pjremark" placeholder="请输入项目准备事项"/>
		</div>
	</div>
	<div class="clearfix">
		<label class="col-sm-3">项目附件</label>
		<div class="col-sm-9">
			<input type="text" class="form-control pjurl" placeholder="请输入项目附件URL"/>
		</div>
	</div>
</div>
<div class="padding-20 dis-n xq_form3 xq_form">
	<div class="clearfix">
		<label class="col-sm-3">总开发周期</label>
		<div class="col-sm-9">
			<div class="col-sm-6">
				<input class="form-control zstart laydate-icon" onclick="laydate({istime: false, format: 'YYYY-MM-DD',isclear:false,issure:false,istoday:false})"/>
			</div>
			<div class="col-sm-6">
				<input class="form-control zend laydate-icon" onclick="laydate({istime: false, format: 'YYYY-MM-DD',isclear:false,issure:false,istoday:false})"/>
			</div>
		</div>
	</div>
	<div class="clearfix">
		<label class="col-sm-3">UI设计</label>
		<div class="col-sm-9">
			<div class="col-sm-6">
				<input class="form-control ustart laydate-icon" onclick="laydate({istime: false, format: 'YYYY-MM-DD',isclear:false,issure:false,istoday:false})"/>
			</div>
			<div class="col-sm-6">
				<input class="form-control uend laydate-icon" onclick="laydate({istime: false, format: 'YYYY-MM-DD',isclear:false,issure:false,istoday:false})"/>
			</div>
		</div>
	</div>
	<div class="clearfix">
		<label class="col-sm-3">布局开发</label>
		<div class="col-sm-9">
			<div class="col-sm-6">
				<input class="form-control bstart laydate-icon" onclick="laydate({istime: false, format: 'YYYY-MM-DD',isclear:false,issure:false,istoday:false})"/>
			</div>
			<div class="col-sm-6">
				<input class="form-control bend laydate-icon" onclick="laydate({istime: false, format: 'YYYY-MM-DD',isclear:false,issure:false,istoday:false})"/>
			</div>
		</div>
	</div>
	<div class="clearfix">
		<label class="col-sm-3">接口调用</label>
		<div class="col-sm-9">
			<div class="col-sm-6">
				<input class="form-control jstart laydate-icon" onclick="laydate({istime: false, format: 'YYYY-MM-DD',isclear:false,issure:false,istoday:false})"/>
			</div>
			<div class="col-sm-6">
				<input class="form-control jend laydate-icon" onclick="laydate({istime: false, format: 'YYYY-MM-DD',isclear:false,issure:false,istoday:false})"/>
			</div>
		</div>
	</div>
</div>
<div class="padding-20 dis-n xq_form4 xq_form">
	<div class="dragimg clearfix">
		<label class="col-sm-3">项目参与人</label>
		<div class="col-sm-9 margin-b-10" style="min-height: 150px;border: 1px solid #BDC4C9;" xq_drop="true"></div>
	</div>
	<div class="dragimg clearfix">
		<label class="col-sm-3">技术人员</label>
		<div class="col-sm-9" style="min-height: 150px;border: 1px solid #BDC4C9;" xq_drop="true">
			<div class="disib" style="overflow: hidden;" xq_drag="true">
				<img src="/wqac2.0/Public/Home/img/profileimg3.png" ondragstart="return false"/>
			</div>
			<div class="disib" style="overflow: hidden;" xq_drag="true">
				<img src="/wqac2.0/Public/Home/img/profileimg4.png" ondragstart="return false"/>
			</div>
			<div class="disib" style="overflow: hidden;" xq_drag="true">
				<img src="/wqac2.0/Public/Home/img/profileimg3.png" ondragstart="return false"/>
			</div>
			<div class="disib" style="overflow: hidden;" xq_drag="true">
				<img src="/wqac2.0/Public/Home/img/profileimg4.png" ondragstart="return false"/>
			</div>
			<div class="disib" style="overflow: hidden;" xq_drag="true">
				<img src="/wqac2.0/Public/Home/img/profileimg3.png" ondragstart="return false"/>
			</div>
			<div class="disib" style="overflow: hidden;" xq_drag="true">
				<img src="/wqac2.0/Public/Home/img/profileimg4.png" ondragstart="return false"/>
			</div>
			<div class="disib" style="overflow: hidden;" xq_drag="true">
				<img src="/wqac2.0/Public/Home/img/profileimg3.png" ondragstart="return false"/>
			</div>
			<div class="disib" style="overflow: hidden;" xq_drag="true">
				<img src="/wqac2.0/Public/Home/img/profileimg4.png" ondragstart="return false"/>
			</div>
			<div class="disib" style="overflow: hidden;" xq_drag="true">
				<img src="/wqac2.0/Public/Home/img/profileimg3.png" ondragstart="return false"/>
			</div>
			<div class="disib" style="overflow: hidden;" xq_drag="true">
				<img src="/wqac2.0/Public/Home/img/profileimg4.png" ondragstart="return false"/>
			</div>
			<div class="disib" style="overflow: hidden;" xq_drag="true">
				<img src="/wqac2.0/Public/Home/img/profileimg3.png" ondragstart="return false"/>
			</div>
			<div class="disib" style="overflow: hidden;" xq_drag="true">
				<img src="/wqac2.0/Public/Home/img/profileimg4.png" ondragstart="return false"/>
			</div>
		</div>
	</div>
	<div class="clearfix">
		<label class="col-sm-3">精细进度</label>
		<div class="col-sm-9 jxlevl" style="display: flex;justify-content: space-between;flex-wrap: wrap;">
			<div class="radio">
				<input type="radio" id="radio1" name="jxlevl" value="0" checked/>
				<label for="radio1">功能明细确认中</label>
			</div>
			<div class="radio">
				<input type="radio" id="radio2" name="jxlevl" value="1"/>
				<label for="radio2">UI进行中</label>
			</div>
			<div class="radio">
				<input type="radio" id="radio3" name="jxlevl" value="2"/>
				<label for="radio3">UI修改中</label>
			</div>
			<div class="radio">
				<input type="radio" id="radio4" name="jxlevl" value="3"/>
				<label for="radio4">布局进行中</label>
			</div>
			<div class="radio">
				<input type="radio" id="radio5" name="jxlevl" value="4"/>
				<label for="radio5">布局修改中</label>
			</div>
			<div class="radio">
				<input type="radio" id="radio6" name="jxlevl" value="5"/>
				<label for="radio6">接口调用中</label>
			</div>
			<div class="radio">
				<input type="radio" id="radio7" name="jxlevl" value="6"/>
				<label for="radio7">程序测试中</label>
			</div>
			<div class="radio">
				<input type="radio" id="radio8" name="jxlevl" value="7"/>
				<label for="radio8">项目完成</label>
			</div>
		</div>
	</div>
</div>
	<!---->
	<div class="box-cen padding-20">
		<div class="btn btn-lg btn-default prevpu dis-n">上一步</div>
		<div class="btn btn-lg btn-default save-btn">保存</div>
		<div class="btn btn-lg btn-default dis-n editor-btn">编辑</div>
		<div class="btn btn-lg btn-default nextpu">下一步</div>
	</div>
</div>
<!--<div class="xq_form1 dis-n">
	<div class="ovhid">
		<label class="col-sm-3">项目名称</label>
		<div class="col-sm-9">
			<input class="form-control pjname" type="text" placeholder="请输入项目名称">
		</div>
	</div>
	<div class="ovhid">
		<label class="col-sm-3">项目logo</label>
		<div class="col-sm-9">
			<div class="xq_upimg">
				<img src="/wqac2.0/Public/Home/img/zc_upd.png"/>
				<input type="file">
			</div>
		</div>
	</div>
	<div class="ovhid">
		<label class="col-sm-3">所属客户</label>
		<div class="col-sm-9">
			<select class="form-control bdman" type="text">
				<option>请选择所属客户</option>
				<option>张三</option>
				<option>李四</option>
				<option>王五</option>
			</select>
		</div>
	</div>
	<div class="ovhid">
		<label class="col-sm-3">交易顾问</label>
		<div class="col-sm-9">
			<select class="form-control custom" type="text">
				<option>请选择交易顾问</option>
				<option>张三</option>
				<option>李四</option>
				<option>王五</option>
			</select>
		</div>
	</div>
</div>-->

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
<!-- ================================================
Bootstrap Select
================================================ -->
<script type="text/javascript" src="/wqac2.0/Public/Home/js/bootstrap-select/bootstrap-select.js"></script>

<script type="text/javascript" src="/wqac2.0/Public/Home/js/self.js"></script>
<script type="text/javascript" src="/wqac2.0/Public/Home/js/XQ_drag.js"></script>
<script type="text/javascript" src="/wqac2.0/Public/Home/js/layer/layer.js"></script>
<script type="text/javascript" src="/wqac2.0/Public/Home/js/laydate/laydate.js"></script>
<!-- ================================================
Sweet Alert
================================================ -->
<script src="/wqac2.0/Public/Home/js/sweet-alert/sweet-alert.min.js"></script>

<!-- ================================================
Kode Alert
================================================ -->
<script src="/wqac2.0/Public/Home/js/kode-alert/main.js"></script>

<script type="text/javascript">
var forms=['.xq_form1','.xq_form2','.xq_form3','.xq_form4'];
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
////			$(".xq_form").html($(".loading").html());
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
////			$(".xq_form").html($(".loading").html());
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
		$(".addpro-btn").on('click',function () {
			$("input,select").removeAttr("disabled");
	    	$(".save-btn").show();
	    	$(".editor-btn").hide();
			layer.open({
				type:1,
				title:false,
				area:['600px','auto'],
				content:$(".addpro")
			})
		});
		$(".precent").each(function () {
			var precen=$(this).attr("precen")+'%';
			$(this).css('width',precen).text(precen);
		});
	});
	
	window.onload = function(){ 
    $("canvas").each(function(){
        var percentThis=$(this).attr("prencet");
        var canvas = $(this)[0];
        var ctx = canvas.getContext("2d");  
        var percent = percentThis;//所占百分比 已完成%
        var angle = 360;
        var anglePer = percent * 360;//百分比所对应的度数
        var count = 0;
        ctx.beginPath(); 
        ctx.arc(75, 75, 85, 0, Math.PI*2, true); 
        ctx.lineWidth = 50; 
        ctx.strokeStyle = "rgba(0,0,0,.7)";
        ctx.stroke();
        ctx.closePath();
        var timer = setInterval(function(){ 
            angle -= 1; 
            if(angle < anglePer){
                clearInterval(timer);
            }else{
                draw(ctx,angle);
            }
            // ctx.clearRect(20,20,100,100);
        },5)
    }) 
}
function draw(ctx,angle){
    ctx.save();
    ctx.translate(75,75);
    ctx.rotate(-Math.PI/2);
    ctx.fillStyle="#4C4C4C";
    ctx.beginPath();
    ctx.lineWidth = 10;
    ctx.strokeStyle = "rgba(0,0,0,0)";
    ctx.arc(0,0,47,Math.PI/180*angle,Math.PI*2,false);
    ctx.lineTo(0,0);
    ctx.stroke(); 
    ctx.fill();
    ctx.closePath();
    ctx.restore();
}    
</script>
<script type="text/javascript">
//	document.querySelectorAll('.fa-trash').onclick = 
	$(".fa-trash").on('click',function(){
		var self=$(this);
	      swal({
	        title: "请确认?",
	        text: "您删除项目，将无法挽回!",
	        type: "warning",
	        showCancelButton: true,
	        confirmButtonColor: "#DD6B55",
	        confirmButtonText: "确认",
	        cancelButtonText: "取消",
	        closeOnConfirm: false
	      },
	      function(){
	      	self.parents(".probag").remove();
	          swal("已删除!", "恭喜您删除成功.", "success");
	      });
    });
    $(".save-btn").on('click',function(){
    	layer.closeAll();
    	swal("保存成功!", "单击退出!", "success");
    });
    $(".p_api").on('dblclick',function(){
    	window.location.href="probug.html";
    });
    $(".fa-eye").on('click',function(){
    	$("input,select").attr("disabled","true");
    	$(".editor-btn").show();
    	$(".save-btn").hide();
    	
    	var pjobj={
    		pjname:"淘艺",
    		pjlogo:"",
    		custom:"1",
    		bdman:"2",
    		pjsection:[1,2],
    		pjtype:"4",
    		price:"12W",
    		pjremark:"一定要认证做",
    		pjurl:"http://www.baidu.com",
    		zstart:"2015-12-12",
    		zend:"2015-12-12",
    		ustart:"2015-12-12",
    		uend:"2015-12-12",
    		bstart:"2015-12-12",
    		bend:"2015-12-12",
    		jstart:"2015-12-12",
    		jend:"2015-12-12",
    		joinpj:[{id:"1",url:""},{id:"1",url:""}],
    		outjoin:[{id:"1",url:""},{id:"1",url:""}],
    		jxlevl:"3"
    		
    	};
    	$(".pjname").val(pjobj.pjname);
    	$(".custom").val(pjobj.custom);
    	$(".bdman").val(pjobj.bdman);
    	$(".pjsection input").removeAttr("checked");
    	for(var index in pjobj.pjsection){
    		$(".pjsection input[value='"+pjobj.pjsection[index]+"']").attr("checked","checked");
    	}
    	$(".pjtype").val(pjobj.pjtype);
    	$(".price").val(pjobj.price);
    	$(".pjremark").val(pjobj.pjremark);
    	$(".pjurl").val(pjobj.pjurl);
    	$(".zstart").val(pjobj.zstart);
    	$(".zend").val(pjobj.zend);
    	$(".ustart").val(pjobj.ustart);
    	$(".uend").val(pjobj.uend);
    	$(".bstart").val(pjobj.bstart);
    	$(".bend").val(pjobj.bend);
    	$(".jstart").val(pjobj.jstart);
    	$(".jend").val(pjobj.jend);
    	$(".jxlevl input").removeAttr("checked");
    	$(".jxlevl input[value='"+pjobj.jxlevl+"']").attr("checked","checked");
    	layer.open({
			type:1,
			title:false,
			area:['600px','auto'],
			content:$(".addpro")
		});
    });
    $(".editor-btn").on('click',function(){
    	$(".save-btn").show();
    	$(".editor-btn").hide();
    	$("input,select").removeAttr("disabled");
    });
</script>
</body>
</html>