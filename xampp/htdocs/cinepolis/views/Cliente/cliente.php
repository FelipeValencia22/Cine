<head>
    <link rel="stylesheet" href="<?php print(URL); ?>public/styles/style.css">
</head>
    
<body>
    <?php include MODULE . "template.php"; ?>
    <div style="width: 90%; margin: 5% auto;"> 
        <form class="form-horizontal" action="<?php echo URL . "Cliente/save" ?>" enctype="multipart/form-data"  method="post">
            <h1> Crear cliente </h1>
            <div class="form-group">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control" name="usuario" placeholder="Usuario">
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Correo">
            </div>
            
            <div class="form-group">
                <input type="password" class="form-control" name="contrasena" placeholder="Contraseña">
            </div>
            
            <div class="form-group">
                <input type="password" class="form-control" name="contrasena2" placeholder="Repetir contraseña">
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control" name="identificacion" placeholder="Identificación">
            </div>
            
            <div class="form-group">
                <label for="tipoid" style="margin: 10px;" >Tipo identificación</label>
                <select id="tipoid" name="tipoid" style="margin: 10px;">
                    <?php foreach ($this->tiposids as $tipoid): ?>
                        <option value="<?php echo $tipoid["id"]; ?>"><?php echo $tipoid["nombre"]; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

               
            <input type="submit" value="Guardar"/>
        </form>

    </div>


</body>
</hmtl>
