<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<p>Спасибо за вашу заявку!</p>


<hr/>
убедитесь что вы ввели верные данные:
<br/>

<?php
    echo "ваше имя: ".$_GET['name'];
?>
<br/>
<?php
    echo "ваш телефон: ".$_GET['phone'];
?>
<br/>
<?php
    echo "название вашей компании: ".$_GET['company-name'];
?>


<hr/>
<p>Наш менеджер свяжется с вами в ближайшее время!</p>

<a href="index.html">Вернуться на сайт</a>

</body>
</html>


