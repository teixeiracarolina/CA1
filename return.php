<!DOCTYPE HTML>
<html>  
<body>

<?php include('include/header.php');?>

Your country is... <?php echo $_GET["Country"]; ?><br>
    
<?php

$countries = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

$key=$_GET["Country"];

if (array_key_exists($key, $countries)) {
    echo $countries[$key];
} else {
	echo "error";
}
?>

<?php include('include/footer.php');?>

</body>
</html>