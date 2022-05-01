<?php
 $root =$_SERVER;
?>
<p class="Check">
<?PHP

foreach($_SERVER as $key_name => $key_value) {

print $key_name . " = " . $key_value . "<br>";

}

?>
</p>