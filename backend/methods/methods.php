<?php
function check_email_address($email) {
if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email)){
  return true;
}else{
  return false;
}
}
 ?>
