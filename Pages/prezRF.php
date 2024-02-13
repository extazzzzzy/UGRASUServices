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
    <p>Для выхода нажмите <a href="../PHP/exit.php">Выход</a></p>
    <header>
        <h1>Портал ЮГУ.Услуги</h1>
        <div class="aheader">
            <a href="../Pages/mainpage.php">Главная</a>
            <a href="../Pages/stipend.php">Подать заявление на стипендию/выплату</a>
            <a href="../Pages/myappeals.php">Мои обращения</a>
        </div>
    </header>
    <hr>
    <article>
        <h2 class="h2site">Оформление стипендии Президента РФ</h2>
        <div class="userinfo">
            <h3>Личные данные</h3>
            <?php $mysql = new mysqli('localhost','root','root','ugrasuservices');
            $user_id = $_COOKIE['userid'];
            $result = $mysql -> query("SELECT * FROM `users1` WHERE `id` = '$user_id'");
            if ($result->num_rows > 0) {
                $user_info = $result->fetch_assoc();
            }
            echo '<p> ФИО: '.$user_info['fname']." ".$user_info['sname']." ".$user_info['tname'].'</p>';
            echo '<p> Группа: '.$user_info['groupp'].'</p>';
            echo '<p> Курс: '.$user_info['course'].'</p>';
            echo '<p> Форма обучения: '.$user_info['form_education'].'</p>';
            $mysql -> close();
            ?>
        </div>
        <form action="../PHP/submit.php" method="post" enctype="multipart/form-data">
            <br>
            <p>Заявление можно скачать <a href="" target="_blank">здесь</a></p>
            <p>Необходимую информацию можно найти <a href="https://www.ugrasu.ru/student/scholarships/#block4" target="_blank">тут</a></p>
            <br>
            <label for="file">Прикрепите все нужные документы в одном PDF-файле:</label>
            <input type="file" name="file" accept=".pdf" required>
            <br>
            <button type="submit" name="but" value="3">Отправить заявление</button>
        </form>

    </article>

<?php else: ?>
    <meta http-equiv="refresh" content="0; url=../Pages/index.php"/>
<?php endif?>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
