<?php
/* Сделайте класс Student со свойствами $name и $course (курс студента, от 1-го до 5-го).
В классе Student сделайте public метод transferToNextCourse, который будет переводить студента на следующий курс
Выполните в методе transferToNextCourse проверку на то, что следующий курс не больше 5.
Вынесите проверку курса в отдельный private метод isCourseCorrect. */

class Student
	{
		private $name;
		private $course;
		
		public function __construct($name)
		{
			$this->name = $name; 
			$this->course = 1;
		}
		
		public function getName(){
			return $this->name;
		}
		
		public function getCourse(){
			return $this->course;
		}
		
		public function transferToNextCourse($course){
			
		    if($this->isCourseCorrect($course)) $this->course = $course;
		}
		
		private function isCourseCorrect($course){
			
			return $course <= 5;		
		}
	}
	
	$student = new Student('Petr');
	    
    $student->transferToNextCourse(6);
    echo $student->getCourse();
    echo $student->getName();
	
	