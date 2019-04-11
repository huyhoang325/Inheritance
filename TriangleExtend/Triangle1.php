<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>
<body>
<?php
class Shape
{
    protected $side1;
    protected $side2;
    protected $side3;
    public function __construct($side1 = 1.0, $side2 = 1.0, $side3 = 1.0)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function setSide($side1,$side2,$side3)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }


    public function getSide()
    {
        return array("side1" => $this->side1, "side2" => $this->side2, "side3" => $this->side3);
    }

    public function toString()
    {
        return "($this->side1x,$this->side2,$this->side3)";
    }
}
class Triangle extends Shape
{
    private $color;
    public function __construct($side1 = 1.0, $side2 = 1.0, $side3 = 1.0, $color = "red")
    {
        parent::__construct($side1, $side2, $side3);
        $this->color = $color;
    }
    function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getArea()
    {
        $s = ($this->side1 + $this->side2 + $this->side3) / 2;
        return sqrt($s * ($s - $this->side1) * ($s - $this->side2) * ($s - $this->side3));
    }

    public function getPerimeter()
    {
        return $this->side1 + $this->side2 + $this->side3;
    }

    public function getInfo()
    {
        return array("side1" => $this->side1, "side2" => $this->side2, "side3" => $this->side3, "color" => $this->color);
    }

}

$triangle = new Triangle();
$triangle->setSide(30, 40, 50);
$triangle->setColor("yellow");
foreach ($triangle->getInfo() as $value => $key)
{
echo $value . "=" . $key . "</br>";
}

echo "Area: ".$triangle->getArea()."<br>";
echo "Perimeter: ".$triangle->getPerimeter();
?>

</body>
</html>