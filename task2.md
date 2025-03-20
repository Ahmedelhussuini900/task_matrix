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


3-3- كيف يمكن تعريف متغير في PHP؟ وهل يمكن تغيير نوعه بعد تعريفه؟
In PHP, you define a variable by using the $ sign
ex:
$variableName = value;

 Can You Change Its Type After Defining It?
 Yes! PHP is a dynamically typed language.

ex:
$variable = 10;        
$variable = "Hello";   
$variable = 3.14;      
$variable = true;      

--------------------------------------------------------q4--------------------------------------------
4- ما الفرق بين foreach و for عند التعامل مع المصفوفات؟

for Loop Usage:	General-purpose loop. Used when you need index-based access (e.g., numeric arrays)
Syntax:Requires manual handling of indices (counter, conditions, increment).

foreach Loop Usage:Specifically designed for iterating over arrays and collections easily.
Syntax:Automatically handles each element without needing to manage indices.

##############################################################################################################
5-
array_merge()

Combines two or more arrays by appending values from one array to another.
If arrays have numeric keys, the keys will be reindexed.
If associative keys are present, later values overwrite earlier ones with the same key.

ex:
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];

$result = array_merge($array1, $array2);

print_r($result); // Output: [1, 2, 3, 4, 5, 6]


array_combine()

Combines two arrays by using one array as keys and the other as values.
Both arrays must have the same number of elements.


$keys = ['name', 'age', 'country'];
$values = ['Ahmed', 25, 'Egypt'];

$result = array_combine($keys, $values);

print_r($result); 


array_merge()	Combine multiple arrays into one, ignoring keys if numeric
array_combine()	Create an associative array from two arrays: one for keys, one for values

################################################################################################
6- كيف يمكن الاتصال بقاعدة بيانات MySQL باستخدام PDO؟
<?php

$host = 'localhost';
$db   = 'manager';
$user = 'root';
$pass = 'your_password';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connection successful!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
################################################################################
7- ما وظيفة $_GET و $_POST؟ وما الفرق بينهما؟
_GET
Retrieves data sent via URL parameters (Query String).
http://example.com/page.php?name=Ahmed&age=25
echo $_GET['name']; // Output: Ahmed
echo $_GET['age'];  // Output: 25

$_POST:
Retrieves data sent in the body of an HTTP POST request (usually via forms).
<form method="POST" action="page.php">
    <input type="text" name="username">
    <input type="submit">
</form>
echo $_POST['username'];
--------------------------------------------------------------------------
8- ما هي PSR Standards في PHP؟ اذكر بعض الأمثلة.
PSR Standards (PHP Standard Recommendations) هي مجموعة من المعايير والاقتراحات التي وضعتها PHP-FIG (PHP Framework Interop Group) بهدف توحيد كتابة الكود بين مطوري PHP، مما يسهل قراءة وصيانة الكود ويساعد على التوافق بين المكتبات والأطر المختلفة.

PSR-1       Basic Coding Standard

PSR-2	    Coding Style Guide	

PSR-3	    Logger Interface	

PSR-4	    Autoloading Standard	

PSR-7	    HTTP Message Interface	

PSR-12	    Extended Coding Style Guide	


وفي بعض الحاجات سيرشت عليها 
##############################################################################***************************###################