

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