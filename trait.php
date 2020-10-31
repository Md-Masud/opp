<?php
// multi inheraince
 trait name1 {
 public function name()
 {
   echo "i lave my country";
 }
}
trait name2
{
 public function name3()
 {

 }
}
// muti inheritance;
class ob1
{
	use name1;
	use name2;
	public function method()
	{
		$this->name();
	}
}
$s=new ob1();
$s->method();
?>