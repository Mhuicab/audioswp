<?php

defined('BASEPATH') or exit('No direct script access allowed');

class LdapConnect extends CI_Controller
{
    public function connectldap()
    {
        $username = "wpsis01";
        $adServer = "wepartner.local";
        $password = "Manuel1001";
      # $adldap = '10.10.50.5';        //replace with your AD server ip/hostname
        $ldaprdn = $username . '@' . $adServer;  //other format $ldaprdn = "DOMAIN\\" . $username;
        //Connecting to server
        $ldapconn = ldap_connect($adServer)
            or die(); #connection resource -> always 1

        ldap_set_option($ldapconn, LDAP_OPT_NETWORK_TIMEOUT, 5);
        ldap_set_option($ldapconn, LDAP_OPT_TIMELIMIT, 30);

        //Connect to Server
        if ($ldapconn) {
            if ($ldapbind = @ldap_bind($ldapconn, $ldaprdn, $password)) {
                //Succesfull Authentication
                echo "Conexion exitosa con el usuario " . $username;
                return TRUE;
            } else {
                //Unsuccesfull Authentication
                echo $username . " Fallo la conexion";
                return FALSE;
            }
        } else {
            // Could not connect to AD server.
            return FALSE;
        }
    }
}
