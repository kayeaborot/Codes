<!DOCTYPE html>
<head>
	<title>Product Listing</title>
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
	<h2>Add a Product:</h2>
	<form action='/add_product' method='post'>
		<label>Product Name:</label><br/>
			<input type='text' name='product_name'/><br/><br/>
		<label>Price:</label><br/>
			<input type='text' name='price'/><br/><br/>
		<label>Description:</label><br/>
			<textarea name='description' cols='40' rows='5'></textarea><br/>
		<input type='submit' value='ADD'/><br/><br/>
	</form>
	<h2>Product Listings</h2>
	<table>
		<thead>
			<tr>
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
		$added_at = date('F d, Y', strtotime($product['date_added']));

		echo "<tr>
				<td>" . $product['product_name'] . "</td>
				<td>" . $product['price'] . "</td>
				<td>" . $added_at . "</td>
				<td><a href='/delete_product/" . $product['id'] . "'>DELETE</a></td>
			</tr>";
	}
?>		
		</tbody>
	</table>

</body>
</html>