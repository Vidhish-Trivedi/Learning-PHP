<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way.
  OOP consists of classes that can hold "properties" and "methods".
  Objects can be created from classes.
*/

    // Class Definition.
    class User {
        // Properties / Attributes.     (public, private, protected).
        private $name;
        private $email;
        private $password;

        // Methods.

        // Constructor.
        public function __construct($nm, $em, $ps) {
            $this->name = $nm;
            $this->email = $em;
            $this->password = $ps;
        }

        // Getters
        public function getName() {
            return($this->name);
        }

        public function getEmail() {
            return($this->email);
        }

        // Can also write setters, other methods.

        public function matchPassword($psswd) {
            if($this->password === $psswd){
                return(true);
            }
            return(false);
        }

    }

    // Instantiate objects of class User.
    $user1 = new User("User1", "Email1", "Pass1");
    $user2 = new User("User2", "Email2", "Pass2");

    var_dump($user1);
    echo "<br><br>";
    
    var_dump($user2);
    echo "<br><br>";
    
    if($user2->matchPassword("Pass1")){
        echo 11;
    }
    else{
        echo 33;
    }

    echo "<br><br>";

    // Inheritence.
    // Subclass Employee inherits from Class User.
    class Employee extends User {
        private $salary;
        
        public function __construct($nm, $em, $ps, $sal) {
            parent::__construct($nm, $em, $ps);             // Similar to super();
            $this->salary = $sal;
        }

        public function getSalary() {
            return($this->salary);
        }
    }

    $employee1 = new Employee("Clarke", "CLK", "PassEmp", 10000000);

    echo $employee1->getName(), "<br>";
    echo $employee1->getSalary();

?>
