// Получаем ссылку на логотип
var logo = document.getElementById("takoito");

// Получаем ссылку на кнопку
var button = document.getElementById("changeColorButton");

// Добавляем обработчик события на клик по кнопке
button.addEventListener("click", function() {
  // Изменяем цвет логотипа на красный
logo.style.color = "red";
logo.style.filter = 'hue-rotate(90deg)';
});
