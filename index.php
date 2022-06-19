<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>tanlash</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-4 offset-4">
				<form action="natija.php" method="post">
					<select name="select" class="form-control mt-3">
						<option value="Sum">So'm</option>
						<option value="Dollar">Dollar</option>
						<option value="Yevro">Yevro</option>
						<option value="Rubl">Rubl</option>
					</select>
					<div class="text-right my-3">
						<button name="btn" class="btn btn-outline-success">Keyingi qadam</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>