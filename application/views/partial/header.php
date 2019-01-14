<!DOCTYPE html>
<html>
<head>
	<title>My Panel</title>
	
	<link rel="stylesheet" href="<?php echo base_url();?>head/css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo base_url();?>head/css/bootstrap.css" type="text/css" media="all">

 
  <script type="text/javascript" src="<?php echo base_url('static/js/jquery-3.2.1.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('static/js/jquery.min.js');?>"></script>
 
  
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
  <script rel="stylesheet" href="<?php echo base_url();?>js/bootstrap.min.js" type="text/javascript"></script> 
  <![endif]-->
  
<link rel="stylesheet" rev="stylesheet" href="<?php echo base_url();?>css/ospos.css" />
</head>
<body>
	<nav class="navbar navbar-inverse ">
		<div class="navbar-header">
			<button type="button" data-target=".navbar-collapse" class="navbar-toggle" data-toggle="collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		    </button>
		</div>
		<div class="navbar-collapse collapse">
			
			<ul class="nav navbar-nav pull-right">
				
				<li ><a href="home/logout"><?php echo $this->lang->line("common_logout")?></a>
				
			</ul>
		</div>
		
	</nav>
	<div class="container-fluid " >
		<div class="row" >
			<div class="col-lg-2 " style="background-color:#1d0821; height:100%; text-align:center ; color:white ;" >
				<div class="hidden-sm hidden-xs">
					
						 <h3>SALES POINT SYSTEMS</h3><br><br>
						 <img style="max-height:200px; max-width: 180px; " src="<?php echo base_url();?>head/images/e5.jpg">
						  <?php
                              foreach($allowed_modules->result() as $module) 
                              {
                              ?>
                              
                                <a href="<?php echo site_url("$module->module_id");?>">
                               <!-- <img src="<?php //echo base_url().'images/menubar/'.$module->module_id.'.png';?>" border="0" alt="Navbar Image"  title="<?php //echo $this->lang->line("module_".$module->module_id) ?>" />-->
                               <h4><?php echo "   ". $this->lang->line("module_".$module->module_id) ?></h4>
                                
                                </a>
                           
                              <?php
                              }
                              ?>

						
				</div>
			</div>
			<div class="col-lg-10 ">
				<ul class="nav nav-tabs well">
					 <?php
                              foreach($allowed_modules->result() as $module) 
                              {
                              ?>
                              <li>
                                <a href="<?php echo site_url("$module->module_id");?>">
                                <img src="<?php echo base_url().'images/menubar/'.$module->module_id.'.png';?>" border="0" alt="Navbar Image"  title="<?php echo $this->lang->line("module_".$module->module_id) ?>" />
                                <h5 ><?php echo "   ". $this->lang->line("module_".$module->module_id) ?></h5>
                                
                                </a>
                              </li>
                              <?php
                              }
                              ?>
				</ul>
				
			
	
	