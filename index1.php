<?php

$obj = new main();

class main
{
	public function __construct()
	{

	$date =  date('Y-m-d', time());
	echo "The value of \$date: ".$date."<br>";

	$tar = "2017/05/24";	 
	echo "The value of \$tar: ".$tar."<br>";

	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);

	echo htmlTags::horizontalRule();

	echo htmlTags::headingOne("Replace String");
	echo  stringManip::stringreplace('-','/',$date);
	echo htmlTags::horizontalRule();

	echo htmlTags::headingThree("Compare String");
	echo stringManip::stringcompare($date,$tar);
	echo htmlTags::horizontalRule();

	echo htmlTags::headingOne("Word Count");
	echo stringManip::stringwordcount($date);
	echo htmlTags::horizontalRule();

	echo htmlTags::headingThree("String Length");
	echo stringManip::stringlength($date);
	echo htmlTags::horizontalRule();

	echo htmlTags::headingOne("ASCII Value");
	echo stringManip::stringASCII('2');
	echo htmlTags::horizontalRule();

	echo htmlTags::headingThree("Last two characters of the string are: ");
	echo stringManip::stringcharacter($date,8);
	echo htmlTags::horizontalRule();

	echo htmlTags::headingOne("String into Array:");
	echo stringManip::stringexplode("/",$date);
	echo htmlTags::horizontalRule();

	echo htmlTags::headingThree("Leap Year demo : ");
	echo leapYear::forLeap($year);
	echo htmlTags::horizontalRule();

}
 	
 public function __destruct() 		  
 
 {
	print($this->html);
	
 }
				
				
}

class stringManip
{

 static public function stringreplace($src,$target,$str)
	{
	return str_replace($src,$target,$str);
	 }


static public function stringcompare($string1,$string2)
	 {
        	if($string1==$string2)
				 
		{
		echo "Oops";			
		}
		else if($string1>$string2)
		{
		return"Future";
		}
		else if($string1<$string2)
		{
		return "Past";
		}
	}

 static public function stringwordcount($string1)
  {
	return str_word_count($string1);
  }

 static public function stringlength($string1)
  {
	 return strlen($string1);
  }

static public function stringASCII($string1)
 {
	 return ord($string1);
 }

static public function stringcharacter($string1,$value)
 {
	 return substr($string1,$value);
 }

 static public function stringexplode($value,$string1)
 {
	 print_r (explode($value,$string1));
 }


}

class leapYear 
{
	static public function forLeap($years) {
		foreach($years as $year) { 
			leapYear::checkLeapYear($year);
		}
	}

	static public function arrayIf($years) {
		for($i=0; $i<count($years); $i++) {
			leapYear::checkLeapYear($years[$i]);
		}
	}
	
	static public function checkLeapYear($year) {
		$val=(($year%4==0)and($year%100!=0)or($year%400==0));
		switch($val) {
			case 1:
				echo 'Leap Year</br>';
				break;
			default:
				echo 'Not a leap year</br>';
				break;
			}
		}
	}
class htmlTags
{
  static public function horizontalRule() 
  {
        return '<hr>';
  }

  static public function headingOne($text) 
  {
        return '<h1>' . $text . '</h1>';
  }

 static public function headingThree($text)
  {
          return '<h3>' .$text . '</h1>';
  }
}
?>

