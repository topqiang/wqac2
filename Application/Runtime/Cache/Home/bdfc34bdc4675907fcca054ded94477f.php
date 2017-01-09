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
	<link rel="stylesheet" href="/wqac2.0/Public/Home/css/docs.css">

	<link rel="stylesheet" href="/wqac2.0/Public/Home/css/codemirror.css">
	<script src="/wqac2.0/Public/Home/js/codemirror.js"></script>
	<script src="/wqac2.0/Public/Home/js/markdown.js"></script>
	<script src="/wqac2.0/Public/Home/js/xml.js"></script>
  <style type="text/css">
  	.btn{
  		width: 36px;
  		height: 36px;
  		padding: 0px 0px 0px 0px;
  		text-align: center;
  		line-height: 36px;
  	}
  	.btn .fa{
  		margin-right: 0px;
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
	<div class="btn-toolbar" role="toolbar">
	  <div class="btn-group">
	  	<button type="button" class="btn btn-self" data-toggle="tooltip" data-placement="bottom" title="返回概要"><i class="fa fa-chevron-left"></i></button>
	  </div>
	  <div class="btn-group">
	  	<button type="button" class="btn btn-self savecontent" data-toggle="tooltip" data-placement="bottom" title="保存"><i class="fa fa-save"></i></button>
	  </div>
	  <div class="btn-group">
	  	<button type="button" class="btn btn-self" data-toggle="tooltip" data-placement="bottom" title="撤销"><i class="fa fa-rotate-left"></i></button>
	  	<button type="button" class="btn btn-self" data-toggle="tooltip" data-placement="bottom" title="重做"><i class="fa fa-rotate-right"></i></button>
	  </div>
	  <div class="btn-group">
	  	<button type="button" class="btn btn-self" data-toggle="tooltip" data-placement="bottom" title="标题1">H1</button>
	  	<button type="button" class="btn btn-self" data-toggle="tooltip" data-placement="bottom" title="标题2">H2</button>
	  	<button type="button" class="btn btn-self" data-toggle="tooltip" data-placement="bottom" title="标题3">H3</button>
	  	<button type="button" class="btn btn-self" data-toggle="tooltip" data-placement="bottom" title="标题4">H4</button>
	  </div>
	  <div class="btn-group">
	  	<button type="button" class="btn btn-self" data-toggle="tooltip" data-placement="bottom" title="加粗"><i class="fa fa-bold"></i></button>
	  	<button type="button" class="btn btn-self" data-toggle="tooltip" data-placement="bottom" title="斜体"><i class="fa fa-italic"></i></button>
	  </div>
	  <div class="btn-group">
	  	<button type="button" class="btn btn-self" data-toggle="tooltip" data-placement="bottom" title="无序列表"><i class="fa fa-list-ul"></i></button>
	  	<button type="button" class="btn btn-self" data-toggle="tooltip" data-placement="bottom" title="有序列表"><i class="fa fa-list-ol"></i></button>
	  </div>
	  <div class="btn-group">
	  	<button type="button" class="btn btn-self" data-toggle="tooltip" data-placement="bottom" title="链接"><i class="fa fa-link"></i></button>
	  	<button type="button" class="btn btn-self" data-toggle="tooltip" data-placement="bottom" title="图片"><i class="fa fa-image"></i></button>
	  	<button type="button" class="btn btn-self" data-toggle="tooltip" data-placement="bottom" title="代码"><i class="fa fa-code"></i></button>
	  	<button type="button" class="btn btn-self" data-toggle="tooltip" data-placement="bottom" title="分割线"><i class="fa fa-minus"></i></button>
	  	<button type="button" class="btn btn-self" data-toggle="tooltip" data-placement="bottom" title="引用"><i class="fa fa-quote-right"></i></button>
	  	<button type="button" class="btn btn-self" data-toggle="tooltip" data-placement="bottom" title="表格"><i class="fa fa-table"></i></button>
	  	<button type="button" class="btn btn-self" data-toggle="tooltip" data-placement="bottom" title="粘贴HTML"><i class="fa fa-h-square"></i></button>
	  	<button type="button" class="btn btn-self" data-toggle="tooltip" data-placement="bottom" title="章节导航"><i class="fa fa-th-list"></i></button>
	  </div>

	  <div class="btn-group fr">
	  	<button type="button" class="btn btn-self" data-toggle="tooltip" data-placement="bottom" title="边栏"><i class="fa fa-reorder"></i></button>
	  	<button type="button" class="btn btn-self" data-toggle="tooltip" data-placement="bottom" title="预览"><i class="fa fa-toggle-right"></i></button>
	  	<button type="button" class="btn btn-self" data-toggle="tooltip" data-placement="bottom" title="历史记录"><i class="fa fa-reply-all"></i></button>
	  	<button type="button" class="btn btn-self" data-toggle="tooltip" data-placement="bottom" title="全文预览"><i class="fa fa-file-powerpoint-o"></i></button>
	  	<button type="button" class="btn btn-self" data-toggle="tooltip" data-placement="bottom" title="帮助"><i class="fa fa-user"></i></button>
	  	<button type="button" class="btn btn-self"><i class="fa fa-sort-desc"></i></button>

	  </div>
	  <div class="btn-group fr">
	  	<button type="button" class="btn btn-self" data-toggle="tooltip" data-placement="bottom" title="发布文章"><i class="fa fa-cloud"></i></button>
	  </div>
	</div>

	<div class="editcontent row">
		<div class="col-md-2">
			<div class="ih34 pad0-10 navtitle">
				<i class="fa fa-list-ul"></i>
				<span>目录</span>
				<span class="fr" data-toggle="tooltip" data-placement="right" title="新建目录"><i class="fa fa-plus"></i></span>
			</div>
			<div class="listcon">
				<?php if(!empty($dirlist)): ?><ul class="mllist">
						<?php if(is_array($dirlist)): $index = 0; $__LIST__ = $dirlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dirobj): $mod = ($index % 2 );++$index;?><li id="<?php echo ($dirobj['id']); ?>" p_id="<?php echo ($dirobj['parent_id']); ?>" <?php if($index == 1): ?>class="active"<?php endif; ?>>
								<?php if($dirobj['has_child'] != 1): ?><i class="fa fa-caret-right"></i><?php endif; ?>
								<div>
								<?php echo ($dirobj["node_name"]); ?>
								</div>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul><?php endif; ?>
			</div>
		</div>
		<div class="col-md-5">
			<div class="textarea" id="textarea"></div>
		</div>
		<div class="col-md-5 viewpren">
			<div class="viewcontent"><?php echo ($dirlist[0]['html_content']); ?></div>
		</div>
	</div>
	<div class="ih34 playmodel">
		<div class="playadd"><i class="fa fa-plus"></i>新建章节</div>
		<div class="playedi"><i class="fa fa-edit"></i>编辑</div>
		<div class="playdel"><i class="fa fa-trash"></i>删除</div>
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
	<div class="dis-n addDirectory">
		<div class="title text-center f-size-20 ih50">创建目录</div>
		<div class="padding-20 xq_form">
			<div class="form-group">
				<input type="text" class="form-control" id="node_name" placeholder="请填写目录名称"/>
			</div>
		</div>
		<div class="box-cen padding-20">
			<div class="btn-lg btn-default save-btn">保存</div>
		</div>
	</div>

	<div class="dis-n editDir">
		<div class="title text-center f-size-20 ih50">修改目录</div>
		<div class="padding-20 xq_form">
			<div class="form-group">
				<input type="text" class="form-control" id="edit_node_name" placeholder="请填写目录名称"/>
			</div>
		</div>
		<div class="box-cen padding-20">
			<div class="btn-lg btn-default edit-btn">保存</div>
		</div>
	</div>

	<script type="text/javascript" src="/wqac2.0/Public/Home/js/jquery.min.js"></script>
	 <!-- //////////////////////////////////////////////////////////////////////////// --> 
	<script src="/wqac2.0/Public/Home/js/bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="/wqac2.0/Public/Home/js/plugins.js"></script>
	<script type="text/javascript" src="/wqac2.0/Public/Home/js/self.js"></script>
