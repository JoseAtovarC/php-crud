<?php include("db.php")?>

<?php include("includes/header.php")?>
<div class="container-4">
        <div class="row">
            <div class="col-md-4">

            <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

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

           <div class="col-md-8">
           <table class="table table-bordered">
               <thead>
                   <tr>
                       <th>
                           title
                       </th>
                       <th>
                           description
                       </th>
                       <th>
                           create at
                       </th>
                       <th>
                           action
                       </th>
                       
                   </tr>
               </thead>
               <tbody>
                   <?php
                   $query= "SELECT * FROM task";

                   $result= mysqli_query($conn, $query);

                   while($row = mysqli_fetch_assoc($result)) {?>
                     <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
           edit
              </a>
              <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
 delete
              </a>
            </td>
            <tr>
            <?php } ?>
               </tbody>

</table>
           </div>
        </div>
    </div>
  <?php include("includes/footer.php")?>

 