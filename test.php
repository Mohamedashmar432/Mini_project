<?php

// print_r($_SERVER);
// print_r($_POST);
include_once 'libs/user.class.php';

// user::seller("1","2","hed","oeter road","exapmle@m.com","1234","3","asdsfsasdfghjh","assd.png");
if(user::signup("test","test234","testers"))
{
    echo "true";
}
else{
    echo "false";
}

// <li class="nav-item">
//           <?php if (isset($_SESSION['username'])) {
// //        