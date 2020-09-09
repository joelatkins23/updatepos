<?php

class InventorySummaryCustom_model extends CI_Model  {
    
    public function checkIfPersonHasPermissionForInv(){
   $getPId=     $this->session->userdata('person_id');
 
        $this->db->select('*');
$this->db->from('permissions_actions');// I use aliasing make joins easier
$this->db->where("person_id",$getPId) ;
$this->db->where("module_id",'reports') ; 
$this->db->where("action_id",'view_inventory_at_all_locations') ; 
 
 
    $query = $this->db->get();
    $result = $query->result_array();
 
if(sizeof($result)=="1") {
    return 1;
}

else {
    return 0;
}
  
        
    }
    
    	public  function myCustomLocationsData(array $params) {
 
 $userLocationIds=$params['location_ids'];

$this->db->select('name, location_id');
$this->db->from('locations ');// I use aliasing make joins easier
$this->db->where_in("location_id",$userLocationIds) ;
$this->db->order_by('location_id', 'DESC');
 
 
 
    $query = $this->db->get();
    $result = $query->result();

  // display data in array();
   return $result;
  
  
	}
	
	
		public  function getTotalSaleForLocation($id,$rDate) {
 


$this->db->select('total');
$this->db->from('sales');// I use aliasing make joins easier
 
$this->db->where("location_id",$id);
 $this->db->where('DATE(sale_time)',$rDate);
//$this->db->join('TableB AS B', 'B.ID = C.TableBId', 'INNER');
 
 
    $query = $this->db->get();
    $results = $query->result();
    
$totalSaleAmount=0;
foreach($results as $result) {
    $totalSaleAmount=$totalSaleAmount+$result->total;
}
 
  // display data in array();
   return $totalSaleAmount;
  
  
	}
	
	public function getCostToItemSoldForLocation($id,$rDate) {
	    $this->db->select('total, profit');
$this->db->from('sales');// I use aliasing make joins easier
 
$this->db->where("location_id",$id);
 $this->db->where('DATE(sale_time)',$rDate);
//$this->db->join('TableB AS B', 'B.ID = C.TableBId', 'INNER');
 
 
    $query = $this->db->get();
    $results = $query->result();
 
$totalCostAmount=0;
foreach($results as $result) {
    $getCostFromTotal=$result->total - $result->profit;
    $totalCostAmount=$totalCostAmount+$getCostFromTotal;
}
 
  // display data in array();
   return $totalCostAmount;
	}
	
	public function getNetRevenueForLocation($id,$rDate) {
	    
$this->db->select('profit');
$this->db->from('sales');// I use aliasing make joins easier
 
$this->db->where("location_id",$id);
 $this->db->where('DATE(sale_time)',$rDate);
//$this->db->join('TableB AS B', 'B.ID = C.TableBId', 'INNER');
 
 
    $query = $this->db->get();
    $results = $query->result();
$totalNetRevenue=0;
foreach($results as $result) {
    $totalNetRevenue=$totalNetRevenue+$result->profit;
}
 
  // display data in array();
   return $totalNetRevenue;
	}
	
	public function getStockBalanceForLocation($id,$rDate) {
	    	   
 
$this->load->database();
 $strLocationItems=$this->db->dbprefix('inventory');
 $strItems=$this->db->dbprefix('items');
$myRawSql='SELECT sum('.$strLocationItems.'.trans_inventory * '.$strItems.'.cost_price) as stockAmount From '.$strLocationItems.'  JOIN '.$strItems.' on '.$strItems.'.item_id = '.$strLocationItems.'.trans_items WHERE '.$strLocationItems.'.location_id = ?  AND '.$strLocationItems.'.trans_date <= ?';
  
if(is_numeric($id) &&  date_parse($rDate) !=false) {
$query = $this->db->query($myRawSql, [$id,$rDate]);
}
else {
    return "oops";
}


 
    $results = $query->result();
$totalStockBalance=0;
 
foreach($results as $result) {
    $totalStockBalance=$totalStockBalance+$result->stockAmount;
}
 
  // display data in array();
   return $totalStockBalance;
	}
	
	
	public function getNewStockRecdOfLocation($id,$rDate) {
	    
	    
$this->db->select('total');
$this->db->from('receivings');// I use aliasing make joins easier
 
//$this->db->where("location_id",$id);
 $this->db->where("transfer_to_location_id =",$id);
 $this->db->where('DATE(receiving_time)',$rDate);
 //$this->db->where("transfer_to_location_id",NULL);
 
//$this->db->join('TableB AS B', 'B.ID = C.TableBId', 'INNER');
 
 
    $query = $this->db->get();
    $results = $query->result();
$totalNewStockOfLocation=0;
foreach($results as $result) {
    $totalNewStockOfLocation=$totalNewStockOfLocation+$result->total;
}
 
  // display data in array();
   return $totalNewStockOfLocation;
   
	}
	
	
		public function getNewStockTransferOfLocation($id,$rDate) {
	    
	    
$this->db->select('total');
$this->db->from('receivings');// I use aliasing make joins easier
 
$this->db->where("location_id",$id);
 $this->db->where("transfer_to_location_id !=",NULL);
  $this->db->where('DATE(receiving_time)',$rDate);
//$this->db->join('TableB AS B', 'B.ID = C.TableBId', 'INNER');
 
 
    $query = $this->db->get();
    $results = $query->result();
$totalTrasnferStockOfLocation=0;
foreach($results as $result) {
    $totalTrasnferStockOfLocation=$totalTrasnferStockOfLocation+$result->total;
}
 
  // display data in array();
   return $totalTrasnferStockOfLocation;
   
	}
	
}

?>