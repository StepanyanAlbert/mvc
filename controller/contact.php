<?php

/**
 * Class Contact
 * contact ontroller has to get data from inoputs and isert it in database
 */
class Contact extends  Controller
{


public function about(){
 parent::__construct('contact');
    $this->view->send_view('Contact_form/index');
}
}