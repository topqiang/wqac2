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

  <!-- Start Page Header -->
  <div class="page-header">
    <h1 class="title">Icons</h1>
      <ol class="breadcrumb">
        <li><a href="index.html">Dashboard</a></li>
        <li><a href="#">UI Elements</a></li>
        <li class="active">Icons</li>
    </ol>

    <!-- Start Page Header Right Div -->
    <div class="right">
      <div class="btn-group" role="group" aria-label="...">
        <a href="index.html" class="btn btn-light">Dashboard</a>
        <a href="#" class="btn btn-light"><i class="fa fa-refresh"></i></a>
        <a href="#" class="btn btn-light"><i class="fa fa-search"></i></a>
        <a href="#" class="btn btn-light" id="topstats"><i class="fa fa-line-chart"></i></a>
      </div>
    </div>
    <!-- End Page Header Right Div -->

  </div>
  <!-- End Page Header -->


  <!-- Start Presentation -->
  <div class="row presentation">

    <div class="col-lg-8 col-md-6 titles">
      <span class="icon color5-bg"><i class="fa fa-smile-o"></i></span>
      <h1>Icons</h1>
      <h4>Kode using <a href="http://fortawesome.github.io/Font-Awesome/" target="_blank">FontAwesome</a>. It's gives you scalable vector icons that can instantly be customized size, color, drop shadow, and anything that can be done with the power of CSS.</h4>
    </div>

    <div class="col-lg-4 col-md-6">
      <ul class="list-unstyled list">
        <li><i class="fa fa-check"></i><b>519</b> Icons<li>
        <li><i class="fa fa-check"></i>Based on <a href="http://fortawesome.github.io/Font-Awesome/" target="_blank">Font Awesome</a><li>
        <li><i class="fa fa-check"></i>Infinite Scalability<li>
        <li><i class="fa fa-check"></i>No JS Required, CSS Control<li>
      </ul>
    </div>

  </div>
  <!-- End Presentation -->


 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTAINER -->
