<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="content/style.css">
</head>    
<body>

<h1>mattdbarnett's PHP Essentials</h1>

<h2>1. Basic Echo</h2>
<?php
echo "This is an echo.";
?>

<h2>2. Basic Data Types</h2>
<?php
$intvar = 5;
$doublevar = 10.5;
$boolvar = false;
$strvar = "Text";

echo "$intvar is an integer.<br>";
echo "$doublevar is a double.<br>";
echo ($boolvar ? 'true' : 'false') . " is a boolean.<br>";
echo "$strvar is a string.<br>";
?>

<h2>3. Basic Arrays</h2>
<?php 
$basicItems = array("Item 1","Item 2","Item 3","Item 4");
echo "Echos each item in \$basicItems:<br>";
foreach($basicItems as $item){
    echo $item . "<br>";
}
?>

<h2>4. Associative Arrays </h2>
<?php
$assoItems=array("Matt"=>"21","George"=>"29","Greg"=>"43");
echo "Echos the associated age of Matt:<br>";
echo $assoItems['Matt'];
?>
</body>
</html> 