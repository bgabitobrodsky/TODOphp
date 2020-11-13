<?php 
require_once 'php/cn.php';
session_start();
?>

<?php include 'includes/links.php';?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <div class="container">
        <a class="navbar-brand" href="#">phpTODO</a>
    </div>  
</nav>

<div class="container">
    <div class="row">
        <div class="col-lg-4">

            <?php 
            include 'components/alert.php';
            include 'components/form-create.php';
            ?>
        </div>
        <div class="col-lg-8">
        <?php include 'components/table-tasks.php'?>
        </div>
    </div>
</div>
<?php if(isset($_SESSION['title'])){?>
    <form class="modal" tabindex="-1" id="edit-modal" action="php/edit_task.php" method="POST">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Editar tarea</h5>
        </div>
        <div class="modal-body">
            <div class="form-row">
                <label for="title">Titulo</label>
                <input type="hidden" name="ed-id" id="ed-id" value="<?php echo $_SESSION['id']; ?>">
                <input class="form-control" type="text" name="ed-title" id="edit-title" value="<?php echo $_SESSION['title']; ?>">
            </div>
            <div class="form-row">
                <label for="desc">Descripción</label>
                <input class="form-control" type="text" name="ed-description" id="edit-desc" value="<?php echo $_SESSION['desc']; ?>">
            </div>
        </div>
        <div class="modal-footer d-flex justify-content-between">
            <input type="submit" name="edit" class="btn btn-warning" value="Editar">
            <button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
        </div>
    </div>
    </form>
<?php }?>

<?php include 'includes/js.php';

if(isset($_SESSION['title'])){?>
<script>
    $('#edit-modal').modal('show');
</script>
<?php } session_unset();?>