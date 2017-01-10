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
    <h1 class="title">Charts</h1>
      <ol class="breadcrumb">
        <li><a href="index.html">Dashboard</a></li>
        <li class="active">Charts</li>
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
      <span class="icon color8-bg"><i class="fa fa-bar-chart"></i></span>
      <h1>Charts</h1>
      <h4>Kode coming with dozens charts. <br>All of responsive and easy to edit.</h4>
    </div>

    <div class="col-lg-4 col-md-6">
      <ul class="list-unstyled list">
        <li><i class="fa fa-check"></i><a href="http://code.shutterstock.com/rickshaw/" target="_blank">Rickshaw</a><li>
        <li><i class="fa fa-check"></i><a href="http://gionkunz.github.io/chartist-/wqac2.0/Public/Home/js/index.html" target="_blank">Chartist</a><li>
        <li><i class="fa fa-check"></i><a href="http://www.flotcharts.org/" target="_blank">Flot Charts</a><li>
        <li><i class="fa fa-check"></i><a href="http://rendro.github.io/easy-pie-chart/" target="_blank">Easy Pie Chart</a><li>
        <li><i class="fa fa-check"></i><a href="http://omnipotent.net/jquery.sparkline/#s-about" target="_blank">Sparklines</a><li>
      </ul>
    </div>

  </div>
  <!-- End Presentation -->


 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTAINER -->
