<?php $this->load->view("partial/header1"); 
$this->load->helper('demo');
?>

		<?php
		if(isset($announcement))
		{
		?>
     <div class="text-center">
				<?php echo $announcement; ?>
			</div>
		<?php
		}
		?>		

	<?php if (isset($can_show_setup_wizard) && $can_show_setup_wizard) { ?>
		<div class="row" id="setup_wizard_container">
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-body">
					<a id="dismiss_setup_wizard" href="<?php echo site_url('home/dismiss_setup_wizard') ?>" class="pull-right text-danger"><?php echo lang('common_dismiss'); ?></a>
					<h4><?php echo lang('home_setup_wizard');?></h4>
					<hr />
				    <div id="setup_wizard">
							<ol>
								<li class="<?php echo $this->config->item('wizard_configure_company') ? 'wizard_step_done' : '';?>">
									<p><?php echo lang('home_wizard_configure_company');?></p>
									<span><?php echo anchor('config',lang('common_go').' &raquo;', array('class' => 'btn btn-info',' style' => 'margin-left: 10px;'));?></span>
								</li>
								<li class="<?php echo $this->config->item('wizard_configure_locations') ? 'wizard_step_done' : '';?>">
									<p><?php echo lang('home_wizard_configure_locations');?></p>
									<span><?php echo anchor('locations',lang('common_go').' &raquo;', array('class' => 'btn btn-info',' style' => 'margin-left: 10px;'));?></span>
								</li>
								<li class="<?php echo $this->config->item('wizard_add_inventory') ? 'wizard_step_done' : '';?>">
									<p><?php echo lang('home_wizard_add_inventory');?></p>
									<span><?php echo anchor('items/view/-1',lang('common_go').' &raquo;', array('class' => 'btn btn-info',' style' => 'margin-left: 10px;'));?></span>
								</li>
								<li class="<?php echo $this->config->item('wizard_edit_employees') ? 'wizard_step_done' : '';?>">
									<p><?php echo lang('home_wizard_edit_employees');?></p>
									<span><?php echo anchor('employees',lang('common_go').' &raquo;', array('class' => 'btn btn-info',' style' => 'margin-left: 10px;'));?></span>
								</li>
								<li class="<?php echo $this->config->item('wizard_add_customer') ? 'wizard_step_done' : '';?>">
									<p><?php echo lang('home_wizard_add_customer');?></p>
									<span><?php echo anchor('customers/view/-1',lang('common_go').' &raquo;', array('class' => 'btn btn-info',' style' => 'margin-left: 10px;'));?></span>
								</li>
								<li class="<?php echo $this->config->item('wizard_create_sale') ? 'wizard_step_done' : '';?>">
									<p><?php echo lang('home_wizard_create_sale');?></p>
									<span><?php echo anchor('sales',lang('common_go').' &raquo;', array('class' => 'btn btn-info',' style' => 'margin-left: 10px;'));?></span>
								</li>
							</ol>
				    </div>
				</ul>
			</div>
		</div>
	</div>
</div>
	<?php } ?>
	
	
	<?php if (!is_on_demo_host() && $can_show_reseller_promotion) { ?>
	
	<div class="row " id="reseller_container">
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-body">
					<a id="dismiss_reseller" href="<?php echo site_url('home/dismiss_reseller_message') ?>" class="pull-right text-danger"><?php echo lang('common_dismiss'); ?></a>
					<div id="reseller_activate_container">
						<h3><a href="https://phppointofsale.com/resellers_signup.php" target="_blank"><?php echo lang('home_resellers_program'); ?></a></h3>
						<p><?php echo lang('home_reseller_program_signup')?></p>
						<a href="https://phppointofsale.com/resellers_signup.php" class="reseller_description btn btn-primary" target="_blank">
							<?php echo lang('home_signup_now');?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	
	<?php if (!is_on_demo_host() && $can_show_bluejay) { ?>
	
	<div class="row " id="bluejay_container">
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-body">
					<a id="dismiss_bluejay" href="<?php echo site_url('home/dismiss_bluejay_message') ?>" class="pull-right text-danger"><?php echo lang('common_dismiss'); ?></a>
					<div id="reseller_activate_container">
						<h3><a href="https://phppointofsale.com/resellers_signup.php" target="_blank"><?php echo lang('home_bluejay_reviews'); ?></a></h3>
						<p><?php echo lang('home_bluejay')?></p>
						<a href="http://bluejayreviews.com/phppos" class="reseller_description btn btn-primary" target="_blank">
							<?php echo lang('home_signup_now');?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<?php } ?>
<?php
if (is_on_phppos_host()) {
?>
	<?php if (isset($trial_on) && $trial_on === true) { ?>
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-body">					
				   <div class="alert alert-success">
				    <?php echo lang('login_trail_info'). ' '.date(get_date_format(), strtotime($cloud_customer_info['trial_end_date'])).'. '.lang('login_trial_info_2'); ?>
				    </div>
				    <a class="btn btn-block btn-success" href="https://phppointofsale.com/update_billing.php?store_username=<?php echo $cloud_customer_info['username'];?>&username=<?php echo $this->Employee->get_logged_in_employee_info()->username; ?>&password=<?php echo $this->Employee->get_logged_in_employee_info()->password; ?>" target="_blank"><?php echo lang('common_update_billing_info');?></a>
					</div>
				</div>
			</div>
	<?php } ?>


	<?php if (isset($subscription_payment_failed) && $subscription_payment_failed === true) { ?>
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-body">
				   <div class="alert alert-danger">
				        <?php echo lang('login_payment_failed_text'); ?>
				    </div>
				    <a class="btn btn-block btn-success" href="https://phppointofsale.com/update_billing.php?store_username=<?php echo $cloud_customer_info['username'];?>&username=<?php echo $this->Employee->get_logged_in_employee_info()->username; ?>&password=<?php echo $this->Employee->get_logged_in_employee_info()->password; ?>" target="_blank"><?php echo lang('common_update_billing_info');?></a>
					</div>
				</div>
			</div>
	<?php } ?>

	<?php if (isset($subscription_cancelled_within_5_days) && $subscription_cancelled_within_5_days === true) { ?>
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-body">
				    <div class="alert alert-danger">
				        <?php echo lang('login_resign_text'); ?>
				    </div>
					<a class="btn btn-block btn-sm btn-success" href="https://phppointofsale.com/update_billing.php?store_username=<?php echo $cloud_customer_info['username'];?>&username=<?php echo $this->Employee->get_logged_in_employee_info()->username; ?>&password=<?php echo $this->Employee->get_logged_in_employee_info()->password; ?>" target="_blank"><?php echo lang('login_resignup');?></a>
				</ul>
			</div>
		</div>
	</div>
	<?php } ?>
<?php } ?>
<?php if ($can_show_mercury_activate) { ?>
	<!-- mercury activation message -->
	<div class="row " id="mercury_container">
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-body">
					<a id="dismiss_mercury" href="<?php echo site_url('home/dismiss_mercury_message') ?>" class="pull-right text-danger"><?php echo lang('common_dismiss'); ?></a>
					<div id="mercury_activate_container">
						<h3><a href="http://phppointofsale.com/credit_card_processing.php" target="_blank"><?php echo lang('common_credit_card_processing'); ?></a></h3>
						<a href="http://phppointofsale.com/credit_card_processing.php" class="mercury_description" target="_blank">
							<?php echo lang('home_mercury_activate_promo_text');?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php  } ?>

<?php 
$this->load->helper('demo');
if (!is_on_demo_host() && !$this->config->item('hide_test_mode_home') && !$this->config->item('disable_test_mode')) { ?>
	<?php if($this->config->item('test_mode')) { ?>
		<div class="alert alert-danger">
			<strong><?php echo lang('common_in_test_mode'); ?>. <a href="sales/disable_test_mode"></strong>
			<a href="<?php echo site_url('home/disable_test_mode'); ?>" id="disable_test_mode"><?php echo lang('common_disable_test_mode');?></a>
		</div>
	<?php } ?>

	<?php if(!$this->config->item('test_mode')  && !$this->config->item('disable_test_mode')) { ?>
		<div class="row " id="test_mode_container">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-body text-center">
						<a id="dismiss_test_mode" href="<?php echo site_url('home/dismiss_test_mode') ?>" class="pull-right text-danger"><?php echo lang('common_dismiss'); ?></a>
							<strong><?php echo anchor(site_url('home/enable_test_mode'), '<i class="ion-ios-settings-strong"></i> '.lang('common_enable_test_mode'),array('id'=>'enable_test_mode')); ?></strong>
							<p><?php echo lang('common_test_mode_desc')?></p>
						</div>
					</div>
				</div>
			</div>

	<?php } ?>
<?php } ?>


<div class="text-center">					

	<?php if ($this->Employee->has_module_action_permission('reports', 'view_dashboard_stats', $this->Employee->get_logged_in_employee_info()->person_id) && (!$this->agent->is_mobile() || $this->agent->is_tablet())) { ?>
	
	<?php
	if ($this->config->item('ecommerce_cron_running')) {
	?>
	<!-- ecommerce progress bar -->
	<div class="row" id="ecommerce_progress_container">
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-heading">
					<h5><?php echo lang('home_ecommerce_platform_sync')?></h5>
				</div>
				<div class="panel-body">
					<div id="progress_bar">
						<div class="progress">
						  <div class="progress-bar progress-bar-striped active" id="progessbar" role="progressbar"
						  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
						    <span id="progress_percent">0</span>% <span id="progress_message"></span>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script>
	function check_ecommerce_status()
	{
		$.getJSON(SITE_URL+'/home/get_ecommerce_sync_progress', function(response)
		{
			set_progress(response.percent_complete,response.message);
		
			if (response.running)
			{
				setTimeout(check_ecommerce_status,5000);
			}
		});
	}
	
	function set_progress(percent, message)
	{
		$("#progress_container").show();
		$('#progessbar').attr('aria-valuenow', percent).css('width',percent+'%');
		$('#progress_percent').html(percent);
		if (message !='')
		{
			$("#progress_message").html('('+message+')');
		}
		else
		{
			$("#progress_message").html('');
		}
		
	}
	check_ecommerce_status();
	</script>
	
	<?php } ?>
	
	<?php
	if ($this->config->item('qb_cron_running')) {
	?>
	<!-- quickbooks progress bar -->
	<div class="row" id="quickbooks_progress_container">
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-heading">
					<h5><?php echo lang('home_quickbooks_platform_sync')?></h5>
				</div>
				<div class="panel-body">
					<div id="progress_bar">
						<div class="progress">
						  <div class="progress-bar progress-bar-striped active" id="qb_progessbar" role="progressbar"
						  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
						    <span id="qb_progress_percent">0</span>% <span id="qb_progress_message"></span>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script>
	function check_quickbooks_status()
	{
		$.getJSON(SITE_URL+'/home/get_qb_sync_progress', function(response)
		{
			set_qb_progress(response.percent_complete,response.message);
		
			if (response.running)
			{
				setTimeout(check_quickbooks_status,5000);
			}
		});
	}
	
	function set_qb_progress(percent, message)
	{
		$("#qb_progress_container").show();
		$('#qb_progessbar').attr('aria-valuenow', percent).css('width',percent+'%');
		$('#qb_progress_percent').html(percent);
		if (message !='')
		{
			$("#qb_progress_message").html('('+message+')');
		}
		else
		{
			$("#qb_progress_message").html('');
		}
		
	}
	check_quickbooks_status();
	</script>
	
	<?php } ?>
	
		
</div>

<?php } ?>
	<div class="grid grid-cols-12 gap-6 mt-5">
		<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
			<div class="report-box zoom-in">
				<a href="<?php echo site_url('sales'); ?>">
					<div class="box p-5">
						<div class="flex">
							<i data-feather="shopping-cart" class="report-box__icon text-theme-10"></i> 
							<div class="ml-auto">
								<div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="33% Higher than last month"> <?php echo $total_sales; ?> <i data-feather="chevron-up" class="w-4 h-4"></i></div>
							</div>
						</div>
						<div class="text-3xl font-bold leading-8 mt-6 text-left"><?php echo $total_sales; ?></div>
						<div class="text-base text-gray-600 mt-1 text-left"><?php echo lang('common_total')." ".lang('module_sales'); ?></div>
					</div>
				</a>
			</div>
			
		</div>
		<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
			<div class="report-box zoom-in">
				<a href="<?php echo site_url('customers'); ?>">
					<div class="box p-5">
						<div class="flex">
							<i data-feather="user" class="report-box__icon text-theme-11"></i> 
							<div class="ml-auto">
								<div class="report-box__indicator bg-theme-6 tooltip cursor-pointer" title="2% Lower than last month"><?php echo $total_customers; ?> <i data-feather="chevron-up" class="w-4 h-4"></i></div>
							</div>
						</div>
						<div class="text-3xl font-bold leading-8 mt-6 text-left"><?php echo $total_customers; ?></div>
						<div class="text-base text-gray-600 mt-1 text-left"><?php echo lang('common_total')." ".lang('module_customers'); ?></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
			<div class="report-box zoom-in">
				<a href="<?php echo site_url('items'); ?>">
					<div class="box p-5">
						<div class="flex">
							<i data-feather="monitor" class="report-box__icon text-theme-12"></i> 
							<div class="ml-auto">
								<div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="12% Higher than last month"> <?php echo $total_items; ?> <i data-feather="chevron-up" class="w-4 h-4"></i> </div>
							</div>
						</div>
						<div class="text-3xl font-bold leading-8 mt-6 text-left"><?php echo $total_items; ?></div>
						<div class="text-base text-gray-600 mt-1 text-left"><?php echo lang('common_total')." ".lang('module_items'); ?></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
			<div class="report-box zoom-in">
				<a href="<?php echo site_url('item_kits'); ?>">
					<div class="box p-5">
						<div class="flex">
							<i data-feather="user" class="report-box__icon text-theme-9"></i> 
							<div class="ml-auto">
								<div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="22% Higher than last month"> <?php echo $total_item_kits; ?> <i data-feather="chevron-up" class="w-4 h-4"></i> </div>
							</div>
						</div>
						<div class="text-3xl font-bold leading-8 mt-6 text-left"><?php echo $total_item_kits; ?></div>
						<div class="text-base text-gray-600 mt-1 text-left"><?php echo lang('common_total')." ".lang('module_item_kits'); ?></div>
					</div>
				</a>
			</div>
		</div>
	</div>
 
	<?php if(!$this->config->item('hide_expire_dashboard') && count($expiring_items) > 0) { ?> 
		<div class="intro-y flex items-center h-10 mt-5">
			<h2 class="text-lg font-medium truncate  text-center" style="margin:0px auto">
				<?php echo lang('home_items_expiring_soon')?>
			</h2>
		</div>
		<div class="intro-y box mt-2">
			<div class="overflow-x-auto">
				<table class="table"  id="table_holder">
					<thead>
						<tr>
							<th class="border-b-2 whitespace-no-wrap"><?php echo lang('common_name')?></th>
							<th class="border-b-2 whitespace-no-wrap"><?php echo lang('common_location')?></th>
							<th class="border-b-2 whitespace-no-wrap"><?php echo lang('common_expire_date')?></th>
							<th class="border-b-2 whitespace-no-wrap"><?php echo lang('reports_quantity_expiring')?></th>
							<th class="border-b-2 whitespace-no-wrap"><?php echo lang('common_category')?></th>
							<th class="border-b-2 whitespace-no-wrap"><?php echo lang('common_item_number')?></th>
							<th class="border-b-2 whitespace-no-wrap"><?php echo lang('common_product_id')?></th>
						</tr>
						<?php foreach($expiring_items as $eitem) { ?>
							<tr>
								<td class="border-b whitespace-no-wrap"><?php echo $eitem['name'];?></td>
								<td class="border-b whitespace-no-wrap"><?php echo $eitem['location_name'];?></td>
								<td class="border-b whitespace-no-wrap"><?php echo date(get_date_format(),strtotime($eitem['expire_date']));?></td>
								<td class="border-b whitespace-no-wrap"><?php echo to_quantity($eitem['quantity_expiring']);?></td>
								<td class="border-b whitespace-no-wrap"><?php echo $eitem['category'];?></td>
								<td class="border-b whitespace-no-wrap"><?php echo $eitem['item_number'];?></td>
								<td class="border-b whitespace-no-wrap"><?php echo $eitem['product_id'];?></td>
							</tr>
								
						<?php } ?>
					</thead>        
				</table>
			</div>
		</div>
	<?php } ?>

<div class="intro-y flex items-center h-10 mt-2">
	<h5 class="font-medium truncate  text-center" style="margin:0px auto">
	<?php echo lang('home_welcome_message');?>
	</h5>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">

<?php if ($this->Employee->has_module_permission('sales', $this->Employee->get_logged_in_employee_info()->person_id)) {	?>
	<div class="intro-y col-span-12 md:col-span-6">
		<div class="box">
			<div class="flex flex-col lg:flex-row items-center p-1">
				<div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
					<i data-feather="shopping-cart" class="report-box__icon text-theme-10 mt-3 ml-3" style="font-size:30px;"> </i> 
				</div>
				<div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0" >
					<a href="<?php echo site_url('sales'); ?>" class="font-medium"><?php echo lang('common_start_new_sale'); ?></a> 					
				</div>				
			</div>
		</div>
	</div>
<?php } ?>

<?php if ($this->Employee->has_module_permission('receivings', $this->Employee->get_logged_in_employee_info()->person_id)) { ?>
	<div class="intro-y col-span-12 md:col-span-6">
		<div class="box">
			<div class="flex flex-col lg:flex-row items-center p-1">
				<div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
					<i data-feather="cloud" class="report-box__icon text-theme-10 mt-3 ml-3" style="font-size:30px;"> </i> 
				</div>
				<div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0" >
					<a href="<?php echo site_url('receivings'); ?>" class="font-medium"><?php echo lang('home_receivings_start_new_receiving'); ?></a> 					
				</div>				
			</div>
		</div>
	</div>
<?php } ?>	
	
<?php if ($this->Employee->has_module_action_permission('reports', 'view_closeout', $this->Employee->get_logged_in_employee_info()->person_id)) { ?>
	<div class="intro-y col-span-12 md:col-span-6">
		<div class="box">
			<div class="flex flex-col lg:flex-row items-center p-1">
				<div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
					<i data-feather="clock" class="report-box__icon text-theme-10 mt-3 ml-3" style="font-size:30px;"> </i> 
				</div>
				<div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0" >
					<a href="<?php echo site_url('reports/generate/closeout?report_type=simple&report_date_range_simple=TODAY');?>&export_excel=0" class="font-medium"><?php echo lang('home_todays_closeout_report'); ?></a> 					
				</div>				
			</div>
		</div>
	</div>
<?php } ?>
	
<?php if ($this->Employee->has_module_action_permission('reports', 'view_sales', $this->Employee->get_logged_in_employee_info()->person_id)) { ?>
	<div class="intro-y col-span-12 md:col-span-6">
		<div class="box">
			<div class="flex flex-col lg:flex-row items-center p-1">
				<div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
					<i data-feather="clock" class="report-box__icon text-theme-10 mt-3 ml-3" style="font-size:30px;"> </i> 
				</div>
				<div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0" >
					<a href="<?php echo site_url('reports/generate/detailed_sales?report_type=simple&report_date_range_simple=TODAY&sale_type=all&with_time=1&excel_export=0');?>&export_excel=0" class="font-medium"><?php echo lang('home_todays_detailed_sales_report'); ?></a> 					
				</div>				
			</div>
		</div>
	</div>
<?php } ?>
	
<?php if ($this->Employee->has_module_action_permission('reports', 'view_items', $this->Employee->get_logged_in_employee_info()->person_id)) { ?>
	<div class="intro-y col-span-12 md:col-span-6">
		<div class="box">
			<div class="flex flex-col lg:flex-row items-center p-1">
				<div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
					<i data-feather="bar-chart-2" class="report-box__icon text-theme-10 mt-3 ml-3" style="font-size:30px;"> </i> 
				</div>
				<div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0" >
					<a href="<?php echo site_url('reports/generate/summary_items?category_id=&supplier_id=&sale_type=all&items_to_show=items_with_sales&report_type=simple&report_date_range_simple=TODAY&export_excel=0&with_time=1');?>" class="font-medium"><?php echo lang('home_todays_summary_items_report'); ?></a> 					
				</div>				
			</div>
		</div>
	</div>
<?php } ?>
<?php foreach($saved_reports as $key => $report) { 
	
	$report_url = $report['url'];
	$report_url.=(parse_url($report['url'], PHP_URL_QUERY) ? '&' : '?') . "key=$key";
	?>
	
	<div class="intro-y col-span-12 md:col-span-6">
		<div class="box">
			<div class="flex flex-col lg:flex-row items-center p-1">
				<div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
					<i data-feather="star" class="report-box__icon text-theme-10 mt-3 ml-3" style="font-size:30px;"> </i> 
				</div>
				<div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0" >
					<a href="<?php echo site_url($report_url);?>" class="font-medium"><?php echo $report['name']; ?></a> 					
				</div>				
			</div>
		</div>
	</div>
	<?php } ?>
</div>

<?php if ($this->Employee->has_module_action_permission('reports', 'view_dashboard_stats', $this->Employee->get_logged_in_employee_info()->person_id)) { ?>
	<?php if (can_display_graphical_report()) { ?>
	<div class="intro-y flex items-center h-10 mt-2">
		<h2 class="text-lg font-medium truncate pt-5 text-center" style="margin:0px auto">
		<?php echo lang('common_sales_info') ?>
		</h2>
	</div>
	<div class="intro-y col-span-12 lg:col-span-8 box mt-10">		
		<div class="post intro-y overflow-hidden box mt-5">
			<div class="post__tabs nav-tabs flex flex-col sm:flex-row bg-gray-200 text-gray-600">
				<a title="Fill in the article content" data-type="monthly" data-toggle="tab" data-target="#month" href="javascript:;" class="tooltip w-full sm:w-40 py-4 text-center flex justify-center items-center active"> <i data-feather="calendar" class="w-4 h-4 mr-2"></i> <?php echo lang('common_month') ?></a>
				<a title="Adjust the meta title"  data-type="weekly" data-toggle="tab" data-target="#week" href="javascript:;" class="tooltip w-full sm:w-40 py-4 text-center flex justify-center items-center"> <i data-feather="calendar" class="w-4 h-4 mr-2"></i> <?php echo lang('common_week') ?> </a>
			</div>
			<div class="post__content tab-content">
				<div class="tab-content__pane p-5 active" id="month">
					<div class="border border-gray-200 rounded-md p-5">
						<div class="chart">
							<?php if(isset($month_sale) && !isset($month_sale['message'])){ ?>
								<canvas id="charts" width="400" height="100"></canvas>		
							<?php } else{ 
								echo $month_sale['message'];
									} ?>
						</div>
					</div>					
				</div>
				<div class="tab-content__pane p-5" id="week">
					<div class="border border-gray-200 rounded-md p-5">
						<div class="chart2">
							<canvas id="chart2" width="400" height="100"></canvas>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	
	<?php } ?>
</div>

<?php if($choose_location && count($authenticated_locations) > 1){ ?>
<div class="modal" id="choose_location_modal">
	<div class="modal__content">
		<div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
			<h2 class="font-medium text-base mr-auto"><?php echo lang('common_locations_choose_location'); ?></h2> 			
		</div>
		<div class="p-2 grid grid-cols-12 gap-4 row-gap-3">
			<?php foreach ($authenticated_locations as $key => $value) { ?>
				<div class="intro-y col-span-12 md:col-span-12 ">
					<a href="<?php echo site_url('home/set_employee_current_location_id/'.$key) ?>"  class="set_employee_current_location_after_login" data-location-id="<?php echo $key; ?>">
						<div class="box p-3">
							<div class="flex flex-col lg:flex-row items-center p-1">							
								<div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0" >
									<p class="font-medium"><?php echo $value; ?></p> 					
								</div>				
							</div>
						</div>
					</a>
				</div>
			<?php } ?>
		</div>
	</div>
</div>	
<?php } ?>


<!-- Location Message to employee -->
<script>
	$(document).ready(function(){


		$("#dismiss_mercury").click(function(e){
			e.preventDefault();
			$.get($(this).attr('href'));
			$("#mercury_container").fadeOut();
			
		});
		
		$("#dismiss_reseller").click(function(e){
			e.preventDefault();
			$.get($(this).attr('href'));
			$("#reseller_container").fadeOut();
			
		});
		
		$("#dismiss_bluejay").click(function(e){
			e.preventDefault();
			$.get($(this).attr('href'));
			$("#bluejay_container").fadeOut();
			
		});
		
		
		
		$("#dismiss_setup_wizard").click(function(e){
			e.preventDefault();
			$.get($(this).attr('href'));
			$("#setup_wizard_container").fadeOut();
			
		});
		

		$("#dismiss_test_mode").click(function(e){
			e.preventDefault();
			$.get($(this).attr('href'));
			$("#test_mode_container").fadeOut();
		});
	
		<?php if($choose_location && count($authenticated_locations) > 1) { ?>
			
			$('#choose_location_modal').modal('show');

			$(".set_employee_current_location_after_login").on('click',function(e)
			{
				e.preventDefault();

				var location_id = $(this).data('location-id');
				$.ajax({
				    type: 'POST',
				    url: '<?php echo site_url('home/set_employee_current_location_id'); ?>',
				    data: { 
				        'employee_current_location_id': location_id, 
				    },
				    success: function(){

				    	window.location = <?php echo json_encode(site_url('home')); ?>;
				    }
				});
				
			});
			
		<?php } ?>


		<?php if(isset($month_sale) && !isset($month_sale['message'])){ ?>
			var data = {
				labels: <?php echo $month_sale['day'] ?>,
				datasets: [
				{
					fillColor : "#5d9bfb",
					strokeColor : "#5d9bfb",
					highlightFill : "#5d9bfb",
					highlightStroke : "#5d9bfb",
					data: <?php echo $month_sale['amount'] ?>
				}
				]
			};
			var ctx = document.getElementById("charts").getContext("2d");
			var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo $month_sale['day'] ?>,
				datasets: [
				{
					backgroundColor: '#3160D8',
					data: <?php echo $month_sale['amount'] ?>
				}
				]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        ticks: {
                            fontSize: '12',
                            fontColor: '#777777'
                        },
                        gridLines: {
                            display: false
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            fontSize: '12',
                            fontColor: '#777777',
                            callback: function(value, index, values) {
                                return '$' + value
                            }
                        },
                        gridLines: {
                            color: '#D8D8D8',
                            zeroLineColor: '#D8D8D8',
                            borderDash: [2, 2],
                            zeroLineBorderDash: [2, 2],
                            drawBorder: false
                        }
                    }]
                }
            }
        })		
		<?php } ?>

	        

		$('.post__tabs a').on('click',function(e) {
			e.preventDefault();
			$('.post__tabs li').removeClass('active');
			$(this).parent('li').addClass('active');
			var type = $(this).attr('data-type');
			$.post('<?php echo site_url("home/sales_widget/'+type+'"); ?>', function(res)
			{
				var obj = jQuery.parseJSON(res);
				if(obj.message)
				{
					$(".chart").html(obj.message);
					
					return false;
				}
				renderChart(type, obj.day, obj.amount);				
			});
		});

		function renderChart(type,label,data){			
		 
			if(type=="monthly"){
				var ctx = document.getElementById("charts").getContext("2d");
			}else{
				var ctx = document.getElementById("chart2").getContext("2d");
			}
			
			var myLine = new Chart(ctx, {
            type: 'bar',
            data: {
				labels : label,
				datasets: [
				{
					backgroundColor: '#3160D8',
					data : data
				}
				]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        ticks: {
                            fontSize: '12',
                            fontColor: '#777777'
                        },
                        gridLines: {
                            display: false
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            fontSize: '12',
                            fontColor: '#777777',
                            callback: function(value, index, values) {
                                return '$' + value
                            }
                        },
                        gridLines: {
                            color: '#D8D8D8',
                            zeroLineColor: '#D8D8D8',
                            borderDash: [2, 2],
                            zeroLineBorderDash: [2, 2],
                            drawBorder: false
                        }
                    }]
                }
            }
        })	
		}
	});
</script>

<?php $this->load->view("partial/footer1"); ?>