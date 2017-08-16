<?php

  //require 'vendor/autoload.php';
  require dirname(__FILE__) . '/src/Labbett/IOTA/Wallet/Seed.php';

  use Labbett\IOTA\Wallet\Seed as IotaSeed;

  echo IotaSeed::generate();

  echo PHP_EOL;
