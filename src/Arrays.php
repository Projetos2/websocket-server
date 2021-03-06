<?php

namespace Novosga\Websocket;

/**
 * Arrays
 *
 * @author Rogério Lino
 */
class Arrays
{
    
    /**
     * 
     * @param array $array
     * @param string $name
     * @return mixed|null
     */
    public static function get(array $array, string $name)
    {
        $value = null;
        
        if (is_array($array) && isset($array[$name])) {
            $value =  $array[$name];
        }
        
        return $value;
    }
    
}
