<?php
class animal  // classs 
{
	// called incass
 public $name; // access modifly; every class use;
 protected $height; // child class use;
 private $behaviour ;// own class use;
 public  static $width; // static value; there is not objcet create;
 public function __construct($height,$behaviour) //magic method 
 {
  $this->height=$height;
  $this->behaviour=$behaviour;
 }
 public function walk() // method;
 {
 	self::$width;

 }
 public  static function sit() // static method
 {

 }
}
$doc= new animal("3.8","bad");// object
echo $doc->$name="tiger";
animal::$width;
animal::sit();

$doc->walk();
?>