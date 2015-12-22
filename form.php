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
    echo "ваше имя: ".$_POST['name'];
?>
<br/>
<?php
    echo "ваш телефон: ".$_POST['phone'];
?>
<br/>
<?php
    echo "название вашей компании: ".$_POST['company-name'];
?>


<hr/>
<p>Наш менеджер свяжется с вами в ближайшее время!</p>




<?php
$mail = "kornienko.andriy@gmail.com";
$subj = "Заявка с сайта";
$text = "Имя заказчика ".$_POST['name']."
Телефон заказчика ".$_POST['phone']."
Название компании ".$_POST['company-name']."
";

mail($mail, $subj, $text);
?>





<a href="index.html">Вернуться на сайт</a>

</body>
</html>


