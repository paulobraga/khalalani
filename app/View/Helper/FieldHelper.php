<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class FieldHelper extends AppHelper{
    
    function f($field){
        if($field){
            return $field;
        }
        return '----------';
    }
}
?>
