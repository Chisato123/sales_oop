<!doctype html>
<html lang="en">

<head>
	<title>Login</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS v5.2.1 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	<!-- fontawesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
	<div style="height:100vh">
		<div class="row h-100">
			<div class="card w-25 mx-auto my-auto border-0">
				<div class="card-header bg-white border-0 py-3">
					<h1 class="text-primary text-center">LOGIN <i class="fa-solid fa-right-to-bracket"></i></h1>
				</div>

				<div class="card-body border-0">
					<form action="../actions/login.php" method="post">

						<div class="mb-3">
							<label for="username" class="form-label fw-bold">Username</label>
							<input type="text" name="username" id="username" class="form-control " required>
						</div>

						<div class="mb-3">
							<label for="password" class="form-label fw-bold">Password</label>
							<input type="password" name="password" id="password" class="form-control" required>
						</div>

						<button type="submit" class="btn btn-primary w-100 mb-3">Login</button>

						<!-- Button trigger modal -->
						<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal">
							Create an Account
						</button>
					</form>

					<!-- Modal -->
					<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h1 class="modal-title fs-5 py-3 text-danger mx-auto" id="exampleModalLabel"><i class="fa-solid fa-user-plus"></i> Registration</h1>
									<!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
								</div>
								<div class="modal-body">
									<form action="../actions/register.php" method="post">
										<div class="mb-3">
											<label for="first_name" class="form-label fw-bold">First Name</label>
											<input type="text" name="first_name" id="first_name" class="form-control" autofocus required>
										</div>

										<div class="mb-3">
											<label for="last_name" class="form-label fw-bold">Last Name</label>
											<input type="text" name="last_name" id="last_name" class="form-control" required>
										</div>

										<div class="mb-3">
											<label for="username" class="form-label fw-bold">Username</label>
											<input type="text" name="username" id="username" class="form-control">
										</div>

										<div class="mb-3">
											<label for="password" class="form-label fw-bold">Password</label>
											<input type="password" name="password" id="password" class="form-control" required>
										</div>

										<button type="submit" class="btn btn-danger w-100">Register</button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- <a href="register.php" class="btn btn-danger text-center">Create an Account</a> -->
					<!-- <button type="button" class="btn btn-danger"><a href="register.php" class="text-decoration-none text-white"> Create an Account</a></button> -->

				</div>
			</div>
		</div>
	</div>



	<!-- Bootstrap JavaScript Libraries -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
	</script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
	</script>
</body>

</html>
