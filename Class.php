<?php

class Student{
    private $id;
    private $name;
    private $dept;
    
    function setId($id){
        $this->id=$id;
    }
    function getId(){
        return $this->id;
    }
     function setName($name){
        $this->name=$name;
    }
    function getName(){
        return $this->name;
    }
     function setDept($dept){
        $this->dept=$dept;
    }
    function getDept(){
        return $this->dept;
    }
    
    function __construct($id,$name,$dept) {
        $this->id =$id;
        $this->name =$name;
        $this->dept =$dept;
    }
    
}



$student = new Student('IT-17033','Rahim','ICT');
echo $student->getId();
echo $student->getName();
echo $student->getDept();


