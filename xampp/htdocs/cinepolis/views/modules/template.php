
<?php include MODULE . "head.php";?>
<body>
    <?php include MODULE . "headerC.php"; ?>
    
<html>
    <head>
        <style>
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #0b5ba1;
            }

            li {
                float: left;
            }

            li a, .dropbtn {
                display: inline-block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            li a:hover, .dropdown:hover .dropbtn {
                background-color: #ffcc33;
            }

            li.dropdown {
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
            }

            .dropdown-content a:hover {background-color: #AAA}

            .dropdown:hover .dropdown-content {
                display: block;
            }
        </style>
    </head>
    <body>
        <ul>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Teatro</a>
                <div class="dropdown-content">
                    <a href="<?php echo URL;?>Teatro/crear">Crear teatro</a>
                    <a href="<?php echo URL;?>Teatro/listar">Listar teatros</a>
                    <a href="<?php echo URL;?>Teatro/eliminar">Eliminar teatros</a>
                </div>
            </li>
            
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Pelicula</a>
                <div class="dropdown-content">
                    <a href="<?php echo URL;?>Pelicula/crear">Crear Pelicula</a>
                    <a href="<?php echo URL;?>Pelicula/crear">Buscar Pelicula</a>
                </div>
            </li>
            
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Funcion</a>
                <div class="dropdown-content">
                    <a href="<?php echo URL;?>Funcion/crear">Crear función</a>
                    <a href="<?php echo URL;?>Funcion/listar">Listar funciones</a>
                </div>
            </li>
            
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Categoria</a>
                <div class="dropdown-content">
                    <a href="<?php echo URL;?>Categoria/crear">Crear categoria</a>
                    <a href="<?php echo URL;?>Categoria/listar">Listar categorias</a>
                </div>
            </li>
            
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Ciudad</a>
                <div class="dropdown-content">
                    <a href="<?php echo URL;?>Ciudad/listar">CRUD Ciudad</a>
                </div>
            </li>
        </ul>

    </body>
</html>

</body>