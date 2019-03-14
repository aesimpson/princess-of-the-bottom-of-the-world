<?php
function url(){
  //return (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/princess/';
  return (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/dan/princess-of-the-bottom-of-the-world/';
}
$base_url = url();
?>