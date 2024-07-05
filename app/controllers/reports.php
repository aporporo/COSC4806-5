<?php

class Reports extends Controller {

  //Displays the logged in user specific reminders in a table
  public function index() {
    $this->view('reports/index');
  }

  
}
?>