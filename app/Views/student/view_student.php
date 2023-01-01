<!DOCTYPE html>
<html lang="en">
<head>
  <title>Codeigniter CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
<div class="row">
    <h2>Student Details</h2>
<table class="table table-bordered">
    <caption>List of Student</caption>
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Image</th>
        <th>Satus</th>
        <th>Created Time</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($student as $row):?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['image']; ?></td>
            <td><?php echo $row['status'] ? 'Show':'Hide'; ?></td>
            <td><?php echo $row['timeofcreate'] ?></td>
            <td>
              <a href="<?php echo base_url('update/'.$row['id']);?>" >
                <button type="button" class="btn btn-success">Edit</button>
              </a>
            </td>
            <td>
              <a href="<?php echo base_url('delete/'.$row['id']);?>" >
                <button type="button" class="btn btn-danger">Delete</button>
              </a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
  </table>
  <a href="<?php echo base_url('add') ?>" ><button type="button" class="btn btn-primary">Add New</button></a>
</div>
</div>

</body>
</html>
