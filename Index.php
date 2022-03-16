<?php

echo "First lesson but Heroku doesnt work";
reuquire "vendor/autoload.php";
Flight::route("/", function(){
  echo "Hello World!";
});
Flight::start();


?>
