<!DOCTYPE html>
<html lang="en">
<head>

    <title>Лучшая инклюзивная школа</title>
    <?php include '../head.html'; ?>
</head>
<body>
<?php include '../menu.html'; ?>
<main>
    <div class="container">
        <h2 style="text-align: center;">Слайдер версия 1</h2>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" style="width: 90%; margin: 0 auto;">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../src/img/лиш фото 1.png" alt="Первый слайд">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../src/img/лиш фото 2.png" alt="Второй слайд">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../src/img/лиш фото 3.png" alt="Третий слайд">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../src/img/лиш фото 4.png" alt="Четвертый слайд">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container">
        <h2 style="text-align: center;">Слайдер версия 2</h2>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" >
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../src/img/лиш фото 1.png" alt="Первый слайд">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../src/img/лиш фото 2.png" alt="Второй слайд">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../src/img/лиш фото 3.png" alt="Третий слайд">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../src/img/лиш фото 4.png" alt="Четвертый слайд">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</main>
<?php include '../footer.html'; ?>
</body>
</html>
