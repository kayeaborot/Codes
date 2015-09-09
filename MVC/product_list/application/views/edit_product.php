<!DOCTYPE html>
<head>
	<title><?= $product['product_name']; ?></title>
</head>
<body>
	<h4><a href="/products">Go to Product Listing</a><h4>
	<h2><?= $product['product_name'] ?></h2>
<?=	"<form action='/update_product/" . $product['id'] . "' method='post'>";
?>
		<label>Manufacturer/ Brand:</label><br/>
			<select name='manufacturer'>
				
<?php	
		$manufacturers = $this->product->show_all_manufacturers();

		foreach ($manufacturers as $manufacturer) 
		{
			echo "<option>" . $manufacturer['manufacturer'] . "</option>";
		}

	echo "</select><br/><br/>
		<label>Product Name:</label><br/>
			<input type='text' name='product_name' value='" . $product['product_name'] . "'><br/><br/>
		<label>Price ($):</label><br/>
			<input type='text' name='price' value='" . $product['price'] . "'><br/><br/>
		<label>Description:</label><br/>
		<textarea name='description' cols='40' rows='5'>" . $product['description'] . "</textarea><br/><br/>
		<input type='hidden' name='id' value='" . $product['id'] . "'/>
		<input type='submit' name='update' value='UPDATE'/>
		<input type='submit' name='delete' value='DELETE'/>";
?>
	</form>
</body>
</html>