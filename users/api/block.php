<?php
require_once('../../config.php');
require_once(BASE_PATH . '/logic/users.php');
require_once(BASE_PATH . '/logic/auth.php');
$id = $_REQUEST['id'];
blockUser($id, getUserId());
echo true;
