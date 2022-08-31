<?php

//Connections
 $ldap_dn = "enter the path of where your user is in the ldap";
 $ldap_password = "your user password";

 $ldap_con = ldap_connect("dns or ip of your ldap");

 //Connection protocol
 ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);

 //tests the information entered

 if(ldap_bind($ldap_con, $ldap_dn, $ldap_password)){
    echo "All right, it's connected!";
 }else{
    echo "Something is wrong, validate on the page or in logs to identify the error!";
 }

?>