<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/auth.css">
    <link rel="icon" href="../images/logo.png" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЮГУ.Услуги</title>
</head>
<body>

        <?php
            if ($_COOKIE['userid'] == ''):
        ?>
                <section class="section-auth">
                    <div class="form-box">
                        <div class="form-value">
                            <form action="../PHP/auth.php" method="post">
                                <a href="#">
                                    <img src="../images/logo.png" class="main-logo" alt>
                                </a>
                                <h2 class="h2auth">ЮГУ. Услуги</h2>
                                <div class="inputbox">
                                    <ion-icon name="log-in-outline"></ion-icon>
                                    <input id="username" type="text" name="login" style="padding-left: 5px" required>
                                    <label>Login</label>
                                </div>
                                <div class="inputbox">
                                    <ion-icon name="lock-closed-outline"></ion-icon>
                                    <input id="password" type="password" name="password" style="padding-left: 5px" required>
                                    <label>Password</label>
                                </div>
                                <button class="button-auth">Войти</button>
                            </form>
                        </div>
                    </div>
                </section>
        <?php else: ?>
                <meta http-equiv="refresh" content="0; url=../Pages/mainpage.php"/>
        <?php endif?>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>