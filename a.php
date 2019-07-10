<?php
$mysqli = new mysqli("localhost", "root", "", "testbase");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$mysqli->set_charset('utf8');


for ($i = 1; $i < 8 ; $i++) { 
$plus = 0;
$minus = 0;
$res = $mysqli->query("SELECT fullname FROM persons WHERE id = $i ");

while ($name = $res->fetch_assoc()) {
    echo "Name: " . $name['fullname'] . "\n";
}

$res = $mysqli->query("SELECT amount FROM transactions WHERE to_person_id = $i ");

while ($plusM = $res->fetch_assoc()) {
    $plus += $plusM['amount'];
}

$res = $mysqli->query("SELECT amount FROM transactions WHERE from_person_id = $i ");

while ($minusM = $res->fetch_assoc()) {
    $minus += $minusM['amount'];
}
$balance = 100 - $minus + $plus;
echo "Balance: ". "$balance";
echo "<br/>";
}
?>