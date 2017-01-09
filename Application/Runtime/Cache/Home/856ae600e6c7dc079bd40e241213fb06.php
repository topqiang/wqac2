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
    <h1 class="title">Typography</h1>
      <ol class="breadcrumb">
        <li><a href="index.html">Dashboard</a></li>
        <li class="active">Typography</li>
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
      <span class="icon color7-bg"><i class="fa fa-font"></i></span>
      <h1>Typography</h1>
      <h4>We did Typography based on Bootstrap. Easy to use and customize.<br>We love Typography. </h4>
    </div>

    <div class="col-lg-4 col-md-6">
      <ul class="list-unstyled list">
        <li><i class="fa fa-check"></i>Easy to Use<li>
        <li><i class="fa fa-check"></i>Based on <a href="http://getbootstrap.com/" target="_blank">Bootstrap</a><li>
        <li><i class="fa fa-check"></i>Google Web Fonts<li>
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

        <div class="panel-title">General</div>

            <div class="panel-body">

              <div class="col-md-6 padding-l-0">
                <h4>Google Web Fonts</h4>
                <p>Kode using <a href="https://www.google.com/fonts" target="_blank">Google Web Font</a>. You can change your fonts only editing one line code.</p>

                <h4 class="margin-t-40">General Font</h4>
                <p>Kode using general font as <strong>Open Sans</strong>.</p>
                <div class="color1" style="font-size:20px;">
                  <p class="font-w-300">Open Sans Light 300</p>
                  <p class="font-w-300"><em>Open Sans Light 300 Italic</em></p>
                  <p class="font-w-400">Open Sans Normal 400</p>
                  <p class="font-w-400"><em>Open Sans Normal 400 Italic</em></p>
                  <p class="font-w-600">Open Sans Semi-Bold 600</p>
                  <p class="font-w-600"><em>Open Sans Semi-Bold 600 Italic</em></p>
                  <p class="font-w-700">Open Sans Bold 700</p>
                  <p class="font-w-700"><em>Open Sans Bold 700 Italic</em></p>
                  <p class="font-w-800">Open Sans Extra-Bold 800</p>
                  <p class="font-w-800"><em>Open Sans Extra-Bold 800 Italic</em></p>
                </div>
              </div>


              <div class="col-md-6 padding-0">
                <h4>General Options</h4>
                <p>We set it line height as <b>1.7em</b> and default font size as <b>13px</b></p>

                <h4 class="margin-t-40">Basic Colors</h4>
                <p class="clearfix">
                  <span class="colorsheme color1-bg"></span>
                  <span class="colorsheme color0-bg"></span>
                  <span class="colorsheme color2-bg"></span>
                  <span class="colorsheme color3-bg"></span>
                  <span class="colorsheme color4-bg"></span>
                </p>

                <h4 class="margin-t-40">Theme Colors</h4>
                <p class="clearfix">
                  <span class="colorsheme color5-bg"></span>
                  <span class="colorsheme color6-bg"></span>
                  <span class="colorsheme color7-bg"></span>
                  <span class="colorsheme color8-bg"></span>
                  <span class="colorsheme color9-bg"></span>
                  <span class="colorsheme color10-bg"></span>
                  <span class="colorsheme color11-bg"></span>
                  <span class="colorsheme color12-bg"></span>
                  <span class="colorsheme color13-bg"></span>
                  <span class="colorsheme color14-bg"></span>
                  <span class="colorsheme color15-bg"></span>
                </p>

                <h4 class="margin-t-40">Title Font</h4>
                <p>Title font is Montserrat. You can add anything as <code>.font-title</code></p>

                <div class="color1" style="font-size:20px;">
                  <p class="font-w-400 font-title">Montserrat Normal 400</p>
                  <p class="font-w-700 font-title">Montserrat Bold 700</p>
                </div>
              </div>

            </div>

      </div>
    </div>

  </div>
  <!-- End Row -->

  
  <!-- Start Row -->
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">Headings</div>

            <div class="panel-body">

              <div class="col-md-6 padding-l-0">
                <h4>Default</h4>
                <p>All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are available. <code>.h1</code> through <code>.h6</code> classes are also available, for when you want to match the font styling of a heading but still want your text to be displayed inline.</p>
                  <h1>h1. Bootstrap heading</h1>
                  <h2>h2. Bootstrap heading</h2>
                  <h3>h3. Bootstrap heading</h3>
                  <h4>h4. Bootstrap heading</h4>
                  <h5>h5. Bootstrap heading</h5>
                  <h6>h6. Bootstrap heading</h6>
              </div>

              <div class="col-md-6 padding-0">
                <h4>Headings with secondary text</h4>
                <p>Create lighter, secondary text in any heading with a generic <code>&lt;small&gt;</code> tag or the <code>.small</code> class.<br><br></p>
                  <h1>h1. Bootstrap heading <small>Secondary text</small></h1>
                  <h2>h2. Bootstrap heading <small>Secondary text</small></h2>
                  <h3>h3. Bootstrap heading <small>Secondary text</small></h3>
                  <h4>h4. Bootstrap heading <small>Secondary text</small></h4>
                  <h5>h5. Bootstrap heading <small>Secondary text</small></h5>
                  <h6>h6. Bootstrap heading <small>Secondary text</small></h6>
              </div>

            </div>

      </div>
    </div>

  </div>
  <!-- End Row -->

  
  <!-- Start Row -->
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">Paragraph</div>

            <div class="panel-body">

              <div class="col-md-6 padding-l-0">
                <h4>Basic</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pharetra metus a augue pellentesque aliquet. Duis id elit dolor. Pellentesque gravida molestie egestas. Phasellus neque leo, fermentum at lobortis nec, efficitur in ante.</p>
                  
                  <p>Vestibulum enim diam, facilisis eu luctus vel, rhoncus in lectus. Vestibulum faucibus nec elit sed mollis. Vestibulum convallis tellus quis dictum convallis. Vivamus euismod nunc ut dolor finibus, eget gravida eros porta. Suspendisse eu lorem vel ex iaculis venenatis a ut lorem. </p>
                  
                  <p>Vestibulum sed vestibulum neque, sed vehicula lectus. Nam a diam sollicitudin, gravida nisi quis, ultrices dolor. Vestibulum viverra dignissim mollis. Morbi consectetur rhoncus augue nec maximus. Quisque aliquam lacinia metus, a iaculis magna fringilla et. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>

              <div class="col-md-6 padding-0">
                <h4>Headings with secondary text</h4>
                <p>Make a paragraph stand out by adding <code>.lead</code>.</p>
                  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pharetra metus a augue pellentesque aliquet. Duis id elit dolor. Pellentesque gravida molestie egestas. Phasellus neque leo, fermentum at lobortis nec, efficitur in ante.Fusce pharetra metus a augue</p>
              </div>

            </div>

      </div>
    </div>

  </div>
  <!-- End Row -->


  <!-- Start Row -->
  <div class="row">

    <div class="col-md-6 -col-sm-12">
      <div class="panel panel-default">

        <div class="panel-title">
          Inline text elements
        </div>

            <div class="panel-body">
              <h4>Marked Text</h4>
              <p>You can use the mark tag to <mark>highlight</mark> text.</p>

              <h4>Deleted text</h4>
              <p><del>This line of text is meant to be treated as deleted text.</del></p>

              <h4>Strikethrough text</h4>
              <p><s>This line of text is meant to be treated as no longer accurate.</s></p>

              <h4>Inserted text</h4>
              <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>

              <h4>Underlined text</h4>
              <p><u>This line of text will render as underlined</u></p>

              <h4>Small text</h4>
              <p><small>This line of text is meant to be treated as fine print.</small></p>
            </div>

      </div>
    </div>

    <div class="col-md-6">
      <div class="panel panel-default">

        <div class="panel-title">
          Alignment and Transformation
        </div>

            <div class="panel-body">
              <h4>Alignment classes</h4>
              <p class="text-left">Left aligned text.</p>
              <p class="text-center">Center aligned text.</p>
              <p class="text-right">Right aligned text.</p>
              <p class="text-justify">Justified text.</p>
              <p class="text-nowrap">No wrap text.</p>
              <h4>Transformation classes</h4>
              <p class="text-lowercase">Lowercased text.</p>
              <p class="text-uppercase">Uppercased text.</p>
              <p class="text-capitalize">Capitalized text.</p>
            </div>

      </div>
    </div>

  </div>
  <!-- End Row -->


  <!-- Start Row -->
  <div class="row">

    <div class="col-md-6 -col-sm-12">
      <div class="panel panel-default">

        <div class="panel-title">
          Abbreviations
        </div>

            <div class="panel-body">
              <p>Stylized implementation of HTML's <code>&lt;abbr&gt;</code> element for abbreviations and acronyms to show the expanded version on hover. Abbreviations with a <code>title</code> attribute have a light dotted bottom border and a help cursor on hover, providing additional context on hover and to users of assistive technologies.</p>

              <h4>Basic abbreviation</h4>
              An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>

              <h4>Initialism</h4>
              <abbr title="HyperText Markup Language" class="initialism">HTML</abbr> is the best thing since sliced bread.
            </div>

      </div>
    </div>

    <div class="col-md-6">
      <div class="panel panel-default">

        <div class="panel-title">
          ADDRESSES
        </div>
            <div class="panel-body">
              <address>
                <strong>Making Good Things, Inc.</strong><br>
                692 Merry Poe Ave, Suite 201<br>
                San Francisco, CA 96540<br>
                <abbr title="Phone">P:</abbr> (123) 456-7890
              </address>

              <address>
                <strong>Full Name</strong><br>
                <a href="mailto:#">first.last@example.com</a>
              </address>
            </div>

      </div>
    </div>

  </div>
  <!-- End Row -->


  <!-- Start Row -->
  <div class="row">

    <div class="col-lg-3 col-md-6">
      <div class="panel panel-default">

        <div class="panel-title">
          Unordered List
        </div>

            <div class="panel-body">
              <ul>
                <li>Home</li>
                <li>About Us</li>
                <li>Works</li>
                <li>Jobs
                  <ul>
                    <li>Designer</li>
                    <li>Front-end Developer</li>
                    <li>IOS Developer</li>
                  </ul>
                </li>
                <li>Contact</li>
              </ul>
            </div>

      </div>
    </div>

    <div class="col-lg-3 col-md-6">
      <div class="panel panel-default">

        <div class="panel-title">
          Ordered List
        </div>

            <div class="panel-body">
              <ol>
                <li>Home</li>
                <li>About Us</li>
                <li>Works</li>
                <li>Jobs
                  <ol>
                    <li>Designer</li>
                    <li>Front-end Developer</li>
                    <li>IOS Developer</li>
                  </ol>
                </li>
                <li>Contact</li>
              </ol>
            </div>

      </div>
    </div>

    <div class="col-lg-3 col-md-6">
      <div class="panel panel-default">

        <div class="panel-title">
          Unstyled List
        </div>

            <div class="panel-body">
              <ul class="list-unstyled">
                <li>Home</li>
                <li>About Us</li>
                <li>Works</li>
                <li>Jobs
                  <ul>
                    <li>Designer</li>
                    <li>Front-end Developer</li>
                    <li>IOS Developer</li>
                  </ul>
                </li>
                <li>Contact</li>
              </ul>
            </div>

      </div>
    </div>

    <div class="col-lg-3 col-md-6">
      <div class="panel panel-default">

        <div class="panel-title">
          Inline List
        </div>

            <div class="panel-body">
              <ul class="list-inline">
                <li>Home</li>
                <li>Works</li>
                <li>Jobs</li>
                <li>Contact</li>
              </ul>
            </div>

      </div>
    </div>

  </div>
  <!-- End Row -->


  <!-- Start Row -->
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          Blockquotes
        </div>

            <div class="panel-body">
              <h4>Default blockquote</h4>
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              </blockquote>

              <h4>Naming a source</h4>
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
              </blockquote>
              
              <h4>Alternate displays</h4>
              <blockquote class="blockquote-reverse">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
              </blockquote>
            </div>

      </div>
    </div>

  </div>
  <!-- End Row -->


  <!-- Start Row -->
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          Descriptions
        </div>

            <div class="panel-body">
              <div class="col-md-6 padding-l-0">
                <h4>Normal</h4>
                  <dl>
                    <dt>Donec lobortis justo at aliquet</dt>
                    <dd>Sed tincidunt pharetra ante, tempus imperdiet elit sodales id. Donec lobortis justo at aliquet luctus. Praesent interdum massa sed ex efficitur, vitae dignissim ante pharetra</dd>
                    <dt>Tempus imperdiet elit</dt>
                    <dd>Sed tincidunt pharetra ante, tempus imperdiet elit sodales id. Donec lobortis justo at aliquet luctus. Praesent interdum massa sed ex efficitur, vitae dignissim ante pharetra</dd>
                    <dt>Praesent interdum</dt>
                    <dd>Sed tincidunt pharetra ante, tempus imperdiet elit sodales id. Donec lobortis justo at aliquet luctus. Praesent interdum massa sed ex efficitur, vitae dignissim ante pharetra</dd>
                  </dl>
              </div>

              <div class="col-md-6 padding-0">
                <h4>Horizontal</h4>
                  <dl class="dl-horizontal">
                    <dt>Donec lobortis justo at aliquet</dt>
                    <dd>Sed tincidunt pharetra ante, tempus imperdiet elit sodales id. Donec lobortis justo at aliquet luctus. Praesent interdum massa sed ex efficitur, vitae dignissim ante pharetra</dd>
                    <dt>Tempus imperdiet elit</dt>
                    <dd>Sed tincidunt pharetra ante, tempus imperdiet elit sodales id. Donec lobortis justo at aliquet luctus. Praesent interdum massa sed ex efficitur, vitae dignissim ante pharetra</dd>
                    <dt>Praesent interdum</dt>
                    <dd>Sed tincidunt pharetra ante, tempus imperdiet elit sodales id. Donec lobortis justo at aliquet luctus. Praesent interdum massa sed ex efficitur, vitae dignissim ante pharetra</dd>
                  </dl>
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

</body>
</html>