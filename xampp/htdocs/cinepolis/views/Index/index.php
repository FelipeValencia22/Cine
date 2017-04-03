
<body>
    <?php include MODULE."template.php"; ?>
    <div id="moviesContainer">

        <div class="contenedorCentro">
        <div class="separador">Peliculas</div>
        <div class="movies">
            <?php foreach($this->peliculas as $pelicula): ?>
            <div class="movie" style=" background: url(<?php echo URL.$pelicula["poster"]; ?>);background-size:cover;">
                <div class="title"><?php echo $pelicula["titulo"]; ?></div>
            </div>
            <?php endforeach; ?>
        </div>
      </div>        
        

    </div>
</body>
</hmtl>
