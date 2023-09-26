<?php
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $id = 0;
    $fio = $_POST["name"];
    $email = $_POST["email"];
    $tel = $_POST["phone"];
    $date = $_POST["date"];
    $time = $_POST["time"];

  
    // Вывод данных на экран
    echo "Name: " . $fio . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Телефон: " . $tel . "<br>";
    echo "Дата аттестации: " . $date . "<br>";
    echo "Время аттестации: " . $time;

    // Подготовка и выполнение запроса на добавление записи в таблицу users
$sql = "INSERT INTO users (id, fio, email, tel, data_at, time_at)
VALUES ('$id', '$fio', '$email', '$tel', '$date', '$time')";
  }



if ($conn->query($sql) === TRUE) {
  echo "<br>" . "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}





$conn->close();
?>
<br>
<input type="button" value="вернуться" onClick='location.href="certification.php"'>