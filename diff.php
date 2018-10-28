<?php
$a = $_GET['a'];
$b = $_GET['b'];

if (strlen($a) == "") {

$result["Result"] = "0";
$result["Code"] = 31;
$result["Status"] = "param a is missing";
echo json_encode($result);
} elseif (strlen($b) == "") {

$result["Result"] = "0";
$result["Code"] = 32;
$result["Status"] = "param b is missing";
echo json_encode($result);
} else {

$result["Result"] = $a - $b;
$result["Code"] = 0;
$result["Status"] = "OK";
echo json_encode($result);
}
?>
