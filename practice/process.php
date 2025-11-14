<?php
// class define
class Student {
    public $name;
    public $age;
    public $course;

    public function student_data() {
        return "<br><br><br>Hello {$this->name} .Your age is {$this->age}.Your course is {$this->course}. <br><br><br>";
    }
}

// object create
$student1 = new Student();
// $student1->name = "Zainab";
// $student1->age = 5;
// $student1->course = "Web Development";

// input from user
$student1->name =$_POST['name'];
$student1->age =$_POST['age'];
$student1->course =$_POST['course'];

echo $student1->name . "<br>";
echo $student1->age . "<br>";
echo $student1->course . "<br>";

echo $student1->student_data() . "<br>"; // call the function

foreach ($student1 as $val) {
    echo $val . "<br>";
}
?>
