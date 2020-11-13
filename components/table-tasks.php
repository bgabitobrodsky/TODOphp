<table class="table table-striped table-bordered bg-white">
                <thead>
                    <tr>
                        <th class="text-center">Titulo</th>
                        <th class="text-center">Descripcion</th>
                        <th class="text-center">Fecha</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
<?php 
$bd = cn();
$sql = "SELECT * FROM task ORDER BY created_at DESC";
$result = mysqli_query($bd,$sql);
mysqli_close($bd);
while( $row = mysqli_fetch_array($result)){?>
    <tr>
        <td><?php echo $row["title"]; ?></td>
        <td><?php echo $row["description"];?></td>
        <td><?php echo $row["created_at"];?></td>
        <td>
            <a href="php/open_edit_task.php?id=<?php echo $row["id"];?>" class="btn btn-warning btn-sm"> <i class="fas fa-edit"></i></a>
            <a href="php/delete_task.php?id=<?php echo $row["id"];?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
        </td>
    </tr>
<?php } ?>
</tbody>
            </table>