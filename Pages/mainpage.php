<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="icon" href="../images/logo.png" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЮГУ.Услуги</title>
</head>
<body>

<?php
if ($_COOKIE['userid'] == ''):
    ?>
    <meta http-equiv="refresh" content="0; url=../Pages/index.php"/>
<?php elseif ($_COOKIE['userpriv'] == '0'): ?>
    <header>
        <p>Для выхода нажмите <a href="../PHP/exit.php">Выход</a></p>
        <h1>Портал ЮГУ.Услуги</h1>
        <h2 class="h2site">Главная</h2>
        <div class="aheader">
            <a href="../Pages/mainpage.php">Главная</a>
            <a href="../Pages/stipend.php">Подать заявление на стипендию/выплату</a>
            <a href="../Pages/myappeals.php">Мои обращения</a>
        </div>
    </header>
    <hr>
<?php else: ?>
    <header>
        <p>Для выхода нажмите <a href="../PHP/exit.php">Выход</a></p>
        <h1>Портал ЮГУ.Услуги</h1>
        <h2 class="h2site">Главная</h2>
        <div class="aheader">
            <a href="../Pages/mainpage.php">Главная</a>
            <a href="../Pages/appeals.php">Обращения</a>
            <a href="../Pages/archive_appeals.php">Архив обращений</a>
        </div>
    </header>
    <hr>
<?php endif?>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>