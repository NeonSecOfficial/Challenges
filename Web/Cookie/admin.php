<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$cookie_name = $_POST["uname"];
$cookie_value = $_POST["password"];
if($cookie_value == "ne0ns3csecret" ) {
	$delcookie = "root";
	setcookie($cookie_name, $delcookie, time() + (86400 * 30), "/"); 
}else{
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
}
}
?>
<?php
if($cookie_name == "admin" && $_COOKIE[$cookie_name] == "root" ) {
    echo "\n\nFlag is: C00k1Es are Del1ci0us";

} else {
	echo "You are not authorised!";
    
}
?>

</body>
</html>