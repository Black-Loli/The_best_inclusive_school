<!DOCTYPE html>
<?php include "../bd_connect.php"; ?>
<html lang="en">
<head>

  <title>Лучшая инклюзивная школа</title>
    <?php include '../head.html'; ?>
</head>
<body>
<?php include '../menu.html'; ?>

<main>
    <div class="container">
        <h2>Новости конкурса</h2>
        <div class="news">



            <?php
            $news = $bd->query("SELECT *,
                                        DATE_FORMAT(DATE(data), '%e %M %Y') AS date_news
                                        FROM News
                                        ORDER BY id DESC")->fetchAll(PDO::FETCH_OBJ);

            foreach ($news as $new) {
                echo "<a class='new' href='/lish/news/postView.php?id={$new->id}'>";
                echo "<h6  style='text-transform: lowercase;'>{$new->date_news}</h6>";
                echo "<img src='../uploads/{$new->img}' alt=''>";
                echo "<h5>{$new->heading}</h5>";
                echo "</a>";
            }
            ?>

        </div>
    </div>
</main>


<?php include '../footer.html'; ?>
</body>
</html>
