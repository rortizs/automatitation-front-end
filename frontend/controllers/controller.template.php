<?php

class TemplateController
{

  //index
  public function index()
  {

    include 'views/template.php';
    
  }

  //route main 
  static public function path()
  {

    if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
      return "https://" . $_SERVER['SERVER_NAME'] . '/';
    } else {

    }
  }
}
