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
        <h2>Новая новость</h2>
        <form enctype="multipart/form-data" method="POST" action="new_news.php">
            <input class="form" type="text" name="heading" placeholder="Введите заголовок" required=""/>
            <textarea class="form" name="text" placeholder="Введите текст новости" required=""></textarea>
<!--            <input style="display:flex;" type="text" name="text" placeholder="Введите текст новости" required=""/>-->
            <input class="form" style="display:flex;" type="date" name="data" required=""/>
            <input class="form" type="file" name="post_preview">
            <button type="submit" class="form-btn"> Добавить</button>
        </form>
    </div>
</main>


<?php include '../footer.html'; ?>
</body>
</html>
