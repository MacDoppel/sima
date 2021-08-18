<?php
session_start();
session_destroy();
unset($login);
header('location: ../');



?>