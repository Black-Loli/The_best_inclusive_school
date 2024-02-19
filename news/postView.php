<!DOCTYPE html>
<?php
include "../bd_connection.php";
$requestedPostId = $_GET['id']
?>
<html lang="en">
<head>
    <title>Лучшая инклюзивная школа</title>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="icon" href="../src/img/cropped-logo-colored-32x32.png" sizes="32x32">
    <link rel="icon" href="../src/img/cropped-logo-colored-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="../src/img/cropped-logo-colored-180x180.png">
    <meta name="description" content="Лучшая инклюзивная школа - 2023 год">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
          rel="stylesheet">
    <!--bootstrap подключение-->
    <!-- Bootstrap CSS (Cloudflare CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css"
          integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g=="
          crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- jQuery (Cloudflare CDN) -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap Bundle JS (Cloudflare CDN) -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.min.js"
            integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="../src/css/style.css">

</head>
<body>
<?php include '../menu_news.html'; ?>

<main>
    <div class="container container_new">
        <?php
        $news = $bd->query("SELECT *,
                                        DATE_FORMAT(DATE(data), '%e %M %Y') AS date 
                                   FROM News
                                   WHERE id={$requestedPostId}")->fetchAll(PDO::FETCH_OBJ);

        foreach ($news as $new) {
            echo "<h5>{$new->heading}</h5>";
            echo "<h6  style='text-transform: lowercase;'>{$new->date}</h6>";
            echo "<img src='../uploads/{$new->img}' alt='{$new->heading}'>";
            echo "{$new->text}";
        }
        ?>
    </div>
</main>


<?php include '../footer_news.html'; ?>
</body>
</html>
