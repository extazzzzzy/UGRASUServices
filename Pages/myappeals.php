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
        <a href="../Pages/mainpage.php">Главная</a>
        <a href="../Pages/stipend.php">Подать заявление на стипендию/выплату</a>
        <a href="../Pages/myappeals.php">Мои обращения</a>
    </header>
    <hr>
    <article>
        <h2 class="h2site">Мои обращения</h2>
        <div class="table_my_appeals">
            <table>
                <thead>
                    <tr>
                        <th>№</th>
                        <th>Наименование</th>
                        <th>Комментарий</th>
                        <th>Дата и время</th>
                        <th>Статус</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $mysql = new mysqli('localhost', 'root', 'root', 'ugrasuservices');
                    $user_id = $_COOKIE['userid'];
                    $result = $mysql->query("SELECT ss.*, s.name_stipend FROM `statements_stipends` ss JOIN `stipends` s ON ss.id_stipends = s.id WHERE ss.`id_users` = '$user_id'");
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>'.$row['id'].'</td>';
                        echo '<td>'.$row['name_stipend'].'</td>';
                        echo '<td>'.$row['comment'].'</td>';
                        echo '<td>'.$row['date_create'].'</td>';
                        echo '<td>'.$row['status'].'</td>';
                        echo '</tr>';
                    }
                    $mysql->close();
                    ?>
                </tbody>
            </table>
        </div>
    </article>

<?php else: ?>
    <meta http-equiv="refresh" content="0; url=../Pages/index.php"/>
<?php endif?>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>