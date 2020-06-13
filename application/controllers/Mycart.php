<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mycart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$url= base_url("assets/json/countries.json");
        $get_url = file_get_contents($url);
        $data = json_decode($get_url);
 
		$check = $this->db->order_by('invoice_id','desc')->limit(1)->get('sky_customer')->num_rows();
		$no = $this->db->order_by('invoice_id','desc')->limit(1)->get('sky_customer')->row();
		if($check > 0){
			$inv_no = substr($no->invoice_id,10)+1;
			$newNo = '#'.date('Ymd').'-'. $inv_no .'';
		}else{
			$newNo = '#'.date('Ymd').'-1';
		}

        $data_array = array(
			'datalist' => $data,
			'id' => $newNo,
        );

		$this->load->view('checkout/head');
		$this->load->view('checkout/index',$data_array);
		$this->load->view('checkout/foot');
	}
    // ADD CART
	public function add_to_cart()
	{ 
		$data = array(
			'id' => $this->input->post('product_id'), 
			'name' => $this->input->post('product_name'), 
			'price' => $this->input->post('product_price'), 
			'img' => $this->input->post('product_img'), 
			'qty' => $this->input->post('quantity'), 
		);
		$this->cart->insert($data);
		echo $this->show_mini_cart();
	}

	public function add_to_mini_cart(){
		$data = array(
			'id' => $this->input->post('product_id'), 
			'name' => $this->input->post('product_name'), 
			'price' => $this->input->post('product_price'), 
			'img' => $this->input->post('product_img'), 
			'qty' => $this->input->post('quantity'), 
		);
		$this->cart->insert($data);
		echo $this->show_mini_cart();
	}

	public function add_count_cart()
	{
		$data = array(
			'id' => $this->input->post('product_id'), 
			'name' => $this->input->post('product_name'), 
			'price' => $this->input->post('product_price'), 
			'img' => $this->input->post('product_img'), 
			'qty' => $this->input->post('quantity'),
		);
		$this->cart->insert($data);
		echo $this->show_count_cart();
	}
	// END ADD CART

	// SHOW CART
	public function show_cart()
	{ 
		$output = '';
		if(count($this->cart->contents()) > 0){
			foreach ($this->cart->contents() as $items) {
				$output .='
								<div class="checkout-cart-item">
									<div class="cart-item">
										<div class="cart-item-image ng-star-inserted wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.2" style="background: url('.$items['img'].');"></div>
										<div class="cart-item-title">
											<h2 class="wow fadeInLeft go" data-wow-duration="0.5s" data-wow-delay="0.4s">'.$items['name'].'</h2>
											<h4 class="ng-star-inserted wow fadeInLeft go" data-wow-duration="0.5s" data-wow-delay="0.6s">Size - standard</h4>
											<h4 class="wow fadeInLeft go" data-wow-duration="0.5s" data-wow-delay="0.8s">Quantity - '.$items['qty'].'</h4>
											<div class="quantity-selector-checkout">
												<input class="input-button" min="1" name="quantity" type="text" value="'.$items['qty'].'" readonly>
												<button class="product-quantity-minus" data-productqty="'.$items['qty'].'" id="'.$items['rowid'].'"> - </button>
												<button class="product-quantity-plus" data-productqty="'.$items['qty'].'" id="'.$items['rowid'].'"> + </button>
											</div>
										</div>
										<div class="cart-item-subtotal"> <button type="button" id="'.$items['rowid'].'" class="romove_cart btn btn-danger btn-sm"><i class="fa fa-times-circle-o" aria-hidden="true"></i></button> </div>
									</div>
								</div>
				';
			}
		}else{
			$output = '<p class="cart-empty-notice mt-3 wow shake">You don&#39;t have any items in your cart!</p>';
		}
		return $output;
	}

	public function show_mini_cart()
	{
		$output = '';
		if(count($this->cart->contents()) > 0){
			$output .= '
							<div class="cart-list">
				';
				foreach ($this->cart->contents() as $items) {
					$output .='
								<div class="mini-cart-item">
									<div class="cart-item">
										<div class="cart-item-product">
											
											<a class="cart-item-image ng-star-inserted" href="#" style="background: url('.$items['img'].');"></a>
											<div class="cart-item-title">
											<a href="#">
												<h2>'.$items['name'].'</h2>
											</a>
											<h4 class="ng-star-inserted">Size - single</h4>
											<h4 class="ng-star-inserted">Colour - white</h4>
											<h4 class="ng-star-inserted">Warmth - light warmth</h4>
											</div>
											<div class="romove_mini_cart cart-item-delete" id="'.$items['rowid'].'"></div>

										</div>

										<div class="product-quantity-input">
											<h4 class="desktop">Quantity</h4>
											<h4 class="mobile">QTY</h4>
											<div class="quantity-selector">
												<input min="1" name="quantity" type="text" value="'.$items['qty'].'" readonly>
												<button class="product-quantity-minus" data-productqty="'.$items['qty'].'" id="'.$items['rowid'].'"> - </button>
												<button class="product-quantity-plus" data-productqty="'.$items['qty'].'" id="'.$items['rowid'].'"> + </button>
											</div>
										</div>
									</div>
								</div>
						';
				}
				$output .= '
								<div class=" cart-summary-actions">
									<a class="btn btn-pink" href="'.base_url('mycart').'">Checkout </a>
								</div>
							</div>


					';
		}else{
			$output .= '
							<div class="cart-list">
								<p class="empty-cart-notice"> You dont have any items in your cart.</p>
							</div>
			';
		}
		return $output;
	}

	public function show_count_cart()
	{
		$output = '';

		$output .=  count($this->cart->contents());

		return $output;
		
	}
	// END SHOW CART

	// LOAD CART
	public function load_cart()
	{ 
		echo $this->show_cart();
	}

	public function load_count_cart()
	{ 
		echo $this->show_count_cart();
	}

	public function load_mini_cart()
	{ 
		echo $this->show_mini_cart();
	}
	
	// END LOAD CART

	// UPDATE CART
	public function update_cart()
	{ 
		$data = array(
			'rowid' => $this->input->post('row_id'), 
			'qty' => $this->input->post('qty'), 
		);
		$this->cart->update($data);
		echo $this->show_cart();
	}
	public function min_checkout_cart()
	{ 
		$data = array(
			'rowid' => $this->input->post('row_id'), 
			'qty' => $this->input->post('qty')-1, 
		);
		$this->cart->update($data);
		echo $this->show_cart();
	}

	public function plus_checkout_cart()
	{ 
		$data = array(
			'rowid' => $this->input->post('row_id'), 
			'qty' => $this->input->post('qty')+1, 
		);
		$this->cart->update($data);
		echo $this->show_cart();
	}
	
	public function min_cart()
	{ 
		$data = array(
			'rowid' => $this->input->post('row_id'), 
			'qty' => $this->input->post('qty')-1, 
		);
		$this->cart->update($data);
		echo $this->show_mini_cart();
	}

	public function plus_cart()
	{ 
		$data = array(
			'rowid' => $this->input->post('row_id'), 
			'qty' => $this->input->post('qty')+1, 
		);
		$this->cart->update($data);
		echo $this->show_mini_cart();
	}

	// END UPDATE CART

	// REMOVE ITEM FROM CART
	public function delete_cart()
	{ 
		$data = array(
			'rowid' => $this->input->post('row_id'), 
			'qty' => 0, 
		);
		$this->cart->update($data);
		echo $this->show_cart();
	}

	public function delete_mini_cart()
	{ 
		$data = array(
			'rowid' => $this->input->post('row_id'), 
			'qty' => 0, 
		);
		$this->cart->update($data);
		echo $this->show_mini_cart();
	}
	public function remove_all() {
		$this->cart->destroy();
	}

    // END REMOVE ITEM FROM CART
}