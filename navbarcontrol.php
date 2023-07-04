<?php
include 'connection.php';
include 'session.php';

   // access level check sample structure
   // access level variable
   $access_level = $rows['accessLevel'];
   # start of access level 
   if ($access_level == 1) {
      include 'super_admin.nav';
   } else if ($access_level == 2) {
      include 'admin.nav';
   } else{
      include 'normal_user.nav';
   }
   # end of access level

?>