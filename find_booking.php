<?php
   
   $m = new MongoClient();
 
   $db = $m->instacab;
   $collection=$db->selectCollection('booking');
  
   $phn =$_POST['phn'];
  //$phn="919650513917";
   $res =$collection->find(array('phone_number' => $phn));
   $res->fields(array("_id" => false));
  
    $data= json_encode(iterator_to_array($res));
	echo $data;
  ?>
   
 
