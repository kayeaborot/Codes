<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}

	public function show_products()
	{
		return $this->db->query("SELECT * FROM products", array())->result_array();
	}

	public function add_product($product)
	{
		$date_added = date("Y-m-d, H:i:s");

		$query = "INSERT INTO products (product_name, price, description, date_added) VALUES (?,?,?,?)";
   		$values = array($product['product_name'], $product['price'], $product['description'], $date_added);
   		return $this->db->query($query, $values);
	}

	public function delete_product_by_id($id)
	{
		return $this->db->query("DELETE FROM products WHERE id = ?", $id);
	}
}

//end of product model