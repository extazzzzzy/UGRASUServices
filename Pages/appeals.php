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
    <meta http-equiv="refresh" content="0; url=../Pages/mainpage.php"/>
<?php else: ?>
    <p>Для выхода нажмите <a href="../PHP/exit.php">Выход</a></p>
    <header>
        <h1>Портал ЮГУ.Услуги</h1>
        <div class="aheader">
            <a href="../Pages/mainpage.php">Главная</a>
            <a href="../Pages/appeals.php">Обращения</a>
            <a href="../Pages/archive_appeals.php">Архив обращений</a>
        </div>
    </header>
    <hr>
    <article>
        <h2>Обращения</h2>
        <div class="table_my_appeals">
            <table>
                <thead>
                    <tr>
                        <th>№</th>
                        <th>Заявитель</th>
                        <th>Наименование</th>
                        <th>Дата и время</th>
                        <th>Основание</th>
                        <th>Документы</th>
                        <th>Комментарий</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $mysql = new mysqli('localhost', 'root', 'root', 'ugrasuservices');
                    $result = $mysql->query("SELECT ss.*, s.name_stipend, u.fname, u.sname, u.tname FROM `statements_stipends` ss JOIN `stipends` s ON ss.id_stipends = s.id JOIN `users1` u ON ss.id_users = u.id");
                    while ($row = $result->fetch_assoc()) {
                        if ($row['status'] == 'Принято' || $row['status'] == 'Отклонено') {
                            continue;
                        }
                        echo '<tr>';
                        echo '<form action="../PHP/submit_appeals.php" method="post">';
                        echo '<td>'.$row['id'].'</td>';
                        echo '<td>'.$row['fname'].' '.$row['sname'].' '.$row['tname'].'</td>';
                        echo '<td>'.$row['name_stipend'].'</td>';
                        echo '<td>'.$row['date_create'].'</td>';
                        echo '<td>'.$row['footing'].'</td>';
                        echo '<td><a href="'.$row['path_to_document'].'" download>Скачать</a></td>';
                        echo '<td><input type="text" name="comment" value = "'.$row['comment'].'" placeholder="Комментарий" required></td>';
                        echo '<td><input type="hidden" name="user_id" value="'.$row['id'].'"></td>';
                        echo '<td><button type="submit" name="but" value="1">Принять</button></td>';
                        echo '<td><button class="red_btn" type="submit" name="but" value="0">Отклонить</button></td>';
                        echo '</form>';
                        echo '</tr>';
                    }
                    $mysql->close();
                    ?>
                </tbody>
            </table>
        </div>
    </article>
<?php endif?>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>