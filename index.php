<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<div class="page">         
<?php 
$title="Главная";
require __DIR__ . '/header.php'; // подключаем шапку проекта
?>

<!--Начало Блок карусели-->
<div class="container carousel">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/banner2.png" class="d-block w-100" alt="banner2">
    </div>
    <div class="carousel-item">
      <img src="images/banner.png" class="d-block w-100" alt="banner">
    </div>
  </div>
</div>
</div>
      <!--Конец Блок карусели-->


      <div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="section-1 search-1">
                <form action="search.php" method="post">
                    <input type="text" name="search-term" class="text-input col-sm-12 search-input" placeholder="Что интересует...">
                    <button class="btn btn-search" name="do_login" type="submit">Найти </button>
                </form>
            </div>
        </div>
    </div>
</div>
      
      <div class="container col-sm-7">
      <div class="row">
      <br>
        <h2 class="catalog-title">Каталог</h2>
    </div>
    </div>
      <div class="container cards_list">
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/myCart.js"></script>
<div class="container mt-4">
<div class="row">
</head>
<body>
<?php 
$dbUser = 'root';
$dbName = 'shem';
$dbPass = '';
$mysqli = new mysqli('localhost', $dbUser, $dbPass, $dbName);
$query = "set names utf8";
$mysqli->query($query);
$query = "select * from products";
$results = $mysqli->query($query);
while($row = $results->fetch_assoc()){
	echo '

<div class="col-sm-3">
<div class="product-item">
  <a href="card.php?type=product&id='.$row["id"].'"> <img src="'.$row["img"].'"></a>
  <div class="product-list">
    <h3><a class="card-title" href="card.php?type=product&id='.$row["id"].'"> '.$row["title"].'</a></h3>
	<h6>'.$row["place"].'</h6>
      <h6><span class="price">₽ '.$row["price"].'</span>
      <a href="" class="button" onClick = "addToCart('.$row["id"].');">В корзину</a>
  </div>
</div>
</div>';}

?>
      <div class="container col-sm-9">
      <div class="row">
      <br>
        <h2 class="tg-title">Telegram Bot</h2>
    </div>
    </div>
    <p class="text-qr">Не можете определиться свечу с каким ароматом выбрать? 
        Воспользуйтесь нашим ботом, он поможет вам с выбором!</p>
    <div class="container col-sm-4">
      <div class="row">
      <img class="qr" src="images/qr.png">
    </div>
    </div>

    <div class="container col-sm-9">
      <div class="row">
      <a href="https://t.me/shem_store_bot" class="buttonQr">Перейти</a>
    </div>
    </div>

</div>

</div>
</div>
<?php 
require __DIR__ . '/footer.php';
 ?>
</body>
</html>

