<?php include_once "head.php";  ?>
<body>

<div class="col-md-12">
    <h2>Editar  cliente
        <a href="./" class="btn btn-default pull-right">Listado</a>
    </h2>
</div>

<?php if(!is_null($mensaje)): ?>
    <p class="bg-danger col-md-12"><?php echo $mensaje; ?></p>
<?php endif; ?>

<div class="col-md-6">
    <form action="./index.php?accion=save" method="post">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="id" value="<?php echo $cliente['cedula']; ?>">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo $cliente['nombre']; ?>" required placeholder="Rudys Natanael">
        </div>
        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" class="form-control" id="apellido" value="<?php echo $cliente['apellido']; ?>" required placeholder="Acosta Crousset">
        </div>
        <div class="form-group">
            <label for="cedula">Cedula</label>
            <input type="text" name="cedula" class="form-control" id="cedula" value="<?php echo $cliente['cedula']; ?>"  required placeholder="031-049445-2">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="<?php echo $cliente['email']; ?>"  required placeholder="natanael926@gmail.com">
        </div>
        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="text" name="telefono" class="form-control" id="telefono" value="<?php echo $cliente['telefono']; ?>" placeholder="809-098-0989">
        </div>
        <div class="form-group">
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" class="form-control" id="direccion" value="<?php echo $cliente['direccion']; ?>"  placeholder="Calle 2 #21, Reparto las colina, Santiago">
        </div>
        <div class="form-group">
            <label for="fechaNacimiento">Fecha Nacimiento</label>
            <input type="text" name="fechaNacimiento" class="form-control date" id="fechaNacimiento" value="<?php echo $cliente['fechaNacimiento']; ?>"  placeholder="yyyy/mm/dd">
        </div>
        <div class="form-group">
            <label for="fechaInicio">Fecha Inicio</label>
            <input type="text" name="fechaInicio" class="form-control" id="fechaInicio" value="<?php echo $cliente['fechaInicio']; ?>"  placeholder="yyyy/mm/dd">
        </div>
        <div class="form-group">
            <label for="fechaFin">Fecha Fin</label>
            <input type="text" name="fechaFin" class="form-control" id="fechaFin" value="<?php echo $cliente['fechaFin']; ?>"  placeholder="yyyy/mm/dd">
        </div>
        <button type="submit" class="btn btn-success pull-right">Editar</button>
    </form>
</div>

<script>
    $('.date').datepicker({
        format: 'yyyy/mm/dd'
    });

    $('#fechaInicio').datepicker({
        format: 'yyyy/mm/dd'
    }).on("change", function (e) {
        var minDate = new Date(e.target.value);
        minDate.setDate(minDate.getDate());
        $('#fechaFin').datepicker('setStartDate', minDate);
    });

</script>
</body>
</html>