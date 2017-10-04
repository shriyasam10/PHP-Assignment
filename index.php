<?php

$obj = new main();

class main 

{

	private $html;

	public function construct()

	{	
	$date =  date('Y-m-d', time());
	echo "The value of \$date: ".$date."<br>";

	$tar = "2017/05/24";		
	echo "The value of \$tar: ".$tar."<br>";

	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);

	$this->html .= htmlTags::horizontalRule();
	
	$this->html .= htmlTags::headingThree("Replace String Example");
	$this->html .= stringManip::stringReplace('-','/',$date);
	$this->html .= htmlTags::horizontalRule();

	$this->html .= htmlTags::headingThree("Compare String Example");
	$this->html .= stringManip::stringCompare($date,$tar);
	$this->html .= htmlTags::horizontalRule();



	}


	public function destruct()

	{


	}


}

class stringManip

{

	static public function stringReplace($src,$target,$str)

	{

	return str_replace($src,$target,$str);

	}

		static public function stringCompare($string1, $string2)

		{

			if($string1==$string2)

			{

			echo "Oops";

			}

			else if($string1 > $string2)

			{

			return "Future";

			}

			else if($string1 < $string2)

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
