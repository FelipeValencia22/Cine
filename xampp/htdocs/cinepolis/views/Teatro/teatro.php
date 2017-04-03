<head>
    <link rel="stylesheet" href="<?php print(URL); ?>public/styles/style.css">
</head>
<body>
    <?php include MODULE . "template.php"; ?>
    <div style="width: 90%; margin: 5% auto;">
        <form class="form-horizontal" action="<?php echo URL . "Teatro/save" ?>" enctype="multipart/form-data"  method="post">
            <h1> Crear teatro </h1>
            <div class="form-group">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
            </div>

            <div class="form-group">
                <label for="estado" style="margin: 10px;" >Estado</label>
                <select id="estado" name="estado" style="margin: 10px;">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>

            </div>
            
            <div class="form-group">
                <input type="text" class="form-control" name="telefono" placeholder="Telefono">
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control" name="direccion" placeholder="Dirección">
            </div>
            
            <div class="form-group">
                <label for="ciudadId" style="margin: 10px;" >Ciudad</label>
                <select id="ciudadId" name="ciudad" style="margin: 10px;">
                    <?php foreach ($this->ciudades as $ciudad): ?>
                        <option value="<?php echo $ciudad["id"]; ?>"><?php echo $ciudad["nombre"]; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <input type="submit" value="Guardar"/>
        </form>

    </div>


</body>
</hmtl>
