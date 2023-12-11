<?php
session_start();

require '../classes/User.php';

$user_obj = new User;

// $user = $user_obj->getAllProducts();
$product = $user_obj->getAllProducts();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit User</title>
	<!-- Bootstrap CSS v5.2.1 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	<!-- fontawesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
	<nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom: 80px;">
		<div class="container">
			<a href="dashboard.php" class="navbar-brand">
				<h1 class="h3">The Company</h1>
			</a>
			<div class="navbar-nav">
				<span class="navbar-text">Welcome <?= $_SESSION['username'] ?></span>
				<form action="../actions/logout.php" method="post" class="d-flex ms-2">
					<button type="submit" class="text-danger bg-transparent border-0">Log out</button>
				</form>
			</div>
		</div>
	</nav>

	<main>
		<div class="col-4 mx-auto">
			<h2 class="text-center mb-4 text-warning">EDIT PRODUCT</h2>

			<form action="../actions/edit-product.php" method="post" enctype="multipart/form-data">
				<!-- enctypeがないとデータがアップデートできない -->

				<div class="mb-3">
					<label for="">Product Name</label>
					<input type="text" name="product_name" class="form-control" value="<?= $product['product_name']; ?>">
				</div>

				<div class="mb-3">
					<label for="">Price</label>
					<input type="text" name="price" id="" class="form-control" value="<?= $product['price']; ?>">
				</div>

				<div class=" mb-3">
					<label for="">Quantity</label>
					<input type="text" name="quantity" id="" class="form-control" value="<?= $product['quantity']; ?>">
				</div>

				<div class=" text-end">
					<button type="submit" class="btn btn-warning w-100">Edit</button>
				</div>

			</form>
		</div>



	</main>



	<!-- Bootstrap JavaScript Libraries -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
	</script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
	</script>

</body>

</html>
