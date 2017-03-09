<?php include_once "head.php";  ?>
<body>

<div class="col-md-12">
    <h2>
        <div class="col-md-9">
            Detalle
        </div>
        <div class="col-md-1">
            <a href="./" class="btn btn-default pull-right">Listado</a>
        </div>
        <div class="col-md-1">
            <a href="./index.php?accion=add" class="btn btn-success pull-right">Ageragr</a>
        </div>
        <div class="col-md-1">
            <a href="./index.php?accion=edit" class="btn btn-primary pull-right">Editar</a>
        </div>
    </h2>
</div>

<div class="col-md-6">
        <div>
            <span><b>Nombre:</b></span>
            <span><?php echo $cliente['nombre']; ?></span>
        </div>
        <div>
            <span><b>Apellido:</b></span>
            <span><?php echo $cliente['apellido']; ?></span>
        </div>
        <div>
            <span><b>Cedula:</b></span>
            <span><?php echo $cliente['cedula']; ?></span>
        </div
        <div>
            <span><b>Email:</b></span>
            <span><?php echo $cliente['email']; ?></span>
        </div>
        <div>
            <span><b>Telefono:</b></span>
            <span><?php echo $cliente['telefono']; ?></span>
        </div>
        <div>
            <span><b>Direccion:</b></span>
            <span><?php echo $cliente['direccion']; ?></span>
        </div>
        <div>
            <span><b>Fecha Nacimiento:</b></span>
            <span><?php echo $cliente['fechaNacimiento'];?></span>
        </div>
        <div>
            <span><b>Fecha Inicio:</b></span>
            <span><?php echo $cliente['fechaInicio']; ?></span>
        </div>
        <div>
            <span><b>Fecha Fin:</b></span>
            <span><?php echo $cliente['fechaFin']; ?></span>
        </div>
</div>
</body>
</html>