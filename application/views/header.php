<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Trang Quản Lý Hệ Thống</title>

	<meta name="robots" content="noindex, nofollow" />

	<link rel="shortcut icon" href="images/icon.png" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/admin/crown/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/admin/css/css.css" media="screen" />

	<script type="text/javascript" src="<?php echo base_url() ?>public/js/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/js/jquery/jquery-ui.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url() ?>public/admin/crown/js/plugins/spinner/jquery.mousewheel.js"></script>

	<script type="text/javascript" src="<?php echo base_url() ?>public/admin/crown/js/plugins/forms/uniform.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/admin/crown/js/plugins/forms/jquery.tagsinput.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/admin/crown/js/plugins/forms/autogrowtextarea.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/admin/crown/js/plugins/forms/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/admin/crown/js/plugins/forms/jquery.inputlimiter.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url() ?>public/admin/crown/js/plugins/tables/datatable.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/admin/crown/js/plugins/tables/tablesort.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/admin/crown/js/plugins/tables/resizable.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url() ?>public/admin/crown/js/plugins/ui/jquery.tipsy.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/admin/crown/js/plugins/ui/jquery.collapsible.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/admin/crown/js/plugins/ui/jquery.progress.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/admin/crown/js/plugins/ui/jquery.timeentry.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/admin/crown/js/plugins/ui/jquery.colorpicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/admin/crown/js/plugins/ui/jquery.jgrowl.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/admin/crown/js/plugins/ui/jquery.breadcrumbs.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/admin/crown/js/plugins/ui/jquery.sourcerer.js"></script>

	<script type="text/javascript" src="<?php echo base_url() ?>public/admin/crown/js/custom.js"></script>


	<script type="text/javascript" src="<?php echo base_url() ?>public/js/ckeditor/ckeditor.js"></script> 
	<script type="text/javascript" src="<?php echo base_url() ?>public/js/jquery/chosen/chosen.jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/js/jquery/scrollTo/jquery.scrollTo.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/js/jquery/number/jquery.number.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/js/jquery/formatCurrency/jquery.formatCurrency-1.4.0.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/js/jquery/zclip/jquery.zclip.js"></script>

	<script type="text/javascript" src="<?php echo base_url() ?>public/js/jquery/colorbox/jquery.colorbox.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/js/jquery/colorbox/colorbox.css" media="screen" />

	<script type="text/javascript" src="<?php echo base_url() ?>public/js/custom_admin.js" type="text/javascript"></script>
</head>
<body>
   <!-- Left side content -->
   <div id="left_content">
      <div id="leftSide" style="padding-top:30px;">
         <!-- Account panel -->
         <div class="sideProfile">
            <a href="#" title="" class="profileFace"><img width="40" src="<?php echo base_url() ?>public/admin/images/user.png" /></a>
            <span>Xin chào: <strong>admin!</strong></span>
            <span>APTECH</span>
            <div class="clear"></div>
         </div>
         <div class="sidebarSep"></div>
         <!-- Left navigation -->
         <ul id="menu" class="nav">
            <li class="home">
               <a href="admin/home.html" class="active" id="current">
               <span>Bảng điều khiển</span>
               </a>
            </li>
            <li class="tran">
               <a href="admin/tran.html">
               <span>Quản lý nhân viên</span>
            </li>
            <li class="product">
               <a href="admin/product.html">
               <span>Quản lý hợp đồng</span>
               </a>
            </li>
            <li class="account">
               <a href="admin/account.html">
               <span>Quản lý lương</span>
               </a>
            </li>
         </ul>
      </div>
      <div class="clear"></div>
   </div>
   <div id="rightSide">
	<!-- Account panel top -->
	<div class="topNav">
	   <div class="wrapper">
	      <div class="welcome">
	         <span>Xin chào: <b>admin!</b></span>
	      </div>
	      <div class="userNav">
	         <ul>
	            <li><a href="" target="_blank">
	               <img style="margin-top:7px;" src="<?php echo base_url() ?>public/admin/images/icons/light/home.png" />
	               <span>Trang chủ</span>
	               </a>
	            </li>
	            <!-- Logout -->
	            <li><a href="admin/home/logout.html">
	               <img src="images/icons/topnav/logout.png" alt="" />
	               <span>Đăng xuất</span>
	               </a>
	            </li>
	         </ul>
	      </div>
	      <div class="clear"></div>
	   </div>
</div>
