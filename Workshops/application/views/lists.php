<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class='col-md-12 right_col'>
    <div id='information'></div>
    <table class='table table-bordered table-responsive' id='tableEditoriales'>
        <thead>
            <tr>
                <th scope='col'></th>
                <th scope='col'>Id</th>
                <th scope='col'>Nombre</th>
                <th scope='col'>Apellido</th>
                <th scope='col'>Usuario</th>
                <th scope='col' > Accion</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td></td>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['firtsname']; ?></td>
                    <td><?php echo $user['lastname']; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td>

                    <form method="DELETE" action="<?php echo base_url('delete/' . $user->id); ?>">
                        <a class="btn btn-primary" href="<?php echo base_url('edit/' . $user->id) ?>"> Edit</a>
                        <button type="submit" class="btn btn-danger"> Delete</button>
                    </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>