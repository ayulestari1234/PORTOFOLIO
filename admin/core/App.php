<?php

class App{
 public function __construct()
 {
  $Url= $this->parseURL();  
  var_dump($Url);
 }
public function parseURL()
{
          if(isset($_GET['url'])) {
           //menghilangkan garis miring(/) di akhir url
           $url = rtrim($_GET['url'],'/');
           //menghilangkan karakter aneh atau karakter yang memungkinkan kita di hack
           $url= filter_var($url,FILTER_SANITIZE_URL);

           //menghilangkan tanda garis miring (/) dan mengambil setring-nya.
           $url=explode('/',$url);
           return $url;
          }
        }
      }
  