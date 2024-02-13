<?php
setcookie('userid', $user['id'], time() - 3600, "/");
setcookie('userpriv', $user['privilege'], time() - 3600, "/");
header('Location: http://localhost/UGRASUServices/Pages');
?>