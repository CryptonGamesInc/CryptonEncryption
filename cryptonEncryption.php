<?php

#
#
# Made by @crypton#1871
# Copyright (c) Crypton Games Inc. 2023.
# Join us: https://discord.gg/gmensDmE9c
#
#

# My own custom CryptonEncryption algorithm
# Using this to encrypt passwords for better security & safe storing in database
class CryptonEncryption{
    
    public static function encrypt($string){
        
        include dirname(__FILE__).'/config/security.php';
        
        return $encryptionKey.base64_encode($string.$encryptionKey);
        
    }
    
    public static function decrypt($string){
        
        include dirname(__FILE__).'/config/security.php';
        
        return trim(base64_decode(trim($string, $encryptionKey)), $encryptionKey);
        
    }
    
}

?>