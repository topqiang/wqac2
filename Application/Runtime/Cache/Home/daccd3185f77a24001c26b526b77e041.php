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
	<style>
		.count1{margin-bottom: 20px;background: #fff;}
		.tb{padding-top: 20px;}
	</style>
	
	<div class="margin-t-20 count1 ovhid">
	    <div class="col-md-12">
	        <div id="gantt-container" style="width:100%;height:380px"></div>
	    </div>
	</div>
	
	<div class="count1 ovhid">
		<div class="col-md-7">
			<div id="container" style="width:100%;height:380px"></div>
		</div>
		<div class="col-md-5">
			<h3>各部门进度时间表</h3>
			<div class="tb">
			<table class="table table-hover">
                    <thead>
                        <tr>
                            <th>职位名称</th>
                            <th>开始时间</th>
                            <th>结束时间</th>
                            <th>工作日</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                            <td>UI</td>
                            <td>2016-03-25</td>
                            <td>2016-04-14</td>
                            <td>13</td>
                        </tr><tr>
                            <td>HTML</td>
                            <td>2016-05-04</td>
                            <td>2016-08-26</td>
                            <td>25</td>
                        </tr><tr>
                            <td>PHP</td>
                            <td>2016-04-07</td>
                            <td>2016-08-26</td>
                            <td>85</td>
                        </tr><tr>
                            <td>Android</td>
                            <td>2016-03-31</td>
                            <td>2016-06-23</td>
                            <td>24</td>
                        </tr><tr>
                            <td>IOS</td>
                            <td>2016-03-29</td>
                            <td>2016-08-13</td>
                            <td>59</td>
                        </tr>           </tbody>
                    <tfoot>
                        <tr style="color:black">
                            <td><b>总工作日</b></td>
                            <td><em>206</em>工作日</td>
                            <td><b>项目状态</b></td>
                            <td>
                            <em class="tips" style="color:red">进行中</em>
                                                    </td>
                        </tr>
                    </tfoot>
                </table>	
				
				
			<!--<table class="am-table am-table-bordered">
				<thead>
					<tr>
						<th>职位名称</th>
						<th>开始时间</th>
						<th>结束时间</th>
						<th>工作日</th>
					</tr>
				</thead>
				<tbody>
				<!--<?php if(is_array($position)): $i = 0; $__LIST__ = $position;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$po): $mod = ($i % 2 );++$i;?><tr>
						<td><?php echo ($po['title']); ?></td>
						<td><?php echo ($po['start_time']); ?></td>
						<td><?php echo ($po['end_time']); ?></td>
						<td><?php echo ($po['num']); ?></td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
				<tfoot>
					<tr style="color:black">
						<td><b>总工作日</b></td>
						<td><em><?php echo ($total); ?></em>工作日</td>
						<td><b>项目状态</b></td>
						<td>
						<?php if(($pjd['p_g'] == 1)): ?><em class="tips" style="color:red">进行中</em>
	                        <?php elseif(($pjd['p_g'] == 2)): ?>
	                        <em class="tips" style="color:bule">修改中</em>
	                        <?php elseif(($pjd['p_g']) == 3): ?>
	                        <em class="tips" style="color:green">已完成</em>
	                        <?php else: ?>
	                        <span class="tips">未开始</span><?php endif; ?>
						</td>
					</tr>
				</tfoot>
			</table>-->
			</div>
		</div>
	
	    <?php if($id_see == 1 || $id_see == 16 ): ?><div class="col-md-5" style="width:100%;">
	            <h1>项目消费统计表</h1>
	            <div class="tb">
	                <table class="table table-bordered">
	                    <thead>
	                    <tr>
	                        <th>人员名称</th>
	                        <th>开始时间</th>
	                        <th>结束时间</th>
	                        <th>工作日</th>
	                        <th>费用</th>
	                    </tr>
	                    </thead>
	                    <tbody>
	                    <?php if(is_array($column)): $i = 0; $__LIST__ = $column;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$po): $mod = ($i % 2 );++$i;?><tr>
	                            <td><?php echo ($po['name']); ?></td>
	                            <td><?php echo ($po['start_time']); ?></td>
	                            <td><?php echo ($po['end_time']); ?></td>
	                            <td><?php echo ($po['num']); ?></td>
	                            <td><?php echo ($po['total_money']); ?>元</td>
	                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
	                    </tbody>
	                    <tfoot>
	                    <tr style="color:black">
	                        <td><b>总工作日</b></td>
	                        <td><em><?php echo ($total); ?></em>工作日</td>
	                        <td></td>
	                        <td><b>总支出</b></td>
	                        <td>
	                            <?php echo ($total_m); ?>元|||||<?php echo ($lv); ?>%
	                        </td>
	                    </tr>
	                    </tfoot>
	                </table>
	            </div>
	        </div><?php endif; ?>
	
	
	</div>
	
	<div class="count1 ovhid">
		<div class="col-md-12">
			<div id="container1" style="width:100%;height:380px"></div>
		</div>
	</div>
	
	<div class="count1 ovhid">
		<div class="col-md-12">
			<div id="line-container" style="width:100%;height:380px"></div>
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
<script type="text/javascript" src="/wqac2.0/Public/Home/js/Highcharts/highcharts.js"></script>
<script type="text/javascript">
// Define tasks
var tasks = [{name:"理论进度",intervals:[{from:Date.UTC(2016,02,24),to:Date.UTC(2016,04,15)}]},{name:"马文晶",intervals:[{from: Date.UTC(2016,02,28),to: Date.UTC(2016,02,28)},{from: Date.UTC(2016,03,01),to: Date.UTC(2016,03,01)},{from: Date.UTC(2016,03,06),to: Date.UTC(2016,03,07)},{from: Date.UTC(2016,03,09),to: Date.UTC(2016,03,09)},{from: Date.UTC(2016,03,11),to: Date.UTC(2016,03,11)},{from: Date.UTC(2016,03,13),to: Date.UTC(2016,03,14)}]},{name:"王晓翠",intervals:[{from: Date.UTC(2016,02,25),to: Date.UTC(2016,02,25)},{from: Date.UTC(2016,02,28),to: Date.UTC(2016,02,28)},{from: Date.UTC(2016,03,12),to: Date.UTC(2016,03,12)}]},{name:"阚自强",intervals:[{from: Date.UTC(2016,05,25),to: Date.UTC(2016,05,25)},{from: Date.UTC(2016,05,27),to: Date.UTC(2016,06,02)},{from: Date.UTC(2016,06,04),to: Date.UTC(2016,06,07)},{from: Date.UTC(2016,06,12),to: Date.UTC(2016,06,13)},{from: Date.UTC(2016,06,18),to: Date.UTC(2016,06,18)},{from: Date.UTC(2016,06,23),to: Date.UTC(2016,06,23)},{from: Date.UTC(2016,06,25),to: Date.UTC(2016,06,25)},{from: Date.UTC(2016,06,28),to: Date.UTC(2016,06,28)},{from: Date.UTC(2016,07,26),to: Date.UTC(2016,07,26)}]},{name:"杨新月",intervals:[{from: Date.UTC(2016,04,04),to: Date.UTC(2016,04,04)},{from: Date.UTC(2016,04,07),to: Date.UTC(2016,04,07)},{from: Date.UTC(2016,04,11),to: Date.UTC(2016,04,13)},{from: Date.UTC(2016,05,06),to: Date.UTC(2016,05,07)}]},{name:"刘柱",intervals:[{from: Date.UTC(2016,05,07),to: Date.UTC(2016,05,07)},{from: Date.UTC(2016,06,13),to: Date.UTC(2016,06,13)},{from: Date.UTC(2016,06,15),to: Date.UTC(2016,06,15)},{from: Date.UTC(2016,06,18),to: Date.UTC(2016,06,19)},{from: Date.UTC(2016,06,23),to: Date.UTC(2016,06,23)},{from: Date.UTC(2016,06,25),to: Date.UTC(2016,06,25)},{from: Date.UTC(2016,06,28),to: Date.UTC(2016,06,30)},{from: Date.UTC(2016,07,02),to: Date.UTC(2016,07,02)},{from: Date.UTC(2016,07,09),to: Date.UTC(2016,07,13)},{from: Date.UTC(2016,07,20),to: Date.UTC(2016,07,20)},{from: Date.UTC(2016,07,22),to: Date.UTC(2016,07,23)},{from: Date.UTC(2016,07,26),to: Date.UTC(2016,07,26)}]},{name:"苟萍萍",intervals:[{from: Date.UTC(2016,03,13),to: Date.UTC(2016,03,13)},{from: Date.UTC(2016,03,18),to: Date.UTC(2016,03,20)},{from: Date.UTC(2016,04,09),to: Date.UTC(2016,04,14)},{from: Date.UTC(2016,04,16),to: Date.UTC(2016,04,17)},{from: Date.UTC(2016,04,19),to: Date.UTC(2016,04,21)},{from: Date.UTC(2016,05,20),to: Date.UTC(2016,05,21)}]},{name:"孙晓萌",intervals:[{from: Date.UTC(2016,03,07),to: Date.UTC(2016,03,09)},{from: Date.UTC(2016,03,11),to: Date.UTC(2016,03,12)},{from: Date.UTC(2016,03,14),to: Date.UTC(2016,03,16)},{from: Date.UTC(2016,03,18),to: Date.UTC(2016,03,22)},{from: Date.UTC(2016,03,25),to: Date.UTC(2016,03,27)},{from: Date.UTC(2016,03,29),to: Date.UTC(2016,03,29)},{from: Date.UTC(2016,04,03),to: Date.UTC(2016,04,07)},{from: Date.UTC(2016,04,09),to: Date.UTC(2016,04,14)},{from: Date.UTC(2016,04,16),to: Date.UTC(2016,04,21)},{from: Date.UTC(2016,04,23),to: Date.UTC(2016,04,27)},{from: Date.UTC(2016,05,07),to: Date.UTC(2016,05,07)},{from: Date.UTC(2016,05,17),to: Date.UTC(2016,05,18)},{from: Date.UTC(2016,05,22),to: Date.UTC(2016,05,25)},{from: Date.UTC(2016,05,27),to: Date.UTC(2016,05,27)},{from: Date.UTC(2016,06,06),to: Date.UTC(2016,06,06)}]},{name:"刘磊",intervals:[{from: Date.UTC(2016,03,02),to: Date.UTC(2016,03,02)},{from: Date.UTC(2016,03,08),to: Date.UTC(2016,03,08)},{from: Date.UTC(2016,03,11),to: Date.UTC(2016,03,11)},{from: Date.UTC(2016,03,14),to: Date.UTC(2016,03,16)},{from: Date.UTC(2016,03,20),to: Date.UTC(2016,03,20)},{from: Date.UTC(2016,03,26),to: Date.UTC(2016,03,26)},{from: Date.UTC(2016,03,28),to: Date.UTC(2016,03,28)},{from: Date.UTC(2016,04,04),to: Date.UTC(2016,04,06)},{from: Date.UTC(2016,04,09),to: Date.UTC(2016,04,09)},{from: Date.UTC(2016,04,11),to: Date.UTC(2016,04,11)},{from: Date.UTC(2016,04,13),to: Date.UTC(2016,04,13)},{from: Date.UTC(2016,04,16),to: Date.UTC(2016,04,17)},{from: Date.UTC(2016,04,19),to: Date.UTC(2016,04,19)},{from: Date.UTC(2016,04,23),to: Date.UTC(2016,04,23)},{from: Date.UTC(2016,05,01),to: Date.UTC(2016,05,01)},{from: Date.UTC(2016,05,03),to: Date.UTC(2016,05,03)},{from: Date.UTC(2016,05,06),to: Date.UTC(2016,05,06)},{from: Date.UTC(2016,05,08),to: Date.UTC(2016,05,08)},{from: Date.UTC(2016,05,23),to: Date.UTC(2016,05,23)}]},{name:"郭一鸣",intervals:[{from: Date.UTC(2016,02,29),to: Date.UTC(2016,03,01)},{from: Date.UTC(2016,03,05),to: Date.UTC(2016,03,09)},{from: Date.UTC(2016,03,11),to: Date.UTC(2016,03,16)},{from: Date.UTC(2016,03,18),to: Date.UTC(2016,03,22)},{from: Date.UTC(2016,03,25),to: Date.UTC(2016,03,29)},{from: Date.UTC(2016,04,03),to: Date.UTC(2016,04,07)},{from: Date.UTC(2016,04,09),to: Date.UTC(2016,04,14)},{from: Date.UTC(2016,04,16),to: Date.UTC(2016,04,21)},{from: Date.UTC(2016,04,23),to: Date.UTC(2016,04,24)},{from: Date.UTC(2016,05,13),to: Date.UTC(2016,05,14)},{from: Date.UTC(2016,06,29),to: Date.UTC(2016,06,29)},{from: Date.UTC(2016,07,01),to: Date.UTC(2016,07,06)},{from: Date.UTC(2016,07,08),to: Date.UTC(2016,07,13)}]}]

