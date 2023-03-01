<?php
   session_start();

   if(session_destroy()) {
      header("Location: mini_website.php");
   }
?>
