<div class="page">  
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">     
<?php session_start(); ?>   
<?php 
$title="Личный кабинет";
require __DIR__ . '/header.php'; // подключаем шапку проекта
?>
      <div class="container col-sm-7">
      <div class="row">
      <br>
        <h2 class="catalog-title">Личный кабинет</h2><br>
    </div>
    </div>
      <div class="container">

<?php 
echo '<ul class="unit">
					
					<li><span>Дата заказа</span></li>		
					<li><span>Статус</span></li>
					<li><span>Стоимость</span></li>
					</ul>
				
					<span>⠀⠀Вы еще не совершали покупок в нашем магазине<span> 
				';
				
			
$dbUser = 'root';
$dbName = 'shem';
$dbPass = '';
$mysqli = new mysqli('localhost', $dbUser, $dbPass, $dbName);
$query = "set names utf8";
/*	
$mysqli->query($query);
$query = "select * from users";
$results = $mysqli->query($query);
if(isset($_SESSION['logged_user'])) {
while($row = $results->fetch_assoc()){
	echo '

    <h3><a class="card-title" href="card.php?type=product&id='.$row["id"].'"> '.$row["login"].'</a></h3>
	<h6>'.$row["email"].'</h6>
      <h6><span class="price">₽ '.$row["name"].'</span>

';} }
*/

/*

if (isset($_SESSION['logged_user'])) {
	

	$mysqli->query($query);
	$query = "SELECT * FROM `users`";
   // $login_true = mysqli_query($connections, "SELECT * FROM `users` WHERE login='".$_POST['login']."' AND password = MD5('".$_POST['password']."')");
    if ($query) {
        $user = $query->fetch_assoc();
        $_SESSION['logged_user'] = $query;
		
		
		
        $_SESSION['user_name'] = $user['name']; //или где там имя храниться
    } else echo "Не правильно";
  	}	
echo "Здрасте, ".$_SESSION["user_name"];
*/

?><br><br>
<a href="index.php" class="btn btn-dark btn-lk">Перейти в каталог</a>


 

</div>
</div>
</div>
<?php 
require __DIR__ . '/footer.php';
 ?>
</body>
</html>