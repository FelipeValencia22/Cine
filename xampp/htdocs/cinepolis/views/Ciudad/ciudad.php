<body>
    <?php include MODULE . "template.php"; ?>
    <div style="width: 90%; margin: 5% auto;">
        <form class="form-horizontal" action="<?php echo URL . "Ciudad/save" ?>" enctype="multipart/form-data"  method="post">
            <h1> Crear ciudad</h1>
            <div class="form-group" >
                <label for="horaid" >Nombre</label>
                <input id="horaid" type="text" class="form-control" name="nombre" placeholder="" >
            </div>
            
            <div class="form-group">
                <label for="pasID" style="margin: 10px;" >Pais</label>
                <select id="pasID" name="pais" style="margin: 10px;">
                    <?php foreach ($this->paises as $pais): ?>
                        <option value="<?php echo $pais["id"]; ?>"><?php echo $pais["nombre"]; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <button type="submit" class="btn btn-default" style="width: 10%;">Guardar</button>
        </form>
    </div>
</div>
</body>
</hmtl>
