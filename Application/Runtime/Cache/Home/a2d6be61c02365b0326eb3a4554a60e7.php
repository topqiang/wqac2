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
<div class="content" style="">
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
 <div class="box-cen padding-b-20">
 	<img src="/wqac2.0/Public/Home/img/logo1.png" class="disb macen"/>
 </div>
<div class="container-default ovhid" style="min-height: 400px;">
	<div class="ovhid bgfff padding-20 fl" style="max-width: 20%;margin-bottom: 20px;border: 1px solid #e5e5e5;border-radius: 4px;">
		<link rel="stylesheet" type="text/css" href="/wqac2.0/Public/Home/css/bss.css"/>
<script src="/wqac2.0/Public/Home/js/jquery.min.js"></script>
	<div class="bug clearfix">
		<div class="project-list" style="width: 240px;">
		<!--<?php if((cookie('M_TYPE') == 2)): ?><div class="projectb">
				<a href="<?php echo U('Bss/addBug');?>/p_id/<?php echo ($pid); ?>" target="_blank" class="sub-bug">提交BUG</a>
			</div><?php endif; ?>
		<?php if(is_array($project_list)): $i = 0; $__LIST__ = $project_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="projectb">
				<h1>
					<i class="dian"></i>
					<i class="line"></i>
					<span><?php echo ($vo["p_name"]); ?><em class="num"><?php if($vo['pro_is_show'] == 0): ?>【无】<?php else: ?>【<?php echo ($vo["pro_is_show"]); ?>】<?php endif; ?></em></span>
				</h1>
				<div class="bug-list">
					<ul>
						<?php if(is_array($vo["new_con_arr"])): $i = 0; $__LIST__ = $vo["new_con_arr"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?><li><i class="dian"></i><i class="iw"></i>
								<a href="<?php echo U('Bss/main',array('p_id'=>$vo['p_id'],'b_tem_id'=>$voo['new_con_id']));?>" target="main">
									<span><?php echo ($voo["new_con_name"]); ?><em class="num"><?php if($voo['bug_num'] == 0): else: ?>【<?php echo ($voo["bug_num"]); ?>】<?php endif; ?></em></span>
								</a>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>-->
		<div class="projectb">
				<h1>
					<i class="dian"></i>
					<i class="line"></i>
					<span>淘米公社<em class="num">【无】</em></span>
				</h1>
				<div class="bug-list">
					<ul>
						<li>
							<i class="dian"></i><i class="iw"></i>
							<a href="combug.html">
								<span>用户Wap端<em class="num"></em></span>
							</a>
						</li>
						<li>
							<i class="dian"></i><i class="iw"></i>
							<a href="combug.html">
								<span>用户Android手机端<em class="num"></em></span>
							</a>
						</li>
						<li>
							<i class="dian"></i><i class="iw"></i>
							<a href="combug.html">
								<span>用户IOS手机端<em class="num"></em></span>
							</a>
						</li>
						<li>
							<i class="dian"></i><i class="iw"></i>
							<a href="combug.html">
								<span>商家管理后台WebPC端<em class="num"></em></span>
							</a>
						</li>
						<li>
							<i class="dian"></i><i class="iw"></i>
							<a href="combug.html">
								<span>商家Android手机端<em class="num"></em></span>
							</a>
						</li>
						<li>
							<i class="dian"></i><i class="iw"></i>
							<a href="combug.html">
								<span>商家IOS手机端<em class="num"></em></span>
							</a>
						</li>
						<li>
							<i class="dian"></i><i class="iw"></i>
							<a href="combug.html">
								<span>总后台管理WebPC端<em class="num"></em></span>
							</a>
						</li>
					</ul>
				</div>
			</div><div class="projectb">
				<h1>
					<i class="dian"></i>
					<i class="line"></i>
					<span>蔬果果<em class="num">【无】</em></span>
				</h1>
				<div class="bug-list">
					<ul>
											</ul>
				</div>
			</div><div class="projectb">
				<h1>
					<i class="dian"></i>
					<i class="line"></i>
					<span>心生活<em class="num">【无】</em></span>
				</h1>
				<div class="bug-list">
					<ul>
											</ul>
				</div>
			</div><div class="projectb">
				<h1>
					<i class="dian"></i>
					<i class="line"></i>
					<span>同城易购<em class="num">【无】</em></span>
				</h1>
				<div class="bug-list">
					<ul>
											</ul>
				</div>
			</div><div class="projectb">
				<h1>
					<i class="dian"></i>
					<i class="line"></i>
					<span>大城外卖<em class="num">【无】</em></span>
				</h1>
				<div class="bug-list">
					<ul>
											</ul>
				</div>
			</div><div class="projectb">
				<h1>
					<i class="dian"></i>
					<i class="line"></i>
					<span>食品供应链<em class="num">【无】</em></span>
				</h1>
				<div class="bug-list">
					<ul>
											</ul>
				</div>
			</div><div class="projectb">
				<h1>
					<i class="dian"></i>
					<i class="line"></i>
					<span>海猿网<em class="num">【无】</em></span>
				</h1>
				<div class="bug-list">
					<ul>
											</ul>
				</div>
			</div><div class="projectb">
				<h1>
					<i class="dian"></i>
					<i class="line"></i>
					<span>错题周星星<em class="num">【无】</em></span>
				</h1>
				<div class="bug-list">
					<ul>
											</ul>
				</div>
			</div>	
		</div>
	</div>


<script>
$(function(){
	var tit = $('.projectb h1');
	tit.click(function(){
		var $this = $(this)
		var _this = $(this).next();
		if($this.find('.dian').hasClass('on')){
			$this.find('.dian').removeClass('on');
		}else{
			$this.parents().siblings().find('.dian').removeClass('on');
			$this.find('.dian').addClass('on').parents().siblings().find('.dian').removeClass('on');
		}
		if(_this.hasClass('current')){
			_this.removeClass('current');
			$this.find('.line').hide();
		}else{
			$this.parents().find('.bug-list').removeClass('current');
			$this.find('.line').hide().parents().siblings().find('.line').hide();
			_this.addClass('current');
			$this.find('.line').show();
		}
	});
	$('.bug-list li span').click(function(){
		var $this = $(this)
		var _this = $(this).next();
		if($this.siblings('.dian').hasClass('on')){
			$this.siblings('.dian').removeClass('on');
		}else{
			$this.siblings('.dian').addClass('on');
		}
		if(_this.hasClass('on')){
			_this.removeClass('on');
		}else{
			$this.parent().siblings().find('.dian').removeClass('on');
			$this.parent().siblings().find('.bug-list-m').removeClass('on');
			_this.addClass('on');
		}
	});
});
</script>

	</div>
	<div class="ovhid bgfff padding-20 fr" style="width: 80%;margin-bottom: 20px;margin-right:20px;border: 1px solid #e5e5e5;border-radius: 4px;">
		<table class="table table-hover color4-bg">
			<thead>
				<tr>
					<th>项目名称</th>
					<th>待处理</th>
					<th>待测试</th>
					<th>未完成</th>
					<th>已完成</th>
					<th>总问题</th>
				</tr>
			</thead>
			<tr>
				<td class="color1">食品供应链</td>
				<td class="color10">0</td>
				<td class="color9">0</td>
				<td class="color10">0</td>
				<td class="color5">0</td>
				<td class="color7">0</td>
			</tr>
			<tr>
				<td class="color1">同城易购</td>
				<td class="color10">0</td>
				<td class="color9">0</td>
				<td class="color10">0</td>
				<td class="color5">0</td>
				<td class="color7">0</td>
			</tr>
			<tr>
				<td class="color1">帝兼职</td>
				<td class="color10">0</td>
				<td class="color9">0</td>
				<td class="color10">0</td>
				<td class="color5">0</td>
				<td class="color7">0</td>
			</tr>
		</table>
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
<script type="text/javascript">

</script>
</body>
</html>