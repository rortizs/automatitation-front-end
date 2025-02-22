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
    //validate if the server is secure
    if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
      return "https://" . $_SERVER['SERVER_NAME'] . '/';
      //validate if the server is not secure
    } else {
      return "http://" . $_SERVER['SERVER_NAME'] . '/';
    }
  }
}
