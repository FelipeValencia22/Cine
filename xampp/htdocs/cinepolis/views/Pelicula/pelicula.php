
<body>
    <?php include MODULE . "template.php"; ?>
    <div style="width: 60%; margin: 5% auto;">
        <form class="form-horizontal" action="<?php echo URL . "Pelicula/save" ?>" enctype="multipart/form-data"  method="post">
            <h2> Crear pelicula</h2>
            <div class="form-group">
                <input type="text" class="form-control" name="titulo" placeholder="Titulo" >
            </div>

            <div class="form-group">
                <label for="selectSub" >Subtitulada</label>
                <select id="selectSub" name="subtitulada" style="margin: 10px;">
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>

            </div>

            <div class="form-group">
                 <label for="poster" >Poster</label>
                 <input id="poster" type="file" class="form-control" name="poster" style="margin: 10px;">
            </div>

            <div class="form-group">
                <label for="fecha" >Fecha Estreno</label>
                <input id="fecha" type="date" class="form-control" name="fecha_estreno" style="margin: 10px;">
            </div>

            <div class="form-group">
                <label for="Categoria" >Categoria</label>
                <select id="Categoria" name="categoria" style="margin: 10px;">
                    <?php foreach ($this->categorias as $categoria): ?>
                        <option value="<?php echo $categoria["id"]; ?>"><?php echo $categoria["nombre"]; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="btn btn-default" style="width: 10%;">Guardar</button>
        </form>
    </div>
</div>
</body>
</hmtl>
