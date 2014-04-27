<?php
  // verifies the username and password
  function login($username, $password)
  {
    require("tmplogin.php");

    session_start();

    if(!isset($_SESSION['id']))
    {
      //verify the username and password
      if(isset($username) && isset($password))
      {
        if( ($tmpUsername != "") && ($username == $tmpUsername) )
        {
          if( ($tmpPassword != "") && ($password == $tmpPassword) )
          {
            $_SESSION['id'] = 1;
          }
        }
      }
    }

    // redirect
    header("Location: ./");
  }
?>