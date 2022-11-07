<?php
require_once 'func.php';

session_start();
session_destroy();
session_abort();

redirect('../controller/login_controller.php');