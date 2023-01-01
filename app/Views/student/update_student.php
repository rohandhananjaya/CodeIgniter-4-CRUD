
<div class="container">
  <h2>Update student</h2>
  <form action="<?php echo base_url('update-student/'.$student[0]['id']) ?>" method="POST" enctype="multipart/form-data">
  <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" value="<?php echo $student[0]['name'] ?>" name="name">
    </div>
  <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" value="<?php echo $student[0]['email'] ?>" name="email">
    </div>
    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter phone" value="<?php echo $student[0]['phone'] ?>" name="phone">
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" placeholder="Enter image" name="image">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="status" <?php echo $student[0]['status'] == 1 ? "checked" : "" ?>> Status
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
  <a href="<?php echo base_url('student') ?>" ><button type="button" class="btn btn-primary mt-3">View all</button></a>
</div>