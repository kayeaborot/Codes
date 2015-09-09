<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('product');
		$this->output->enable_profiler(TRUE);
	}

	public function index()
	{
		$get_products['products'] = $this->product->show_all_products();
		$this->load->view('products', $get_products);
	}

	public function show_product($id)
	{
		$product['product'] = $this->product->show_product_by_id($id);
		$this->load->view('edit_product',  $product);
	}

	public function add_product()
	{
		$product = $this->input->post();
		$add_product = $this->product->add_product($product);

		if($add_product)
			redirect('/products');
		else
			echo "Adding failed. <a href='/products'>BACK</a>";
	}

	public function update_product($id)
	{
		if($this->input->post('update'))
		{
			$product = $this->input->post();
			$update_product = $this->product->update_product($product);

			if($update_product)
				redirect('/products');
			else
				echo "Update failed. <a href='/products'>BACK</a>";
		}
		else
		{
			redirect("/delete_product/". $this->input->post('id'));
		}
	}

	public function delete_product($id)
	{
		$delete_product = $this->product->delete_product($id);

		if($delete_product)
			redirect('/products');
		else
			echo "Delete failed. <a href='/products'>BACK</a>";
	}
}

//end of main controller