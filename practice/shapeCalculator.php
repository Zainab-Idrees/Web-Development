<?php
class Shape {
    public $name;
    public $length;
    public $width;

    public function areaCalculate() {
        return "Your shape is {$this->name} <br>
                length = {$this->length} <br>
                width = {$this->width} <br>
                area = " . ($this->length * $this->width);
    }
}


// Create object
$shapeCal = new Shape();

// Assign values from form
$shapeCal->name = $_POST['shape'];
$shapeCal->length = $_POST['length'];
$shapeCal->width = $_POST['width'];

// Display area
echo $shapeCal->areaCalculate();
?>
