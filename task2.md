#1- ما الفرق بين echo و print في PHP?
#the echo 
#(A)It can output multiple strings, separated by commas
#<b>It is slightly faster than print
ex:   echo "Hello ", "World", "!";

the print 

It can only output one value at a time.
It always returns 1, which allows it to be used in expressions.
Slightly slower than echo

ex:print "Hello World!";
$returnValue = print("Hello!")
----------------------------------------------------------------
2- ما الفرق بين == و === في PHP؟

==
Compares values only.
It does NOT check data types.
ex
var_dump(3 == "3"); //true the ingeter 3 equal string 3 
var_dump(true == 1); 


===
Compares both values AND data types.
No type conversion is done
ex:
var_dump(5 === "5"); // false 
var_dump(5 === 5);   // true 
var_dump(true === 1); //false