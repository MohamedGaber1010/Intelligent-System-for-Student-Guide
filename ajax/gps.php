<?php
  require 'geo.php';
  $geo = new Geo;
  $data = $geo->request(substr($geo->get_public_ip_address(),0, -1));
  if ($data['latitude'] == "30.0355" && $data['longitude'] == "31.223") {
    echo "Okay, Attended!";
  }
  else{
    echo "Oops, it seems you're not here!";
  }
?>
