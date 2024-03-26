<?php
    class Employee {
        protected $id;
        public $name;
        protected $salary;

        public function __construct($id, $name, $salary) {
            $this->id = $id;
            $this->name = $name;
            $this->salary = $salary;
        }

        public function getSalary() {
            return $this->salary;
        }

        require_once 'Employee.php';

    class Manager extends Employee {
        public $department;

        public function __construct($id, $name, $salary, $department) {
            parent::__construct($id, $name, $salary);
            $this->department = $department;
        }

        public function getDepartment() {
            return $this->department;
        }
    }
    }
?>

