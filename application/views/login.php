<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" rev="stylesheet" href="<?php echo base_url();?>css/login.css" />
<link rel="icon" href="<?php echo base_url();?>images/menubar/logo1.png" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>QuickSALE <?php echo $this->lang->line('login_login'); ?></title>
<script src="<?php echo base_url();?>js/jquery-1.2.6.min.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$("#login_form input:first").focus();
});
</script>
</head>
<body style="padding-top: 10%;">
<img src="<?php echo base_url().'images/menubar/logo1.png';?>" border="0" alt="Logo Image" />

<?php echo form_open('login') ?>
<div id="container">
<?php echo validation_errors(); ?>
	<div id="top">
	<?php echo $this->lang->line('login_login'); ?>
	</div>
	<div id="login_form">
		<div id="welcome_message" style="font-weight: 900;">
			<p>
				Please type in your <span style="color: #00c0ef"><b><em>Q</em></b>uick</span><span style="font-weight: 900; color: #FF0000"><b><em>SALE</em></b></span>  username and password and click the 'Login' button to proceed.
		</div>
		
		<div class="form_field_label" style="font-size: 15px; font-weight: 900; color: #00c0ef"><?php echo $this->lang->line('login_username'); ?>: </div>
		<div class="form_field">
		<?php echo form_input(array(
		'name'=>'username', 
		'size'=>'20')); ?>
		</div>

		<div class="form_field_label" style="font-size: 15px; font-weight: 900; color: #00c0ef"><?php echo $this->lang->line('login_password'); ?>: </div>
		<div class="form_field">
		<?php echo form_password(array(
		'name'=>'password', 
		'size'=>'20')); ?>
		
		</div>
		
		<div id="submit_button">
		<?php echo form_submit('loginButton','Login'); ?>
		</div>
	</div>
</div>
<?php echo form_close(); ?>
</body>
</html>
