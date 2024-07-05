<?php require_once 'app/views/templates/header.php' ?>
<style>
    body {
        /* background-image: url('https://images-assets.nasa.gov/image/PIA11141/PIA11141~large.jpg?w=1920&h=929&fit=clip&crop=faces%2Cfocalpoint'); */
        background-image: url('https://i.imgur.com/EZQ0Pw0.jpeg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    .nav-link {
        color: white;
    }
    .nav-link.active {
        color: black; 
    }
</style>

<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Reports!</h1>
                
            </div>
        </div>
    </div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">View all reminders</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Most reminders</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Total Logins by username</button>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th>Reminder ID</th>
                  <th>User ID</th>
                  <th>Reminder</th>
                  <th>Date Created</th>

                  <th>Completed</th>

                  
                </tr>
              </thead>
              <tbody>
                <?php 
                $counter = 1;
                foreach ($data['reminders'] as $reminder) { ?>
                  <tr class="<?php echo $reminder['is_completed'] == 1 ? 'table-success' : ''; ?>">
                        <td><?php echo $counter++ ?></td>
                        <td><?php echo $reminder['id']; ?></td>
                        <td><?php echo $reminder['user_id']; ?></td>
                        <td><?php echo $reminder['subject']; ?></td>
                        <td><?php echo $reminder['created_at'] ?></td>
                        <td><?php echo $reminder['is_completed'] ?></td>

                    </tr>
                <?php } ?>
              </tbody>
            </table>
      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          This is where report 2 goes
      </div>
      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          This is where report 3 goes
      </div>
    </div>




    



    <?php require_once 'app/views/templates/footer.php' ?>