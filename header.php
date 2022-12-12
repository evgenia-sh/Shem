<?php session_start(); ?>
<html lang="ru">
<head>
<link rel="shortcut icon" href="#">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/myCart.js"></script>
	<meta content="text/html; charset=utf-8">
</head>
<body>

<nav class="navbar navbar-expend-md navbar-dark bg-dark sticky-top">
	<div class="container-fluid">
			<a href="index.php" class="navbar-brand"><img src="images/logo_2.svg" class="d-inline-block align-bottom"></a>
		<div class="float-right">	
		<div class="row mx-md-n">
		<div class="pr-4">
			<a href="checkout.php"><img class="pad"  height="40px" src="images/cart-icon.svg" ></a> 
	</div>	
<div class="pr-5">
<div class="pr-5">
<div class="pr-4">
<?php if(!isset($_SESSION['logged_user'])) { ?>

<a href="login.php" class="btn btn-outline-light">Войти</a> 
<?php } else if(isset($_SESSION['logged_user'])) {?>
<a href="lk.php" class="btn btn-outline-light">Личный кабинет</a>
<a href="logout.php" class="btn btn-outline-light">Выйти</a>	
<?php } ?>
</div>	
</div>
		</div>	
		</div>
		</div>
	</div>
</nav>

</body>
</html>