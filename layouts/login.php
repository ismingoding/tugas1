<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Suendri">
	<title>Login Admin</title>

	<link rel="shortcut icon" href="<?php echo AST; ?>/img/umah.png" type="image/x-icon">
	<style>
		body {
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			margin: 0 100px;
			
		}

		main {
			width: 960px;
			margin: 100px auto;
			line-height: 30px;
		}

		.error {
			background-color: #f8d7da;
			padding: 10px;
			margin-top: 20px;
		}
		body {
			font-family: sans-serif;
			background: #d5f0f3;
		}
		h1{
			text-align: center;
			/*ketebalan font*/
			font-weight: 300;
		}
		
		.tulisan_login{
			text-align: center;
			/*membuat semua huruf menjadi kapital*/
			text-transform: uppercase;
		}
		
		.kotak_login{
			width: 350px;
			background: white;
			/*meletakkan form ke tengah*/
			margin: 80px auto;
			padding: 30px 20px;
		}
		
		label{
			font-size: 11pt;
		}
		
		.form_login{
			/*membuat lebar form penuh*/
			box-sizing : border-box;
			width: 100%;
			padding: 10px;
			font-size: 11pt;
			margin-bottom: 20px;
		}
		
		.tombol_login{
			background: #46de4b;
			color: white;
			font-size: 11pt;
			width: 100%;
			border: none;
			border-radius: 3px;
			padding: 10px 20px;
		}
		
		.link{
			color: #232323;
			text-decoration: none;
			font-size: 10pt;
		}
	</style>
</head>

<body>
	<main>
		<?php
		require_once ROOT . "app/views/" . $view . ".php";
		session_destroy();
		?>
	</main>
</body>

</html>