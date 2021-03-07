<?php

namespace App\Entity\Fields;

use App\Entity\IFieldType;
use GraphQL\Type\Definition\ScalarType;
use GraphQL\Type\Definition\Type;

//

class IntFieldType implements IFieldType
{
    public function getType(): String
    {
        return "int";
    }

    public  function validate($item, $fieldName, $value,$settings): array
    {
        $validate=array();
        if(empty($value) && !key_exists("required", $settings) && $settings["required"]) 
        {
            $validate[]="Required value for field $fieldName";
        }
        else
        {
        
        }
        return $validate;
    }

    public  function getGrapQlType():ScalarType
    {
        return  Type::int();
    }
    
}