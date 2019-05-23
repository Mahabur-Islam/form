
<?php

//print_r($_POST)
//echo "<pre>";
//print_r($_GET);

//=====for Post mathod
//=======================
//$product= $_GET['Product_name'];
//$product= $_GET['Product_price'];
//$product= $_GET['discreption'];

//=====for Post mathod
//=======================
//$product= $_POST['Product_name'];
//$product= $_POST['Product_price'];
//$product= $_POST['discreption'];

//=====for Post Defult valu
//===========================
$product= $_POST['Product_name'] ?? "";
$product= $_POST['Product_price'] ?? "";
$product= $_POST['discreption'] ?? "";

if (empty($product)) { 
echo "please ennter the product name";
	}

?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>Product Information</h2>
			<form action="#" method="_POST">
				<div class="form-group">
				<label for="Product_name">Product Name</label><br>
				<input type="text" name="product_name" id="Product_name" class="form-control">
				</div>
				<div class="form-group">
				<label for="Product_price">Product Price</label><br>
				<input type="text" name="Product_price" id="Product_price" class="form-control">
				</div>
                <div class="form-group">
				<label for="discreption">Discreption</label><br>
				<textarea name="discreption" id="discreption" rows="4" class="form-control"> Discreption</textarea>
				
				</div>
				<div class="form-group">
				<input type="submit" name="submit" value="submit" class="btn btn primary">
				
				</div>

			</form>


		</div>
	</div>
</div>


