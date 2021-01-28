<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

require router::load('routes.php')
  ->direct(Request::url(), Request::method());
