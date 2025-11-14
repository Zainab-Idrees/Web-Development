<?php
 $person = [
    "name"=>"ali",
    "age"=>23, 
    "day"=>"monday"
 ];

echo $person['name']."<br>";
echo $person['age']."<br>";
echo $person['day']."<br>";

foreach ($person as $key => $value) {
    echo $key .":". $value."<br>";
}

?>