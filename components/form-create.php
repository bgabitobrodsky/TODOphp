<form action="php/create_task.php" method="POST" class="bg-white p-3 rounded">
                <div class="form-group">
                    <input type="text" class="form-control" name="title" id="title" placeholder="Titulo">
                </div>
                <div class="form-group">
                    <textarea type="text" class="form-control" name="description" id="description" placeholder="Descripcion" rows="4"></textarea>
                </div>
                <div class="form-group d-flex justify-content-between">
                    <input type="submit" name="save_task" class="btn btn-success">
                    <input type="reset" class="btn btn-danger">
                </div>
            </form>