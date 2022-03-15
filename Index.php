<?php
require "vendor/autoload.php";

Flight::route("/", function(){
  echo "Ja sam cvetak zanovetak!!";
});

Flight::start();
?>
