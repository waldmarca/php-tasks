<?php 
include('./src/functions.php');

for ($i = 1; $i <= 50; $i++) {
  $users[] = createUser($i);
}

saveUsers($users);

calcUsers();

calcAge();
?>