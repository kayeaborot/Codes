<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {

	public function show_all_products()
	{
		return $this->db->query("SELECT * FROM products", array())->result_array();
	}

	public function show_all_manufacturers()
	{
		return $this->db->query("SELECT * FROM manufacturers", array())->result_array();
	}

	public function show_product_by_id($id)
	{
		return $this->db->query("SELECT * FROM products WHERE id = ?", $id)->row_array();
	}

	public function add_product($product)
	{
		$date_added = date("Y-m-d, H:i:s");

		$query = "INSERT INTO products (manufacturer, product_name, price, description, date_added) VALUES (?,?,?,?,?)";
   		$values = array($product['manufacturer'], $product['product_name'], $product['price'], $product['description'], $date_added);
   		return $this->db->query($query, $values);
	}

	public function update_product($product)
	{
		$date_added = date("Y-m-d, H:i:s");

		$query = "UPDATE products SET manufacturer=?, product_name=?, price=?, description=?, date_added=? WHERE id = ?";
		$values = array($product['manufacturer'], $product['product_name'], $product['price'], $product['description'], $date_added, $product['id']);
		return $this->db->query($query, $values); 
	}

	public function delete_product($id)
	{
		return $this->db->query("DELETE FROM products WHERE id = ?", $id);
	}
}
