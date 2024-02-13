<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mysql = new mysqli('localhost', 'root', 'root', 'ugrasuservices');
    $status = 'На рассмотрении';
    $id = $_POST['user_id'];

    $sql = "UPDATE `statements_stipends` SET `status`=? WHERE `id`=?";

    if ($stmt = $mysql->prepare($sql)) {
        $stmt->bind_param("si", $status, $id);
        $stmt->execute();
        $stmt->close();
    } else {
        echo "Ошибка подготовки запроса: " . $mysql->error;
    }
    header('Location: http://localhost/UGRASUServices/Pages/appeals.php');
    $mysql->close();
}
?>
