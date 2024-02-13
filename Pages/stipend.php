<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="icon" href="../images/logo.png" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
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
                    <h2 class="h2site">Оформление стипендии/выплаты</h2>
                    <section class="choiceStipend">
                        <ul>
                            <li><a href="../Pages/mat_pomosh.php">Материальная помощь</a></li>
                            <li><a href="../Pages/up_academy.php">Повышенная государственная академическая стипендия</a></li>
                            <li><a href="prezRF.php">Стипендия Президента Российской Федерации</a></li>
                            <li><a href="pravRF.php">Стипендия Правительства Российской Федерации</a></li>
                            <li><a href="up_prezRF.php">Стипендия Президента Российской Федерации по приоритетным направлениям</a></li>
                            <li><a href="up_pravRF.php">Стипендия Правительства Российской Федерации по приоритетным направлениям</a></li>
                            <li><a href="social.php">Государственная социальная стипендия</a></li>
                        </ul>
                    </section>
                </article>

            <?php else: ?>
                <meta http-equiv="refresh" content="0; url=../Pages/index.php"/>
        <?php endif?>

</body>
</html>