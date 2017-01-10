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
<div class="calendar-layout clearfix">

  <div class="col-md-2">
    <div id='external-events'>
      <h4 class="font-title color10"><i class="fa fa-arrows"></i>食品供应链工作计划</h4>
      <p><i class="fa fa-plus-circle color5 f-size-21 float-r"></i>新建任务拖到日历文档中</p>
      <div class='fc-event' canedi="true">注册接口</div>
      <div class='fc-event' canedi="true">修改收货地址接口</div>
      <div class='fc-eventbe' canedi="true">新建任务</div>
    </div>
  </div>

  <div class="col-md-10">
    <div id='calendar'></div>
  </div>

    




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
<div class="dis-n addpro">
	<div class="title text-center f-size-20 ih50">日志提交</div>
		<div class="col-sm-12 margin-b-10">
			<input class="form-control logtitle" type="text" placeholder="请输入任务标题" />
		</div>
		<div class="col-sm-12">
			<textarea class="form-control" type="text" placeholder="请输入备注信息" style="height: 150px;"></textarea>
		</div>
</div>

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
jQuery UI
================================================ -->
<script type="text/javascript" src="/wqac2.0/Public/Home/js/jquery-ui/jquery-ui.min.js"></script>

<!-- ================================================
Moment.js
================================================ -->
<script type="text/javascript" src="/wqac2.0/Public/Home/js/moment/moment.min.js"></script>

