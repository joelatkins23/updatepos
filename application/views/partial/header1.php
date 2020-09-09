<!DOCTYPE html>
<html class="<?php echo $this->config->item('language');?>">
<head>
		<meta charset="utf-8">
        <link href="<?php echo base_url();?>assets/dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>
		<?php 
			$this->load->helper('demo'); 
		echo !is_on_demo_host() ?  $this->config->item('company').' -- '.lang('common_powered_by').' PHP Point Of Sale' : 'Demo - PHP Point Of Sale | Easy to use Online POS Software' 
		?>
		</title>
		
        <!-- BEGIN: CSS Assets-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/app.css" />
		<script src="<?php echo base_url();?>assets/dist/js/app.js"></script>
		<script src="<?php echo base_url();?>assets/js/all.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery-ui.custom.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootbox.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/moment-with-locales.js"></script>
		<!-- <script src="<?php echo base_url();?>assets/src/js/chart.js"></script> -->
		<!-- <script src="<?php echo base_url();?>assets/js/all.js?1572459182"></script> -->
	<?php
	if ($this->agent->browser() == 'Chrome')
	{
	?>
	<style>
	@page {
		margin: 0;
		padding: 0;
	}
	</style>
	<?php } ?>
	<script type="text/javascript">
		
		var APPLICATION_VERSION= "<?php echo APPLICATION_VERSION; ?>";
		var SITE_URL= "<?php echo site_url(); ?>";
		var BASE_URL= "<?php echo base_url(); ?>";
		var CURRENT_URL = "<?php echo current_url(); ?>";
		var CURRENT_URL_RELATIVE = "<?php echo uri_string().($_SERVER['QUERY_STRING'] ? '?'.$_SERVER['QUERY_STRING'] : ''); ?>";
		var ENABLE_SOUNDS = <?php echo $this->config->item('enable_sounds') ? 'true' : 'false'; ?>;
		var JS_DATE_FORMAT = <?php echo json_encode(get_js_date_format()); ?>;
		var JS_TIME_FORMAT = <?php echo json_encode(get_js_time_format()); ?>;
		var LOCALE =  <?php echo json_encode(get_js_locale()); ?>;
		var MONEY_NUM_DECIMALS = <?php echo $this->config->item('number_of_decimals') ? (int)$this->config->item('number_of_decimals') : 2; ?>;
		var IS_MOBILE = <?php echo $this->agent->is_mobile() ? 'true' : 'false'; ?>;
		var ENABLE_QUICK_EDIT = <?php echo $this->config->item('enable_quick_edit') ? 'true' : 'false'; ?>;
		var PER_PAGE = <?php echo json_encode($this->config->item('number_of_items_per_page') ? (int)$this->config->item('number_of_items_per_page') : 20); ?>;
		var EMPLOYEE_PERSON_ID = <?php echo json_encode((!defined("ENVIRONMENT") or ENVIRONMENT == 'development') ? 'test' : $this->Employee->get_logged_in_employee_info()->person_id);?>;
		var INVOICE_NO =  <?php echo json_encode(substr((date('mdy')).(time() - strtotime("today")).($this->Employee->get_logged_in_employee_info()->person_id), 0, 16)); ?>;
		var CONFIRM_CLONE = <?php echo json_encode(lang('common_confirm_clone')); ?>;
		var CONFIRM_IMAGE_DELETE = <?php echo json_encode(lang('common_confirm_image_delete')); ?>;
	</script>
	
	<script type="text/javascript">
		
		<?php
		$week_start_day = $this->config->item('week_start_day') ? $this->config->item('week_start_day') : 'monday';
		
		$dow = $week_start_day == 'monday' ? 1 : 0;
		?>
		moment.locale(LOCALE, {
		  week: { dow: <?php echo $dow; ?> }
		});
		
		var SCREEN_WIDTH = $(window).width();
		var SCREEN_HEIGHT = $(window).height();
		COMMON_SUCCESS = <?php echo json_encode(lang('common_success')); ?>;
		COMMON_ERROR = <?php echo json_encode(lang('common_error')); ?>;
		
		bootbox.addLocale('ar', {
		    OK : 'حسنا',
		    CANCEL : 'إلغاء',
		    CONFIRM : 'تأكيد'			
		});
		
		bootbox.addLocale('km', {
		    OK :'យល់ព្រម',
		    CANCEL : 'បោះបង់',
		    CONFIRM : 'បញ្ជាក់ការ'			
		});
		bootbox.setLocale(LOCALE);		
		var RATE_LIMIT_IN_MS = 60*1000;
		var NUMBER_OF_REQUESTS_ALLOWED = 120;
		var NUMBER_OF_REQUESTS = 0;
		
		setInterval(function()
		{ 
			NUMBER_OF_REQUESTS = 0;
			
		}, RATE_LIMIT_IN_MS);
		
		$.ajaxSetup ({
			cache: false,
			headers: { "cache-control": "no-cache" },
		  beforeSend: function canSendAjaxRequest()
			{
				var can_send = NUMBER_OF_REQUESTS < NUMBER_OF_REQUESTS_ALLOWED;
				NUMBER_OF_REQUESTS++;
				return can_send;
			}
		});
		
		$(document).on('show.bs.modal','.bootbox.modal', function (e) 
		{
			var isShown = ($(".bootbox.modal").data('bs.modal') || {}).isShown;
			//If we have a dialog already don't open another one
			if (isShown)
			{
				//Cleanup the dialog(s) that was added to dom
				$('.bootbox.modal:not(:first)').remove();
				
				//Prevent double modal from showing up
				return e.preventDefault();
			}
		});
		
		
		toastr.options = {
		  "closeButton": true,
		  "debug": false,
		  "newestOnTop": false,
		  "progressBar": false,
		  "positionClass": "toast-top-right",
		  "preventDuplicates": false,
		  "onclick": null,
		  "showDuration": "300",
		  "hideDuration": "1000",
		  "timeOut": "5000",
		  "extendedTimeOut": "1000",
		  "showEasing": "swing",
		  "hideEasing": "linear",
		  "showMethod": "fadeIn",
		  "hideMethod": "fadeOut"
		}
		
    $.fn.editableform.buttons = 
      '<button tabindex="-1" type="submit" class="btn btn-primary btn-sm editable-submit">'+
        '<i class="icon ti-check"></i>'+
      '</button>'+
      '<button tabindex="-1" type="button" class="btn btn-default btn-sm editable-cancel">'+
        '<i class="icon ti-close"></i>'+
      '</button>';
	  
 	  $.fn.editable.defaults.emptytext = <?php echo json_encode(lang('common_empty')); ?>;
		
		$(document).ready(function()
		{
			
				$(".wrapper.mini-bar .left-bar").hover(
				   function() {
				     $(this).parent().removeClass('mini-bar');
				   }, function() {
				     $(this).parent().addClass('mini-bar');
				   }
				 );
			
			

	    $('.menu-bar').click(function(e){                  
	    	e.preventDefault();
	        $(".wrapper").toggleClass('mini-bar');        
	    }); 
    					
			//Ajax submit current location
			$(".set_employee_current_location_id").on('click',function(e)
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
				    	window.location.reload(true);	
				    }
				});
				
			});
			
			$(".set_employee_language").on('click',function(e)
			{
				e.preventDefault();

				var language_id = $(this).data('language-id');
				$.ajax({
				    type: 'POST',
				    url: '<?php echo site_url('employees/set_language'); ?>',
				    data: { 
				        'employee_language_id': language_id, 
				    },
				    success: function(){
				    	window.location.reload(true);	
				    }
				});
				
			});
			
			<?php
			$this->load->helper('update');
			if (!is_on_phppos_host())
			{
				//If we are using on browser close (NULL or ""; both false) then we want to keep session alive
				if ($this->db->table_exists('app_config') && !$this->Appconfig->get_raw_phppos_session_expiration())
				{		
					?>
					//Keep session alive by sending a request every 5 minutes
					setInterval(function(){$.get('<?php echo site_url('home/keep_alive'); ?>');}, 300000);
					<?php } ?>
			<?php } ?>
		});
	</script>

