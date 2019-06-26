<?php
/**
 * Created by PhpStorm.
 * User: HaiMinh
 * Date: 6/26/2019
 * Time: 4:20 PM
 */
$phpArray = array("Nam định quê mình", "Hà nội đất khách", "HCM quê người");

class Student{
    public $name;
    public $age;
    public $location;

    public function __construct($name,$age,$location)
    {
        $this->name = $name;
        $this->age = $age;
        $this->location= $location;
    }

}
$minh = new Student("Lương Hải Minh", 22,"Nam định em ơi");
echo "<pre>";
print_r($minh);
echo "</pre>";

echo "<pre>";
print_r($phpArray);
echo "</pre>";

/**
 * chuyển đổi từ mảng và đối tượng trong PHP sang json
 */
$phpJson1 = json_encode($phpArray);
echo "<pre>";
print_r($phpJson1);
echo "</pre>";

$phpJson2 = json_encode($minh);
echo "<pre>";
print_r($phpJson2);
echo "</pre>";