// re-structure the tasks into line seriesvar series = [];
var series = [];
$.each(tasks.reverse(), function(i, task) {
    var item = {
        name: task.name,
        data: []
    };
    $.each(task.intervals, function(j, interval) {
        item.data.push({
            x: interval.from,
            y: i,
            label: interval.label,
            from: interval.from,
            to: interval.to
        }, {
            x: interval.to,
            y: i,
            from: interval.from,
            to: interval.to
        });
        // add a null value between intervals
        if (task.intervals[j + 1]) {
            item.data.push(
                    [(interval.to + task.intervals[j + 1].from) / 2, null]
            );
        }
    });
    series.push(item);
});

// create the chart
var chart = new Highcharts.Chart({
    chart: {
        renderTo: 'gantt-container'
    },
    title: {
        text: '【食品供应链】甘特图统计'
    },
    xAxis: {
        type: 'datetime',
        plotLines: [{
            color: 'red',
            width: 2,
            value: Date.UTC(2016,07,29),
            dashStyle:'longdashdot'
        }],
        labels: {
            formatter: function () {
                return Highcharts.dateFormat('%Y-%m-%d', this.value);
            }
        }
    },
    yAxis: {
        tickInterval: 1,
        labels: {
            formatter: function() {
                if (tasks[this.value]) {
                    return tasks[this.value].name;
                }
            }
        },
        startOnTick: false,
        endOnTick: false,
        title: {
            text: 'Activity'
        },
        minPadding: 0.2,
        maxPadding: 0.2
    },
    legend: {
        enabled: false
    },
    tooltip: {
        formatter: function() {
            return '<b>'+ tasks[this.y].name + '</b><br/>' +
                    Highcharts.dateFormat('%Y/%m/%d', this.point.options.from)  +
                    ' - ' + Highcharts.dateFormat('%Y/%m/%d', this.point.options.to);
        }
    },
    plotOptions: {
        line: {
            //linecap:'square',
            lineWidth: 9,
            marker: {
                enabled: false
            },
            dataLabels: {
                enabled: true,
                align: 'left',
                formatter: function() {
                    return this.point.options && this.point.options.label;
                }
            }
        }
    },
    series: series
});

