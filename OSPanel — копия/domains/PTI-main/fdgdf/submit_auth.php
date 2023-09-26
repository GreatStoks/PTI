<?php
$servername = "localhost";
$username = "root";
$passwordbd = "";
$dbname = "users_data";
$num_rows = True;


// Создание соединения с базой данных
$conn = new mysqli($servername, $username, $passwordbd, $dbname);
// Проверка соединения
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$password_query = mysqli_query($conn, 'SELECT password FROM `registrated_users`'); //здесь нужны ваши знания mysql 
$login_query = mysqli_query($conn, 'SELECT login FROM `registrated_users`'); //здесь нужны ваши знания mysql чтобы получить данные из БД
    
$password_fetch = mysqli_fetch_array($password_query);
$login_fetch = mysqli_fetch_array($login_query);


$password = $password_fetch['password'];
$login = $login_fetch['login'];

$inputlogin = $_POST['login'];
$inputpassword = $_POST['password'];
$a = 1;
?>

<div class="data-php" data-attr="<?=$a; ?>"></div>
<?php
if ($inputpassword === $password) {
    if ($inputlogin === $login) {

        header('Location: certification.php'); 
        echo "<script>alert(`ВЫ ЗАШЛИ УРА`);</script>";
        exit();
    }
} else {

    header('Location: certification.php'); //(страница с формой авторизации) если введены неверно
    exit();
}
$conn->close();
?>