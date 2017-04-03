<body>
    <?php include MODULE . "template.php"; ?>
    <div style="width: 60%; margin: 5% auto;">
        <form class="form-horizontal" action="<?php echo URL . "Teatro/eliminar" ?>" enctype="multipart/form-data"  method="post">
            <div class="form-group">
                <label for="ciudadId" style="margin: 10px;" >Teatro</label>
                <select id="ciudadId" name="ciudad" style="margin: 10px;" onchange=
                    <?php foreach ($this->teatros as $teatro): ?>
                        $r=$teatro["id"];
                        <option value="<?php echo $teatro["id"]; ?>"><?php echo $teatro["nombre"]; ?></option>
                    <?php endforeach; ?>
                </select>
                
               <table border="0.5" style="margin: 5px;" ><tr><th>Código Producto </th><th>Nombre Producto</th></tr>

                <button type="submit" class="btn btn-default" style="width: 10%; margin:5%;">Eliminar</button>
                
                
                
            </div>
        </form>
    </div>
</body>

