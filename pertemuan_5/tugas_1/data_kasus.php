<?php
require_once 'classes/Manager.php';

$manager1 = new Manager(1, "John Doe", 5000, "IT Department");
$manager2 = new Manager(2, "Jane Smith", 6000, "HR Department");

echo "Manager 1\n";
echo "Name: {$manager1->name}, Salary: {$manager1->getSalary()}, Department: {$manager1->getDepartment()}\n\n";

echo "Manager 2\n";
echo "Name: {$manager2->name}, Salary: {$manager2->getSalary()}, Department: {$manager2->getDepartment()}\n\n";
?>
