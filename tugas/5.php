<?php

class Student {
    private $name;
    private $age;
    
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getAge() {
        return $this->age;
    }
    
    public function setName($newName) {
        $this->name = $newName;
    }
    
    public function setAge($newAge) {
        $this->age = $newAge;
    }
}

$student1 = new Student('John', 20);

echo "Namanya " . $student1->getName() . ", dia berumur " . $student1->getAge(); // Output: Namanya John, dia berumur 20