<script type="text/javascript" src="/wqac2.0/Public/Home/js/layer/layer.js"></script>
Sweet Alert
================================================ -->
<script src="/wqac2.0/Public/Home/js/sweet-alert/sweet-alert.min.js"></script>

<!-- ================================================
Kode Alert
================================================ -->
<script src="/wqac2.0/Public/Home/js/kode-alert/main.js"></script>
	<script>
		var code = document.getElementById("textarea");
		var editor = CodeMirror(code, {
		  mode: "markdown",
		  lineNumbers: true,
		  value:<?php echo json_encode($dirlist[0]['md_content']) ?>,
		  theme: "default"
		});
		$(function(){
			$(".loading").hide();
		});
		var prev ="";
		editor.on('change',function(){
			var curvalue =  editor.getValue();
			if ( prev == curvalue ) {
				return;
			}else if ( $.trim(curvalue) == "" ){
				$(".viewcontent").html("");
				return;
			}else{
				prev = curvalue;
			}
			$.ajax({
				"url" : "<?php echo U('Index/mkToHTML');?>",
				"data" : {"mkToHTML" : prev},
				"type" : "post",
				"dataType" : "json",
				"success" : function(res){
					res = JSON.parse(res);
					if (res.flag == "success") {
						var stre = res.data;
						var str = stre.replace(/([;|{|}]{1,}\n)/g,"$1<br/>");
						$(".viewcontent").html(str);
					}else{
						layer.msg(res.message);
					}
				}
			});
		});

		//同步滑动
		$(".textarea .CodeMirror-scroll").on('scroll',function(e){
			var viewhe = $(".editcontent").height();
			var scrollTop = $(this).scrollTop();
			var height = $(this).find(".CodeMirror-sizer").innerHeight();
			var viewHeight = $(".viewcontent").innerHeight();
			var bili = scrollTop/(height-viewhe);
			var scrolltop = viewHeight-viewhe+20;
			console.log(scrolltop +"----"+ bili);
			$(".viewpren").scrollTop( bili * scrolltop );
		});

		$(".btn-self").on('click',function(e){
			console.log("nihao");
		});

		function liclick(e){
			var self = $(this);
			if (!self.hasClass("active")) {
				var id = self.attr("id");
				$.ajax({
					"url" : "<?php echo U('Index/getContent');?>",
					"type" : "post",
					"dataType" : "json",
					"data" : {id},
					"success" : function( res ){
						if (res.flag == "success") {
							var curobj = res.data;
							console.log(curobj);
							editor.setValue(curobj.md_content);
							$(".viewcontent").html(curobj.html_content);
						}else{
							layer.msg(res.message);
						}
					}
				});
				$(".mllist li.active").removeClass('active');
				self.addClass("active");
				e.stopPropagation();
			}
		}
		//  回去该目录内容

		function getContent(){

		}

		$(".mllist li").on('click', liclick);

		// 将目录创建到指定容器内

		function putNode(data,ele) {
			var ul = $("<ul/>",{class:"mllist"});
			for(var curobj of data){
				var has_child = curobj['has_child'];
				var i ="";
				if (has_child != 0) {
					i = $("<i/>",{class:"fa fa-caret-right"}).on('click',findNode);
				}
				var li = $("<li/>").attr({"id":curobj.id,"p_id":curobj.parent_id}).append(i).append($("<div/>").append(curobj.node_name)).on('click',liclick);
				li.find('div').eq(0).on('contextmenu', stopContentMenu);
				ul.append(li);
			}
			ul.appendTo(ele);
		}

		// 响应加载子集菜单事件

		function findNode(e) {
			e.stopPropagation();
			var self = $(this).parent();
			var parent_id = self.attr("id");
			if (self.hasClass('isopen')) {
				self.find(".fa-caret-down").eq(0).removeClass("fa-caret-down").addClass("fa-caret-right");			
				self.find("ul").remove();
				self.removeClass('isopen');
				return;
			}			
			$.ajax({
				"url" : "<?php echo U('Index/findNode');?>",
				"type" : "post",
				"data" :{parent_id},
				"dataType" : "json",
				"success" : function(res){
					if (res.flag == "success") {
						putNode(res.data,self);
						self.addClass('isopen');
						self.find(".fa-caret-right").eq(0).removeClass("fa-caret-right").addClass("fa-caret-down");			
					}else{
						layer.msg(res.message);
					}
				}
			});
		}

		var curele; //当前右键的节点
		// 禁止浏览器右键行为 
		function stopContentMenu(e){
			var event = e || window.event;
			curele = $(this).parent();
			$(".playmodel").css({"left":event.clientX,"top":event.clientY}).show();
			event.stopPropagation();
			return false;
		}


		$(".fa-caret-right").on('click',findNode);
		$(document).on('click',function(e){
			var event = e || window.event;
			if (event.button != 2) {
				$(".playmodel").hide();
			}
		});

		$(".mllist li > div").on('contextmenu',stopContentMenu);

		$(".playmodel .playadd").on('click',function() {
			layer.open({
				type:1,
				title:false,
				area:['300px','auto'],
				content:$(".addDirectory")
			});
		});

		$(".playmodel .playedi").on('click',function() {
			$("#edit_node_name").val(curele.find("div").eq(0).text().trim());
			layer.open({
				type:1,
				title:false,
				area:['300px','auto'],
				content:$(".editDir")
			});
		});

		$(".playmodel .playdel").on('click',function(){
			swal({
		        title: "请确认?",
		        text: "您确认要删除!",
		        type: "warning",
		        showCancelButton: true,
		        confirmButtonColor: "#DD6B55",
		        confirmButtonText: "确认",
		        cancelButtonText: "取消",
		        closeOnConfirm: false
		      },delDir);
		});

		//删除指定目录

		function delDir(){
			var id = curele.attr("id");
			var parent_id = curele.attr("p_id");
			$.ajax({
				"url" : "<?php echo U('Index/delDir');?>",
				"data" : {id,parent_id},
				"type" : "post",
				"dataType" : "json",
				"success" : function( res ){
					if (res.flag == "success") {
						if (curele.siblings().size() == 0) {
				      		curele.parent().siblings("i.fa").remove();
				      		curele.parent().remove();
				      	}else{
				      		curele.remove();
				      	}
				      	swal("已删除!", "恭喜您删除成功.", "success");	
					}else{
						layer.msg(res.message);
					}
				}
			});
		}


		$(".edit-btn").on('click',function(event) {
			var node_name = $("#edit_node_name").val();
			var id = curele.attr("id");
			$.ajax({
				"url" : "<?php echo U('Index/editDir');?>",
				"data" : {node_name,id},
				"type" : "post",
				"dataType" : "json",
				"success" : function(res){
					if (res.flag == "success") {
						curele.find("div").eq(0).text(node_name);
						swal("已修改!", "恭喜您修改成功！", "success");	
					}else{
						layer.msg(res.message);
					}
					layer.closeAll();
				}
			});
		});

		$(".save-btn").on('click',function(){
			var node_name = $("#node_name").val();
			var atical_id = 1;
			var parent_id = curele.attr("id");
			$.ajax({
				"url" : "<?php echo U('Index/addDirectory');?>",
				"data" : {node_name,atical_id,parent_id},
				"type" : "post",
				"dataType" : "json",
				"success" : function(res){
					if (res.flag == "success") {
						mkdir(node_name,res.data,parent_id);
						swal("已创建!", "恭喜您创建成功.", "success");						
					}else{
						layer.msg(res.message);
					}
					layer.closeAll();
				}
			});
		});

		function mkdir( node_name,id,parent_id){
			var mllist = curele.find('.mllist').eq(0);
			console.log(mllist.text());
			if (mllist.length == 0) {
				var i = $("<i/>",{class:"fa fa-caret-down"}).on("click",findNode);
				curele.find('div').eq(0).prepend(i);
				mllist = $("<ul/>",{class:"mllist"}).appendTo(curele);
			}
			var li = $("<li/>").attr({"id":id,"p_id":parent_id}).html("<div>"+ node_name +"</div>").appendTo(mllist);
			li.on('click',liclick);
			li.find('div').eq(0).on('contextmenu', stopContentMenu);
		}

		//  删除目录
		$(".playmodel div.playdel").on('click',function( e ){

		});

		// 保存文档到数据库

		$(".savecontent").on('click',function(){
			var id = $("li.active").eq(0).attr("id");
			var md_content = editor.getValue();
			var html_content = $(".viewcontent").html();
			$.ajax({
				"url" : "<?php echo U('Index/saveContent');?>",
				"type" : "post",
				"dataType" : "json",
				"data" : {id,md_content,html_content},
				"success" : function( res ){
					if ( res.flag == "success") {
						layer.msg(res.message);
					}else{
						layer.msg(res.message);
					}
				}
			});
		});
	</script>
</body>
</html>