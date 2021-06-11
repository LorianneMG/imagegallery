<?php require "inc/functions.inc.php" ?>
<!DOCTYPE html>
<html lang="en">
<!-- CTEC 227 / Lorianne Gilmore / May 2021 -->

<head>
	<meta charset="UTF-8">
	<title>Lorianne's Image Gallery</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<h1 class="outline">Lorianne's Image Gallery</h1>

	<div>
		<?php
		// check to see if file was uploaded
		$message = processSubmittedFile();

		// if file upload had an error display the message
		displayErrorMessage($message);

		// Delete the file if the URL contains ?file=
		deleteImage();
		require "inc/form.inc.html";
		?>
	</div>

	<h2 class="outline">Your Uploaded Pictures</h2>
	<div class="container">
		<div class="gallery">
			<?php displayImages('uploads') ?>
		</div>
	</div>
</body>

</html>