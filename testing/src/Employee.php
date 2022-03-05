<?php

class Employee
{
    private $name;
    private $age;
    private $favorite_color;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setFavorite_Color($favorite_color)
    {
        $this->favorite_color = $favorite_color;
    }

    public function setTogetherInput($name,$age,$favorite_color)
    {
        $this->name = $name;
        $this->age = $age;
        $this->favorite_color = $favorite_color;

    }


    public function getName()
    {
        if(!ctype_alpha($this->name))
        {
            throw new \InvalidArgumentException('Input must be Alphabet');
        }
        return $this->name;
    }

    

    public function getAge()
    {
        if(!is_numeric($this->age))
        {
            throw new \InvalidArgumentException('Input must be Numeric');
        }
        return $this->age;
    }
      
    public function getFavorite_Color()
    {
        if(!ctype_alpha($this->favorite_color))
        {
            throw new \InvalidArgumentException('Input must be Alphabet');
        }
        return $this->favorite_color;
    }

    public function getTogetherInput()
    {
        return $this->name;
        return $this->age;
        return $this->favorite_color;
    }

}