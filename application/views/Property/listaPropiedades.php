<div class="container">

<a class="btn btn-success" href="<?=base_url('index.php/PropertyC/insertarProperty') ?>">Agregar Producto</a>

    <a class="btn btn-success" href="<?=base_url('index.php/PropertyC/insertarProperty')?>">Agregar Propiedad</a>
    
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
            <th>Id Propiedad</th>
            <th>Id Arrendador</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Ubicacion</th>
            <th>Numero Habitantes</th>
            <th>Precio</th>
            <th>Estatus</th>
            <th>Amueblado</th>
            <th>Tipo Propiedad</th>
            <th>Foto</th>
            <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($propiedades as $key): ?>
                <tr>
                    <td><?=$key->IdPropiedad ?></td>
                    <td><?=$key->IdArrendador ?></td>
                    <td><?=$key->Nombre ?></td>
                    <td><?=$key->Descripcion ?></td>
                    <td><?=$key->Ubicacion ?></td>
                    <td><?=$key->NumHabitantes ?></td>
                    <td><?=$key->Precio ?></td>
                    <td><?=$key->Estatus ?></td>
                    <td><?=$key->Amueblado ?></td>
                    <td><?=$key->Tipo ?></td>
                    <td><?=$key->Foto ?></td>
                    <td><a class="btn btn-success" href="<?=base_url('index.php/PropertyC/detalleProperty/').
                    $key->IdProperty ?>" >Ver detalle</a></td>
                    
                    <td><a class="btn btn-danger" href="<?=base_url('index.php/PropertyC/borrarProperty/').
                    $key->IdProperty ?>" >Borrar</a></td>
                
                <td><a class="btn btn-danger" href="<?=base_url('index.php/PropertyC/actualizarProperty/').
                $key->IdProperty ?>">Editar</a></td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>

</div>