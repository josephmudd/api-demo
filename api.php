<?php

//If had database backend, could do something like
//$thePrize = query("SELECT description, qty FROM prizes WHERE id=?",$_REQUEST['id'])

$prizes = array(
  1=>  array(
    'description'=> 'car',
    'qty'=>1
  ),
  2=>  array(
    'description'=> 'balloons',
    'qty'=>154
  ),
  3=>  array(
      'description'=> 'rocks',
    'qty'=>14
  ),
);
$thePrize = $prizes[$_REQUEST['id']];

die(json_encode($thePrize));

?>