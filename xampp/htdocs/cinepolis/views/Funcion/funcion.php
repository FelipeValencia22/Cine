
<body>
    <?php include MODULE . "template.php"; ?>
    <div style="width: 60%; margin: 5% auto;">
        <form class="form-horizontal" action="<?php echo URL . "Funcion/save" ?>" enctype="multipart/form-data"  method="post">
            <h2> Crear función</h2>
            <div class="form-group">
                <label for="horaid" >Hora</label>
                <input id="horaid" type="text" class="form-control" name="hora" placeholder="" >
            </div>

            <div class="form-group">
                <label for="fecha" >Fecha</label>
                <input id="fecha" type="date" class="form-control" name="fecha" style="margin: 10px;">
            </div>

            <div class="form-group">
                <label for="salaid" >Sala</label>
                <select id="salaid" name="sala" style="margin: 10px;">
                    <?php foreach ($this->salas as $sala): ?>
                        <option value="<?php echo $sala["id"]; ?>"><?php echo $sala["numero"]; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="form-group">
                <label for="peliculaid" >Película</label>
                <select id="peliculaid" name="pelicula" style="margin: 10px;">
                    <?php foreach ($this->peliculas as $pelicula): ?>
                        <option value="<?php echo $pelicula["id"]; ?>"><?php echo $pelicula["titulo"]; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="btn btn-default" style="width: 10%;">Guardar</button>
        </form>
    </div>
</div>
</body>
</hmtl>
