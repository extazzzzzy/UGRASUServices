<?php
    $stipendid = filter_var(trim($_POST['but']),
        FILTER_SANITIZE_STRING);
    $documentsDir = "../documents_stipend/";
    $uploadDocumentPath = $documentsDir . uniqid('file_', true) . '.pdf';
    move_uploaded_file($_FILES['file']['tmp_name'], $uploadDocumentPath);
    if ($stipendid == 1 || $stipendid == 7) {
        $userid = $_COOKIE['userid'];
        $footing = filter_var(trim($_POST['footing']),
            FILTER_SANITIZE_STRING);


        $mysql = new mysqli('localhost','root','root','ugrasuservices');
        $zapros = $mysql->prepare("INSERT INTO `statements_stipends` (`id_users`, `id_stipends`, `path_to_document`, `footing`, `status`) VALUES (?, ?, ?, ?, 'На рассмотрении')");
        $zapros->bind_param('iiss', $userid, $stipendid, $uploadDocumentPath, $footing);
        $result = $zapros->execute();
        header('Location: http://localhost/UGRASUServices/Pages/myappeals.php');
        $mysql -> close();
    }
    else if ($stipendid == 2) {
        $userid = $_COOKIE['userid'];
        $footing1 = filter_var(trim($_POST['footing1']),
            FILTER_SANITIZE_STRING);
        $footing2 = filter_var(trim($_POST['footing2']),
            FILTER_SANITIZE_STRING);
        $footing3 = filter_var(trim($_POST['footing3']),
            FILTER_SANITIZE_STRING);
        $footing4 = filter_var(trim($_POST['footing4']),
            FILTER_SANITIZE_STRING);
        $footing5 = filter_var(trim($_POST['footing5']),
            FILTER_SANITIZE_STRING);

        $footing = $footing1." ".$footing2." ".$footing3." ".$footing4." ".$footing5;

        $mysql = new mysqli('localhost','root','root','ugrasuservices');
        $zapros = $mysql->prepare("INSERT INTO `statements_stipends` (`id_users`, `id_stipends`, `path_to_document`, `footing`, `status`) VALUES (?, ?, ?, ?, 'На рассмотрении')");
        $zapros->bind_param('iiss', $userid, $stipendid, $uploadDocumentPath, $footing);
        $result = $zapros->execute();
        header('Location: http://localhost/UGRASUServices/Pages/myappeals.php');
        $mysql -> close();
    }
    else if ($stipendid == 3 || $stipendid == 4 || $stipendid == 5 || $stipendid == 6)
    {
        $userid = $_COOKIE['userid'];

        $mysql = new mysqli('localhost','root','root','ugrasuservices');
        $zapros = $mysql->prepare("INSERT INTO `statements_stipends` (`id_users`, `id_stipends`, `path_to_document`, `status`) VALUES (?, ?, ?, 'На рассмотрении')");
        $zapros->bind_param('iis', $userid, $stipendid, $uploadDocumentPath);
        $result = $zapros->execute();
        header('Location: http://localhost/UGRASUServices/Pages/myappeals.php');
        $mysql -> close();
    }

?>