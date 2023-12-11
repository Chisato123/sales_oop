<?php
session_start();

require '../classes/User.php';

$user = new User;
$all_products = $user->getAllProducts();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
	<!-- Bootstrap CSS v5.2.1 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	<!-- fontawesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
	<nav class="navbar navbar-expand" style="margin-bottom: 80px;">
		<div class="container">
			<!-- <a href="dashboard.php" class="navbar-brand">
				<h1 class="h3">The Company</h1>
			</a> -->
			<div class="navbar-nav d-flex justify-content-between w-100">
				<div class="text-start display-6"><a href="dashboard.php"><i class="fa-solid fa-house"></i></a></div>

				<div class="text-center"><span class="navbar-text">Welcome <?= $_SESSION['username'] ?></span></div>

				<div class="text-end display-6">
					<form action="../actions/logout.php" method="post" class="d-flex ms-2">
						<button type="submit" class="text-danger bg-transparent border-0"><i class="fa-solid fa-user-xmark"></i></button>
					</form>
				</div>
			</div>
		</div>
	</nav>

	<main class="row justify-content-center gx-0">
		<div class="col-6">
			<div class="row">
				<div class="col">
					<h2 class="display-6 text-start">Product List</h2>
				</div>
				<!-- <form action="add-product.php" method="post">
						<button type="submit" class="btn btn-outline-info"><i class="fa-solid fa-plus"></i></button>
					</form> -->
				<div class="col text-end">
					<button type="button" class="btn btn-outline-info " data-bs-toggle="modal" data-bs-target="#Modal"><i class="fa-solid fa-plus"></i>
					</button>
				</div>
			</div>

			<table class="table table-hover align-middle">
				<thead class="bg-dark text-white">
					<tr>
						<th>ID</th>
						<th>PRODUCT NAME</th>
						<th>PRICE</th>
						<th>QUANTITY</th>
						<th></th>
						<th></th>
					</tr>
				</thead>

				<tbody>

					<?php
					while ($products = $all_products->fetch_assoc()) { //arrayに変換
					?>

						<tr>
							<td><?= $products['id']; ?></td>
							<td><?= $products['product_name']; ?></td>
							<td><?= $products['price']; ?></td>
							<td><?= $products['quantity']; ?></td>
							<td>


								<a href="edit-product.php" class="btn btn-outline-warning">
									<i class="fa-regular fa-pen-to-square"></i>
								</a>
								<a href="../actions/delete.php" class="btn btn-outline-danger">
									<i class="fa-solid fa-trash"></i>
								</a>

							</td>
						</tr>

					<?php } ?>



					<?php
					if (empty($all_products)) { //databeseに登録されているものが何もなければ、表示される。
					?>
						<tr>
							<td class="text-center text-danger bg-secondary" colspan="6">No Records Found</td>
						</tr>
					<?php } ?>

				</tbody>
			</table>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5 py-3 text-info mx-auto" id="exampleModalLabel"><i class="fa-solid fa-box"></i> Add Product</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form action="../actions/add-product.php" method="post">
							<div class="mb-3">
								<label for="product_name" class="form-label fw-bold">Product Name</label>
								<input type="text" name="product_name" id="product_name" class="form-control" autofocus required>
							</div>
							<div class="input-group mb-3">
								<label for="price" class="form-label fw-bold">Price</label>
								<div class="input-group">
									<span class="input-group-text">$</span>
									<input type="number" name="price" id="price" class="form-control" required>
								</div>
							</div>
							<div class="mb-3">
								<label for="quantity" class="form-label fw-bold">Quantity</label>
								<input type="number" name="quantity" id="quantity" class="form-control" required>
							</div>
							<button type="submit" class="btn btn-info w-100">Add</button>
						</form>
					</div>
				</div>
			</div>
		</div>

	</main>

	<!-- Bootstrap JavaScript Libraries -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
	</script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
	</script>

</body>

</html>
