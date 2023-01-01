<div class="container">
  <h2>Add new student</h2>
  <form action="<?php echo base_url('submit-student') ?>" method="POST" enctype="multipart/form-data">
  <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
  <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" placeholder="Enter image" name="image">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="status"> Status
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <a href="<?php echo base_url('student') ?>" ><button type="button" class="btn btn-primary mt-3">View all</button></a>
</div>