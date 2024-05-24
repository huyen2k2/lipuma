<?php 

	class thongke extends DController{
		
		public function __construct(){

			$data = array();
			parent::__construct();

		}
		public function index(){
			$this->search();
		}

		public function thongke(){
			Session::init();

			$ordermodel = $this->load->model('ordermodel');

			$categorymodel = $this->load->model('categorymodel');

			$today = date('d/m/Y');

			$first_day_this_month = date('01/m/Y'); // hard-coded '01' for first day

			$last_day_this_month  = date('t/m/Y');

			$today_data = $ordermodel->list_order_by_time('tbl_order', $today, $today);

			$current_month_data = $ordermodel->list_order_by_time('tbl_order', $first_day_this_month, $last_day_this_month);

			if (isset($_POST['start_date']) && isset($_POST['end_date'])) {
				$first_day_this_month = strtotime($_POST['start_date']);
				$last_day_this_month = strtotime($_POST['end_date']);
				$first_day_this_month = date('d/m/Y', $first_day_this_month);
				$last_day_this_month = date('d/m/Y', $last_day_this_month);
				$custom_filter = $ordermodel->list_order_by_time('tbl_order', $first_day_this_month, $last_day_this_month);
			}

			$total_today = 0;

			foreach ($today_data as $key => $value) {
				$cond = 'order_code='. $value['order_code'];

				// List products by order code
				$products = $ordermodel->list_order_details_by_condition('tbl_order_details', $cond);
				// Get Price and Quantity
				foreach ($products as $key => $product) {
					$price_a_product = (int)$categorymodel->productpricebyid('tbl_product', 'id_product='.$product['product_id'])[0]['price_product'];
					$quantity = (int)$product['product_quantity'];
					$total_today += $quantity*$price_a_product;
				}
			}

			$total_month = 0;

			foreach ($current_month_data as $key => $value) {
				$cond = 'order_code='. $value['order_code'];

				// List products by order code
				$products = $ordermodel->list_order_details_by_condition('tbl_order_details', $cond);
				// Get Price and Quantity
				foreach ($products as $key => $product) {
					$price_a_product = (int)$categorymodel->productpricebyid('tbl_product', 'id_product='.$product['product_id'])[0]['price_product'];
					$quantity = (int)$product['product_quantity'];
					$total_month += $quantity*$price_a_product;
				}
			}

		

			$data['today'] = $today_data;
			$data['today']['total'] = $total_today;

			$data['month'] = $current_month_data;
			$data['month']['total'] = $total_month;

			if (isset($custom_filter)) {

				$custom_total = 0;

				foreach ($custom_filter as $key => $value) {
					$cond = 'order_code='. $value['order_code'];
	
					// List products by order code
					$products = $ordermodel->list_order_details_by_condition('tbl_order_details', $cond);
					// Get Price and Quantity
					foreach ($products as $key => $product) {
						$price_a_product = (int)$categorymodel->productpricebyid('tbl_product', 'id_product='.$product['product_id'])[0]['price_product'];
						$quantity = (int)$product['product_quantity'];
						$custom_total += $quantity*$price_a_product;
					}
				}

				$data['custom_time'] = $custom_filter;
				$data['custom_time']['total'] = $custom_total;
			}

			$this->load->view('cpanel/thongke/thongke', $data);
		}
	}


?>