<!-- ================================================
Full Calendar
================================================ -->
<script type="text/javascript" src="/wqac2.0/Public/Home/js/full-calendar/fullcalendar.js"></script>
<!-- ================================================
Sweet Alert
================================================ -->
<script src="/wqac2.0/Public/Home/js/sweet-alert/sweet-alert.min.js"></script>
<script src="/wqac2.0/Public/Home/js/layer/layer.js"></script>
<script>
 var beforeText="新建任务";
  $(document).ready(function() {
    

    /* initialize the external events
    -----------------------------------------------------------------*/
    $('#external-events .fc-event').each(function() {

      // store data so the calendar knows to render an event upon drop
      $(this).data('event', {
        title: $.trim($(this).text()), // use the element's text as the event title
        stick: true // maintain when user navigates (see docs on the renderEvent method)
      });

      // make the event draggable using jQuery UI
      $(this).draggable({
        zIndex: 999,
        revert: true,      // will cause the event to go back to its
        revertDuration: 0  //  original position after the drag
      });

    });

    /* initialize the calendar
    -----------------------------------------------------------------*/
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek,basicDay'
      },
      buttonText:{today:'今天',month:'月视图',week:'周视图',day:'天视图'},
      monthNames:['1月', '2月', '3月', '4月', '5月', '6月', '7月','8月', '9月', '10月', '11月', '12月'],
 	  	dayNames:['星期日', '星期一', '星期二', '星期三','星期四', '星期五', '星期六'],
 			dayNamesShort:['日', '一', '二', '三','四', '五', '六'],
      defaultDate: '2016-07-30',
      editable: true,
      droppable: true, // this allows things to be dropped onto the calendar
      eventLimit: true,// allow "more" link when too many events
      events: [
        {
          title: '完成轮播图设计',
          start: '2016-07-01',
          color: '#9A80B9'
        },
        {
          title: '完成导航条设计',
          start: '2016-07-07',
          end: '2016-07-10',
          color: '#EF4836'
        },
        {
          id: 999,
          title: '完成商品列表设计',
          start: '2016-07-09'
        },
        {
          id: 999,
          title: '完后登录注册页面设计',
          start: '2016-07-16'
        },
        {
          title: '完成完全中心设计',
          start: '2016-07-3',
          end: '2016-07-5',
          color: '#E99844'
        },
        {
          title: '完成银行卡绑定页面',
          start: '2016-07-12',
          end: '2016-07-12'
        },
        {
          title: '飞行',
          start: '2016-07-12'
        },
        {
          title: '设计',
          start: '2016-07-12'
        },
        {
          title: '讨论',
          start: '2016-07-12'
        },
        {
          title: '开会',
          start: '2016-07-12'
        },
        {
          title: '完成弹出层设计',
          start: '2016-07-13',
          color: '#26A65B',
        },
        {
          title: '完成商品管理页面设计',
          start: '2016-07-22',
          color:'#D2527F',
        }
      ],
      eventClick: editorEvent,
    	dayClick: function(date, jsEvent, view, resourceObj) {
        console.log('Date: ' + date.format());
    	},
    	eventDragStart:function (event, jsEvent, ui, view){
    		console.log("开始"+event.start.format());
    	},
    	eventDragStop:function (event, jsEvent, ui, view){
    		console.log("结束"+event.start.format());
    	},
    	eventDrop:function(event, delta, revertFunc){
    		console.log(event.title + " was dropped on " + event.start.format());
    	}
    });
});
	function onblur() {
		$(this).attr("contenteditable","false");
		if($(this).text() == "" || $(this).text() == "新建任务"){
			if(beforeText != "新建任务"){
				$(this).removeClass("fc-eventbe").addClass("fc-event");
			}
			$(this).text(beforeText);
			return false;
		}
		$(this).data('event', {
			id:9,
	    title: $.trim($(this).text()), // use the element's text as the event title
	    stick: true // maintain when user navigates (see docs on the renderEvent method)
	  });
	  $('#calendar').fullCalendar('removeEvents',9);
	  $(this).removeClass("fc-eventbe").addClass("fc-event");
		if($(".fc-eventbe").size() ==0){
			// make the event draggable using jQuery UI
			$(this).draggable({
			    zIndex: 999,
			    revert: true,      // will cause the event to go back to its
				revertDuration: 0  //  original position after the drag
			});
			$(this).after('<div class="fc-eventbe" canedi="true">新建任务</div>');
			$("[canedi='true']").last().on('dblclick',function () {
				$(this).attr({"contenteditable":"true"}).trigger("focus");
				$(this).on('focusout',onblur);
			});
		}
	}
	$(function () {
		$("[canedi='true']").on('dblclick',function () {
			console.log($(this).data('event'));
			beforeText=$(this).text();
			$(this).attr({"contenteditable":"true"}).removeClass("fc-event").addClass("fc-eventbe").trigger("focus");
			$(this).on('blur',onblur);
		});
		$(".fa-plus-circle").on('click',function(){
			beforeText="新建任务";
			$(".fc-eventbe").attr({"contenteditable":"true"}).text("").trigger("focus");
			$(".fc-eventbe").on('blur',onblur);
		});
	});
	function editorEvent(event, element) {
			//$('#calendar').fullCalendar('updateEvent', event);
			//alert(event.id+"已完成");
			//var textval=prompt("请输入备注信息：");
				console.log("开始时间"+event.start+"结束时间"+event.end);
				var eventid=event.id;
				if(event.flag){
					swal("已完成!", "该任务已完成，请勿重复操作！", "error");
				}else{
					layer.open({
		        title: false,
		        content: $(".addpro"),
		        type:1,
		        area:['400px','300px'],
		        btn: ['已完成', '未完成','删除','修改'],
		        yes: function(index, layero){
					    layer.closeAll();
					    swal("已完成!", "恭喜您今天任务顺利完成！", "success");
					    event.color="#f00";
					    event.flag=true;
					    $('#calendar').fullCalendar('updateEvent', event);
					  },btn2: function(index, layero){
					    console.log("未完成");
					  },btn3:function(index,layero){
					  	$('#calendar').fullCalendar('removeEvents', eventid);
					  	swal("已删除!", "该任务删除成功！", "success");
					  },btn4:function(index,layero){
					  	event.title = $(".logtitle").val();
					  	$('#calendar').fullCalendar('updateEvent', event);
					  	swal("已修改!", "该任务修改成功！", "success");
					  	$(".logtitle").val("");
					  }
		      });
				}
    	}
</script>



</body>
</html>