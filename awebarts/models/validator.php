

<?php

/*
validator classs
    validation :
                -string
                -ip
                -url
                -empty input 
                -integer value
                -required
                -email
    sanitization:            
                -string
                -ip
                -url
                -email

*/

class validator {


    function validate($data , $rules)
    {
        $valid = TRUE;
        
        foreach($rules as $key => $rule)
        {
            // Extract function type (rules)
            $callbacks = explode('|', $rule);

            foreach($callbacks as $callback)
            {
                $value = isset($data[$key]) ? $data[$key] : NULL;
                
                if(is_array($value)){
                    foreach($value as $val){
                        if($this->$callback($val, $key) == FALSE)
                        $valid = FALSE;  
                    }

                }else{
                    if($this->$callback($value, $key) == FALSE)
                    $valid = FALSE;
                }
            }
        }
        return $valid;
    }

    function checkString($value,$key)
    {

        /*"/^[-a-zA-Z0-9_\x{30A0}-\x{30FF}'
        .'\x{3040}-\x{309F}\x{4E00}-\x{9FBF}\s]*$/u";*/
        $pattern = "/^[-a-zA-Z\p{Cyrillic}0-9\s\-]+$/u";
        $validate= preg_match($pattern,$value);
        
        if($validate == FALSE)
        throw new Exception("Error :The $key must be astring. ");

        return $validate;
        

    }

    
    function checkEmail($value,$key)
    {
        
        $validate= filter_var($value,FILTER_VALIDATE_EMAIL);
        
        if($validate == FALSE)
        throw new Exception("Error :The $key must be Email. ");

        return $validate;
        

    }

    function checkUrl($value,$key)
    {
        
        $validate= filter_var($value,FILTER_VALIDATE_URL);
        
        if($validate == FALSE)
        throw new Exception("Error :The $key must be URL. ");

        return $validate;
        

    }

    function checkIP($value,$key)
    {
        
        $validate= filter_var($value,FILTER_VALIDATE_IP);
        
        if($validate == FALSE)
        throw new Exception("Error :The $key must be IP. ");

        return $validate;
        

    }
    function checkInteger($value,$key)
    {
        
        $validate= filter_var($value,FILTER_VALIDATE_INT);
        
        if($validate == FALSE)
        throw new Exception("Error :The $key must be Integer. ");

        return $validate;
        

    }
    function checkRequired($value,$key)
    {
        
        $validate = !empty($value);
        
        if($validate == FALSE)
        throw new Exception("Error :The $key must be not Empty. ");

        return $validate;
        

    }

    function checkSanitze($value,$key) 
    {
        $flag = NULL;

        switch ($key) {
            
            case email :
                 $value  = substr($value,0,250); 
                 $filter = FILTER_SANITIZE_EMAIL; 
            break;

            case url: 
                 $filter = FILTER_SANITIZE_URL;
            break;

           /* case ip: 
                  $filter = FILTER_SANITIZE_IP;
            break;*/
            case int: 
                 $filter = FILTER_SANITIZE_NUMBER_INT;
            break;

            default :
                 $filter = FILTER_SANITIZE_STRING;
                 $flag   = FILTER_FLAG_NO_ENCODE_QUTOES;
            break;
        }

        $validate= filter_var($value,$filter,$flag);
        
        if($validate == FALSE)
        throw new Exception("Error :The $key is Invalid . ");

        return $validate;


    }


}
?>