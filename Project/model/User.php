<?php
class User{
    public $id;
    public $name;

    public function __construct($id, $name) /** Constructor*/
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId()         /**Getter and setter for id,name */
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
?>

