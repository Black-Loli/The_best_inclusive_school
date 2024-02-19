<?php
include '../bd_connect.php';
echo json_encode($_POST, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
$generated_hash = uniqid();
try {
    $newFileName = $generated_hash . "." . pathinfo($_FILES['post_preview']['name'], PATHINFO_EXTENSION);
    $bd->prepare("INSERT INTO News (heading,text, data, original_name, img) VALUES (?,?,?,?,?)")
        ->execute([
            $_POST['heading'],
            $_POST['text'],
            $_POST['data'],
            $_FILES['post_preview']['name'],
            $newFileName
        ]);
    $uploaddir = '/var/www/html/uploads/';
    $uploadfile = $uploaddir . $newFileName;
    if (move_uploaded_file($_FILES['post_preview']['tmp_name'], $uploadfile)) {
        echo "Файл корректен и был успешно загружен.\n";
    } else {
        echo "Возможная атака с помощью файловой загрузки!\n";
    }
//    echo json_encode($_FILES, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    $newPostId = $bd->lastInsertId();
    header("Location: /news/postView.php?id={$newPostId}");
} catch (PDOException $e) {
    echo $e->getMessage();
}
