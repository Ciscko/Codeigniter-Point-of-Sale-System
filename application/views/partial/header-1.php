<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<base href="<?php echo base_url();?>" />
	<title><?php echo $this->config->item('company').' -- '.$this->lang->line('common_powered_by').' OS Point Of Sale' ?></title>
	<link rel="stylesheet" rev="stylesheet" href="<?php echo base_url();?>css/ospos.css" />
	<link rel="stylesheet" rev="stylesheet" href="<?php echo base_url();?>css/ospos_print.css"  media="print"/>
	<link rel="stylesheet" rev="stylesheet" href="<?php echo base_url();?>dashboard/css/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" rev="stylesheet" href="<?php echo base_url();?>dashboard/css/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" rev="stylesheet" href="<?php echo base_url();?>dashboard/css/Ionicons/css/ionicons.min.css" />
	<link rel="stylesheet" rev="stylesheet" href="<?php echo base_url();?>dashboard/css/AdminLTE.min.css" />
	<link rel="stylesheet" rev="stylesheet" href="<?php echo base_url();?>dashboard/css/_all-skins.min.css" />
  <link rel="icon" href="<?php echo base_url();?>images/menubar/favicon.ico" />

	<script>BASE_URL = '<?php echo site_url(); ?>';</script>
	<script src="<?php echo base_url();?>dashboard/js/jquery/dist/jquery.min.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>dashboard/js/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>dashboard/js/fastclick/lib/fastclick.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>dashboard/js/adminlte.min.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/jquery-1.2.6.min.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/jquery.color.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/jquery.metadata.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/jquery.form.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/jquery.tablesorter.min.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/jquery.ajax_queue.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/jquery.bgiframe.min.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/jquery.autocomplete.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/jquery.validate.min.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/jquery.jkey-1.1.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/thickbox.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/common.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/manage_tables.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/swfobject.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/date.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/datepicker.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	
<style type="text/css">
html {
    overflow: auto;
}
</style>

</head>
<!--<body class="skin-blue fixed idebar-mini sidebar-mini-expand-feature sidebar-collapse">-->
<body class="skin-blue fixed">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('index.php/home');?>" class="logo">
      <img src="<?php echo base_url().'images/menubar/logo.png';?>" border="0" alt="Logo Image" />
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu pull-left" style="padding-left: 1%;">
        <ul class="nav navbar-nav">
        	<?php
	          foreach($allowed_modules->result() as $module) 
	          {
	          ?>
	          <li class="menu_item">
	            <a href="<?php echo site_url("$module->module_id");?>">
	            <img src="<?php echo base_url().'images/menubar/'.$module->module_id.'.png';?>" border="0" alt="Navbar Image"  title="<?php echo $this->lang->line("module_".$module->module_id) ?>" /></a><br>
              <a style="color: #fff; font-weight: bold;" href="<?php echo site_url("$module->module_id");?>"><?php echo $this->lang->line("module_".$module->module_id) ?></a>
	          </div>
	          <?php
	          }
	          ?>
        </ul>
      </div>
      <div class="navbar-custom-menu pull-right image">
          <img src="<?php echo base_url().'images/menubar/user1.png';?>" border="0" alt="Menubar Image" />
        </div>
      <div class="navbar-custom-menu pull-right info">
          <?php echo " $user_info->first_name $user_info->last_name!"; ?><br>
          <span class="btn-lg button"><?php echo anchor("home/logout",$this->lang->line("common_logout")); ?></span>
        </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url().'images/menubar/user1.png';?>" border="0" alt="Menubar Image" />
        </div>
        <div class="pull-left info">
          <?php echo " $user_info->first_name $user_info->last_name!"; ?><br>
          <span><i class="fa fa-circle text-success"></i> Logged In</span><br>
          <span class="btn-lg button"><?php echo anchor("home/logout",$this->lang->line("common_logout")); ?></span>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN MENU</li>
        
        <li>
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 569px;">
  <div class="container" style="padding-right: 20px">
    <div class="row">
      <div class="col-md-12 col=lg-12">
        
      <?php
                              foreach($allowed_modules->result() as $module) 
                              {
                              ?>
                              <li class="visible-lg">
                                <a href="<?php echo site_url("$module->module_id");?>">
                                <img src="<?php echo base_url().'images/menubar/'.$module->module_id.'.png';?>" border="0" alt="Navbar Image"  title="<?php echo $this->lang->line("module_".$module->module_id) ?>" /><br><?php echo $this->lang->line("module_".$module->module_id) ?>
                                </a>
                              </li>
                              <?php
                              }
                              ?>