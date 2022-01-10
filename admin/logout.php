<?php
   session_start();
   
   if(session_destroy()) {
      header('Location:/amitbhai2/index.php');
   }
?>