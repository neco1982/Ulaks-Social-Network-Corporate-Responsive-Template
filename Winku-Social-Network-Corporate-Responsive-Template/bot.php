<?php 

$member=file_get_contents("https://api-pay-sys.herokuapp.com/?all_users=-");

$json = json_decode($member, true);
/* $id            = $member["id"];
$uid           = $member["uid"];
$name          = $member["name"];
$reference_uid = $member["reference_uid"]; */

print_r ($json);

/* foreach($member as $member)
{
    print '<h1>'.$member->$uid.'</h1>';
} 
endforeach */ 
/* echo $id;
echo "</br>";
echo $uid;
echo "</br>";
echo strip_tags($name); */  
?>