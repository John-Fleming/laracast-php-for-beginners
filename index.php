<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\{router, Request};

router::load('app/routes.php')
  ->direct(Request::url(), Request::method());
