<?php require_once 'app/views/templates/header.php' ?>
<style>
    body {
        background-image: url('https://images-assets.nasa.gov/image/PIA07872/PIA07872~large.jpg?w=1920&h=1440&fit=clip&crop=faces%2Cfocalpoint');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>
<div class="container">
  <div class="page-header" id="banner">
    <div class="row">
      <div class="col-lg-12">
        <h1>Reminders</h1>
        <p> <a href="/reminders/create" class="lead">Create Reminder</a></p>
      </div>
    </div>
  </div>

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th>Reminder ID</th>
        <th>Reminder</th>
        <th>Date Created</th>

        <th>Completed</th>
        
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $counter = 1;
      foreach ($data['reminders'] as $reminder) { ?>
        <tr class="<?php echo $reminder['is_completed'] == 1 ? 'table-success' : ''; ?>">
          <td><?php echo $counter++ ?></td>
          <td><?php echo $reminder['id']; ?></td>
          <td><?php echo $reminder['subject']; ?></td>
          <td><?php echo $reminder['created_at'] ?></td>
          <td><?php echo $reminder['is_completed'] ?></td>
          
          <td>
            <a href="/reminders/completed/<?php echo $reminder['id']; ?>" class="btn btn-success btn-sm">Completed</a>
            <a href="/reminders/update/<?php echo $reminder['id']; ?>" class="btn btn-primary btn-sm">Update</a>
            <a href="/reminders/delete/<?php echo $reminder['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>

  <?php require_once 'app/views/templates/footer.php'?>
