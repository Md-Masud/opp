<?php
 class child
 {
 	private $name;
	private $age;
	private $phone;
	public const row=1.0; // can not change value;
	public function getName() // get the name;
	{
		return $this->name;
		
	}
	public function getAge() 
	{
		return $this->age;
	}
	public function getPhone()
	{
		return $this->phone;
	}
	public function setName($name) //set name;
	{
		$this->name=$name;
	}
	public function setAge ($age)
	{
		$this->age=$age;
	}
	public function setPhone($phone)
	{
		$this->phone=$phone;
	}
  }
  $ob1=new child();
  echo $ob1::row;
  $ob1->setName("masud");
  $ob1->setAge (21);
  $ob1->setPhone("korim");
  echo $ob1->getName();
  echo "<br>";
  echo $ob1->getAge();
  echo "<br>";
  echo $ob1-> getPhone();
?>