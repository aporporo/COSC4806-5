<?php

class Reports extends Controller {

  //Displays the logged in user specific reminders in a table
  public function index() {
    $reminder = $this->model('Reminder');
    $list_of_reminders = $reminder->get_all_reminders();
    $this->view('reports/index', ['reminders' => $list_of_reminders]);
  }

  
}
?>