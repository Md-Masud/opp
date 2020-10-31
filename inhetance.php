<?php
 class claculation 
{
	

public function sum($number1,$number2)
{
	return $number1+$number2;
}
public function multiple($number1,$number2)
{
	return $number1*$number2;
}
public function sub($number1,$number2)
{
	return $number1-$number2;
}
}
?>
<?php

 class sad extends claculation 
{
	public function val($sa)
	{
		$sa='multiple';
		switch ($sa) {
			case 'sum':
				return  $this->sum(2,4);
				break;
			case 'multiple':
				return  $this->multiple(9,4);
				break;	
			
			default:
				# code...
				break;
		}
	}
	
}

$bal=new claculation ();
$gfd = new sad();
echo $gfd->val("sum");
//$gfd->val("sum");

echo "<br>";

echo "<br>";

