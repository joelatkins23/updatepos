<style>
.notification-content {
    width: 180px;
}
.flag_img{
	width:35px;
}
.breadcrumb  > a + a:before {
    padding: 0 10px;
    color: #ccc;
    content: "/\00a0";
}
.breadcrumb > a.current {
    font-size: 16px;
    font-weight: 400;
    color: #489ee7;
}
</style>
<div class="top-bar">
	<!-- BEGIN: Breadcrumb -->
	<div class="-intro-x breadcrumb mr-auto hidden sm:flex"> 
	 <?php 
		$this->load->helper('breadcrumb');
		echo create_breadcrumb(); 
	?>
	</div>
	<!-- END: Breadcrumb -->
	<!-- BEGIN: Search -->
	<div class="intro-x relative mr-3 sm:mr-6">
		<div class="search hidden sm:block">
			<input type="text" class="search__input input placeholder-theme-13" placeholder="Search...">
			<i data-feather="search" class="search__icon"></i> 
		</div>
		<a class="notification sm:hidden" href=""> <i data-feather="search" class="notification__icon"></i> </a>
		<div class="search-result">
			<div class="search-result__content">
				<div class="search-result__content__title">Pages</div>
				<div class="mb-5">
					<a href="" class="flex items-center">
						<div class="w-8 h-8 bg-theme-18 text-theme-9 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="inbox"></i> </div>
						<div class="ml-3">Mail Settings</div>
					</a>
					<a href="" class="flex items-center mt-2">
						<div class="w-8 h-8 bg-theme-17 text-theme-11 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="users"></i> </div>
						<div class="ml-3">Users & Permissions</div>
					</a>
					<a href="" class="flex items-center mt-2">
						<div class="w-8 h-8 bg-theme-14 text-theme-10 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="credit-card"></i> </div>
						<div class="ml-3">Transactions Report</div>
					</a>
				</div>
				<div class="search-result__content__title">Users</div>
				<div class="mb-5">
					<a href="" class="flex items-center mt-2">
						<div class="w-8 h-8 image-fit">
							<img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="<?php echo base_url();?>assets/dist/images/profile-13.jpg">
						</div>
						<div class="ml-3">Angelina Jolie</div>
						<div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">angelinajolie@left4code.com</div>
					</a>
					<a href="" class="flex items-center mt-2">
						<div class="w-8 h-8 image-fit">
							<img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="<?php echo base_url();?>assets/dist/images/profile-2.jpg">
						</div>
						<div class="ml-3">Johnny Depp</div>
						<div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">johnnydepp@left4code.com</div>
					</a>
					<a href="" class="flex items-center mt-2">
						<div class="w-8 h-8 image-fit">
							<img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="<?php echo base_url();?>assets/dist/images/profile-14.jpg">
						</div>
						<div class="ml-3">Russell Crowe</div>
						<div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">russellcrowe@left4code.com</div>
					</a>
					<a href="" class="flex items-center mt-2">
						<div class="w-8 h-8 image-fit">
							<img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="<?php echo base_url();?>assets/dist/images/profile-6.jpg">
						</div>
						<div class="ml-3">Al Pacino</div>
						<div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">alpacino@left4code.com</div>
					</a>
				</div>
				<div class="search-result__content__title">Products</div>
				<a href="" class="flex items-center mt-2">
					<div class="w-8 h-8 image-fit">
						<img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="<?php echo base_url();?>assets/dist/images/preview-9.jpg">
					</div>
					<div class="ml-3">Samsung Galaxy S20 Ultra</div>
					<div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Smartphone &amp; Tablet</div>
				</a>
				<a href="" class="flex items-center mt-2">
					<div class="w-8 h-8 image-fit">
						<img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="<?php echo base_url();?>assets/dist/images/preview-12.jpg">
					</div>
					<div class="ml-3">Nike Tanjun</div>
					<div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Sport &amp; Outdoor</div>
				</a>
				<a href="" class="flex items-center mt-2">
					<div class="w-8 h-8 image-fit">
						<img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="<?php echo base_url();?>assets/dist/images/preview-10.jpg">
					</div>
					<div class="ml-3">Sony Master Series A9G</div>
					<div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Electronic</div>
				</a>
				<a href="" class="flex items-center mt-2">
					<div class="w-8 h-8 image-fit">
						<img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="<?php echo base_url();?>assets/dist/images/preview-7.jpg">
					</div>
					<div class="ml-3">Samsung Galaxy S20 Ultra</div>
					<div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Smartphone &amp; Tablet</div>
				</a>
			</div>
		</div>
	</div>
	<!-- END: Search -->
	<!-- BEGIN: Notifications -->
	<?php if (count($authenticated_locations) > 1) { ?>
	<div class="intro-x dropdown relative sm:mr-6">
		<div class="dropdown-toggle notification cursor-pointer"><?php echo $authenticated_locations[$current_logged_in_location_id]; ?> </div>
		<div class="notification-content dropdown-box mt-8 absolute top-0 left-0 sm:left-auto sm:right-0 z-20 -ml-10 sm:ml-0">
			<div class="dropdown-box__content box p-2"> 
				<?php foreach ($authenticated_locations as $key => $value) { ?>
					<a href="<?php echo site_url('home/set_employee_current_location_id/'.$key) ?>" data-location-id="<?php echo $key; ?>"  class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md set_employee_current_location_id">
					<i data-feather="star" class="w-4 h-4 mr-2" style="background-color:<?php echo $this->Location->get_info($key)->color; ?>"></i>&nbsp;<?php echo $value; ?>
					</a>
				<?php } ?>
			 </div>
		</div>
	</div>
	<?php } ?>
	<?php if (is_on_demo_host() || ($this->config->item('show_language_switcher') && $this->Employee->has_module_action_permission('employees','edit_profile',$this->Employee->get_logged_in_employee_info()->person_id))) { ?>
		<?php 
		$languages = array(
			'english'  => 'English',
			'indonesia'    => 'Indonesia',
			'spanish'   => 'Español', 
			'french'    => 'Fançais',
			'italian'    => 'Italiano',
			'german'    => 'Deutsch',
			'dutch'    => 'Nederlands',
			'portugues'    => 'Portugues',
			'arabic' => 'العَرَبِيةُ‎‎',
			'khmer' => 'Khmer',
			'vietnamese' => 'Vietnamese',
			'chinese' => '中文',
			'chinese_traditional' => '繁體中文'
		);

		?>
		<div class="intro-x dropdown relative sm:mr-6">
		<div class="dropdown-toggle notification  cursor-pointer"> 
		<img class="flag_img" src="<?php echo base_url(); ?>assets/assets/images/flags/<?php echo $user_info->language ? $user_info->language : "english";  ?>.png" alt=""> </div>
		<div class="notification-content dropdown-box mt-8 absolute top-0 left-0 sm:left-auto sm:right-0 z-20 -ml-10 sm:ml-0">
         	<div class="dropdown-box__content box p-2"> 
			 <?php foreach ($languages as $key => $value) { 
					if($user_info->language!=$key){
						?>
					<a href="<?php echo site_url('employees/set_language/') ?>" data-language-id="<?php echo $key; ?>"  class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md set_employee_language">
					<img class="flag_img" src="<?php echo base_url(); ?>assets/assets/images/flags/<?php echo $key; ?>.png" alt="flags">&nbsp;<?php echo $value; ?>
					</a>
			<?php } } ?>		 		
			</div>
     	</div>
	</div>
	<?php } ?>
	<?php if ($this->Employee->has_module_permission('messages', $user_info->person_id)) {?>
	<div class="intro-x dropdown relative mr-auto sm:mr-6">
		<div class="dropdown-toggle notification notification--bullet cursor-pointer"> <i data-feather="message-circle" class="notification__icon"></i> </div>
		<div class="notification-content dropdown-box mt-8 absolute top-0 left-0 sm:left-auto sm:right-0 z-20 -ml-10 sm:ml-0">
         	<div class="dropdown-box__content box p-2"> 
			 	<?php foreach ($this->Employee->get_messages(4) as $key => $value) { ?>
					<a href="<?php echo site_url('messages/view/'.$value['message_id']); ?>" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
						<span class="avatar_left"><img src="<?php echo base_url(); ?>assets/assets/images/avatar-default.jpg" alt=""></span>
						<span class="text_info"><?php echo H($value['message']); ?></span> 
						<span class="time_info"><?php echo date(get_date_format().' '.get_time_format(), strtotime($value['created_at'])) ?> <i class="ion-record <?php echo !$value['message_read'] ? 'online' : ''?>"></i></span> 
					</a>
				<?php	} ?>
		 		<a href="<?php echo site_url('messages') ?>" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"><i data-feather="message-square" class="w-4 h-4 mr-2"></i> <?php echo lang('common_see_all_notifications');?></a> 
			 	<?php if ($this->Employee->has_module_action_permission('messages','send_message',$this->Employee->get_logged_in_employee_info()->person_id)) {  ?>									
					<a href="<?php echo site_url('messages/sent_messages') ?>" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"><i data-feather="message-square" class="w-4 h-4 mr-2"></i> <?php echo lang('common_view_sent_message');?></a> 
					<a href="<?php echo site_url('messages/send_message') ?>" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"><i data-feather="message-square" class="w-4 h-4 mr-2"></i> <?php echo lang('common_new_message');?></a> 				
					
				<?php } ?>
			 </div>
     	</div>
	</div>
	<?php } ?>
	<!-- END: Notifications -->
	<!-- BEGIN: Account Menu -->
	<div class="intro-x dropdown w-8 h-8 relative">
		<div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
			<img alt="Midone Tailwind HTML Admin Template" src="<?php echo $user_info->image_id ? app_file_url($user_info->image_id): base_url('assets/assets/images/avatar-default.jpg') ?>">
		</div>
		<div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
			<div class="dropdown-box__content box bg-theme-38 text-white">
				<div class="p-4 border-b border-theme-40">
					<div class="font-medium"><?php echo H($user_info->first_name." ".$user_info->last_name); ?></div>
					<!-- <div class="text-xs text-theme-41">Software Engineer</div> -->
				</div>
				<div class="p-2">
					<a target="_blank" href="https://support.phppointofsale.com/" target="blank"  class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="file" class="w-4 h-4 mr-2"></i> <?php echo lang('common_support'); ?> </a>
					<?php if ($this->Employee->has_module_permission('config', $user_info->person_id)) {?>
						<a href="<?php echo site_url('config')?>"  target="blank" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="settings" class="w-4 h-4 mr-2"></i><?php echo lang("common_settings"); ?></a>		
					<?php } ?>
					<?php 
					$this->load->helper('update');
					if (is_on_phppos_host() && !is_on_demo_host() && !empty($cloud_customer_info)) {?>
					<a id="update_billing_link" href="https://phppointofsale.com/update_billing.php?store_username=<?php echo $cloud_customer_info['username'];?>&username=<?php echo $this->Employee->get_logged_in_employee_info()->username; ?>&password=<?php echo $this->Employee->get_logged_in_employee_info()->password; ?>"  target="blank" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="credit-card" class="w-4 h-4 mr-2"></i> <?php echo lang('common_update_billing_info'); ?></a>
					<?php } ?>
					<a id="switch_user" href="<?php echo site_url('login/switch_user/'.($this->uri->segment(1) == 'sales' ? '0' : '1'));  ?>"  target="blank" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md" data-toggle="modal" data-target="#myModalDisableClose"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> <?php echo lang('common_switch_user'); ?></a>
					<?php if ($this->Employee->has_module_action_permission('employees','edit_profile',$this->Employee->get_logged_in_employee_info()->person_id)) {  ?>									
						<a  href="<?php echo site_url('home/edit_profile')?>"  target="blank" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md" data-toggle="modal" data-target="#myModal"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> <?php echo lang('common_edit_profile'); ?></a>			
					<?php } ?>
					<?php if ($this->config->item('timeclock')) {?>
						<a  href="<?php echo site_url('timeclocks')?>"  class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md" > <i data-feather="clock" class="w-4 h-4 mr-2"></i> <?php echo lang('employees_timeclock'); ?></a>			
					<?php } ?>		
				</div>
				<div class="p-2 border-t border-theme-40">
					<?php
						if ($this->config->item('track_payment_types') && $this->Register->is_register_log_open()) {
							$continue = $this->config->item('timeclock') && !$this->Employee->get_logged_in_employee_info()->not_required_to_clock_in ? 'timeclocks' : 'logout';
						?>	
						<a  href="<?php echo site_url('sales/closeregister?continue='.$continue)?>"  class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md" > <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> <?php echo lang('common_logout'); ?></a>			
						<?php }else{ 							
							if ($this->config->item('timeclock') && !$this->Employee->get_logged_in_employee_info()->not_required_to_clock_in && $this->Employee->is_clocked_in())
							 { ?>							
						 	<a  href="<?php echo site_url('timeclocks')?>"  class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md" > <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> <?php echo lang('common_logout'); ?></a>			

						 <?php }else{ ?>
							<a  href="<?php echo site_url('home/logout')?>"  class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md" > <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> <?php echo lang('common_logout'); ?></a>
						<?php } ?>
						<?php } ?>						
				</div>
			</div>
		</div>
	</div>
	<!-- END: Account Menu -->
</div>