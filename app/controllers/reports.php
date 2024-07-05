<?php

class Reports extends Controller {

  //Displays the logged in user specific reminders in a table
  public function index() {
    $reminder = $this->model('Reminder');
    $list_of_reminders = $reminder->get_all_reminders();
    $list_of_most_reminders = $reminder->get_most_reminders_by_user();
    $data = [
      'reminders' => $list_of_reminders,
      'most_reminders' => $list_of_most_reminders
    ];
    $this->view('reports/index', $data);
  }

  
}
?>