<div class="container-padding">

  
  <!-- Start Row -->
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">FONT AWESOME - Over 500 icons</div>

            <div class="panel-body">

              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-adjust"></i> fa-adjust</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-anchor"></i> fa-anchor</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-archive"></i> fa-archive</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-area-chart"></i> fa-area-chart</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-arrows"></i> fa-arrows</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-arrows-h"></i> fa-arrows-h</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-arrows-v"></i> fa-arrows-v</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-asterisk"></i> fa-asterisk</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-at"></i> fa-at</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-automobile"></i> fa-automobile</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-ban"></i> fa-ban</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-bank"></i> fa-bank</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-bar-chart"></i> fa-bar-chart</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-bar-chart-o"></i> fa-bar-chart-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-barcode"></i> fa-barcode</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-bars"></i> fa-bars</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-beer"></i> fa-beer</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-bell"></i> fa-bell</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-bell-o"></i> fa-bell-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-bell-slash"></i> fa-bell-slash</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-bell-slash-o"></i> fa-bell-slash-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-bicycle"></i> fa-bicycle</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-binoculars"></i> fa-binoculars</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-birthday-cake"></i> fa-birthday-cake</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-bolt"></i> fa-bolt</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-bomb"></i> fa-bomb</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-book"></i> fa-book</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-bookmark"></i> fa-bookmark</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-bookmark-o"></i> fa-bookmark-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-briefcase"></i> fa-briefcase</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-bug"></i> fa-bug</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-building"></i> fa-building</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-building-o"></i> fa-building-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-bullhorn"></i> fa-bullhorn</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-bullseye"></i> fa-bullseye</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-bus"></i> fa-bus</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-cab"></i> fa-cab</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-calculator"></i> fa-calculator</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-calendar"></i> fa-calendar</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-calendar-o"></i> fa-calendar-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-camera"></i> fa-camera</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-camera-retro"></i> fa-camera-retro</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-car"></i> fa-car</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-cc"></i> fa-cc</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-certificate"></i> fa-certificate</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-check"></i> fa-check</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-check-circle"></i> fa-check-circle</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-check-circle-o"></i> fa-check-circle-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-check-square"></i> fa-check-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-check-square-o"></i> fa-check-square-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-child"></i> fa-child</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-circle"></i> fa-circle</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-circle-o"></i> fa-circle-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-circle-o-notch"></i> fa-circle-o-notch</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-circle-thin"></i> fa-circle-thin</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-clock-o"></i> fa-clock-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-close"></i> fa-close</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-cloud"></i> fa-cloud</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-cloud-download"></i> fa-cloud-download</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-cloud-upload"></i> fa-cloud-upload</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-code"></i> fa-code</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-code-fork"></i> fa-code-fork</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-coffee"></i> fa-coffee</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-cog"></i> fa-cog</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-cogs"></i> fa-cogs</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-comment"></i> fa-comment</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-comment-o"></i> fa-comment-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-comments"></i> fa-comments</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-comments-o"></i> fa-comments-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-compass"></i> fa-compass</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-copyright"></i> fa-copyright</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-credit-card"></i> fa-credit-card</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-crop"></i> fa-crop</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-crosshairs"></i> fa-crosshairs</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-cube"></i> fa-cube</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-cubes"></i> fa-cubes</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-cutlery"></i> fa-cutlery</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-dashboard"></i> fa-dashboard</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-database"></i> fa-database</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-desktop"></i> fa-desktop</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-download"></i> fa-download</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-edit"></i> fa-edit</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-ellipsis-h"></i> fa-ellipsis-h</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-ellipsis-v"></i> fa-ellipsis-v</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-envelope"></i> fa-envelope</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-envelope-o"></i> fa-envelope-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-envelope-square"></i> fa-envelope-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-eraser"></i> fa-eraser</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-exchange"></i> fa-exchange</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-exclamation"></i> fa-exclamation</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-exclamation-circle"></i> fa-exclamation-circle</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-exclamation-triangle"></i> fa-exclamation-triangle</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-external-link"></i> fa-external-link</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-external-link-square"></i> fa-external-link-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-eye"></i> fa-eye</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-eye-slash"></i> fa-eye-slash</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-eyedropper"></i> fa-eyedropper</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-fax"></i> fa-fax</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-female"></i> fa-female</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-fighter-jet"></i> fa-fighter-jet</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-archive-o"></i> fa-file-archive-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-audio-o"></i> fa-file-audio-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-code-o"></i> fa-file-code-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-excel-o"></i> fa-file-excel-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-image-o"></i> fa-file-image-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-movie-o"></i> fa-file-movie-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-pdf-o"></i> fa-file-pdf-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-photo-o"></i> fa-file-photo-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-picture-o"></i> fa-file-picture-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-powerpoint-o"></i> fa-file-powerpoint-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-sound-o"></i> fa-file-sound-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-video-o"></i> fa-file-video-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-word-o"></i> fa-file-word-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-zip-o"></i> fa-file-zip-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-film"></i> fa-film</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-filter"></i> fa-filter</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-fire"></i> fa-fire</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-fire-extinguisher"></i> fa-fire-extinguisher</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-flag"></i> fa-flag</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-flag-checkered"></i> fa-flag-checkered</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-flag-o"></i> fa-flag-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-flash"></i> fa-flash</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-flask"></i> fa-flask</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-folder"></i> fa-folder</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-folder-o"></i> fa-folder-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-folder-open"></i> fa-folder-open</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-folder-open-o"></i> fa-folder-open-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-frown-o"></i> fa-frown-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-futbol-o"></i> fa-futbol-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-gamepad"></i> fa-gamepad</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-gavel"></i> fa-gavel</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-gear"></i> fa-gear</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-gears"></i> fa-gears</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-gift"></i> fa-gift</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-glass"></i> fa-glass</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-globe"></i> fa-globe</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-graduation-cap"></i> fa-graduation-cap</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-group"></i> fa-group</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-hdd-o"></i> fa-hdd-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-headphones"></i> fa-headphones</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-heart"></i> fa-heart</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-heart-o"></i> fa-heart-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-history"></i> fa-history</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-home"></i> fa-home</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-image"></i> fa-image</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-inbox"></i> fa-inbox</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-info"></i> fa-info</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-info-circle"></i> fa-info-circle</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-institution"></i> fa-institution</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-key"></i> fa-key</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-keyboard-o"></i> fa-keyboard-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-language"></i> fa-language</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-laptop"></i> fa-laptop</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-leaf"></i> fa-leaf</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-legal"></i> fa-legal</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-lemon-o"></i> fa-lemon-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-level-down"></i> fa-level-down</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-level-up"></i> fa-level-up</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-life-bouy"></i> fa-life-bouy</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-life-buoy"></i> fa-life-buoy</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-life-ring"></i> fa-life-ring</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-life-saver"></i> fa-life-saver</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-lightbulb-o"></i> fa-lightbulb-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-line-chart"></i> fa-line-chart</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-location-arrow"></i> fa-location-arrow</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-lock"></i> fa-lock</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-magic"></i> fa-magic</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-magnet"></i> fa-magnet</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-mail-forward"></i> fa-mail-forward</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-mail-reply"></i> fa-mail-reply</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-mail-reply-all"></i> fa-mail-reply-all</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-male"></i> fa-male</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-map-marker"></i> fa-map-marker</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-meh-o"></i> fa-meh-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-microphone"></i> fa-microphone</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-microphone-slash"></i> fa-microphone-slash</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-minus"></i> fa-minus</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-minus-circle"></i> fa-minus-circle</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-minus-square"></i> fa-minus-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-minus-square-o"></i> fa-minus-square-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-mobile"></i> fa-mobile</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-mobile-phone"></i> fa-mobile-phone</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-money"></i> fa-money</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-moon-o"></i> fa-moon-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-mortar-board"></i> fa-mortar-board</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-music"></i> fa-music</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-navicon"></i> fa-navicon</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-newspaper-o"></i> fa-newspaper-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-paint-brush"></i> fa-paint-brush</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-paper-plane"></i> fa-paper-plane</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-paper-plane-o"></i> fa-paper-plane-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-paw"></i> fa-paw</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-pencil"></i> fa-pencil</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-pencil-square"></i> fa-pencil-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-pencil-square-o"></i> fa-pencil-square-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-phone"></i> fa-phone</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-phone-square"></i> fa-phone-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-photo"></i> fa-photo</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-picture-o"></i> fa-picture-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-pie-chart"></i> fa-pie-chart</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-plane"></i> fa-plane</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-plug"></i> fa-plug</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-plus"></i> fa-plus</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-plus-circle"></i> fa-plus-circle</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-plus-square"></i> fa-plus-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-power-off"></i> fa-power-off</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-print"></i> fa-print</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-puzzle-piece"></i> fa-puzzle-piece</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-qrcode"></i> fa-qrcode</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-question"></i> fa-question</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-question-circle"></i> fa-question-circle</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-quote-left"></i> fa-quote-left</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-quote-right"></i> fa-quote-right</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-random"></i> fa-random</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-recycle"></i> fa-recycle</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-refresh"></i> fa-refresh</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-remove"></i> fa-remove</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-reorder"></i> fa-reorder</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-reply"></i> fa-reply</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-reply-all"></i> fa-reply-all</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-retweet"></i> fa-retweet</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-road"></i> fa-road</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-rocket"></i> fa-rocket</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-rss"></i> fa-rss</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-rss-square"></i> fa-rss-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-search"></i> fa-search</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-search-minus"></i> fa-search-minus</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-search-plus"></i> fa-search-plus</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-send"></i> fa-send</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-send-o"></i> fa-send-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-share"></i> fa-share</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-share-alt"></i> fa-share-alt</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-share-alt-square"></i> fa-share-alt-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-share-square"></i> fa-share-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-share-square-o"></i> fa-share-square-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-shield"></i> fa-shield</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-shopping-cart"></i> fa-shopping-cart</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-sign-in"></i> fa-sign-in</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-sign-out"></i> fa-sign-out</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-signal"></i> fa-signal</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-sitemap"></i> fa-sitemap</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-sliders"></i> fa-sliders</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-smile-o"></i> fa-smile-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-soccer-ball-o"></i> fa-soccer-ball-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-sort"></i> fa-sort</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-sort-alpha-asc"></i> fa-sort-alpha-asc</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-sort-alpha-desc"></i> fa-sort-alpha-desc</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-sort-amount-asc"></i> fa-sort-amount-asc</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-sort-amount-desc"></i> fa-sort-amount-desc</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-sort-asc"></i> fa-sort-asc</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-sort-desc"></i> fa-sort-desc</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-sort-down"></i> fa-sort-down</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-sort-numeric-asc"></i> fa-sort-numeric-asc</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-sort-numeric-desc"></i> fa-sort-numeric-desc</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-sort-up"></i> fa-sort-up</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-space-shuttle"></i> fa-space-shuttle</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-spinner"></i> fa-spinner</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-spoon"></i> fa-spoon</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-square"></i> fa-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-square-o"></i> fa-square-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-star"></i> fa-star</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-star-half"></i> fa-star-half</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-star-half-empty"></i> fa-star-half-empty</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-star-half-full"></i> fa-star-half-full</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-star-half-o"></i> fa-star-half-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-star-o"></i> fa-star-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-suitcase"></i> fa-suitcase</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-sun-o"></i> fa-sun-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-support"></i> fa-support</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-tablet"></i> fa-tablet</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-tachometer"></i> fa-tachometer</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-tag"></i> fa-tag</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-tags"></i> fa-tags</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-tasks"></i> fa-tasks</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-taxi"></i> fa-taxi</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-terminal"></i> fa-terminal</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-thumb-tack"></i> fa-thumb-tack</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-thumbs-down"></i> fa-thumbs-down</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-thumbs-o-down"></i> fa-thumbs-o-down</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-thumbs-o-up"></i> fa-thumbs-o-up</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-thumbs-up"></i> fa-thumbs-up</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-ticket"></i> fa-ticket</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-times"></i> fa-times</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-times-circle"></i> fa-times-circle</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-times-circle-o"></i> fa-times-circle-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-tint"></i> fa-tint</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-toggle-down"></i> fa-toggle-down</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-toggle-left"></i> fa-toggle-left</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-toggle-off"></i> fa-toggle-off</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-toggle-on"></i> fa-toggle-on</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-toggle-right"></i> fa-toggle-right</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-toggle-up"></i> fa-toggle-up</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-trash"></i> fa-trash</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-trash-o"></i> fa-trash-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-tree"></i> fa-tree</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-trophy"></i> fa-trophy</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-truck"></i> fa-truck</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-tty"></i> fa-tty</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-umbrella"></i> fa-umbrella</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-university"></i> fa-university</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-unlock"></i> fa-unlock</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-unlock-alt"></i> fa-unlock-alt</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-unsorted"></i> fa-unsorted</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-upload"></i> fa-upload</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-user"></i> fa-user</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-users"></i> fa-users</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-video-camera"></i> fa-video-camera</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-volume-down"></i> fa-volume-down</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-volume-off"></i> fa-volume-off</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-volume-up"></i> fa-volume-up</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-warning"></i> fa-warning</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-wheelchair"></i> fa-wheelchair</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-wifi"></i> fa-wifi</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-wrench"></i> fa-wrench</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file"></i> fa-file</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-archive-o"></i> fa-file-archive-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-audio-o"></i> fa-file-audio-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-code-o"></i> fa-file-code-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-excel-o"></i> fa-file-excel-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-image-o"></i> fa-file-image-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-movie-o"></i> fa-file-movie-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-o"></i> fa-file-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-pdf-o"></i> fa-file-pdf-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-photo-o"></i> fa-file-photo-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-picture-o"></i> fa-file-picture-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-powerpoint-o"></i> fa-file-powerpoint-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-sound-o"></i> fa-file-sound-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-text"></i> fa-file-text</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-text-o"></i> fa-file-text-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-video-o"></i> fa-file-video-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-word-o"></i> fa-file-word-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-zip-o"></i> fa-file-zip-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-circle-o-notch"></i> fa-circle-o-notch</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-cog"></i> fa-cog</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-gear"></i> fa-gear</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-refresh"></i> fa-refresh</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-spinner"></i> fa-spinner</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-check-square"></i> fa-check-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-check-square-o"></i> fa-check-square-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-circle"></i> fa-circle</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-circle-o"></i> fa-circle-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-minus-square"></i> fa-minus-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-minus-square-o"></i> fa-minus-square-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-plus-square"></i> fa-plus-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-square"></i> fa-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-square-o"></i> fa-square-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-cc-amex"></i> fa-cc-amex</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-cc-discover"></i> fa-cc-discover</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-cc-mastercard"></i> fa-cc-mastercard</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-cc-paypal"></i> fa-cc-paypal</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-cc-stripe"></i> fa-cc-stripe</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-cc-visa"></i> fa-cc-visa</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-credit-card"></i> fa-credit-card</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-google-wallet"></i> fa-google-wallet</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-paypal"></i> fa-paypal</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-area-chart"></i> fa-area-chart</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-bar-chart"></i> fa-bar-chart</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-bar-chart-o"></i> fa-bar-chart-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-line-chart"></i> fa-line-chart</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-pie-chart"></i> fa-pie-chart</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-bitcoin"></i> fa-bitcoin</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-btc"></i> fa-btc</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-cny"></i> fa-cny</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-dollar"></i> fa-dollar</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-eur"></i> fa-eur</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-euro"></i> fa-euro</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-gbp"></i> fa-gbp</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-ils"></i> fa-ils</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-inr"></i> fa-inr</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-jpy"></i> fa-jpy</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-krw"></i> fa-krw</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-money"></i> fa-money</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-rmb"></i> fa-rmb</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-rouble"></i> fa-rouble</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-rub"></i> fa-rub</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-ruble"></i> fa-ruble</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-rupee"></i> fa-rupee</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-shekel"></i> fa-shekel</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-sheqel"></i> fa-sheqel</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-try"></i> fa-try</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-turkish-lira"></i> fa-turkish-lira</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-usd"></i> fa-usd</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-won"></i> fa-won</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-yen"></i> fa-yen</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-align-center"></i> fa-align-center</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-align-justify"></i> fa-align-justify</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-align-left"></i> fa-align-left</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-align-right"></i> fa-align-right</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-bold"></i> fa-bold</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-chain"></i> fa-chain</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-chain-broken"></i> fa-chain-broken</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-clipboard"></i> fa-clipboard</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-columns"></i> fa-columns</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-copy"></i> fa-copy</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-cut"></i> fa-cut</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-dedent"></i> fa-dedent</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-eraser"></i> fa-eraser</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file"></i> fa-file</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-o"></i> fa-file-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-text"></i> fa-file-text</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-file-text-o"></i> fa-file-text-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-files-o"></i> fa-files-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-floppy-o"></i> fa-floppy-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-font"></i> fa-font</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-header"></i> fa-header</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-indent"></i> fa-indent</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-italic"></i> fa-italic</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-link"></i> fa-link</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-list"></i> fa-list</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-list-alt"></i> fa-list-alt</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-list-ol"></i> fa-list-ol</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-list-ul"></i> fa-list-ul</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-outdent"></i> fa-outdent</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-paperclip"></i> fa-paperclip</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-paragraph"></i> fa-paragraph</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-paste"></i> fa-paste</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-repeat"></i> fa-repeat</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-rotate-left"></i> fa-rotate-left</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-rotate-right"></i> fa-rotate-right</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-save"></i> fa-save</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-scissors"></i> fa-scissors</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-strikethrough"></i> fa-strikethrough</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-subscript"></i> fa-subscript</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-superscript"></i> fa-superscript</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-table"></i> fa-table</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-text-height"></i> fa-text-height</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-text-width"></i> fa-text-width</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-th"></i> fa-th</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-th-large"></i> fa-th-large</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-th-list"></i> fa-th-list</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-underline"></i> fa-underline</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-undo"></i> fa-undo</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-unlink"></i> fa-unlink</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-angle-double-down"></i> fa-angle-double-down</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-angle-double-left"></i> fa-angle-double-left</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-angle-double-right"></i> fa-angle-double-right</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-angle-double-up"></i> fa-angle-double-up</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-angle-down"></i> fa-angle-down</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-angle-left"></i> fa-angle-left</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-angle-right"></i> fa-angle-right</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-angle-up"></i> fa-angle-up</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-arrow-circle-down"></i> fa-arrow-circle-down</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-arrow-circle-left"></i> fa-arrow-circle-left</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-down"></i> fa-arrow-circle-o-down</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-left"></i> fa-arrow-circle-o-left</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-right"></i> fa-arrow-circle-o-right</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-up"></i> fa-arrow-circle-o-up</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-arrow-circle-right"></i> fa-arrow-circle-right</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-arrow-circle-up"></i> fa-arrow-circle-up</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-arrow-down"></i> fa-arrow-down</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-arrow-left"></i> fa-arrow-left</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-arrow-right"></i> fa-arrow-right</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-arrow-up"></i> fa-arrow-up</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-arrows"></i> fa-arrows</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-arrows-alt"></i> fa-arrows-alt</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-arrows-h"></i> fa-arrows-h</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-arrows-v"></i> fa-arrows-v</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-caret-down"></i> fa-caret-down</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-caret-left"></i> fa-caret-left</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-caret-right"></i> fa-caret-right</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-caret-up"></i> fa-caret-up</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-chevron-circle-down"></i> fa-chevron-circle-down</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-chevron-circle-left"></i> fa-chevron-circle-left</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-chevron-circle-right"></i> fa-chevron-circle-right</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-chevron-circle-up"></i> fa-chevron-circle-up</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-chevron-down"></i> fa-chevron-down</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-chevron-left"></i> fa-chevron-left</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-chevron-right"></i> fa-chevron-right</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-chevron-up"></i> fa-chevron-up</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-hand-o-down"></i> fa-hand-o-down</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-hand-o-left"></i> fa-hand-o-left</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-hand-o-right"></i> fa-hand-o-right</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-hand-o-up"></i> fa-hand-o-up</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-long-arrow-down"></i> fa-long-arrow-down</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-long-arrow-left"></i> fa-long-arrow-left</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-long-arrow-right"></i> fa-long-arrow-right</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-long-arrow-up"></i> fa-long-arrow-up</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-toggle-down"></i> fa-toggle-down</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-toggle-left"></i> fa-toggle-left</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-toggle-right"></i> fa-toggle-right</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-toggle-up"></i> fa-toggle-up</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-arrows-alt"></i> fa-arrows-alt</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-backward"></i> fa-backward</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-compress"></i> fa-compress</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-eject"></i> fa-eject</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-expand"></i> fa-expand</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-fast-backward"></i> fa-fast-backward</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-fast-forward"></i> fa-fast-forward</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-forward"></i> fa-forward</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-pause"></i> fa-pause</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-play"></i> fa-play</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-play-circle"></i> fa-play-circle</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-play-circle-o"></i> fa-play-circle-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-step-backward"></i> fa-step-backward</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-step-forward"></i> fa-step-forward</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-stop"></i> fa-stop</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-youtube-play"></i> fa-youtube-play</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-adn"></i> fa-adn</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-android"></i> fa-android</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-angellist"></i> fa-angellist</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-apple"></i> fa-apple</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-behance"></i> fa-behance</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-behance-square"></i> fa-behance-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-bitbucket"></i> fa-bitbucket</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-bitbucket-square"></i> fa-bitbucket-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-bitcoin"></i> fa-bitcoin</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-btc"></i> fa-btc</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-cc-amex"></i> fa-cc-amex</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-cc-discover"></i> fa-cc-discover</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-cc-mastercard"></i> fa-cc-mastercard</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-cc-paypal"></i> fa-cc-paypal</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-cc-stripe"></i> fa-cc-stripe</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-cc-visa"></i> fa-cc-visa</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-codepen"></i> fa-codepen</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-css3"></i> fa-css3</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-delicious"></i> fa-delicious</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-deviantart"></i> fa-deviantart</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-digg"></i> fa-digg</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-dribbble"></i> fa-dribbble</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-dropbox"></i> fa-dropbox</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-drupal"></i> fa-drupal</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-empire"></i> fa-empire</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-facebook"></i> fa-facebook</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-facebook-square"></i> fa-facebook-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-flickr"></i> fa-flickr</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-foursquare"></i> fa-foursquare</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-ge"></i> fa-ge</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-git"></i> fa-git</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-git-square"></i> fa-git-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-github"></i> fa-github</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-github-alt"></i> fa-github-alt</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-github-square"></i> fa-github-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-gittip"></i> fa-gittip</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-google"></i> fa-google</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-google-plus"></i> fa-google-plus</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-google-plus-square"></i> fa-google-plus-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-google-wallet"></i> fa-google-wallet</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-hacker-news"></i> fa-hacker-news</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-html5"></i> fa-html5</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-instagram"></i> fa-instagram</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-ioxhost"></i> fa-ioxhost</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-joomla"></i> fa-joomla</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-jsfiddle"></i> fa-jsfiddle</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-lastfm"></i> fa-lastfm</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-lastfm-square"></i> fa-lastfm-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-linkedin"></i> fa-linkedin</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-linkedin-square"></i> fa-linkedin-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-linux"></i> fa-linux</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-maxcdn"></i> fa-maxcdn</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-meanpath"></i> fa-meanpath</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-openid"></i> fa-openid</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-pagelines"></i> fa-pagelines</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-paypal"></i> fa-paypal</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-pied-piper"></i> fa-pied-piper</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-pied-piper-alt"></i> fa-pied-piper-alt</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-pinterest"></i> fa-pinterest</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-pinterest-square"></i> fa-pinterest-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-qq"></i> fa-qq</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-ra"></i> fa-ra</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-rebel"></i> fa-rebel</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-reddit"></i> fa-reddit</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-reddit-square"></i> fa-reddit-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-renren"></i> fa-renren</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-share-alt"></i> fa-share-alt</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-share-alt-square"></i> fa-share-alt-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-skype"></i> fa-skype</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-slack"></i> fa-slack</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-slideshare"></i> fa-slideshare</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-soundcloud"></i> fa-soundcloud</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-spotify"></i> fa-spotify</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-stack-exchange"></i> fa-stack-exchange</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-stack-overflow"></i> fa-stack-overflow</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-steam"></i> fa-steam</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-steam-square"></i> fa-steam-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-stumbleupon"></i> fa-stumbleupon</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-stumbleupon-circle"></i> fa-stumbleupon-circle</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-tencent-weibo"></i> fa-tencent-weibo</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-trello"></i> fa-trello</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-tumblr"></i> fa-tumblr</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-tumblr-square"></i> fa-tumblr-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-twitch"></i> fa-twitch</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-twitter"></i> fa-twitter</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-twitter-square"></i> fa-twitter-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-vimeo-square"></i> fa-vimeo-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-vine"></i> fa-vine</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-vk"></i> fa-vk</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-wechat"></i> fa-wechat</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-weibo"></i> fa-weibo</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-weixin"></i> fa-weixin</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-windows"></i> fa-windows</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-wordpress"></i> fa-wordpress</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-xing"></i> fa-xing</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-xing-square"></i> fa-xing-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-yahoo"></i> fa-yahoo</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-yelp"></i> fa-yelp</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-youtube"></i> fa-youtube</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-youtube-play"></i> fa-youtube-play</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-youtube-square"></i> fa-youtube-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-ambulance"></i> fa-ambulance</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-h-square"></i> fa-h-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-hospital-o"></i> fa-hospital-o</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-medkit"></i> fa-medkit</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-plus-square"></i> fa-plus-square</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-stethoscope"></i> fa-stethoscope</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-user-md"></i> fa-user-md</div>
              <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-wheelchair"></i> fa-wheelchair</div>  


            </div>

      </div>
    </div>

  </div>
  <!-- End Row -->

  