</head>
<body class="app">
	<!-- <div class="modal fade hidden-print" id="myModal" tabindex="-1" role="dialog" aria-hidden="true"></div>
	<div class="modal fade hidden-print" id="myModalDisableClose" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static"></div>
	 -->
	<div class="mobile-menu md:hidden">
		<div class="mobile-menu-bar">
			<a href="<?php echo site_url('home'); ?>" class="flex mr-auto">
				<img alt="Midone Tailwind HTML Admin Template" class="w-6" src="<?php echo base_url();?>assets/dist/images/logo.svg">
			</a>
			<a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
		</div>
		<ul class="border-t border-theme-24 py-5 hidden">             
			<li>
				<a href="<?php echo site_url('home'); ?>" class="menu <?php echo $this->uri->segment(1)=='home'  ? ' menu--active' : ''; ?>">
					<div class="menu__icon"> <i data-feather="home"></i> </div>
					<div class="menu__title"> <?php echo lang('common_dashboard'); ?> </div>
				</a>
			</li>
			<?php foreach($allowed_modules->result() as $module) { ?>
				<li>
					<a href="<?php echo site_url("$module->module_id");?>" class="menu <?php echo $module->module_id==$this->uri->segment(1)  ? 'menu--active' : ''; ?>">
						<div class="menu__icon"> <i data-feather="<?php echo $module->o_icon; ?>"></i> </div>
						<div class="menu__title"> <?php echo lang("module_".$module->module_id) ?> </div>
					</a>
				</li>
			<?php } ?>
			<?php if ($this->config->item('timeclock')) {?>
				<li>
					<a href="<?php echo site_url("timeclocks");?>" class="menu <?php echo 'timeclocks'==$this->uri->segment(1)  ? 'menu--active' : ''; ?>">
						<div class="menu__icon"> <i data-feather="clock"></i> </div>
						<div class="menu__title"> <?php echo lang("employees_timeclock") ?> </div>
					</a>
				</li>				
			<?php } ?>
		</ul>
	</div>
        <!-- END: Mobile Menu -->
	<div class="flex" style="overflow-x: hidden;">
		<!-- BEGIN: Side Menu -->
		<nav class="side-nav">
			<a href="<?php echo site_url('home'); ?>" class="intro-x flex items-center pl-5 pt-4">
				<img alt="Midone Tailwind HTML Admin Template" class="w-6" src="<?php echo base_url();?>assets/dist/images/logo.svg">
				<span class="hidden xl:block text-white text-lg ml-3"> Mid<span class="font-medium">one</span> </span>
			</a>
			<div class="side-nav__devider my-6"></div>
			<ul>
				<li>
					<a href="<?php echo site_url('home'); ?>" class="side-menu <?php echo $this->uri->segment(1)=='home'  ? ' side-menu--active' : ''; ?>">
						<div class="side-menu__icon"> <i data-feather="home"></i> </div>
						<div class="side-menu__title"> <?php echo lang('common_dashboard'); ?> </div>
					</a>
				</li>
				<?php foreach($allowed_modules->result() as $module) { ?>
					<li>
						<a href="<?php echo site_url("$module->module_id");?>" class="side-menu <?php echo $module->module_id==$this->uri->segment(1)  ? 'side-menu--active' : ''; ?>">
							<div class="side-menu__icon"> <i data-feather="<?php echo $module->o_icon; ?>"></i> </div>
							<div class="side-menu__title"> <?php echo lang("module_".$module->module_id) ?> </div>
						</a>
					</li>
				<?php } ?>
				<?php if ($this->config->item('timeclock')) {?>
					<li>
						<a href="<?php echo site_url("timeclocks");?>" class="side-menu <?php echo 'timeclocks'==$this->uri->segment(1)  ? 'side-menu--active' : ''; ?>">
							<div class="side-menu__icon"> <i data-feather="clock"></i> </div>
							<div class="side-menu__title"> <?php echo lang("employees_timeclock") ?> </div>
						</a>
					</li>				
				<?php } ?>
			</ul>
		</nav>
		<div class="content">
		<?php $this->load->view("partial/topbar"); 
