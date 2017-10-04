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

	$this->html .= htmlTags::horizontalRule();

	$this->html .= htmlTags::headingOne("Replace String");
	$this->html .= stringManip::stringreplace('-','/',$date);
	$this->html .= htmlTags::horizontalRule();

	$this->html .= htmlTags::headingThree("Compare String");
	$this->html .= stringManip::stringcompare($date,$tar);
	$this->html .= htmlTags::horizontalRule();

	$this->html .= htmlTags::headingOne("Word Count");
	$this->html .= stringManip::stringwordcount($date);
	$this->html .= htmlTags::horizontalRule();

	$this->html .= htmlTags::headingThree("String Length");
	$this->html .= stringManip::stringlength($date);
	$this->html .= htmlTags::horizontalRule();

	$this->html .= htmlTags::headingOne("ASCII Value");
	$this->html .= stringManip::stringASCII('2');
	$this->html .= htmlTags::horizontalRule();

	$this->html .= htmlTags::headingThree("Last two characters of the string are: ");
	$this->html .= stringManip::stringcharacter($date,8);
	$this->html .= htmlTags::horizontalRule();

	$this->html .= htmlTags::headingOne("String into Array:");
	$this->html .= stringManip::stringexplode("/",$date);
	$this->html .= htmlTags::horizontalRule();


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
























