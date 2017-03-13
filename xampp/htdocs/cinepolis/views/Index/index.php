<?php include MODULE . "head.php"; ?>

<body>
    <?php include MODULE . "header.php"; ?>
    <div id="mainSlider"></div>
    <div id="moviesContainer">

        <div class="separador">Cartelera</div>
        <div class="movies">
            <?php foreach ($this->peliculas as $pelicula): ?>
                <div class="title"><?php echo $pelicula["titulo"]; ?></div>
            <?php endforeach; ?>
        </div>

        <div class="separador">Próximos Estrenos</div>
        <div class="movies">

            <div class="movie">
                <img src="" alt="">
                <div class="title">Home</div>
            </div>
            <div class="movie">
                <img src="" alt="">
                <div class="title">Home</div>
            </div>
            <div class="movie">
                <img src="" alt="">
                <div class="title">Home</div>
            </div>
        </div>

        <div class="separador">Cine VIP</div>
        <div class="movies">
            <div class="movie">
                <img src="" alt="">
                <div class="title">Home</div>
            </div>
            <div class="movie">
                <img src="" alt="">
                <div class="title">Home</div>
            </div>
            <div class="movie">
                <img src="" alt="">
                <div class="title">Home</div>
            </div>
            <div class="movie">
                <img src="" alt="">
                <div class="title">Home</div>
            </div>
            <div class="movie">
                <img src="" alt="">
                <div class="title">Home</div>
            </div>
            <div class="movie">
                <img src="" alt="">
                <div class="title">Home</div>
            </div>
            <div class="movie">
                <img src="" alt="">
                <div class="title">Home</div>
            </div>
            <div class="movie">
                <img src="" alt="">
                <div class="title">Home</div>
            </div>
        </div>

    </div>
</body>
</hmtl>
