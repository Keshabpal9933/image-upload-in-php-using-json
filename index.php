<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="text-center">Form-Data</h2>
				<hr>
				<form action="json_res.php" method="POST" class="form" enctype="multipart/form-data">
					<div class="form-group row">
						<label for="name" class="col-3"><strong>Name :</strong></label>
						<div class="col-9">
							<input type="text" name="name" class="form-control form-control-sm">
						</div>
					</div>
					<div class="form-group row">
						<label for="address" class="col-3"><strong>Address :</strong></label>
						<div class="col-9">
							<input type="text" name="address" class="form-control form-control-sm">
						</div>
					</div>
					<div class="form-group row">
						<label for="email" class="col-3"><strong>Email :</strong></label>
						<div class="col-9">
							<input type="email" name="email" class="form-control form-control-sm">
						</div>
					</div>
					<div class="form-group row">
						<label for="phone" class="col-3"><strong>Phone :</strong></label>
						<div class="col-9">
							<input type="number" name="phone" class="form-control form-control-sm">
						</div>
					</div>
					<div class="form-group row">
						<label for="dob" class="col-3"><strong>Date Of Birth: </strong></label>
						<div class="col-9">
							<input type="date" name="date" class="form-control form-control-sm">
						</div>
					</div>
					<div class="form-group row">
						<label for="about" class="col-3"><strong>About :</strong></label>
						<div class="col-9"> 
						    <textarea name="about" id="about" cols="20" rows="10" class="form-control form-control-sm"></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label for="about" class="col-3"><strong>Upload File :</strong></label>
                    	<div class="col-9">
                    		<input type="file" name="image" required accept="image" > 
                    	</div>
						
					</div>
					<div class="form-group row">
						<div class="col-6">
						<button type="reset" class="btn btn-outline-danger ">Reset</button>

						<button type="submit" name="submit" class="btn btn-outline-primary">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>