<div class="container-padding">


  <!-- Start Flot Chart -->
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          Rickshaw
        </div>

            <div class="panel-body">
              <h4>Rickshaw is a JavaScript toolkit for creating interactive time series graphs.</h4>
              <p>Rickshaw provides the elements you need to create interactive graphs: renderers, legends, hovers, range selectors, etc. You put the pieces together</p>
              <p><b>Rickshaw:</b> A JavaScript toolkit for creating interactive time-series graphs<p>
              <a href="http://code.shutterstock.com/rickshaw/" target="_blank" class="btn btn-sm">Official documentation</a>
            </div>

      </div>
    </div>

    <!-- Start Chart -->
    <div class="col-lg-4 col-md-6">
      <div class="panel panel-default">
        <div class="panel-title">
          Lines and Toggling
        </div>
            <div class="panel-body">
              
                <div id="rickshaw-lines"></div>

            </div>
      </div>
    </div>
    <!-- End Chart -->

    <!-- Start Chart -->
    <div class="col-lg-4 col-md-6">
      <div class="panel panel-default">
        <div class="panel-title">
          Bars
        </div>
            <div class="panel-body">
              <div id="rickshaw-bars"></div>
            </div>
      </div>
    </div>
    <!-- End Chart -->

    <!-- Start Chart -->
    <div class="col-lg-4 col-md-6">
      <div class="panel panel-default">
        <div class="panel-title">
          Fixed
        </div>
            <div class="panel-body">
              <div id="rickshaw-fixed"></div>
            </div>
      </div>
    </div>
    <!-- End Chart -->

    <!-- Start Chart -->
    <div class="col-lg-4 col-md-6">
      <div class="panel panel-default">
        <div class="panel-title">
          Scaled
        </div>
            <div class="panel-body">
              <div id="rickshaw-scaled"></div>
            </div>
      </div>
    </div>
    <!-- End Chart -->


    <!-- Start Chart -->
    <div class="col-lg-4 col-md-6">
      <div class="panel panel-default">
        <div class="panel-title">
          Time Scale
        </div>
            <div class="panel-body">
              <div id="rickshaw-timescale"></div>
              <div id="slider"></div>
            </div>
      </div>
    </div>
    <!-- End Chart -->


    <!-- Start Chart -->
    <div class="col-lg-4 col-md-6">
      <div class="panel panel-default">
        <div class="panel-title">
          Gaps
        </div>
            <div class="panel-body">
              <div id="rickshaw-gaps"></div>
            </div>
      </div>
    </div>
    <!-- End Chart -->



    
  </div>
  <!-- End Flot Chart -->


  <!-- Start Chartist -->
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          CHARTIST
        </div>

            <div class="panel-body">
              <h4>Chartist - Simple Responsive Charts</h4>
              <p>You may think that this is just yet an other charting library. But Chartist.js is the product of a community that was disappointed about the abilities provided by other charting libraries. Of course there are hundreds of other great charting libraries but after using them there were always tweaks you would have wished for that were not included.</p>
              <p><b>Chartist:</b> Simple Responsive Charts<p>
              <a href="http://gionkunz.github.io/chartist-/wqac2.0/Public/Home/js/index.html" target="_blank" class="btn btn-sm">Official documentation</a>
            </div>

      </div>
    </div>

    <!-- Start Chart -->
    <div class="col-lg-4 col-md-6">
      <div class="panel panel-default">
        <div class="panel-title">
          Simple Line Chart
        </div>
            <div class="panel-body">
              <div id="chartist-line" class="ct-chart ct-perfect-fourth"></div>
            </div>
      </div>
    </div>
    <!-- End Chart -->
    
    <!-- Start Chart -->
    <div class="col-lg-4 col-md-6">
      <div class="panel panel-default">
        <div class="panel-title">
          Line Scatter Diagram
        </div>
            <div class="panel-body">
              <div id="chartist-line-scatter" class="ct-chart ct-perfect-fourth"></div>
            </div>
      </div>
    </div>
    <!-- End Chart -->
    
    <!-- Start Chart -->
    <div class="col-lg-4 col-md-6">
      <div class="panel panel-default">
        <div class="panel-title">
          Line Chart with Area
        </div>
            <div class="panel-body">
              <div id="chartist-line-area" class="ct-chart ct-perfect-fourth"></div>
            </div>
      </div>
    </div>
    <!-- End Chart -->
    
    <!-- Start Chart -->
    <div class="col-lg-4 col-md-6">
      <div class="panel panel-default">
        <div class="panel-title">
          Bi-polar
        </div>
            <div class="panel-body">
              <div id="chartist-line-bipolar" class="ct-chart ct-perfect-fourth"></div>
            </div>
      </div>
    </div>
    <!-- End Chart -->
    
    <!-- Start Chart -->
    <div class="col-lg-4 col-md-6">
      <div class="panel panel-default">
        <div class="panel-title">
          Overlapping Bars
        </div>
            <div class="panel-body">
              <div id="chartist-bar-overlap" class="ct-chart ct-perfect-fourth"></div>
            </div>
      </div>
    </div>
    <!-- End Chart -->
    
    <!-- Start Chart -->
    <div class="col-lg-4 col-md-6">
      <div class="panel panel-default">
        <div class="panel-title">
          Horizontal Bar
        </div>
            <div class="panel-body">
              <div id="chartist-horizontal-bar" class="ct-chart ct-perfect-fourth"></div>
            </div>
      </div>
    </div>
    <!-- End Chart -->
    
    <!-- Start Chart -->
    <div class="col-lg-4 col-md-6">
      <div class="panel panel-default">
        <div class="panel-title">
          Simple Pie Chart
        </div>
            <div class="panel-body">
              <div id="chartist-pie" class="ct-chart ct-perfect-fourth"></div>
            </div>
      </div>
    </div>
    <!-- End Chart -->
    
    <!-- Start Chart -->
    <div class="col-lg-4 col-md-6">
      <div class="panel panel-default">
        <div class="panel-title">
          Gauge Chart
        </div>
            <div class="panel-body">
              <div id="chartist-gauge" class="ct-chart ct-perfect-fourth"></div>
            </div>
      </div>
    </div>
    <!-- End Chart -->

  </div>
  <!-- End Chartist -->


  <!-- Start Flot Chart -->
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          FLOT CHARTS
        </div>

            <div class="panel-body">
              <h4>Flot is a pure JavaScript plotting library for jQuery, with a focus on simple usage, attractive looks and interactive features.</h4>
              <p>Here are some examples for Flot, the Javascript charting library for jQuery:</p>
              <p><b>Flot:</b> Attractive JavaScript plotting for jQuery<p>
              <a href="http://www.flotcharts.org/" target="_blank" class="btn btn-sm">Official documentation</a>
            </div>

      </div>
    </div>

    <!-- Start Chart -->
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-title">
          Real-time Chart
        </div>
            <div class="panel-body">
              <div class="flotchart-container">
                <div id="realtime" class="flotchart-placeholder"></div>
              </div>
            </div>
      </div>
    </div>
    <!-- End Chart -->

    <!-- Start Chart -->
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-title">
          Setting various options
        </div>
            <div class="panel-body">
              <div class="flotchart-container">
                <div id="setting-various-options" class="flotchart-placeholder"></div>
              </div>
            </div>
      </div>
    </div>
    <!-- End Chart -->

    <!-- Start Chart -->
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-title">
          Multiple axes
        </div>
            <div class="panel-body">
              <div class="flotchart-container">
                <div id="multiple" class="flotchart-placeholder"></div>
              </div>
            </div>
      </div>
    </div>
    <!-- End Chart -->

    <!-- Start Chart -->
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-title">
          Stacking Bars
        </div>
            <div class="panel-body">
              <div class="flotchart-container">
                <div id="stacked" class="flotchart-placeholder"></div>
              </div>
            </div>
      </div>
    </div>
    <!-- End Chart -->
    
  </div>
  <!-- End Flot Chart -->

  


  
  <!-- Start Row -->
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default panel">

        <div class="panel-title">Easy Pie Chart</div>

            <div class="panel-body">

              <div class="row margin-0">
                <div class="col-md-12">
                  <h4>Easy Pie Chart</h4>
                  <p>Easy pie chart is a jQuery plugin that uses the canvas element to render simple pie charts for single values. These charts are highly customizable, very easy to implement, scale to the resolution of the display of the client to provide sharp charts even on retina displays, and use requestAnimationFrame for smooth animations on modern devices.</p>
                  <p><b>Easy Pie Chart</b> by rendro</p>
                  <a href="http://rendro.github.io/easy-pie-chart/" target="_blank" class="btn btn-sm">Official documentation</a>
               </div>
              </div>

              <hr>

              <div class="row margin-0">

                <!-- Start Easypie -->
                <div class="col-md-6">
                  <h4>Basic</h4>
                    <div class="easypie" data-percent="86"><span>90</span>Orders</div>
                    <div class="easypie" data-percent="11"><span>29</span>Products</div>
                    <div class="easypie" data-percent="50"><span>912</span>Comments</div>
                </div>
                <!-- End Easypie -->


              </div>


            </div>
      </div>
    </div>
  </div>
  <!-- End Row -->




  
  <!-- Start Row -->
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default panel">

        <div class="panel-title">Sparklines</div>

            <div class="panel-body">

              <div class="row margin-0">
                <div class="col-md-12">
                  <h4>Tiny but Amazing</h4>
                  <p>This jQuery plugin generates sparklines (small inline charts) directly in the browser using data supplied either inline in the HTML, or via javascript.</p>
                  <p><b>jQuery Sparklines</b></p>
                  <a href="http://omnipotent.net/jquery.sparkline/#s-about" target="_blank" class="btn btn-sm">Official documentation</a>
               </div>
              </div>

              <hr>

              <div class="row margin-0">

                <div class="col-md-4">
                  <h4>Line</h4>
                  <span class="sparkline-line"></span>
                </div>

                <div class="col-md-4">
                  <h4>Bar</h4>
                  <span class="sparkline-bar"></span>
                </div>

                <div class="col-md-4">
                  <h4>Pie</h4>
                  <span class="sparkline-pie"></span>
                </div>

              </div>


            </div>
      </div>
    </div>
  </div>
  <!-- End Row -->




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

