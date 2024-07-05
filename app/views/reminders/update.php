<?php require_once 'app/views/templates/header.php'?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Update a reminder</h1>
                
            </div>
        </div>
    </div>

<section>
    <div class="vh-50">
        <div class="container py-2 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-8">
                    <div style="border-radius: 1rem; background-color: #6c757d;">
                        <div class="card-body p-5 text-center">
                            
                            <h1 class="mb-4" style="color: white">Update a Reminder</h1>
                            
                            <form action="/reminders/update_reminder" method="post" >
                            <fieldset>
                              <div data-mdb-input-init class="form-outline mb-3">
                                  <div class="form-group row">
                                  <label for="reminder_id" class="col-sm-2 col-form-label text-white">Reminder ID:</label>
                                      <div class="col-sm-10">
                                  <input required type="text" readonly disabled class="form-control form-control-lg" name="reminder_id" value="<?php echo $data['reminder']['id'];?> ">
                                      </div>
                                  </div>
                                  <br>
                                  <div class="form-group row">
                                  <label for="subject" class="col-sm-2 col col-form-label text-white ">Subject:</label>
                                <div class="col-sm-10">
                                      <input required type="text" class="form-control form-control-lg" name="subject" value="<?php echo $data['reminder']['subject'];?>">
                                </div>
                              </div>
                              

                                <button type="submit" class="btn btn-primary btn-lg">Update Reminder</button>
                            </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <?php require_once 'app/views/templates/footer.php' ?>