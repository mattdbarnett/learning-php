<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="content/style.css">
</head>    
<body>

<h1>mattdbarnett's PHP Essentials</h1>
<?php
// -- Section 1 - Basic Echo
echo "<h2>1. Basic Echo</h2>";
echo "This is an echo.";

// -- Section 2 - Basic Data Types
echo "<h2>2. Basic Data Types</h2>";
$intvar = 5;
$doublevar = 10.5;
$boolvar = false;
$strvar = "Text";

echo "$intvar is an integer.<br>";
echo "$doublevar is a double.<br>";
echo ($boolvar ? 'true' : 'false') . " is a boolean.<br>";
echo "$strvar is a string.<br>";

// -- Section 3 - Basic Arrays
echo "<h2>3. Basic Arrays</h2>";
$basicItems = array("Item 1","Item 2","Item 3","Item 4");
echo "<label>Echos each item in \$basicItems:</label><br>";
foreach($basicItems as $item){
    echo $item . "<br>";
}

// -- Section 4 - Associative Arrays
echo "<h2>4. Associative Arrays</h2>";
$assoItems = array("Matt"=>"21","George"=>"29","Greg"=>"43");
echo "<label>Echos the associated age of Matt:</label><br>";
echo $assoItems['Matt'];

// -- Section 5 - Multidimensional Arrays
echo "<h2>5. Multidimensional Arrays</h2>";
$multiItems = array(
    array("Matt", 21, 2000),
    array("George", 29, 1993),
    array("Greg", 43, 1979)
);
echo "<label>Echos the items within the second array within \$multiItems:</label><br>";
echo $multiItems[1][0] . " || " . $multiItems[1][1] . " || " . $multiItems[1][2];

// -- Section 6 - Calender
echo "<h2>6. Calender</h2>";
$oct2022 = cal_days_in_month(CAL_GREGORIAN,10,2022);
echo "There are $oct2022 days in October 2022.<br>";
echo "Easter Day is ". easter_days() . " days after March 21 this year.<br>";

// -- Section 7 - Date/Time
echo "<h2>7. Date/Time</h2>"

?>
</body>
</html> 