$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: '【食品供应链】各个职位的日志占比'
        },
        tooltip: {
    	    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color: '#000000',
                    connectorColor: '#09c',
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
            }
        },
        series: [{
            type: 'pie',
            name: '占总日志的',
            data: [
            {
                name:'UI',
                y:13,
                color:'#ff6865'
            },
            {
                name:'HTML',
                y:25,
                color:'#ffb518'
            },
            {
                name:'PHP',
                y:85,
                color:'#32b8f7'
            },
            {
                name:'Android',
                y:24,
                color:'#0ebe7e'
            },
            {
                name:'IOS',
                y:59,
                color:'#e42ff0'
            },]
        }]
    });
});	
$(function () { 
    var colors = Highcharts.getOptions().colors,
        categories = ['马文晶','孙晓萌','高铁映','王森',],
        name = '提交日志人员',
        data = [
                {
                    y: 16,
                    color:'#ff6865'
                }, 
            
                {
                    y: 10,
                    color:'#32b8f7'
                }, 
            
                {
                    y: 11,
                    color:'#0ebe7e'
                }, 
            
                {
                    y: 18,
                    color:'#e42ff0'
                }, 
        ];

    function setChart(name, categories, data, color) {
		chart.xAxis[0].setCategories(categories, false);
		chart.series[0].remove(false);
		chart.addSeries({
			name: name,
			data: data,
			color: color || 'white'
		}, false);
		chart.redraw();
    }

    var chart = $('#container1').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: '当前项目下每个人的日志占比统计图'
        },
        subtitle: {
            text: 'Click the columns to view versions. Click again to view brands.'
        },
        xAxis: {
            categories: categories
        },
        yAxis: {
            title: {
                text: 'Total percent log share'
            }
        },
        plotOptions: {
            column: {
                cursor: 'normal',
                dataLabels: {
                    enabled: true,
                    color: colors[0],
                    style: {
                        fontWeight: 'bold'
                    },
                    formatter: function() {
                        return this.y;
                    }
                }
            }
        },
        tooltip: {
            formatter: function() {
                var point = this.point,
                    s = this.x +':<b>'+ this.y +'个日志</b><br/>';
                return s;
            }
        },
        series: [{
            name: name,
            data: data,
            color: 'white'
        }],
        exporting: {
            enabled: false
        }
    })
    .highcharts(); // return chart
});	


/** 折线图 **/
    $(function () {
    $('#line-container').highcharts({
        title: {
            text: '项目参与人员进度曲线图',
            x: -20 //center
        },
        subtitle: {
            text: 'Source: log.genduanzi.com',
            x: -20
        },
        yAxis: {
            title: {
                text: '项目进度百分比(%)'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '%'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{name: '马文晶',
            data:[ 10,30,50,70,90,100,20,40,20,25,60,80,90,100,50,60,]},{name: '孙晓萌',
            data:[ 1,2,3,4,5,6,7,8,9,10,60,80,90,100,50,60,]},{name: '高铁映',
            data:[ 1,3,7,9,11,15,17,21,23,25,27,80,90,100,50,60,]},{name: '王森',
            data:[ 2,4,6,8,10,12,14,16,18,20,22,24,26,28,30,32,34,36,]},]
    });
});
</script>
</body>
</html>