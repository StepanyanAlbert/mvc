<?php

class Location extends  Controller
{
public function about()
{
    $this->view=new View();
   $this->view->send_view('location/index');
}
}