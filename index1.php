<?php

$obj = new main();

class main
{

	private $html; 

	public function __construct()
	{

	$date =  date('Y-m-d', time());
	echo "The value of \$date: ".$date."<br>";

	$tar = "2017/05/24";		
	echo "The value of \$tar: ".$tar."<br>";

	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);
	// echo '<hr>';
	$this->html .= htmlTags::horizontalRule();

	$this->html .= htmlTags::headingThree("Replace String Example");
	$this->html .= stringManipulation::stringReplace('-','/',$date);
	$this->html .= htmlTags::horizontalRule();

	$this->html .= htmlTags::headingThree("Compare String Example");
	$this->html .= stringManipulation::stringCompare($date,$tar);
	$this->html .= htmlTags::horizontalRule();

	$this->html .= htmlTags::headingThree("Word Count Example");
	$this->html .= stringManipulation::stringWordcount($date);
	$this->html .= htmlTags::horizontalRule();

	$this->html .= htmlTags::headingThree("String Length Example");
	$this->html .= stringManipulation::stringLength($date);
	$this->html .= htmlTags::horizontalRule();

	$this->html .= htmlTags::headingThree("ASCII Value Example");
	$this->html .= stringManipulation::stringASCII('2');
	$this->html .= htmlTags::horizontalRule();

	$this->html .= htmlTags::headingThree("Last two characters of the string are: ");
	$this->html .= stringManipulation::stringCharacter($date,8);
	$this->html .= htmlTags::horizontalRule();

	$this->html .= htmlTags::headingThree("String into Array Example:");
	$this->html .= stringManipulation::stringExplode("/",$date);
	$this->html .= htmlTags::horizontalRule();


}
 	
 public function __destruct() 		  
 
 {
	print($this->html);
	
 }
				
				
}

class stringManipulation
{

 static public function stringReplace($src,$target,$str)
	{
	return str_replace($src,$target,$str);
	 }


static public function stringCompare($string1,$string2)
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

 static public function stringWordcount($string1)
  {
	return str_word_count($string1);
  }

 static public function stringLength($string1)
  {
	 return strlen($string1);
  }

static public function stringASCII($string1)
 {
	 return ord($string1);
 }

static public function stringCharacter($string1,$value)
 {
	 return substr($string1,$value);
 }

 static public function stringExplode($value,$string1)
 {
	 print_r (explode($value,$string1));
 }


}

class arrayLeap{}

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
























