<?php

$obj = new main();

class main 

{

private $html;

public function construct()

{


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





}











?>
