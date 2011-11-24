<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();

		$this->tf_assets->add_css('reset');
    	$this->tf_assets->add_css('text');
    	$this->tf_assets->add_css('form');
    	$this->tf_assets->add_css('buttons');
    	$this->tf_assets->add_css('grid');
    	$this->tf_assets->add_css('layout');
    	

    	$this->tf_assets->add_css('ui-darkness/jquery-ui-1.8.12.custom.css');
    	$this->tf_assets->add_css('plugin/jquery.visualize.css');
    	$this->tf_assets->add_css('plugin/facebox.css');
    	$this->tf_assets->add_css('plugin/uniform.default.css');
    	$this->tf_assets->add_css('plugin/dataTables.css');
    	$this->tf_assets->add_css('custom.css');
    	
        //$this->tf_assets->add_js('https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js', array('group' => 'top'));
        $this->tf_assets->add_js('jquery/jquery-1.5.2.min.js', array('group' => 'top'));
        $this->tf_assets->add_js('highcharts/js/highcharts.js', array('group' => 'top'));
        $this->tf_assets->add_js('jquery-gmap3-4.1/gmap3.js', array('group' => 'top'));
        
        $this->tf_assets->set_layout('dashboard');
        $this->tf_assets->add_data('page_title', 'Welcome to Jayon Express');

		$this->load->model('vdpi_model');

    }

    function index() {
        $crud = new grocery_CRUD();
		
		$menu_table = $this->config->item('vdpi_menu');

 		$crud->set_theme('flexigrid');
 		$crud->set_table($menu_table[$menu]['table']);

 		$crud->set_subject($menu_table[$menu]['title']);
 		$crud->columns(array_values($menu_table[$menu]['columns']));
		foreach($menu_table[$menu]['columns'] as $key=>$val){
 			$crud->display_as($val,$key);
		}
		
		$crud->callback_column('url',array($this,'url_to_link'));
		
 		$crud->unset_add();
 		$crud->unset_edit();
 		$crud->unset_delete();

 		$crud->required_fields('first_name','last_name');

 		$output = $crud->render(); 

         $this->tf_assets->add_data('output', $output);
         $this->tf_assets->set_content('dash_content_table');
         $this->tf_assets->render_layout();
        
    }

	function url_to_link($value,$row){
		return anchor('http://'.$value,$value,'target="_blank"');
	}
	
	function deliveryorders() {
        $crud = new grocery_CRUD();

 		$crud->set_theme('flexigrid');
 		$crud->set_table('delivery_orders');

 		$crud->set_subject('Delivery Order');
 		$crud->columns( 
			'delivery_id',
			'application_id',
			'buyer_id',
			'merchant_id',
			'merchant_trans_id',
			'courier_id',
			'shipping_address',
			'phone',
			'status',
			'reschedule_ref',
			'revoke_ref'
		);
		$crud->display_as('delivery_id','Delivery ID')
			->display_as('application_id','App ID')
			->display_as('buyer_id','Buyer ID')
			->display_as('merchant_id','Merchant ID')
			->display_as('merchant_trans_id','Merchant Trans ID')
			->display_as('courier_id','Courier')
			->display_as('shipping_address','Shipping Address')
			->display_as('phone','Phone')
			->display_as('status','Status')
			->display_as('reschedule_ref','Reschedule REF')
			->display_as('revoke_ref','Revoke REF');
		
 		$crud->unset_add();
 		$crud->unset_edit();
 		$crud->unset_delete();

 		$crud->required_fields('first_name','last_name');

 		$output = $crud->render(); 

         $this->tf_assets->add_data('output', $output);
         $this->tf_assets->set_content('dash_content_table');
         $this->tf_assets->render_layout();


        
    }

	function deliverylogs() {
		
		
        $crud = new grocery_CRUD();

 		$crud->set_theme('flexigrid');
 		$crud->set_table('delivery_orders');

 		$crud->set_subject('Delivery Logs');
 		$crud->columns( 
			'timestamp',	 
			'courier_id',	
			'latitude',	
			'longitude',	
			'status',	 
			'notes'
		);
		$crud->display_as('timestamp','Timestamp')
			->display_as('courier_id','Courier')
			->display_as('latitude','Latitude')
			->display_as('longitude','Longitude')
			->display_as('status','Status')	 
			->display_as('notes','Notes');
		
 		$crud->unset_add();
 		$crud->unset_edit();
 		$crud->unset_delete();

 		$crud->required_fields('first_name','last_name');

 		$output = $crud->render(); 

         $this->tf_assets->add_data('output', $output);
         $this->tf_assets->set_content('dash_content_table');
         $this->tf_assets->render_layout();


        
    }
    

	function locationlogs() {
		
		
        $crud = new grocery_CRUD();

 		$crud->set_theme('flexigrid');
 		$crud->set_table('location_log');

 		$crud->set_subject('Delivery Logs');
 		$crud->columns( 
			'timestamp',	 
			'courier_id',	
			'latitude',	
			'longitude',	
			'status',	 
			'notes'
		);
		$crud->display_as('timestamp','Timestamp')
			->display_as('courier_id','Courier')
			->display_as('latitude','Latitude')
			->display_as('longitude','Longitude')
			->display_as('status','Status')	 
			->display_as('notes','Notes');
		
 		$crud->unset_add();
 		$crud->unset_edit();
 		$crud->unset_delete();

 		$crud->required_fields('first_name','last_name');

 		$output = $crud->render(); 

         $this->tf_assets->add_data('output', $output);
         $this->tf_assets->set_content('tracker');
         $this->tf_assets->render_layout();


        
    }

	function couriers() {

        $crud = new grocery_CRUD();
 		$crud->set_theme('flexigrid');
 		$crud->set_table('location_log');

 		$crud->set_subject('Delivery Logs');
 		$crud->columns( 
			'timestamp',	 
			'courier_id',	
			'latitude',	
			'longitude',	
			'status',	 
			'notes'
		);
		$crud->display_as('timestamp','Timestamp')
			->display_as('courier_id','Courier')
			->display_as('latitude','Latitude')
			->display_as('longitude','Longitude')
			->display_as('status','Status')	 
			->display_as('notes','Notes');
		
 		$crud->unset_add();
 		$crud->unset_edit();
 		$crud->unset_delete();

 		$crud->required_fields('first_name','last_name');

 		$output = $crud->render(); 

         $this->tf_assets->add_data('output', $output);
         $this->tf_assets->set_content('dash_content_table');
         $this->tf_assets->render_layout();


        
    }


	
	function _table_names_add(){
		$menu_table = array_merge($this->config->item('vdpi_content_menu'),$this->config->item('vdpi_protocol_menu'),$this->config->item('vdpi_application_menu'));
		$selections = array();
		foreach($menu_table as $key=>$val){
			$selections[$key] = $val['title'];
		}
		return form_dropdown('table_name',$selections);
	}

	function _table_names_edit($value,$primary_key){
		$menu_table = array_merge($this->config->item('vdpi_content_menu'),$this->config->item('vdpi_protocol_menu'),$this->config->item('vdpi_application_menu'));
		$selections = array();
		foreach($menu_table as $key=>$val){
			$selections[$key] = $val['title'];
		}
		return form_dropdown('table_name',$selections,$value);
	}


	function _column_names_add(){
		$menu_table = array_merge($this->config->item('vdpi_content_menu'),$this->config->item('vdpi_protocol_menu'),$this->config->item('vdpi_application_menu'));
		$selections = array();
		foreach($menu_table as $key=>$val){
			foreach($val['columns'] as $key=>$val){
				$selections[$val] = $key; 
			}
		}
		return form_dropdown('column_name',array_unique($selections));
	}

	function _column_names_edit($value,$primary_key){
		$menu_table = array_merge($this->config->item('vdpi_content_menu'),$this->config->item('vdpi_protocol_menu'),$this->config->item('vdpi_application_menu'));
		$selections = array();
		foreach($menu_table as $key=>$val){
			foreach($val['columns'] as $key=>$val){
				$selections[$val] = $key; 
			}
		}
		return form_dropdown('column_name',array_unique($selections),$value);
	}


	function applications(){
		$crud = new grocery_CRUD();

 		$crud->set_theme('flexigrid');
		$crud->set_table('applications');

		$crud->set_subject('Threshold Application');
		
		$crud->columns('application_name','application_table');
		$crud->display_as('application_name','Application Name')
			->display_as('application_table','Application Table')
			->display_as('application_parameter','Application Parameter');

		$output = $crud->render(); 

         $this->tf_assets->add_data('output', $output);
         $this->tf_assets->set_content('dash_content_table');
         $this->tf_assets->render_layout();
	}
	
	function settings(){
		$crud = new grocery_CRUD();

 		$crud->set_theme('flexigrid');
		$crud->set_table('settings');

		$crud->set_subject('Setting');
		
		$crud->columns('skey','val_txt','val_int','name');
		$crud->display_as('skey','Key')
			->display_as('val_txt','Text Value')
			->display_as('val_int','Integer Value')
			->display_as('name','Name')
			;

		$output = $crud->render(); 

         $this->tf_assets->add_data('output', $output);
         $this->tf_assets->set_content('dash_content_table');
         $this->tf_assets->render_layout();
	}

	function periodicals(){
		$crud = new grocery_CRUD();

 		$crud->set_theme('flexigrid');
		$crud->set_table('periodicals');
		
		$crud->set_relation_n_n('periodicals', 'periodical_users', 'users', 'periodical_id', 'user_id', 'first_name');

		$crud->set_subject('Periodical Reports');
		
		$crud->columns('periodical_name','controller','action','param');
		$crud->display_as('periodical_name','Name')
			->display_as('controller','Controller')
			->display_as('action','Action')
			->display_as('param','Parameter');

		$output = $crud->render(); 

         $this->tf_assets->add_data('output', $output);
         $this->tf_assets->set_content('dash_content_table');
         $this->tf_assets->render_layout();
	}

	function reports(){
		$this->tf_assets->set_content('report');
        $this->tf_assets->render_layout();
	}

	function live($protocol,$column,$type,$lasttime = null,$interval = 0){

		header("Content-type: text/json");

		// The x value is the current JavaScript time, which is the Unix time multiplied by 1000.
		$x = time() * 1000;
		
		//print_r(getdate($x));
		
		if(is_null($lasttime) || $lasttime == 0){
			if($interval == 0){
				$where = 'capture_date >= FROM_UNIXTIME('.time().')';
			}else{
				$where = 'capture_date BETWEEN FROM_UNIXTIME('.(time() - $interval).') AND FROM_UNIXTIME('.time().') ORDER BY capture_date DESC';
			}
		}else{
			if($interval == 0){
				$where = 'capture_date >= FROM_UNIXTIME('.$lasttime.')';
			}else{
				$where = 'capture_date BETWEEN FROM_UNIXTIME('.($lasttime - $interval).') AND FROM_UNIXTIME('.$lasttime.') ORDER BY capture_date DESC';
			}
		}
				
		if($type == 'sum'){
			$sum = $this->vdpi_model->getSumFromTable($protocol,$column,$where);
		}else{
			$sum = $this->vdpi_model->getCountFromTable($protocol,$column,$where);
		}
		
		$sql = $this->db->last_query();
		
		//print_r($sum->result());
		
		$sum = $sum->row();
		
		$y = $sum->{$column};
		
		$y = (is_null($y))?10:$y;

		// Create a PHP array and echo it as JSON
		$ret = array($x, $y,$sql);
		echo json_encode($ret);
	}


}

?>