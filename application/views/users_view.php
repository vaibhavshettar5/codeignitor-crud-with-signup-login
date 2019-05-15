<h1>Users</h1>
<?php 
foreach ($results as $object) {
	echo $object->username;
	echo $object->password;
}

?>