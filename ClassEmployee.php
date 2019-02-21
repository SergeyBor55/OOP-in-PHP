<?php
/* Сделайте класс Employee, в котором будут следующие приватные свойства - name (имя), age (возраст), salary (зарплата). Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта.
Создайте объект гетеры и сетеры для свойств
Создайте приватный метод проверяющий возраст*/

class Employee
	{
		private $name;
		private $surname;
		private $salary;
	
		
		public function __construct($name, $surname, $salary)
		{
			$this->name = $name; 
			$this->surname = $surname; 
			$this->salary = $salary; 
		}
		
		public function getName(){
			return $this->name;
		}
		
		public function getSurname(){
			return $this->surname;
		}
		
		public function getSalary(){
			return $this->salary;
		}
		
		public function setSalary($salary){
			if($this->checkSalary($salary)) {
				$this->salary = $salary;
			}
		}
		
		private function checkSalary($salary){ 
			return ($salary >= 28000 and $salary <= 60000)? true : false;
		}
	}
	
	
	