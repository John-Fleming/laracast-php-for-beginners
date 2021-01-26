<?php

require 'vendor/autoload.php';
$query = require 'core/bootstrap.php';

require router::load('routes.php')
  ->direct(Request::url(), Request::method());
