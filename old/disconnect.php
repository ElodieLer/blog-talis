<?php
session_start();
dession_destroy();
header("Location: login.php?message=Disconnect done!");