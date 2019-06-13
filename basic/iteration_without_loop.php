<?php
/* Printing 1 to 1000 without loop or conditionals - in PHP */

/*
Here are a couple of soltuion with no loop (not in PHP : it's done by C code ;-) ), and no conditional :

Using range() to generate an array, and array_map() to apply a function to each element :

array_map(function ($value) {
    echo "$value<br />";
}, range(1, 1000));

Same idea, but using array_walk(), this time, to apply a function to each element :

$array = range(1, 1000);
array_walk($array, function ($value) {
    echo "$value<br />";
});

array_filter();

Another (quite basic, I have to admit, but working ^^ ) 

Using var_export(), you would also have the numbers from 1 to 1000 displayed -- amongst other things :

var_export(range(1, 1000));
Using var_dump() would get you the same kind of result -- provided Xdebug is either not installed, or properly configured.


Next one, using json_encode(), to get a more interesting output, that can be re-used in other languages :

echo json_encode(range(1, 1000));
*/
array_map(function ($value) {
    echo "I am developer<br>";
}, range(1, 10));


/*
Here's an interesting oo solution based on PHP's overloading:

class thousand_printer {
   public function __construct() {
      $this->print1();
   }

   public function __call($method, $_) {
      $count = str_replace('print', '', $method);
      echo "$count ";
      $this->{"print" . ++$count}();
   }

   public function print1000() {
      echo "1000\n";
   }
}

new thousand_printer;
I'm glad my solution is so popular. Here's a slight improvement that offers some modularity:

class printer {
   public function __construct() {
      $this->print1();
   }
   public function __call($method, $_) {
      $count = str_replace('print', '', $method);
      echo "$count ";
      $this->{"print" . ++$count}();
   }
}

class thousand_printer extends printer {
   public function print1001() {}
}

new thousand_printer;
*/