</div>
<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// -->


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




</div>
<!-- End Content -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 

<!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START SIDEPANEL -->
<div role="tabpanel" class="sidepanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#today" aria-controls="today" role="tab" data-toggle="tab">TODAY</a></li>
    <li role="presentation"><a href="#tasks" aria-controls="tasks" role="tab" data-toggle="tab">TASKS</a></li>
    <li role="presentation"><a href="#chat" aria-controls="chat" role="tab" data-toggle="tab">CHAT</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">

    <!-- Start Today -->
    <div role="tabpanel" class="tab-pane active" id="today">

      <div class="sidepanel-m-title">
        Today
        <span class="left-icon"><a href="#"><i class="fa fa-refresh"></i></a></span>
        <span class="right-icon"><a href="#"><i class="fa fa-file-o"></i></a></span>
      </div>

      <div class="gn-title">NEW</div>

      <ul class="list-w-title">
        <li>
          <a href="#">
            <span class="label label-danger">ORDER</span>
            <span class="date">9 hours ago</span>
            <h4>New Jacket 2.0</h4>
            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
          </a>
        </li>
        <li>
          <a href="#">
            <span class="label label-success">COMMENT</span>
            <span class="date">14 hours ago</span>
            <h4>Bill Jackson</h4>
            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
          </a>
        </li>
        <li>
          <a href="#">
            <span class="label label-info">MEETING</span>
            <span class="date">at 2:30 PM</span>
            <h4>Developer Team</h4>
            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
          </a>
        </li>
        <li>
          <a href="#">
            <span class="label label-warning">EVENT</span>
            <span class="date">3 days left</span>
            <h4>Birthday Party</h4>
            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
          </a>
        </li>
      </ul>

    </div>
    <!-- End Today -->

    <!-- Start Tasks -->
    <div role="tabpanel" class="tab-pane" id="tasks">

      <div class="sidepanel-m-title">
        To-do List
        <span class="left-icon"><a href="#"><i class="fa fa-pencil"></i></a></span>
        <span class="right-icon"><a href="#"><i class="fa fa-trash"></i></a></span>
      </div>

      <div class="gn-title">TODAY</div>

      <ul class="todo-list">
        <li class="checkbox checkbox-primary">
          <input id="checkboxside1" type="checkbox"><label for="checkboxside1">Add new products</label>
        </li>
        
        <li class="checkbox checkbox-primary">
          <input id="checkboxside2" type="checkbox"><label for="checkboxside2"><b>May 12, 6:30 pm</b> Meeting with Team</label>
        </li>
        
        <li class="checkbox checkbox-warning">
          <input id="checkboxside3" type="checkbox"><label for="checkboxside3">Design Facebook page</label>
        </li>
        
        <li class="checkbox checkbox-info">
          <input id="checkboxside4" type="checkbox"><label for="checkboxside4">Send Invoice to customers</label>
        </li>
        
        <li class="checkbox checkbox-danger">
          <input id="checkboxside5" type="checkbox"><label for="checkboxside5">Meeting with developer team</label>
        </li>
      </ul>

      <div class="gn-title">TOMORROW</div>
      <ul class="todo-list">
        <li class="checkbox checkbox-warning">
          <input id="checkboxside6" type="checkbox"><label for="checkboxside6">Redesign our company blog</label>
        </li>
        
        <li class="checkbox checkbox-success">
          <input id="checkboxside7" type="checkbox"><label for="checkboxside7">Finish client work</label>
        </li>
        
        <li class="checkbox checkbox-info">
          <input id="checkboxside8" type="checkbox"><label for="checkboxside8">Call Johnny from Developer Team</label>
        </li>

      </ul>
    </div>    
    <!-- End Tasks -->

    <!-- Start Chat -->
    <div role="tabpanel" class="tab-pane" id="chat">

      <div class="sidepanel-m-title">
        Friend List
        <span class="left-icon"><a href="#"><i class="fa fa-pencil"></i></a></span>
        <span class="right-icon"><a href="#"><i class="fa fa-trash"></i></a></span>
      </div>

      <div class="gn-title">ONLINE MEMBERS (3)</div>
      <ul class="group">
        <li class="member"><a href="#"><img src="/wqac2.0/Public/Home/img/profileimg.png" alt="img"><b>Allice Mingham</b>Los Angeles</a><span class="status online"></span></li>
        <li class="member"><a href="#"><img src="/wqac2.0/Public/Home/img/profileimg2.png" alt="img"><b>James Throwing</b>Las Vegas</a><span class="status busy"></span></li>
        <li class="member"><a href="#"><img src="/wqac2.0/Public/Home/img/profileimg3.png" alt="img"><b>Fred Stonefield</b>New York</a><span class="status away"></span></li>
        <li class="member"><a href="#"><img src="/wqac2.0/Public/Home/img/profileimg4.png" alt="img"><b>Chris M. Johnson</b>California</a><span class="status online"></span></li>
      </ul>

      <div class="gn-title">OFFLINE MEMBERS (8)</div>
     <ul class="group">
        <li class="member"><a href="#"><img src="/wqac2.0/Public/Home/img/profileimg5.png" alt="img"><b>Allice Mingham</b>Los Angeles</a><span class="status offline"></span></li>
        <li class="member"><a href="#"><img src="/wqac2.0/Public/Home/img/profileimg6.png" alt="img"><b>James Throwing</b>Las Vegas</a><span class="status offline"></span></li>
      </ul>

      <form class="search">
        <input type="text" class="form-control" placeholder="Search a Friend...">
      </form>
    </div>
    <!-- End Chat -->

  </div>

</div>
<!-- END SIDEPANEL -->
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
<script type="text/javascript" src="/wqac2.0/Public/Home/js/plugins.js"></script>

</body>
</html>