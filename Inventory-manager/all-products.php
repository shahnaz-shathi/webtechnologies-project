<?php
require_once "controllers/product-controller.php";
$products= getAllProducts();
?>


<div>
	<h1>All Products</h1>
	<table border="1" style=border-collapse:collapse;>
		<thead>
			<th>Id</th>
			<th> Product Name</th>
			<th>Brand Name</th>
			<th>Category Name</th>
			<th>Product Quantity</th>
            <th>Product Price</th>
            <th>Action</th>
			<th>Action</th>

		</thead>
		<tbody>
		<?php
		foreach($products as $product)
		{
			echo "<tr>";
			echo "<td>".$product["product_id"]."</td>";
			echo "<td>".$product["product_name"]."</td>";
			echo "<td>".$product["brand_name"]."</td>";
			echo "<td>".$product["category_name"]."</td>";
			echo "<td>".$product["product_quantity"]."</td>";
			echo "<td>".$product["product_price"]."</td>";

			echo '<td><button><a href="edit-product.php" >Edit</a></button></td>';
			echo '<td><button><a href="delete-product.php">Delete</a></button></td>';
			echo "</tr>";

		}
		?>
			
		</tbody>
	</table>

</div>
