<?php     if( $this->Employee->has_module_action_permission('reports','view_inventory_at_all_locations',$this->Employee->get_logged_in_employee_info()->person_id) =="1") { ?>
<div class="panel panel-piluku">
	<div class="panel-heading">
		<?php echo lang('reports_reports'); ?> - <?php echo 'Inventory Summary' ?>
	
		<?php  	  if($key) { ?>
			<a href="<?php echo site_url("reports/delete_saved_report/".$key);?>" class="btn btn-primary text-white hidden-print delete_saved_report pull-right"> <?php echo lang('reports_unsave_report'); ?></a>	
		<?php } else { ?>
			<button class="btn btn-primary text-white hidden-print save_report_button pull-right" data-message="<?php echo H(lang('reports_enter_report_name'));?>"> <?php echo lang('reports_save_report'); ?></button>
		<?php } ?>		
	</div>	
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="col-md-3 col-xs-12 col-sm-6 ">
			        <div class="info-seven redbg-info">
			            <div class="logo-seven"><i class="ti-widget dark-info-red"></i></div>
			            <?php echo to_currency($details_data['dash_combined_total_sales_made']); ?>
			            <p><?php echo "Total Sales Made"; ?></p>
			        </div>
			    </div>
			    <div class="col-md-3 col-xs-12 col-sm-6 ">
		            <div class="info-seven greenbg-info">
		                <div class="logo-seven"><i class="ti-widget dark-info-green"></i></div>
		                <?php echo to_currency($details_data['dash_combined_cost_to_items_sold']); ?>
		                <p><?php echo "Cost To Items Sold"; ?></p>
		            </div>
		        </div>
				  
		        <div class="col-md-3 col-xs-12 col-sm-6 ">
		            <div class="info-seven orangebg-info">
		                <div class="logo-seven"><i class="ti-widget dark-info-orange"></i></div>
		                <?php echo to_currency($details_data['dash_combined_net_revenue']); ?>
		                <p><?php echo "Net Revenue"; ?></p>
		            </div>
		        </div>
				  
				  <div class="col-md-3 col-xs-12 col-sm-6">
		            <div class="info-seven primarybg-info">
		                <div class="logo-seven"><i class="ti-widget dark-info-primary"></i></div>
		                <?php echo to_currency($details_data['dash_combined_stock_balances_BF']); ?>
		                <p><?php echo "Stock Balances B/F"; ?></p>
		            </div>
		        </div>
				  
				  
		        <div class="col-md-3 col-xs-12 col-sm-6 ">
		            <div class="info-seven redbg-info">
		                <div class="logo-seven"><i class="ti-widget dark-info-red"></i></div>
		                <?php echo to_currency($details_data['dash_combined_new_stock_recd']); ?>
		                <p><?php echo "New Stock Received"; ?></p>
		            </div>
		        </div>
		        
				  
		        <div class="col-md-3 col-xs-12 col-sm-6 ">
		            <div class="info-seven primarybg-info">
		                <div class="logo-seven"><i class="ti-widget dark-info-primary"></i></div>
		                <?php echo to_currency($details_data['dash_combined_stock_transfer']); ?>
		                <p><?php echo "Stock Transferred"; ?></p>
		            </div>
		        </div>
				  
		        <div class="col-md-3 col-xs-12 col-sm-6 ">
		            <div class="info-seven greenbg-info">
		                <div class="logo-seven"><i class="ti-widget dark-info-green"></i></div>
		                <?php echo to_currency($details_data['dash_combined_stock_sold']); ?>
		                <p><?php echo "Stock Sold"; ?></p>
		            </div>
					</div>				
				  		  
		        <div class="col-md-3 col-xs-12 col-sm-6 ">
		            <div class="info-seven greenbg-info">
		                <div class="logo-seven"><i class="ti-widget dark-info-green"></i></div>
		                <?php echo to_currency($details_data['dash_combined_stock_balances_CD']); ?>
		                <p><?php echo "Stock Balances C/D"; ?></p>
		            </div>
					</div>
				  
		    
				 
	 
				 
			</div>
		</div>

	</div>
</div>
	<?php } ?>