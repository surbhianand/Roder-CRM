<?php
   // connect to mongodb
   $m = new MongoClient();
   echo "Connection to database successfully";
   // select a database
   $db = $m->mydb;
   $collection=$db->selectCollection('members');
   echo "Database mydb selected";
   $username =$_POST["username"];
   $password =$_POST["password"];
  
   $user = $collection->findOne(array('username' => $username, 'password' => $password));
   if ($user)
   {echo "welcome";
    return $user;
   }
    else
	echo "not found";
   ?>
