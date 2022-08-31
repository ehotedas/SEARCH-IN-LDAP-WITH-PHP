<?php

$ldap_dn = "enter the path of where your user is in the ldap";
$ldap_password = "your user password";
$server = "full name of the computer where ldap is";
$ldap_con = ldap_connect($server);

 ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);

 if(ldap_bind($ldap_con, $ldap_dn, $ldap_password))  {
   echo "All right, it's connected!";

    //put here the object you want to search for
    $filter= "(here)"; // exemple cn=*

    //save the result in the variable
    $result = ldap_search($ldap_con, "where will it search in your ad",$filter) or exit();

    //I don't remember what it does here but it works
    $entries = ldap_get_entries($ldap_con, $result);
    //get the amount of users to be able to put it in the for
    $users_count = $entries['count'];

    //format the code to be able to display it in html the users that exist
    echo "<pre>";
    for ($i=0; $i <$users_count ; $i++) { 
      print_r($entries[$i]['cn']);
    }
    echo "</pre>";

 }else{
    echo "error";
 }

?>