<!-- ================================================
Flot Chart
================================================ -->
<!-- main file -->
<script type="text/javascript" src="/wqac2.0/Public/Home/js/flot-chart/flot-chart.js"></script>
<!-- time.js -->
<script type="text/javascript" src="/wqac2.0/Public/Home/js/flot-chart/flot-chart-time.js"></script>
<!-- stack.js -->
<script type="text/javascript" src="/wqac2.0/Public/Home/js/flot-chart/flot-chart-stack.js"></script>
<!-- pie.js -->
<script type="text/javascript" src="/wqac2.0/Public/Home/js/flot-chart/flot-chart-pie.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="/wqac2.0/Public/Home/js/flot-chart/flot-chart-plugin.js"></script>

<!-- ================================================
Chartist
================================================ -->
<!-- main file -->
<script type="text/javascript" src="/wqac2.0/Public/Home/js/chartist/chartist.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="/wqac2.0/Public/Home/js/chartist/chartist-plugin.js"></script>

<!-- ================================================
Easy Pie Chart
================================================ -->
<!-- main file -->
<script type="text/javascript" src="/wqac2.0/Public/Home/js/easypiechart/easypiechart.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="/wqac2.0/Public/Home/js/easypiechart/easypiechart-plugin.js"></script>

<!-- ================================================
Sparkline
================================================ -->
<!-- main file -->
<script type="text/javascript" src="/wqac2.0/Public/Home/js/sparkline/sparkline.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="/wqac2.0/Public/Home/js/sparkline/sparkline-plugin.js"></script>

<!-- ================================================
Rickshaw
================================================ -->
<!-- d3 -->
<script src="/wqac2.0/Public/Home/js/rickshaw/d3.v3.js"></script>
<!-- main file -->
<script src="/wqac2.0/Public/Home/js/rickshaw/rickshaw.js"></script>
<!-- demo codes -->
<script src="/wqac2.0/Public/Home/js/rickshaw/rickshaw-plugin.js"></script>




</body>
</html>