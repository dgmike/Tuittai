<?php

include 'config.php';
include 'ice/app.php';
include 'controller.php';
include 'model.php';
include 'helper.php';

app(array(
    '^/logout/?$' => 'Logout',
    '^/?$'        => 'Home',
));
