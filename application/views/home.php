<?php $this->load->view("partial/header"); ?>

		<div class="container">
			<div class="row">
				 			<?php
		foreach($allowed_modules->result() as $module)
		{
		?>
		<div class="col-md-4">

		<div class="module_item ">
			<a href="<?php echo site_url("$module->module_id");?>">
			<img src="<?php echo base_url().'images/menubar/'.$module->module_id.'.png';?>" border="0" alt="Menubar Image" /></a><br />
			<a href="<?php echo site_url("$module->module_id");?>"><b style="font-size: 15px"><?php echo $this->lang->line("module_".$module->module_id) ?></b></a><br>
			<?php echo $this->lang->line('module_'.$module->module_id.'_desc');?>
		</div>
	</div>
		<?php
		}
		?>
			</div>
		
		</div>
		

<?php $this->load->view("partial/footer"); ?>