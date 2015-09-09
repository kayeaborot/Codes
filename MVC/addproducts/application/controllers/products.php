<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('product');
		$this->output->enable_profiler(TRUE);
	}

	public function show_products()
	{
		$products['products'] = $this->product->show_products();
		$this->load->view('product_listing', $products);
	}

	public function add_product()
	{
		$product = $this->input->post();
		$add_product = $this->product->add_product($product);

		if($add_product)
			redirect('/show_products');
		else
			echo "Failed to add product.";
	}

	public function delete_product($id)
	{
		$delete_product = $this->product->delete_product_by_id($id);
		
		if($delete_product)
			redirect('/show_products');
		else
			echo "Failed to delete product " . $id;
	}
}