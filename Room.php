<?php

/**
 * Description of Room
 *
 * @author Adrià Cidre <adria.cidre@gmail.com>
 */
class Room 
{

    protected $_name;
    protected $_price;
    
    /**
     * Creates a new Room
     * @param string $name
     * @param float $price 
     */
    public function __construct($name, $price)
    {
        $this->setName($name);
        $this->setPrice($price);
    }
    
    public function __toString()
    {
        return $this->getName();
    }
    
    /**
     * Set the Room's name
     * @param string $name 
     */
    public function setName($name)
    {
        if (!is_string($name)) {
            throw new Exception('Received parameter is not a string');
        }
        $this->_name = $name;
    }
    
    /**
     * Set the Room's price 
     * @param float $price 
     */
    public function setPrice($price)
    {
        if (!is_numeric($price)) {
            throw new Exception('Received parameter is not a float');
        }
        $this->_price = $price;
    }
    
    public function getName()
    {
        return $this->_name;
    }
    
    
}
