<?php
  /**
   *
   */
  class Geo
  {
    protected $api = 'http://freegeoip.net/json/%s';

    protected $properites = [];

    public function request($ip){
      $url = sprintf($this->api, $ip);
      $data = $this->sendRequest($url);
      foreach ($data as $key => $value) {
        if ($key == "longitude" || $key == "latitude") {
          $properites[$key] = $value;
        }
      }

      return $properites;
    }

    public function get_public_ip_address()
    {
      // TODO: Add a fallback to http://httpbin.org/ip
      // TODO: Add a fallback to http://169.254.169.254/latest/meta-data/public-ipv4
      $url="simplesniff.com/ip";
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
      $ip = curl_exec($ch);
      curl_close($ch);
      return $ip;
    }


    protected function sendRequest($url){
      /*
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_URL, $url);

      return curl_exec($curl);
      */

        $arr_location = file_get_contents($url);
        return json_decode($arr_location);

    }

  }

 ?>
