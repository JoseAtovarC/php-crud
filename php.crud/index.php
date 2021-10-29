<?php include("db.php")?>

<?php include("includes/header.php")?>
<div class="container-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body">
                    <form action="save_task.php" method="POST">

                    <div class="form-group">
                        <input type="text autofocus" class="form-control"
                        name="title" placeholder="task title">
                    </div>

                    <div class="form-group">
                      <textarea name="description"  rows="2"
                      class="form-control" placeholder="Task Description"></textarea>
                    </div>
                    <input type="submit" name="save_task" class="btn btn-success btn-block" value="Save Task">
                    </form>
                </div>
            </div>
        </div>
    </div>
  <?php include("includes/footer.php")?>

 