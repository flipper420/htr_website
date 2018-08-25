<?php
return array(
  "driver" => "smtp",
  "host" => "smtp.mailtrap.io",
  "port" => 2525,
  "from" => array(
      "address" => "ratboy@htr.dev",
      "name" => "Ratboy"
  ),
  "username" => "62bc61b79f1f08",
  "password" => "e74d2a0bb8c5ad",
  "sendmail" => "/usr/sbin/sendmail -bs",
  "pretend" => false
);