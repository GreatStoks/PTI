<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/dd180fc14e.js" crossorigin="anonymous"></script>
	<title>Запись на аттестацию</title>
</head>
<body>
	<header>
	<?php
        include 'auth_panel.php';
  			?>
		<nav>
            <div class="logo">
			<a href="index.php"><img src="logo.png" alt="логотип"></a>
			</div>
			<ul>
				<li><a href="index.php">о себе</a></li>
				<li><a href="resume.php">резюме</a></li>
				<li><a href="certification.php">запись на аттестацию</a></li>
			</ul>

		</nav>

	</header>
<main>
	<h1>Запись на аттестацию</h1>
	<p>Для записи на аттестацию заполните форму ниже:</p>
	<form action="submit_certification.php" method="post">
		<label for="name">ФИО:</label>
		<input type="text" id="name" name="name" required>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>

		<label for="phone">Телефон:</label>
		<input type="tel" id="phone" name="phone" pattern="\+7\d{9}" required>

		<label for="date">Дата аттестации:</label>
		<input type="date" id="date" name="date" required>

		<label for="time">Время аттестации:</label>
		<input type="time" id="time" name="time" required>

		<input type="submit" value="Отправить">
	</form>

	<input type="button" value="показать список участников" id="spisok_but">
	<div class="spisok_uch" id="spisok_uch_id">


<?

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users_data";
$num_rows = True;


// Создание соединения с базой данных
$conn = new mysqli($servername, $username, $password, $dbname);
// Проверка соединения
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

	$sql = "SELECT * FROM Users";
if($result = $conn->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк
    echo "<p>Записавшихся на участие: $rowsCount</p>";
    echo "<table><tr><th>Id</th><th>Имя</th><th>Возраст</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["fio"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>
</div>
</main>

<footer>
        <div class="social">
            <a href="#"><i class="fa fa-facebook-f"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>

        </div>
	<div>
            <i class="fa-regular fa-thumbs-up fa-5x"></i>
	</div>
        <div class="credits">
            <p>Сайт разработан <span>ФИ</span>.</p>
            <p>Copyright © 2023.</p>
        </div>
</footer>
<script src="index.js"></script>
<script src="https://kit.fontawesome.com/sha384-Dji2eQ/lT3GyTbTtjiP0tJNbRD3GBrOMZoW0g0sGBy2QJSJ0dAKlt2Q+XdzLJ2Sl.js" crossorigin="anonymous"></script>
</body>
</html>