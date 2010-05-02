<?php

include 'config.php';
include 'ice/app.php';
include 'controller.php';
include 'model.php';

app(array(
    '^/?$' => 'Home',
));
