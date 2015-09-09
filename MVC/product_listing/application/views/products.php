<!DOCTYPE html>
<head>
	<title>List of Products</title>
	<style>
		table, th, td 
		{
		    border: 1px solid black;
		    border-collapse: collapse;
		}
		th, td
		{
		    padding: 10px;
		}
	</style>
</head>
<body>
	<h2>Trader's Store</h2>
	<h3>Product Listing:</h3>
		<table>
			<thead>
				<tr>
					<th>Manufacturer</th>
					<th>Product Name</th>
					<th>Price ($)</th>
					<th>Date Added</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
<?php
	foreach ($products as $product) 
	{
		$date_added = date('F d, Y', strtotime($product['date_added']));

		echo "<tr>
					<td>" . $product['manufacturer'] . "</td>
					<td><a href='/show_product/". $product['id'] ."'>" . $product['product_name'] . "</td>
					<td>" . $product['price'] . "</td>
					<td>" . $date_added . "</td>
					<td>
						<a href='/show_product/". $product['id'] ."'>EDIT</a>
						<a href='/delete_product/". $product['id'] ."'>DELETE</a>
					</td>
			</tr>";
	}		
?>
			</tbody>
		</table>
	<h3>Add a Product:</h3>
	<form action='/add_product' method='post'>
		<label>Manufacturer/ Brand:</label><br/>
			<select name='manufacturer'>
<?php
			$manufacturers = $this->product->show_all_manufacturers();

			foreach ($manufacturers as $manufacturer) 
			{
				echo "<option>" . $manufacturer['manufacturer'] . "</option>";
			}
?>
			</select><br/><br/>
		<label>Product Name:</label><br/>
			<input type='text' name='product_name'/><br/><br/>
		<label>Price ($):</label><br/>
			<input type='text' name='price'/><br/><br/>
		<label>Description:</label><br/>
			<textarea name='description' cols='40' rows='5'></textarea><br/><br/>
		<input type='submit' value='ADD'/>
	</form>
</body>
</html>